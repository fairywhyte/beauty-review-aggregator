<?php

namespace App\Http\Controllers;

use App\Product;
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
            while ( ($data = fgetcsv ( $handle, 500, ',' )) !== FALSE ) {

                $csv_data = new Product ();
                $csv_data->brand = $data [0];
                $csv_data->title = $data [1];
              //$csv_data->average_rating = $data [2];
                $csv_data->price = $data [3];
                $csv_data->product_url = $data [4];
                $csv_data->img135 = $data [5];
                $csv_data->img250 = $data [6];
                $csv_data->img450 = $data [7];
                $csv_data->save ();
            }
            fclose ( $handle );
        }
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
