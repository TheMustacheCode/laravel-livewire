<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/contact', function () {
    return view('contact-page');
});

Route::post('/contact', function (Request $request) {

    $contact = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'contactMessage' => 'required',
    ]);

    Mail::to('tmc@mail.com')->send(new ContactFormMailable($contact));

    return back()->with('success_message', 'We received your message successfully and will get back to you shortly!');
});