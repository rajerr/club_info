<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('login.login');
//});

route::get('/', 'UrlController@home');
route::get('/about', 'UrlController@about');
route::get('/contact', 'UrlController@contact');
route::get('/activite1', 'UrlController@activite');
route::get('/membre1', 'UrlController@membre');
route::get('/departement', 'UrlController@departement');
///////////////LOGIN////////////////////

Route::get('/password', 'LoginController@password');
Route::post('/menu', 'LoginController@menu');
Route::get('/menu2', 'LoginController@menu2');
Route::get('/logout', 'LoginController@logout');
Route::get('/login', 'LoginController@login');
//////////////////activite/////////////////
/////////////commentaire.................
Route::post('/save_commetaire','ActiviteController@save_commetaire');
Route::post('/save_contact','ActiviteController@save_contact');
/////////////////////////////////////////////
Route::get('/voiractivites/{id}', 'ActiviteController@voiractivites');
//////////////////////////////////////

Route::get('/acceuil', 'AcceuilController@acceuil');

Route::get('/detail','AcceuilController@detail');
Route::get('/all_acceuil','AcceuilController@all_acceuil');
Route::get('/ad_acceuil','AcceuilController@ad_acceuil');
Route::post('/save_acceuil','AcceuilController@save_acceuil');
Route::post('/modifier_acceuil/{id}','AcceuilController@update_acceuil');
Route::get('/delete_acceuil/{id}', 'AcceuilController@delete_acceuil');
Route::get('/edit_acceuil/{id}', 'AcceuilController@edit_acceuil');
Route::get('/detail_acceuil/{id}', 'AcceuilController@detail_acceuil');
Route::get('/active_acceuil/{id}', 'AcceuilController@active_acceuil');
Route::get('/unactive_acceuil/{id}', 'AcceuilController@unactive_acceuil');
Route::get('/print_acceuil/{id}', 'AcceuilController@print_acceuil');

// Slider routes are here
Route::get('/add_slider', 'SliderController@index');
Route::post('/save_slider', 'SliderController@save_slider');
Route::get('/all_slider', 'SliderController@all_slider');
Route::get('/delete_slider/{id}', 'SliderController@delete_slider');
Route::get('/unactive_slider/{id}', 'SliderController@unactive_slider');
Route::get('/active_slider/{id}', 'SliderController@active_slider');
Route::get('/edit_slide/{id}', 'SliderController@edit_slide');
Route::post('/modifier_slider/{id}', 'SliderController@update_slider');

/////////////QUISOMMES NOUS//////////////////////
Route::get('/detail','QuisomesController@detail');
Route::get('/all_quisomes','QuisomesController@historique');
Route::get('/ad_quisomes','QuisomesController@ad_quisomes');
Route::post('/save_quisomes','QuisomesController@save_quisomes');
Route::post('/modifier_quisomes/{id}','QuisomesController@update_quisomes');
Route::get('/delete_quisomes/{id}', 'QuisomesController@delete_quisomes');
Route::get('/edit_quisomes/{id}', 'QuisomesController@edit_quisomes');
Route::get('/detail_quisomes/{id}', 'QuisomesController@detail_quisomes');
Route::get('/active_quisomes/{id}', 'QuisomesController@active_quisomes');
Route::get('/unactive_quisomes/{id}', 'QuisomesController@unactive_quisomes');
Route::get('/print_quisomes/{id}', 'QuisomesController@print_quisomes');
//////////////////ob jectif///////////////////////

Route::get('/objetif','QuisomesController@objetif');
Route::get('/ad_objetif','QuisomesController@ad_objetif');
Route::post('/save_objetif','QuisomesController@save_objetif');
Route::post('/modifier_objetif/{id}','QuisomesController@update_objetif');
Route::get('/delete_objetif/{id}', 'QuisomesController@delete_objetif');
Route::get('/edit_objetif/{id}', 'QuisomesController@edit_objetif');
Route::get('/detail_objetif/{id}', 'QuisomesController@detail_objetif');
Route::get('/active_objetif/{id}', 'QuisomesController@active_objetif');
Route::get('/unactive_objetif/{id}', 'QuisomesController@unactive_objetif');
Route::get('/print_objetif/{id}', 'QuisomesController@print_objetif');
///////////presentation////////////////////////////////////////////////

