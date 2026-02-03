<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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
    return view('Home');
});

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/course',function(){
//     return view('course');
// });

// Route::get('/batch',function(){
//     return view('batch');
// });

// Route::get('/result',function(){
//     return view('result');
// });

// Route::get('/',[MyController::class,'home']);
Route::get('/about',[MyController::class,'about']);
Route::get('/Math',[MyController::class,'Math']);
Route::get('/batch',[MyController::class,'batch']);
Route::get('/result',[MyController::class,'result']);
Route::get('/study',[MyController::class,'study']);