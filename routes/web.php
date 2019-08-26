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

Route::get('/','welcomecontroller@index');

Route::get('/whole', function () {
    return view('website');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/gallery/create','gallerycontroller@create')->middleware('auth');
 Route::post('/gallery','gallerycontroller@store')->middleware('auth');
 Route::get('/gallery','gallerycontroller@index');
 Route::delete('/gallery/{gallery}','gallerycontroller@destroy');
 Route::post('/gallery/store','gallerycontroller@store');
Route::resource('/slider','slidercontroller');
Route::resource('/events','eventscontroller');
Route::resource('/staff','staffcontroller');
Route::resource('/student','studentcontroller');
Route::post('/people','staffcontroller@store');
Route::get('/test',function(){
	return view('test');
});
Route::get('/testing',function(){
	return view('testing');
});
Route::get('/admindash',function(){
	return view('admindash');
});
Route::resource('/download','downloadcontroller');
Route::get('/admindownload','downloadcontroller@download');


/*new */
Route::get('student',function(){
     return view('student.home');
});
Route::resource('class','classcontroller');
Route::resource('student','studentcontroller');
Route::get('admin', function()
{
	return view('admin.dashboard');
}
);
Route::get('/aboutus',function(){
return view('aboutus');

});



 
