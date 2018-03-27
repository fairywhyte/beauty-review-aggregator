<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class BrandController extends Controller
{
    public function get_the_ordinary_products() {
        $products = Product::where('brand_id', '=', '74')->orderBy('total_number_of_ratings', 'DESC')->get();
        return view('results', ['products'=> $products]);
    }

    public function get_estee_lauder_products() {
        $products = Product::where('brand_id', '=', '29')->orderBy('total_number_of_ratings', 'DESC')->get();
        return view('results', ['products'=> $products]);
    }

    public function get_kate_sommerville_products() {
        $products = Product::where('brand_id', '=', '44')->orderBy('total_number_of_ratings', 'DESC')->get();
        return view('results', ['products'=> $products]);
    }
}

