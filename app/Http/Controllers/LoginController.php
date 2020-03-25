<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class LoginController extends Controller
{
	public function login(){
		 return view('/login.login');

	}

	public function password(){
		 return view('/login.password');

	}

	public function menu2(){
	$this->AdminAuthCheck();
	 return view('/acceuil.acceuil2');	
	}
	public function menu(Request $request){
		  //if (isset($request->login)) {
           $email=$request->email;
           $password=$request->password;
        $result=DB::table('membres')
               // ->join('ecole','login_table.ecole', '=', 'ecole.idecole')
                ->where('email', $email)
                ->where('password', $password)
                ->where('statusM', 1)
                ->first();
            if ($result) {
                Session::put('prenom', $result->prenom);
                Session::put('nom', $result->nom);
                Session::put('profile', $result->profile);
                Session::put('niveau', $result->niveau);
                Session::put('sexe', $result->sexe);
                Session::put('action', $result->action);
                Session::put('droit', $result->droit);
                Session::put('image', $result->image);
                Session::put('email', $result->email);
                Session::put('telephone', $result->telephone);
                Session::put('date_inscrit', $result->date_inscrit);
                Session::put('sexe', $result->sexe);
                Session::put('id', $result->id);
               // return view('autos.admin'); 
                 return view('acceuil.acceuil2');
                   

            }else{
                Session::put('message1', 'Email ou mot de passe incorret');
                return Redirect::to('/login');
            }
        
        
       //  else{
                
           //     return Redirect::to('/');
            //} 	

	}
	///////////////////////////////////////////

	     public function logout()
   {
      
       Session::flush();
       return Redirect::to('/login');
   }

/////////////////////////////////////////////////////////////////////////////////////
      public function AdminAuthCheck()
     {
      $email=Session::get('email');     
          if ($email) {
          return;
      }else{
        return Redirect::to('/login')->send();
      }
   }
  
}
