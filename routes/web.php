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
// =============================== Home Page Start 
Route::get('/','PagesController@index')->name('home');
// =============================== Home Page Start 
Route::get('/about-us','PagesController@about_us')->name('about');

// =============================== Home Page Start 
Route::get('/packing','PagesController@packing')->name('packing');

// =============================== Products-spices Page Start 
Route::get('/products/spices','PagesController@products_spices')->name('ProductsSpices');
Route::get('/products/herbs','PagesController@products_herbs')->name('ProductsHerbs');
Route::get('/shope-detail','PagesController@shope_detail')->name('shopDetail');



// =============================== Recipes Page Start 
Route::get('/recipes','PagesController@recipes')->name('recipes');
// =============================== Recipes Page Start 
Route::get('/recipe-detail','PagesController@recipe_detail')->name('recipeDetail');

// =============================== faqPage Start 
Route::get('/faqs','PagesController@faq')->name('faq');

// =============================== Contact Page Start 
Route::get('/contact-us','PagesController@contact')->name('contact');