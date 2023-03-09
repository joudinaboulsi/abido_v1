<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //home Page
    public function index(){
        return view('home');
    }
    // about us page
    public function about_us(){
      return view('about_us');
    }
    // products
    public function products_spices(){
      return view('products');
    }
    // shope detail
    public function shope_detail(){
      return view('shop-detail');
    }
    // recipes
    public function recipes(){
      return view('recipes');
    }
      // recipes
    public function recipe_detail(){
      return view('recipe_detail');
    }

    // packing 
    public function packing(){
      return view('packing');
    }
    // faq 
    public function faq(){
      return view('faq');
    }
    // contact page
    public function contact(){
        return view('contact');
    }
}