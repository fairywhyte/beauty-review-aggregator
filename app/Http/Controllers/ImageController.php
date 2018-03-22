<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ProductIsInShop;

class ImageController extends Controller
{
    //this method will render the product image corresponding with the skuId
    public function show($product_slug) {
        //$product_slug is the variable of the url
        //get  the product slug from the scraped_products table
       $product = ProductIsInShop::where('slug', $product_slug)->first();
       //link the image from image folder to the product slug
       $path = storage_path('scraper_image/'.'www.sephora.com--productimages-sku-s'.$product->skuId.'-main-Lhero.jpg');
       // return the image that corresponds to the skuId
       return response()->file($path);
    }
}
