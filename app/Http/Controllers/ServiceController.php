<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductIsInShop;


class ServiceController extends Controller
{
    //

    public function load_sephora()
    {

    }

    public function load_influenster(Request $request)
    {
        //returns the fully qualified path to the project root.
        $source_file_influenster = base_path('project_resources/fadz/influenster_scraping/influenster-corrected.csv');

        $fh_infl_r = fopen($source_file_influenster, 'r');


        $influenster_products = [];

        while (!feof($fh_infl_r)) {
        $row_infl = fgetcsv($fh_infl_r, 0, ',');

        $rating = floatval(substr($row_infl[2], 0, strpos($row_infl[2], ' (')));
        $key = str_slug($row_infl[0]);


            $csv_data = new ProductIsInShop ();
            $csv_data->title = $row_infl [0];
            $csv_data->brand= $row_infl [1];
            $csv_data->rating = $rating;
            $csv_data->price = $row_infl[3];
            $csv_data->scraped_at = $row_infl[4];
            $csv_data->shop_id = 2;
            $csv_data->id_in_shop = uniqid();
            $csv_data->slug = $key;

            $csv_data->save();


        }
    }

}



// try to find an item in product_in_shop that has the same slug
// if it exists
// set this new product_id to the other items product_id
// else
// create a new product

// // try to find an item product_in_shop table with the same shop_id and the same id_in_shop
// $find_id_db = DB::select('SELECT shop_id FROM scraped_products');

// \App\Shop::INFLUENSTER_ID;


// if($find_id_db == $find_id_csv){
//     // if it exists
//         // update it

// }else{
//     //else
//         //first insert that item in product_in_shop
//         }