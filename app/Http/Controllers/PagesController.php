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

   public function productDetails($slug) {
      $product = Product::where('slug', '=', $slug)->first();
      $popular_products = Product::inRandomOrder()->limit(4)->get();
      $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();
      return view('pages.details', compact('product', 'popular_products', 'related_products'));
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
