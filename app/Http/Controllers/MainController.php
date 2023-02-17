<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Product;

class MainController extends Controller
{

    public function index() {
        $products = Product::get();

        return view('home', ['products' => $products]);
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function catalog() {
        $products = Product::get();

        return view('catalog', ['products' => $products]);
    }

    public function whereToFind() {

        return view('where-to-find');
    }

    public function admin() {
        $products = Product::get();

        return view('admin', ['products' => $products]);
    }
}
