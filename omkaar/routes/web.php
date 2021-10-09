<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School;
use App\Http\Controllers\aboutschools;
use App\Http\Controllers\principalmessages;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\TextController;
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





Route::get('/user/{id}', [UserController::class, 'show']);


Route::get('/greeting', function () {
    return 'Hello World';
});


Route::get('/ok', function () {
    return view('welcome');
});


Route::get('/data-school', function () {
    return view('school-insert-list');
});


Route::get('/create', [School::class, 'createfirst']);

Route::get('/about-school', function () {
    return view('school-about');
});

Route::get('/aboutcreate', [aboutschools::class, 'aboutcreatefirst']);



Route::get('/principal-message', function () {
    return view('principal_message');
});

Route::get('/principal_msg', [principalmessages::class, 'principalcreatefirst']);



Route::get('/notification', function () {
    return view('notification');
});

Route::get('/msg-notification', [messagesController::class, 'messagecreatefirst']);




Route::get('/relationship/{id}', [TextController::class, 'getCandidates']);









Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/dataupload', 'Dataupload@adddataupload');

Route::post('/dataupload', 'Dataupload@createfirst')->name('add.data');

Route::post('/firstuploadview', 'firstupload@createfirst')->name('post.add');

Route::get('/firstuploadview', 'firstupload@firstpost');

Route::post('/prepared', 'firstupload@insert')->name('post.add');

Route::get('/prepared', 'firstupload@viewpreared');

Route::get('/school-data', function () {
    return view('Schoollist');
});
Route::get('/school-upload', 'School@createfirst');

Route::get('/school-view', 'School@index');

Route::get('/school-view-detail', 'School@index');

Route::get('/delete-post/{id}', 'School@delete');
Route::get('/update-school/{id}', 'School@update');
Route::get('/update-data-school', 'School@updatedata');
Route::get('/gallery-data', function () {
    return view('gallery-insert');
});
Route::post('/gallery-upload', 'imageupload@formview');

Route::get('/update-image', 'imageupload@updateimage');
Route::get('/image/{id}', 'imageupload@imageupdate');
Route::get('/update-image-data', 'imageupload@updateimagedata');
Route::get('/login-data', function () {    return view('login-page'); });
Route::get('/register', 'regiteruser@registerfirst');
Route::get('/login-auth', function () {     return view('login-check');     });
 Route::post('/login-validate', 'regiteruser@checklogin');
 
Route::get('/auto1', function () {    return view('search'); });



Route::get('/search', 'search@index')->name('search');
Route::get('/autocomplete', 'search@autocomplete')->name('autocomplete');

Route::get('/school-view-detail', 'School@index');
//Route::get('/sliders', function () {     return view('slider');     });

Route::get('/slider-view', 'PhotoController@index');

Route::get('/slider-view', 'PhotoController@updateimage');

Route::get('/update-image', 'imageupload@updateimage');
Route::get('/school-view-detail', 'School@index');
Route::get('/fetch-view', 'Fetchcontroller@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
