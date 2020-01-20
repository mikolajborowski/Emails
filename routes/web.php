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

use App\Emails;
Route::get('/', function () {
    $emails = Emails::all();
    return view('email', compact('emails'));
});

Route::resource('email', 'EmailsController');