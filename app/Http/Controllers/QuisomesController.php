<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class QuisomesController extends Controller
{
public function historique(){
		  $this->AdminAuthCheck();
        $historique=DB::table('historique')
      //   ->join('ecole','ecoleid', '=', 'ecole.idecole')
         ->select('historique.*')
       //  ->orderby('idecole','desc')
         //->where('idecole', Session::get('idecole'))
         ->get();
        $manage_product=view('quisomes.historique')
                ->with('historique', $historique);
                return view('welcome')
               ->with('quisomes.historique', $manage_product);   

	}
	   public function save_quisomes(Request $request)
      {     $this->AdminAuthCheck();
               $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['status']=1;  
              DB::table('historique')->insert($data);
              Session::put('message',"historique ajoute avec success " );
             return Redirect::to('/all_quisomes');
             
             
       }
 
     public function edit_quisomes($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('historique')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('quisomes.edit_histoire')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('quisomes.edit_histoire',$product_info);
    }

  public function print_quisomes($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('historique')
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
     public function detail_quisomes($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('historique')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('quisomes.voirhistoire')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('quisomes.voirhistoire',$product_info);
    }

     public function update_quisomes(Request $request,$id)
    {        $this->AdminAuthCheck();
	         
	          $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['status']=1;  
                 DB::table('historique')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','historique Modifier avec succés ');
                   return Redirect::to('/all_quisomes');
             
                   
    }
    //////////fin modifier ////////////////////////////
     public function delete_quisomes($id)
    {
    	      $this->AdminAuthCheck();
            DB::table('historique')
             ->where('id', $id)
             ->delete();
        Session::put('message1','historique Supprimeé avec succés !!');
        return Redirect::to('/all_quisomes');
    }
    //////////////////////////////
    public function unactive_quisomes($id)
    {    $this->AdminAuthCheck();
        DB::table('historique')
            ->where('id', $id)
            ->update(['status' => 0]);
        Session::put('message', 'historique  unactive avec succès !!');
        return Redirect::to('/all_quisomes');
    }

    public function active_quisomes($id)
    {   $this->AdminAuthCheck();
        DB::table('historique')
            ->where('id', $id)
            ->update(['status' => 1]);
        Session::put('message', 'historique  activé avec succès !!');
        return Redirect::to('/all_quisomes');
    }

    ////////////////// OBJETIF//////////////////////
    public function objetif(){
		  $this->AdminAuthCheck();
        $objetif=DB::table('objetifs')
      //   ->join('ecole','ecoleid', '=', 'ecole.idecole')
         ->select('objetifs.*')
       //  ->orderby('idecole','desc')
         //->where('idecole', Session::get('idecole'))
         ->get();
        $manage_product=view('quisomes.objetif')
                ->with('objetif', $objetif);
                return view('welcome')
               ->with('quisomes.objetif', $manage_product);   

	}
	   public function save_objetif(Request $request)
      {    
               $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['status']=1;  
              DB::table('objetifs')->insert($data);
              Session::put('message',"objetif ajoute avec success " );
             return Redirect::to('/objetif');
             
             
       }
 
     public function edit_objetif($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('objetifs')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('quisomes.edit_objetif')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('quisomes.edit_objetif',$product_info);
    }

  public function print_objetif($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('objetifs')
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
     public function detail_objetif($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('objetifs')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('quisomes.voirobjetif')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('quisomes.voirobjetif',$product_info);
    }

     public function update_objetif(Request $request,$id)
    {        $this->AdminAuthCheck();
	         
	          $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['status']=1;  
                 DB::table('objetifs')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','objetif Modifier avec succés ');
                   return Redirect::to('/objetif');
             
                   
    }
    //////////fin modifier ////////////////////////////
     public function delete_objetif($id)
    {
    	      $this->AdminAuthCheck();
            DB::table('objetifs')
             ->where('id', $id)
             ->delete();
        Session::put('message1','objetif Supprimeé avec succés !!');
        return Redirect::to('/objetif');
    }
    //////////////////////////////
    public function unactive_objetif($id)
    {    $this->AdminAuthCheck();
        DB::table('objetifs')
            ->where('id', $id)
            ->update(['status' => 0]);
        Session::put('message', 'objetif  unactive avec succès !!');
        return Redirect::to('/objetif');
    }

    public function active_objetif($id)
    {   $this->AdminAuthCheck();
        DB::table('objetifs')
            ->where('id', $id)
            ->update(['status' => 1]);
        Session::put('message', 'objetif  activé avec succès !!');
        return Redirect::to('/objetif');
    }


////////////PRESENTATION //////////////////////////////
     public function presentation(){
		  $this->AdminAuthCheck();
        $present=DB::table('presentation')
      //   ->join('ecole','ecoleid', '=', 'ecole.idecole')
         ->select('presentation.*')
       //  ->orderby('idecole','desc')
         //->where('idecole', Session::get('idecole'))
         ->get();
        $manage_product=view('quisomes.presentation')
                ->with('present', $present);
                return view('welcome')
               ->with('quisomes.presentation', $manage_product);   

	}
	   public function save_present(Request $request)
      {    
               $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['status']=1;  
              DB::table('presentation')->insert($data);
              Session::put('message',"presentation ajoute avec success " );
             return Redirect::to('/presentation');
             
             
       }
 
     public function edit_present($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('presentation')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('quisomes.edit_presentation')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('quisomes.edit_presentation',$product_info);
    }

  public function print_present($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('presentation')
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
     public function detail_present($id)
    { 
        $this->AdminAuthCheck();
        $product_info=DB::table('presentation')
         //-//>join('nationalite','nationalite', '=', 'nationalite.id')
            ->where('id',$id)
            ->first();
        $product_info=view('quisomes.voirpresentation')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('quisomes.voirpresentation',$product_info);
    }

     public function update_present(Request $request,$id)
    {        $this->AdminAuthCheck();
	         
	          $data=array();    
               $data['titre']=$request->titre;
               $data['contenu']=$request->contenu;
               $data['status']=1;  
                 DB::table('presentation')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','presentation Modifier avec succés ');
                   return Redirect::to('/presentation');
             
                   
    }
    //////////fin modifier ////////////////////////////
     public function delete_present($id)
    {
    	      $this->AdminAuthCheck();
            DB::table('presentation')
             ->where('id', $id)
             ->delete();
        Session::put('message1','presentation Supprimeé avec succés !!');
        return Redirect::to('/presentation');
    }
    //////////////////////////////
    public function unactive_present($id)
    {    $this->AdminAuthCheck();
        DB::table('presentation')
            ->where('id', $id)
            ->update(['status' => 0]);
        Session::put('message', 'presentation  unactive avec succès !!');
        return Redirect::to('/presentation');
    }

    public function active_present($id)
    {   $this->AdminAuthCheck();
        DB::table('presentation')
            ->where('id', $id)
            ->update(['status' => 1]);
        Session::put('message', 'presentation  activé avec succès !!');
        return Redirect::to('/presentation');
    }


    //////////////////////////////
      public function AdminAuthCheck()
     {
      $email=Session::get('email');     
          if ($email) {
          return;
      }else{
        return Redirect::to('/')->send();
      }
    }
    /////////////////////////////////////
}