Route::get('/presentation','QuisomesController@presentation');
Route::get('/ad_present','QuisomesController@ad_present');
Route::post('/save_present','QuisomesController@save_present');
Route::post('/modifier_present/{id}','QuisomesController@update_present');
Route::get('/delete_present/{id}', 'QuisomesController@delete_present');
Route::get('/edit_present/{id}', 'QuisomesController@edit_present');
Route::get('/detail_present/{id}', 'QuisomesController@detail_present');
Route::get('/active_present/{id}', 'QuisomesController@active_present');
Route::get('/unactive_present/{id}', 'QuisomesController@unactive_present');
Route::get('/print_present/{id}', 'QuisomesController@print_present');
////////////////////////ACTIVITE //////////////////////////////////////////////
Route::get('/activite','ActiviteController@activite');
Route::get('/ad_activite','ActiviteController@ad_activite');
Route::post('/save_activite','ActiviteController@save_activite');
Route::post('/modifier_activite/{id}','ActiviteController@update_activite');
Route::get('/delete_activite/{id}', 'ActiviteController@delete_activite');
Route::get('/edit_activite/{id}', 'ActiviteController@edit_activite');
Route::get('/detail_activite/{id}', 'ActiviteController@detail_activite');
Route::get('/active_activite/{id}', 'ActiviteController@active_activite');
Route::get('/unactive_activite/{id}', 'ActiviteController@unactive_activite');
Route::get('/print_activite/{id}', 'ActiviteController@print_activite');

////////////////GALERY/////////////////////
Route::get('/galery','ActiviteController@galery');
Route::post('/save_galery','ActiviteController@save_galery');
Route::get('/delete_galery/{id}', 'ActiviteController@delete_galery');
Route::get('/active_galery/{id}', 'ActiviteController@active_galery');
Route::get('/unactive_galery/{id}', 'ActiviteController@unactive_galery');
///////////////////////////////////////////////////////////////////////////

////////////////classe/////////////////////
Route::get('/matiere','ClasseController@matiere');
Route::post('/save_matiere','ClasseController@save_matiere');
Route::get('/delete_matiere/{id}', 'ClasseController@delete_matiere');
Route::get('/active_matiere/{id}', 'ClasseController@active_matiere');
Route::post('/modifier_matiere/{id}','ClasseController@update_matiere');
Route::get('/unactive_matiere/{id}', 'ClasseController@unactive_matiere');
Route::get('/edit_matiere/{id}', 'ClasseController@edit_matiere');
///////////////////////////////....MEMBRES....///////////////////////////////////////////
Route::get('/membre','MembreController@membre');
Route::post('/save_membre','MembreController@save_membre');
Route::post('/modifier_membre/{id}','MembreController@update_membre');
Route::get('/delete_membre/{id}', 'MembreController@delete_membre');
Route::get('/edit_membre/{id}', 'MembreController@edit_membre');
Route::get('/detail_membre/{id}', 'MembreController@detail_membre');
Route::get('/active_membre/{id}', 'MembreController@active_membre');
Route::get('/unactive_membre/{id}', 'MembreController@unactive_membre');
Route::get('/print_membre/{id}', 'MembreController@print_membre');
////////////////////// SERVICE/////////////////////////////////////
Route::get('/service','MembreController@service');
Route::post('/save_service','MembreController@save_service');
Route::post('/modifier_service/{id}','MembreController@update_service');
Route::get('/delete_service/{id}', 'MembreController@delete_service');
Route::get('/edit_service/{id}', 'MembreController@edit_membservice');
Route::get('/detail_service/{id}', 'MembreController@detail_service');
Route::get('/active_service/{id}', 'MembreController@active_service');
Route::get('/unactive_service/{id}', 'MembreController@unactive_service');
Route::get('/print_service/{id}', 'MembreController@print_service');