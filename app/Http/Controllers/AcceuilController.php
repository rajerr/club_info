<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class AcceuilController extends Controller
{


	public function acceuil(){
		$this->AdminAuthCheck();
        $acceuil=DB::table('acceuil')
      //   ->join('ecole','ecoleid', '=', 'ecole.idecole')
         ->select('acceuil.*')
       //  ->orderby('idecole','desc')
         //->where('idecole', Session::get('idecole'))
         ->get();
        $manage_product=view('acceuil.acceuil')
                ->with('acceuil', $acceuil);
                return view('welcome')
               ->with('acceuil.acceuil', $manage_product);   

	}
	   public function save_acceuil(Request $request)
      {    
               $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['statut']=1;
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
              DB::table('acceuil')->insert($data);
            Session::put('message',"acceuil ajoute avec success " );
             return Redirect::to('/acceuil');
             
               }else{
                   $data['image']='';
                     DB::table('candidat_table')->insert($data);
                      Session::put('message', 'candidat a été ajoutée avec succés sans votre photo!! ');
                     return Redirect::to('/ad_contrat');
                    }
            }
       }
 
     public function edit_acceuil($id)
    { 
      $this->AdminAuthCheck();
        $product_info=DB::table('acceuil')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('acceuil.edit_acceuil')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('acceuil.edit_acceuil',$product_info);
    }

  public function print_acceuil($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('acceuil')
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
     public function detail_acceuil($id)
    { 
      $this->AdminAuthCheck();
        $product_info=DB::table('acceuil')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('acceuil.voir')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('acceuil.voir',$product_info);
    }

     public function update_acceuil(Request $request,$id)
    {      $this->AdminAuthCheck();
	         
	          $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['statut']=1;
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
                 DB::table('acceuil')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','acceuil Modifier avec succés ');
                   return Redirect::to('/acceuil');
             
                    }  
                 }   else{
                           
                     DB::table('acceuil')
                      ->where('id', $id)
                      ->update($data);  
                     Session::put('message','acceuil Modifier avec succés ');
                   return Redirect::to('/acceuil');
                   
                             } 
    }
    //////////fin modifier ////////////////////////////
     public function delete_acceuil($id)
    {
    	    $this->AdminAuthCheck();
            DB::table('acceuil')
             ->where('id', $id)
             ->delete();
        Session::put('message1','acceuil Supprimeé avec succés !!');
        return Redirect::to('/acceuil');
    }
    //////////////////////////////
    public function unactive_acceuil($id)
    {  $this->AdminAuthCheck();
        DB::table('acceuil')
            ->where('id', $id)
            ->update(['statut' => 0]);
        Session::put('message', 'acceuil  unactive avec succès !!');
        return Redirect::to('/acceuil');
    }

    public function active_acceuil($id)
    {  $this->AdminAuthCheck();
        DB::table('acceuil')
            ->where('id', $id)
            ->update(['statut' => 1]);
        Session::put('message', 'acceuil  activé avec succès !!');
        return Redirect::to('/acceuil');
    }

//////////////////////////
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
