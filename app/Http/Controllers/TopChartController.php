<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class TopChartController extends Controller
{
    public function get_five_star_rated_80_percent_products() {
        $products = Product::where('five_star_rating_percentage', '>', 0.79)->orderBy('five_star_rating_percentage', 'DESC')->get();
        return view('results', ['products'=> $products]) ;
    }

    public function get_most_recommended() {
        $products = Product::orderBy('recommended_count_percentage', 'DESC')->get();
        return view('results', ['top_recommended_products'=> $top_recommended_products]);
    }

    public function get_highest_average_rating() {
        $products = Product::orderBy('average_rating', 'DESC')->get();
        return view('results', ['top_average_rated' => $top_average_rated]);
    }
}
