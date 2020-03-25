<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class SliderController extends Controller
{
  public function index()
    {$this->AdminAuthCheck();
    	 $all_slider=DB::table('slide')
    	 ->get();
       $manage_slider=view('slider.slider')
           ->with('all_slider', $all_slider);
        return view('welcome')
            ->with('slider.sliderr', $manage_slider);
    }

    public function save_slider(Request $request)
    {  $this->AdminAuthCheck();
     $data=array();	
     $data['publication_status']=1;
     $data['titre']=strip_tags($request->titre);
     $data['contenu']=strip_tags($request->contenu);	
     $image=$request->file('slider_image');
    if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['slider_image']=$image_url;
                DB::table('slide')->insert($data);
                Session::put('message', 'Slider ajouté avec succès !!');
                return Redirect::to('/add_slider');
            }
            
        }else{

            DB::table('slide')->insert($data);
            Session::put('message', 'Slider ajouté avec succès sans image!! ');
            return Redirect::to('/add_slider');
        }
    }

    public function all_slider()
    {  $this->AdminAuthCheck();
    	 //$this->AdminAuthCheck();

       $all_slider=DB::table('slide')->get();
       $manage_slider=view('admin.all_slider')
           ->with('all_slider', $all_slider);
        return view('admin_layout')
            ->with('admin.add_slider', $manage_slider);
    }
    // this is unactive part  of slider --------------
     public function unactive_slider($id)
    {  $this->AdminAuthCheck();
        DB::table('slide')
            ->where('id', $id)
            ->update(['publication_status' => 0]);
        Session::put('message', 'Slider Unactive avec succès !!');
        return Redirect::to('/add_slider');
    }
     // this is active part  of slider --------------
    public function active_slider($id)
    {  $this->AdminAuthCheck();
        DB::table('slide')
            ->where('id', $id)
            ->update(['publication_status' => 1]);
        Session::put('message', 'Slider active avec succès !!');
        return Redirect::to('/add_slider');
    }
    // slider delete part are hare --------------
    public function delete_slider($id)
    {   $this->AdminAuthCheck();
        DB::table('slide')
            ->where('id', $id)
            ->delete();
        Session::get('message','Slider Supprimer avec succés !!');
        return Redirect::to('/add_slider');
    }
     public function edit_slide($id)
    { 
     $this->AdminAuthCheck();
        $product_info=DB::table('slide')
            ->where('id', $id)
            ->first();
        $product_info=view('slider.edit_slider')
            ->with('product_info', $product_info);
        return view('welcome')
            ->with('slider.edit_slider',$product_info);


        ///return view('admin.edit_category');
    }

     public function update_slider(Request $request,$id)
    {$this->AdminAuthCheck();
     $data=array(); 
     $data['publication_status']=1;
     $data['titre']=strip_tags($request->titre);
     $data['contenu']=strip_tags($request->contenu);  
     $image=$request->file('slider_image');
    if ($image) {
            $image_name=str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['slider_image']=$image_url;
                 DB::table('slide')
                 ->where('id', $id)
                 ->update($data);
                  Session::put('message','slider Modifier avec succés ');
                   return Redirect::to('/add_slider');
             
                    }  
                 }else{
                           
                     DB::table('slide')
                      ->where('id', $id)
                      ->update($data);  
                     Session::put('message','slide Modifier avec succés ');
                   return Redirect::to('/add_slider');
                   
                             }
    }
    /////////////////////////////////////
      public function AdminAuthCheck()
     {
      $email=Session::get('email');     
          if ($email) {
          return;
      }else{
        return Redirect::to('/')->send();
      }
  }
   /////////////////
}
