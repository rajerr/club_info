<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ActiviteController extends Controller
{
	public function activite(){
		 $this->AdminAuthCheck();
        $activite=DB::table('activites')
      //   ->join('ecole','ecoleid', '=', 'ecole.idecole')
         ->select('activites.*')
       //  ->orderby('idecole','desc')
         //->where('idecole', Session::get('idecole'))
         ->get();
        $manage_product=view('activite.activite')
                ->with('activite', $activite);
                return view('welcome')
               ->with('activite.activite', $manage_product);   

	}
	   public function save_activite(Request $request)
      {     $this->AdminAuthCheck();
               $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['status']=1;  
              DB::table('activites')->insert($data);
              Session::put('message',"activite ajoute avec success " );
             return Redirect::to('/activite');
             
             
       }
 
     public function edit_activite($id)
    { 
       $this->AdminAuthCheck();
        $product_info=DB::table('activites')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('activite.edit_activite')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('activite.edit_activite',$product_info);
    }

  public function print_activite($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('activites')
           ->join('contrat','cin', '=', 'contrat.cinctr')
            ->join('nationalite','nationalite', '=', 'nationalite.id')
             ->join('ecole','idecole', '=', 'acceuil.ecole')
            ->where('cin', $cin)
            ->first();
        $product_info=view('candidat.print_candidat')
            ->with('product_info', $product_info);
             return view('print')
            ->with('candidat.print_candidat',$product_info);
    }
     public function detail_activite($id)
    { 
       $this->AdminAuthCheck();
        $product_info=DB::table('activites')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('activite.voiractivite')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('activite.voiractivite',$product_info);
    }

      public function voiractivites($id)
    { 
      // $this->AdminAuthCheck();
        $product_info=DB::table('activites')
           // ->join('galerie','id_activites', '=', 'activites.id')
            ->select('activites.*')
            ->where('id',$id)          
            ->first();
        $product_info=view('activite1.voiractivites')
            ->with('product_info', $product_info);
        return view('detail')
            ->with('activite1.voiractivites',$product_info);
    }


     public function update_activite(Request $request,$id)
    {       $this->AdminAuthCheck();
	         
	          $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['status']=1;  
                 DB::table('activites')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','activite Modifier avec succés ');
                   return Redirect::to('/activite');
             
                   
    }
    //////////fin modifier ////////////////////////////
     public function delete_activite($id)
    {
    	     $this->AdminAuthCheck();
            DB::table('activites')
             ->where('id', $id)
             ->delete();
        Session::put('message1','activite Supprimeé avec succés !!');
        return Redirect::to('/activite');
    }
    //////////////////////////////
    public function unactive_activite($id)
    {   $this->AdminAuthCheck();
        DB::table('activites')
            ->where('id', $id)
            ->update(['status' => 0]);
        Session::put('message', 'activite  unactive avec succès !!');
        return Redirect::to('/activite');
    }

    public function active_activite($id)
    {  $this->AdminAuthCheck();
        DB::table('activites')
            ->where('id', $id)
            ->update(['status' => 1]);
        Session::put('message', 'activite  activé avec succès !!');
        return Redirect::to('/activite');
    }

  ////////////////////////////////GALERY//////////////////
     public function save_commetaire(Request $request){
        // $this->AdminAuthCheck();
      $data=array(); 
      $data['id_activites']=$request->id_activites;
      $data['nom']=$request->nom;
      $data['email']=$request->email;
      $data['message']=$request->message;
        DB::table('commentaires')->insert($data);
       // Session::put('message', 'image ajouté avec succès !!');
        return view('activite1.service');
            }

     public function save_contact(Request $request){
        // $this->AdminAuthCheck();
      $data=array(); 
      $data['sujet']=$request->sujet;
      $data['nom']=$request->nom;
      $data['email']=$request->email;
      $data['message']=$request->message;
        DB::table('contact')->insert($data);
        Session::put('message', 'message envoyer avec succès !!');
         return Redirect::to('/contact');
            }

    //............................////////////////....................

	public function galery(){
		 $this->AdminAuthCheck();
        $galerie=DB::table('galerie')
      //   ->join('ecole','ecoleid', '=', 'ecole.idecole')
         ->select('galerie.*')
       //  ->orderby('idecole','desc')
         //->where('idecole', Session::get('idecole'))
         ->get();
        $manage_product=view('galery.galery')
                ->with('galerie', $galerie);
                return view('welcome')
               ->with('galery.galery', $manage_product);   

	}
	 public function save_galery(Request $request){
         $this->AdminAuthCheck();
	 $data=array();	
     $data['statusim']=1;
     $data['id_activites']=$request->id_activites;
     $image=$request->file('image');
    if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['image']=$image_url;
                DB::table('galerie')->insert($data);
                Session::put('message', 'image ajouté avec succès !!');
                return Redirect::to('/galery');
            }
            
        }else{

          
            Session::put('message', 'image n est pas ajouté !! ');
            return Redirect::to('/galery');
        }
	 }

      public function delete_galery($idg)
    {
    	     $this->AdminAuthCheck();
            DB::table('galerie')
             ->where('idg', $idg)
             ->delete();
        Session::put('message1','image Supprimeé avec succés !!');
        return Redirect::to('/galery');
    }
    //////////////////////////////
    public function unactive_galery($idg)
    {   $this->AdminAuthCheck();
        DB::table('galerie')
            ->where('idg', $idg)
            ->update(['statusim' => 0]);
        Session::put('message', 'image  unactive avec succès !!');
        return Redirect::to('/galery');
    }

    public function active_galery($idg)
    {  $this->AdminAuthCheck();
        DB::table('galerie')
            ->where('idg', $idg)
            ->update(['statusim' => 1]);
        Session::put('message', 'image  activé avec succès !!');
        return Redirect::to('/galery');
    }


    ////////////////////////////////////////
       public function AdminAuthCheck()
     {
      $email=Session::get('email');     
          if ($email) {
          return;
      }else{
        return Redirect::to('/')->send();
      }
   }
   ///////////////////
}
