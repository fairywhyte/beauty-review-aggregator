<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductIsInShop;
use Illuminate\Http\Request;




class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (($handle = fopen ( public_path () . '/sephora_face_serum_product_attributes_1_405.csv', 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {

                $csv_data = new ProductIsInShop ();

                $csv_data->id_in_shop = $data [0];
                $csv_data->brand= $data [1];
                $csv_data->title = $data [2];
                $csv_data->rating = $data[3];
                $csv_data->price = $data [4];
                $csv_data->product_url = $data [5];
                $csv_data->image450 = $data[8];
                $csv_data->scraped_at = $data[9];
                $csv_data->shop_id = $data[10];
                $csv_data->skuId = $data[11];


                $csv_data->save();
            }
            fclose ( $handle );
        }
    }

    /**
     * get the target url from the databsae and return description and number of ratings
     * returns an array of product descriptions and number of ratings
     */
    public function scrape_description()
    {
        // call the SephoraTargetURL with scrape() which will scrape the product description and return it
        \App\Scrapers\SephoraTargetURL::scrape_description();
        // return it
    }

    public function json_scrape_sephora()
    {
        \App\Scrapers\JsonScrapeSephora::json_scrape_sephora();
    }

    public function json_scrape_image()
    {
        \App\Scrapers\SephoraImageURL::json_scrape_image();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
