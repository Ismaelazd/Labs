<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Ressources Welcome
Route::get('/','WelcomeController@index')->name('Welcome');
Route::resource('welcome', 'WelcomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');

Route::get('/blobPage', 'BlogPageController@index')->name('BlogPage');
Route::get('/servicePage', 'ServicePageController@index')->name('ServicePage');
Route::get('/contactPage', 'ContactPageController@index')->name('ContactPage');

// Ressource MYPROFIL

Route::resource('MyProfil', 'MyProfilController')->middleware('admin');

// Admin

Route::get('/admin', 'WelcomeController@admin')->name('Admin')->middleware('admin');

// Ressources Users

Route::resource('users', 'UserController')->middleware('admin');

// Ressources Services

Route::resource('service', 'ServiceController')->middleware('admin');


// Ressources ServicePage

Route::resource('servicePage', 'ServicePageController')->middleware('admin');

// Ressources BlogPage

Route::resource('blogPage', 'BlogPageController')->middleware('admin');

// Ressources ContactPage

Route::resource('contactPage', 'ContactPageController')->middleware('admin');

// Ressources HomeElement

Route::resource('homeElement', 'HomeElementController')->middleware('admin');

// Ressources About

Route::resource('about', 'AboutController')->middleware('admin');

// Ressources Contact

Route::resource('contact', 'ContactController')->middleware('admin');

// Ressources Formulaire

Route::resource('formulaire', 'FormulaireController')->middleware('admin');

// Ressources Newsletter

Route::resource('newsletter', 'NewsletterController')->middleware('admin');

// Ressources Footer

Route::resource('footer', 'FooterController')->middleware('admin');

// Ressources Testimonial

Route::resource('testimonial', 'TestimonialController')->middleware('admin');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth')->middleware('admin');
