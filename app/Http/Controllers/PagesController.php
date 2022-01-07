<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index() {
      return view('index');
   }

   public function aboutUs() {
      return view('pages.about');
   }

   public function shop() {
      return view('pages.shop');
   }

   public function cart() {
      return view('pages.cart');
   }

   public function checkOut() {
      return view('pages.checkout');
   }

   public function contactUs() {
      return view('pages.contact');
   }
}
