<?php

namespace App\Scrapers;
use Illuminate\Database\Eloquent\Model;
use App\Reviews;

class SephoraScrapeReviews{

    public static function scrape_review()
    {
        $review_urls=\App\Reviews::get(['id_in_shop', 'review_url']);

        $scraped = 0;
        foreach($review_urls as $review_url)
        {
            // grab the review_url and id_in_shop from table reviews
            $url = $review_url['review_url'];
            $id_in_shop = $review_url['id_in_shop'];
            /*
            * Start scraping
            */
            // create empty array for items to grab
            $review_attributes = [];
            $html = file_get_contents($url);
            $data = json_decode($html, true);//decode the string

            // $review = Reviews::where('id_in_shop', $id_in_shop);

            $final_text = '';
            foreach($data['Results'] as $result)
            {
                //create a new row in the database for each review_text
                $review = new Reviews();
                $review->id_in_shop = $id_in_shop;
                $review->review_url = $url;
                $review->review_text = $result['ReviewText'];
                $review->save();

                //$final_text .= $result['ReviewText'] . ";\n";
                //if (!$review) {
                //
                //}

                //$review->id_in_shop = $review_attributes[0][1];


                /**
                 * get specific rating and review_text
                 */
                //$rating= $result['Rating'];
                // $review_text= $result['ReviewText'];
                // $review_attributes[] =[
                    // $id_in_shop,
                    // $review_text
                // ];

            }
        }

dd($review_attributes);

        if($review != null){
           // left hand side is what you output, right hand side is the location inside the output
            $review->id_in_shop = $review_attributes[0][1];
            $review->review_text = $review_attributes[0][2];
            $review->save();
          print_r($review_attributes);





            ///*
            //* To speed up scraping, create cache files
            //*/
            //$url_parts = array_filter(array_intersect_key(parse_url($url), array_fill_keys(['host', 'path', 'query'], null)));
            //$cache_file = storage_path('sephora_reviews_cache/'.str_replace('/', '-', join('-', $url_parts)));
//
//
            ////if the file doesnt exist yet in the storage folder
            //if(!file_exists($cache_file))
            //{
                //$html = file_get_contents($url); //get the html returned from the following url\
                ////create a folder
                //if(!file_exists(dirname($cache_file)))
                //{
                    //mkdir(dirname($cache_file), 0777, true);
                //}
                ////save the file with the html inside
                //file_put_contents($cache_file, $html);
            //}
            //else {
                ////if it does exist, then just take it from the local file
                //$html = file_get_contents($cache_file);
            //}
       }

    }
}