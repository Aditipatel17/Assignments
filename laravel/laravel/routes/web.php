<?php

use App\Http\Controllers\registationcontroller;


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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/registration', 'registration');
Route::view('/login', 'login');
Route::view('/home','home');
Route::view('/aboutus','aboutus');
//multiple variables in routes
Route::view('/show', 'show', ['name' => 'Aditi','lastname'=>'Patel']);
/* route caching 
 we can genrate route cache file using php artisan route:cache command
 and delete(clear)route cache file using php artisan route:clear command

 */