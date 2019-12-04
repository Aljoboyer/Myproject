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

Route::get('/', function () {
     return view('welcome');
 });
Route::get('slogin','AuthController@slogin');

Route::post('loginstore','AuthController@loginstore');

Route::group(['middleware' => 'checkloggedin'], function(){
	Route::get('home', 'HomeController@home');
	Route::get('timeline', 'HomeController@timeline');

	
	Route::group(['middleware' => 'IsTeacher'], function(){
		Route::get('teacher1', 'HomeController@teacher1');
		Route::get('teacher2', 'HomeController@teacher2');
	});

	Route::group(['middleware' => 'IsStudent'], function(){
		Route::get('student1', 'HomeController@student1');
		Route::get('student2', 'HomeController@student2');
	});

	Route::group(['middleware' => 'IsAdmin'], function(){
		Route::get('admin1', 'HomeController@admin1');
		Route::get('admin2', 'HomeController@admin2');
	});
	

});
// Route::get('unauthorized', function(){
// 	return view('unauthorized');
// });

// Route::get('products', 'ProductController@all');


//  Route::get('valid', 'ValidationController@valid');

// Route::post('store', 'ValidationController@store');


  Route::get('students', 'StudentController@all');
  Route::get('view1', function()
{
  return view('view1');
})->name('one');

Route::get('view2', function()
{
  return view('view2');
})->name('two');

Route::get('view3', function()
{
  return view('view3');
})->name('three');

// Route::get('import', 'UploadController@import');
// Route::post('ImportFile', 'UploadController@ImportFile');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//resource controller


