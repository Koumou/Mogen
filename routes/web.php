<?php

use App\Http\Controllers\SendEmailController;
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
    return view('mogen.home');
});

Route::get('/home', function () {
    return view('mogen.home');
});
Route::get('/about', function () {
    return view('mogen.about');
});
Route::get('/testiminial', function () {
    return view('mogen.testiminial');
});
Route::get('/contact', function () {
    return view('mogen.contact');
});

Route::get ('/contacts', 'AgdkController@send');

Route::get ('/generate-docx', 'AgdkController@generateDocx');



Route::get('/send-mail', function () {
    $details = [
'title' => 'Mail from Kessel',
'body' => 'Love you!'

    ];
\Mail::to('kesselokinga@gmail.com')->send(new \App\Mail\ContactMail($details));

echo "Mail has been sent!";
});