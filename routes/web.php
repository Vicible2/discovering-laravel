<?php

use Illuminate\Support\Facades\Route;
// If multiple controllers are used, try this notation:
//use App\Http\Controllers\FormController;

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
//Write whole path if single controllerFunctions are used
Route::get('/form', 'App\Http\Controllers\FormController@loadFormView');

// Route::get('/', function() {
//     return view('test');
// });
