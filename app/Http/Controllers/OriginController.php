<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Brand;
use \App\Product;

class OriginController extends Controller
{
    public function get_asian_beauty_brands() {

        //the goal is to return products, so you have to start with the products table and then join the brands table
        $products = Product::whereHas('brand', function ($query) {
            $query->where('origin', '=', 'Korea')->orwhere('origin', '=', 'Japan');
        })->orderBy('total_number_of_ratings', 'DESC')->get();
        return view('results', ['products'=> $products]) ;
    }



    public function get_american_beauty_brands() {

        $products = Product::whereHas('brand', function ($query) {
            $query->where('origin', '=', 'United States');
        })->orderBy('total_number_of_ratings', 'DESC')->get();
        return view('results', ['products'=> $products]) ;
    }

    public function get_french_beauty_brands() {

        $products = Product::whereHas('brand', function ($query) {
            $query->where('origin', '=', 'France');
        })->orderBy('total_number_of_ratings', 'DESC')->get();
        return view('results', ['products'=> $products]) ;
    }

}
