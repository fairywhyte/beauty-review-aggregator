<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Brand;
use \App\Product;

class OriginController extends Controller
{
    public function get_korean_beauty_brands() {
        $brands = Brand::find(2);
        $products = $brands->products;
        return $products;
        //return view('results', ['products'=> $products]) ;
    }

    public function get_american_beauty_brands() {
        $brands = Brand::where('origin', '=', 'United States')->get();
        $products = $brands->products;
        return $products;
        //return view('results', ['products'=> $products]) ;
    }

    public function get_french_beauty_brands() {
        $brands = Brand::where('origin', '=', 'France')->get();
        return $products;
        //return view('results', ['products'=> $products]) ;
    }

}
