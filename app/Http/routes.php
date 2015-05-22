<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function()
{
	Route::get('home', 'HomeController@index');
    Route::resource('category','CategoryController');
	Route::resource('post','PostController');
	Route::resource('albumcat','AlbumCatController');
	Route::resource('album','AlbumController');
	Route::resource('photo','PhotoController');
	Route::resource('user','UserController');
	Route::resource('designation','DesignationController');
	Route::resource('district','DistrictController');
	Route::resource('hospitalcategory','HospitalCategoryController');
	Route::resource('hospitals','HospitalController');
	Route::resource('staffrecord','StaffController');
	Route::resource('posting','PostingController');
	Route::get('hospitalByCat', 'PostingController@hospitalByCat');
	Route::post('redactorupload', function(){
		$file =Input::file('file');
		$move = $file->move('upload/', $file->getClientOrginalName());

		if($move){
			return Response::json(['filelink'=> 'upload/' . $file->getClientOrginalName()]);
			}
			else{
				return Response::json(['error'=>true]);
			}
	});
});
Route::resource('groupcategory','GroupCategoryController');
Route::resource('grouppost','GroupPostController');
Route::resource('group1','GroupController@group1');
Route::resource('group2','GroupController@group2');
Route::resource('group3','GroupController@group3');
Route::resource('view','ViewController');
Route::resource('page','PageController');
Route::resource('gallery','GalleryController');
Route::get('family',function(){
	return view('family');
});
Route::get('list', 'PageController@listByCat');
Route::get('ehrmis', 'PageController@eHRMIS');
Route::get('staff', 'PageController@staff');

Route::get('galleryalbum', 'GalleryController@album');
Route::get('galleryphoto', 'GalleryController@photo');

Route::get('facilities', 'EhrmisController@facilities');
Route::get('facdetail', 'EhrmisController@facdetail');
Route::get('hr', 'EhrmisController@hr');
Route::get('hrdetail', 'EhrmisController@hrdetail');
