<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\{WelcomeController, PageController};
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\AboutController;
use  App\Http\Controllers\ArticleController;


// Resource Controller
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Basic Routing
// p-1
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// p-2
// Route::get('/world', function () {
//     return 'World';});


// p-3
// Route::get('/welcome', function () {
//     return 'Selamat datang';


// p-4
// Route::get('/about', function () {
//     return '2241720063 - Yonatan Efrassetyo';


// Route Parameter
// p-1
// Route::get('/user/{name}', function ($name) { 
//     return 'Nama saya '.$name; 


// p-2
// Route::get('/posts/{post}/comments/{comment}', function 
// ($postId, $commentId) { 
// return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// p-3
// Route::get('/articels/{id}', function 
// ($Id) { 
// return 'Halaman Artikel dengan ID '.$Id;
// });

//  Optiional Parameters
// p-1
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// p-2
// Route::get('/user/{name?}', function ($name='John') { 
//     return 'Nama saya '.$name; 
// });

// Route Name
// p-1
Route::get('/user/profile', function() { 
    
    })->name('profile'); 

// });

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/index', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);