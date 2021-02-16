<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;



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
Route::get('/',[HomeController::class,'index']);

Route::get('/About',[AboutController::class,'About']);

Route::get('/articles/{id}',[ArticlesController::class,'articles']);

