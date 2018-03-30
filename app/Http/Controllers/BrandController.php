<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class BrandController extends Controller
{

    public function get_the_ordinary_products() {
    //connect to products table and then make a join with brands table to search for 'the Ordinary'
    //in the 'where' clause, you can write The Ordinary as you are now referring to the column inside brands table
    $products = Product::whereHas('brand', function ($query) {
        $query->where('name', '=', 'The Ordinary');
    })->orderBy('total_number_of_ratings', 'DESC')->get();

    return view('results', ['products'=> $products]);
    }

    public function get_estee_lauder_products() {
        $products = Product::whereHas('brand', function ($query) {
            $query->where('name', '=', 'Estee Lauder');
        })->orderBy('total_number_of_ratings', 'DESC')->get();

        return view('results', ['products'=> $products]);
    }

    public function get_kate_sommerville_products() {
        $products = Product::whereHas('brand', function ($query) {
            $query->where('name', '=', 'Kate Somerville');
        })->orderBy('total_number_of_ratings', 'DESC')->get();

        return view('results', ['products'=> $products]);
    }
}

