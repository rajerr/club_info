<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ClasseController extends Controller
{
public function matiere(){
		  $this->AdminAuthCheck();
        $matiere=DB::table('matiere')
      //   ->join('ecole','ecoleid', '=', 'ecole.idecole')
         ->select('matiere.*')
       //  ->orderby('idecole','desc')
         //->where('idecole', Session::get('idecole'))
         ->get();
        $manage_product=view('matiere.matiere')
                ->with('matiere', $matiere);
                return view('welcome')
               ->with('matiere.matiere', $manage_product);   

	}
	   public function save_matiere(Request $request)
      {     $this->AdminAuthCheck();
               $data=array();    
               $data['lib']=$request->lib;
               $data['classe']=$request->classe;
                $data['semesttre']=$request->semesttre;
               $data['statusm']=1;  
              DB::table('matiere')->insert($data);
              Session::put('message',"matiere ajoute avec success " );
             return Redirect::to('/matiere');
             
             
       }
 
     public function edit_matiere($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('matiere')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('matiere.edit_matiere')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('matiere.edit_matiere',$product_info);
    }

  public function print_activite($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('matiere')
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
     public function detail_matiere($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('matiere')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('matiere.voiractivite')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('matiere.voiractivite',$product_info);
    }

     public function update_matiere(Request $request,$id)
    {        $this->AdminAuthCheck();
	         
	           $data=array();    
               $data['lib']=$request->lib;
               $data['classe']=$request->classe;
               $data['semesttre']=$request->semesttre;
               $data['statusm']=1;  
                 DB::table('matiere')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','matiere Modifier avec succés ');
                   return Redirect::to('/matiere');
             
                   
    }
    //////////fin modifier ////////////////////////////
     public function delete_matiere($id)
    {
    	      $this->AdminAuthCheck();
            DB::table('matiere')
             ->where('id', $id)
             ->delete();
        Session::put('message1','matiere Supprimeé avec succés !!');
        return Redirect::to('/matiere');
    }
    //////////////////////////////
    public function unactive_matiere($id)
    {    $this->AdminAuthCheck();
        DB::table('matiere')
            ->where('id', $id)
            ->update(['statusm' => 0]);
        Session::put('message', 'matiere  unactive avec succès !!');
        return Redirect::to('/matiere');
    }

    public function active_matiere($id)
    {   $this->AdminAuthCheck();
        DB::table('matiere')
            ->where('id', $id)
            ->update(['statusm' => 1]);
        Session::put('message', 'matiere  activé avec succès !!');
        return Redirect::to('/matiere');
    }

  ////////////////////////////////GALERY//////////////////
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

      public function delete_galery($id)
    {
    	      $this->AdminAuthCheck();
            DB::table('galerie')
             ->where('id', $id)
             ->delete();
        Session::put('message1','image Supprimeé avec succés !!');
        return Redirect::to('/galery');
    }
    //////////////////////////////
    public function unactive_galery($id)
    {    $this->AdminAuthCheck();
        DB::table('galerie')
            ->where('id', $id)
            ->update(['statusim' => 0]);
        Session::put('message', 'image  unactive avec succès !!');
        return Redirect::to('/galery');
    }

    public function active_galery($id)
    {   $this->AdminAuthCheck();
        DB::table('galerie')
            ->where('id', $id)
            ->update(['statusim' => 1]);
        Session::put('message', 'image  activé avec succès !!');
        return Redirect::to('/galery');
    }

/////////////////
       public function AdminAuthCheck()
     {
      $email=Session::get('email');     
          if ($email) {
          return;
      }else{
        return Redirect::to('/')->send();
      }
   }
}
