<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

//--------------PRAKTIKUM 1--------------
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/About', function () {
//    echo "Nim : 1941720149 ";
//    echo " Nama : Muhammad Ridho Ramadhan";
// });

// Route::get('/articles/{id}', function ($id) {
//     return $id;
//  });



//--------------PRAKTIKUM 2--------------
// Route::get('/',[HomeController::class,'index']);

// Route::get('/About',[AboutController::class,'About']);

// Route::get('/articles/{id}',[ArticlesController::class,'articles']);



//--------------PRAKTIKUM 3--------------
//==NOMER 1
Route::get('/',[HomeController::class,'index']);

//==NOMER 2 Menampilkan daftar product 
Route::prefix('category')->group(function () {
    Route::get('/marbel-education-games',[CategoryController::class,'eduGames']);
    Route::get('/marbel-friend-kids-games',[CategoryController::class,'kidsGames']);
    Route::get('/riri-story-books',[CategoryController::class,'storyBook']);
    Route::get('/kolak-kids-songs',[CategoryController::class,'kidsSong']);
});

//==NOMER 3 Menampilkan Daftar berita
Route::get('/news',[BeritaController::class,'berita1']);
Route::get('/news/{param}',[BeritaController::class,'berita']);

//==NOMER 4 Menampilkan Daftar Program
Route::prefix('program')->group(function () {
    Route::get('/karir',[ProgramController::class,'karir']);
    Route::get('/magang',[ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri',[ProgramController::class, 'kunjungan']);
});

//==NOMER 5 Menampilkan About Us
Route::get('/about-us',[AboutController::class,'About']);

//==NOMER 6 Menampilkan Contact Us
Route::get('/contact-us',[ContactUsController::class,'contact']);
   