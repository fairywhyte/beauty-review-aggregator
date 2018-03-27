<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Brand;
use \App\Product;

class OriginController extends Controller
{
    public function get_asian_beauty_brands() {
        //! change 'first' to something else
        $brands = Brand::where('origin', '=', 'Korea')->orderBy('total_number_of_ratings', 'DESC')->first();
        // where origin = korea and origin = japan // brands korean (2,6,9,27,52,67,68)
        //Brand::find(2);solve with yogi: the code will run if you find one brand and get its products, but not with several brands
        $products = $brands->products;
        return $products;
        //return view('results', ['products'=> $products]) ;
    }

    public function get_american_beauty_brands() {
        //! change 'first' to something else
        $brands = Brand::where('origin', '=', 'United States')->orderBy('total_number_of_ratings', 'DESC')->first();
        $products = $brands->products;
        return $products;
        //return view('results', ['products'=> $products]) ;
    }

    public function get_french_beauty_brands() {
        //! change 'first' to something else
        $brands = Brand::where('origin', '=', 'France')->orderBy('total_number_of_ratings', 'DESC')->first();
        $products = $brands->products;
        return $products;
        //return view('results', ['products'=> $products]) ;
    }

}
