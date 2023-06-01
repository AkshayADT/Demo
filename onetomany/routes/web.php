<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

// protected----------------------------------------
Route::get('/data', [IndexController::class, 'index']);
Route::get('/group/{id}', [IndexController::class, 'group']);
//--------------------------------------------------

Route::get('/profile', function () {
    return 'welcome to your profile';
});
Route::get('/login', function () {
    session()->put('user_id', 1);
    return redirect('/');
});
Route::get('/logout', function (){
  session()->forget('user_id');
  return redirect('/');
});
//no-access
Route::get('/no-access', function () {
    echo 'login first to accesss!!!!';
    die;
});
Route::get('/', function () {
    return view('welcome');
});


