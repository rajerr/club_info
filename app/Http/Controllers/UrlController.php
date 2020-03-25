<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class UrlController extends Controller
	{
	  public function home(){
	    	
	     return view('home.index');
	    }
	     public function about(){
	    	
	     return view('about.about');
	    }
	      public function activite(){
	    	
	     return view('activite1.service');
	    }
	      public function contact(){
	    	
	     return view('contact.contact');
	    }
	      
	     public function membre(){
	    	
	     return view('Membre1.membre');
	    }
	    
        public function departement(){
	    	
	     return view('departement.departement');
	    }
	    



	}
