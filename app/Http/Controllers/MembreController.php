<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class MembreController extends Controller{


     public function membre(){
		  $this->AdminAuthCheck();
        $membre=DB::table('membres')
        //->join('membres','membre', '=', 'membres.id')
        // ->select('membres.*')
          ->orderby('date_ajout','desc')
         ->get();
        $manage_product=view('membre.membre')
                ->with('membre', $membre);
                return view('welcome')
               ->with('membre.membre', $manage_product);   

	}
	 	   public function save_membre(Request $request)
      {      $this->AdminAuthCheck();
               $data=array();    
               $data['nom']=$request->nom;
               $data['prenom']=$request->prenom;
               $data['sexe']=$request->sexe;
               $data['telephone']=$request->telephone;
               $data['email']=$request->email;
               $data['date_inscrit']=$request->date_inscrit;
               $data['niveau']=$request->niveau;
               $data['profile']=$request->profile;
               $data['droit']=$request->droit;
               $data['action']=$request->action;
               $data['statusM']=1;
               $image=$request->file('image');      
        if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
              $data['image']=$image_url;
              DB::table('membres')->insert($data);
            Session::put('message',"membre ajoute avec success " );
             return Redirect::to('/membre');
             
               }else{
                   
                     DB::table('membres')->insert($data);
                      Session::put('message', 'membre a été ajoutée avec succés sans  photo!! ');
                     return Redirect::to('/membre');
                    }
            }
       }
 
     public function edit_membre($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('membres')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('membre.edit_membre')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('membre.edit_membre',$product_info);
    }

  public function print_membre($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('membres')
           ->join('contrat','cin', '=', 'contrat.cinctr')
            ->join('nationalite','nationalite', '=', 'nationalite.id')
             ->join('ecole','idecole', '=', 'acceuil.ecole')
            ->where('cin', $cin)
            ->first();
        $product_info=view('membre.print_membre')
            ->with('product_info', $product_info);
             return view('print')
            ->with('membre.print_membre',$product_info);
    }
     public function detail_membre($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('membres')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('membre.detail_membre')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('membre.detail_membre',$product_info);
        }
    
     public function update_membre(Request $request,$id)
    {        $this->AdminAuthCheck();
	         
	           $data=array();    
               $data['nom']=$request->nom;
               $data['prenom']=$request->prenom;
               $data['sexe']=$request->sexe;
               $data['telephone']=$request->telephone;
               $data['email']=$request->email;
               $data['date_inscrit']=$request->date_inscrit;
               $data['niveau']=$request->niveau;
               $data['droit']=$request->droit;
               $data['action']=$request->action;
               $data['profile']=$request->profile;
               $data['statusM']=1;
              $image=$request->file('image');      
        if ($image) {
            $image_name=str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
              $data['image']=$image_url;
                 DB::table('membres')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','membre Modifier avec succés ');
                   return Redirect::to('/membre');
             
                    }  
                 }  else{
                           
                     DB::table('membres')
                      ->where('id', $id)
                      ->update($data);  
                     Session::put('message','membre Modifier avec succés ');
                   return Redirect::to('/membre');
                   
                             }
                   
    }
    //////////fin modifier ////////////////////////////
     public function delete_membre($id)
    {
    	      $this->AdminAuthCheck();
            DB::table('membres')
             ->where('id', $id)
             ->delete();
        Session::put('message1','membre Supprimeé avec succés !!');
        return Redirect::to('/membre');
    }
    //////////////////////////////
    public function unactive_membre($id)
    {    $this->AdminAuthCheck();
        DB::table('membres')
            ->where('id', $id)
            ->update(['statusM' => 0]);
        Session::put('message', 'membre  unactive avec succès !!');
        return Redirect::to('/membre');
    }

    public function active_membre($id)
    {   $this->AdminAuthCheck();
        DB::table('membres')
            ->where('id', $id)
            ->update(['statusM' => 1]);
        Session::put('message', 'membre  activé avec succès !!');
        return Redirect::to('/membre');
    }


//////////////SERVICE/////////////////////////////////////
     public function service(){
      $this->AdminAuthCheck();
        $service=DB::table('fonction')
      //   ->join('ecole','ecoleid', '=', 'ecole.idecole')
         ->select('fonction.*')
          ->orderby('dateajoutF','desc')
         ->get();
        $manage_product=view('service.service')
                ->with('service', $service);
                return view('welcome')
               ->with('service.service', $manage_product);   

  }
       public function save_service(Request $request)
      {      $this->AdminAuthCheck();
               $data=array();    
               $data['libelli']=$request->libelli;
               $data['discription']=$request->discription;
               $data['membre']=Session::get('id');
               $fichier=$request->file('fichier');      
        if ($fichier) {
            $image_name=str_random(3);
            $ext=strtolower($fichier->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='fichier/';
            $image_url=$upload_path.$image_full_name;
            $success=$fichier->move($upload_path,$image_full_name);
            if($success){
              $data['fichier']=$image_url;
              DB::table('fonction')->insert($data);
            Session::put('message',"service ajoute avec success " );
             return Redirect::to('/service');
             
               }else{
                   
                     DB::table('fonction')->insert($data);
                      Session::put('message', 'service a été ajoutée avec succés sans  photo!! ');
                     return Redirect::to('/service');
                    }
            }
       }
 
     public function edit_service($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('fonction')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('service.edit_service')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('service.edit_service',$product_info);
    }

  public function print_service($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('fonction')
           ->join('contrat','cin', '=', 'contrat.cinctr')
            ->join('nationalite','nationalite', '=', 'nationalite.id')
             ->join('ecole','idecole', '=', 'acceuil.ecole')
            ->where('cin', $cin)
            ->first();
        $product_info=view('membre.print_membre')
            ->with('product_info', $product_info);
             return view('print')
            ->with('membre.print_membre',$product_info);
    }
     public function detail_service($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('fonction')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('service.detail_service')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('service.detail_service',$product_info);
        }
    
     public function update_serviceservice(Request $request,$id)
    {        $this->AdminAuthCheck();
           
              $data=array();    
               $data['libelli']=$request->libelli;
               $data['discription']=$request->discription;
               $data['membre']=Session::get('id');
               $fichier=$request->file('fichier');      
        if ($fichier) {
            $image_name=str_random(250);
            $ext=strtolower($fichier->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='fichier/';
            $image_url=$upload_path.$image_full_name;
            $success=$fichier->move($upload_path,$image_full_name);
            if($success){
                 DB::table('fonction')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','service Modifier avec succés ');
                   return Redirect::to('/service');
                    }
            }else{
                   
                       DB::table('fonction')
                        ->where('id', $id)
                        ->update($data);
                      Session::put('message', 'service a été ajoutée avec succés sans  photo!! ');
                     return Redirect::to('/service');
                    }
             
                   
    }
    //////////fin modifier ////////////////////////////
     public function delete_service($id)
    {
            $this->AdminAuthCheck();
            DB::table('fonction')
             ->where('id', $id)
             ->delete();
        Session::put('message1','service Supprimeé avec succés !!');
        return Redirect::to('/service');
    }
    //////////////////////////////


////////////////////////////////////////////////////
      public function AdminAuthCheck()
     {
      $email=Session::get('email');     
          if ($email) {
          return;
      }else{
        return Redirect::to('/')->send();
      }
   }
    //////////////////////////////////////////////
}
