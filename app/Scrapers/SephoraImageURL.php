<?php
namespace App\Scrapers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\ProductIsInShop;

class SephoraImageURL{

    public static function json_scrape_image(){
    //connect to the database and grab the image450 from the scraped_products table
    $sephora_image_urls = \App\ProductIsInShop::get(['skuId','image450']);
    //for every image url for image450,grab each image
    $scraped=0;
        foreach($sephora_image_urls as $sephora_image_url)
        {
            $skuId = $sephora_image_url['skuId'];//getting the skuid from db
            $url = $sephora_image_url['image450'];//getting the image450 url from db
            //define the parts of the storage path consisting of host+path +query, if you don't define this you will get separate folders for the host, for the path and for the query
            // $url_parts = array_filter(array_intersect_key(parse_url($url), array_fill_keys(['host', 'path', 'query'], null)));
            //then you put the image into the cache file where you define the storage_path

            // $cache_file = storage_path('scraper_image/'.str_replace('/', '-', join('-', $url_parts)));
            $cache_file = storage_path('scraper_image/'.$skuId.'.jpg');
            //call the function save image passing 2 parameters, 1st the  imageurl ,second the folder to store images
            static::save_image($sephora_image_url['image450'],$cache_file);
        }

    }//closing for function json_scrape_image

        public static function save_image($inPath,$outPath)
        {
            //start the saving images here
            //the inPath is the imageUrl frm the image450 column in the scraped products table
            //the outPath here is referring to the cachefile which is the storage_path to save images
            $in=    fopen($inPath, "rb");
            $out=   fopen($outPath, "wb");
            while ($chunk = fread($in,8192))
            {
                fwrite($out, $chunk, 8192);
            }
            fclose($in);
            fclose($out);
        }

}//closing tag for the class


