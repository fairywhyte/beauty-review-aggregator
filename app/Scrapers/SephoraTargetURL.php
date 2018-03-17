<?php

namespace App\Scrapers;

use App\ProductIsInShop;

class SephoraTargetURL{

    public static function scrape_description()
    {


        $product_urls =\App\ProductIsInShop::get(['id','product_url']);
        //$product_urls =\App\Product::all(['product_url']);//get an array of objects
        //need to loop through every object

        $scraped = 0;
        foreach($product_urls as $product_url)
        {
            $url = $product_url['product_url'];
            $id=$product_url['id'];
            $url_parts = array_filter(array_intersect_key(parse_url($url), array_fill_keys(['host', 'path', 'query'], null)));
            $cache_file = storage_path('scraper_cache/'.str_replace('/', '-', join('-', $url_parts)));

            //if the file doesnt exist yet in the storage folder
            if(!file_exists($cache_file))
            {
                $html = file_get_contents($url); //get the html returned from the following url\
                //create a folder
                if(!file_exists(dirname($cache_file)))
                {
                    mkdir(dirname($cache_file), 0777, true);
                }
                //save the file with the html inside
                file_put_contents($cache_file, $html);
            }
            else
            {
                //if it does exist, then just take it from the local file
                $html = file_get_contents($cache_file);
            }
            $product_desc_and_nr_of_ratings = [];

            $sephora_serums_indiv_doc_page = new \DOMDocument();

            libxml_use_internal_errors(TRUE); //disable libxml errors

            /**
             * get specific product title, product rating, number of ratings
             */

            if(!empty($html))
            { //if any html is actually returned

                $sephora_serums_indiv_doc_page->loadHTML($html);

                libxml_clear_errors(); //remove errors for yucky html

                $sephora_serums_indiv_xpath = new \DOMXPath($sephora_serums_indiv_doc_page);

                //get all the product DESCRIPTIONS
                $sephora_serums_description = $sephora_serums_indiv_xpath->query('//div[@class="css-8tl366"]');

                //get all the product NUMBER OF RATINGS
                $sephora_serums_nr_of_ratings = $sephora_serums_indiv_xpath->query('//button[@class="css-fisw11"]');

                // if no descriptions were found or no ratings were found, skip this one
                if(!$sephora_serums_description || !$sephora_serums_nr_of_ratings
                    || !$sephora_serums_description[0] || !$sephora_serums_nr_of_ratings[0]) continue;

                $product_desc_and_nr_of_ratings[] = [
                    $id,
                    $sephora_serums_description[0]->nodeValue,
                    $sephora_serums_nr_of_ratings[0]->nodeValue,
                ];

                // save the item to db


            }

            $product = ProductIsInShop::find($product_desc_and_nr_of_ratings[0][0]);

            if($product != null){
                $product->description = $product_desc_and_nr_of_ratings[0][1];

                $product->num_of_ratings = intval(str_replace(" ratings", "", $product_desc_and_nr_of_ratings[0][2]));
                $product->save();
            }

            echo '<pre>';
            print_r($product_desc_and_nr_of_ratings);
            echo '</pre>';

            //if(++$scraped > 200) break;
            //break;//for testing purpose only
        }//for loop


    }//public function

}//class

