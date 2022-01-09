<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
   public function index() {
      return view('index');
   }

   public function aboutUs() {
      return view('pages.about');
   }

   public function shop() {
      $products = Product::paginate(12);
      return view('pages.shop', compact('products'));
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
