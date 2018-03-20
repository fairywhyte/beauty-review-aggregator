<?php

namespace App\Scrapers;
use Illuminate\Database\Eloquent\Model;
use App\Reviews;

class SephoraScrapeReviews{

    public static function scrape_review()
    {
        $review_urls = \App\ProductIsInShop::get(['id_in_shop']);

        $scraped = 0;
        foreach($review_urls as $piis)
        {
            $current_prodact_api = 'https://api.bazaarvoice.com/data/reviews.json?Filter=ProductId%3A' . $piis->id_in_shop .
            '&Sort=Helpfulness%3Adesc&Limit=100&Offset=0&Include=Products%2CComments&Stats=Reviews&passkey=rwbw526r2e7spptqd2qzbkp7&apiversion=5.4';
            $html = file_get_contents($current_prodact_api);
            // $data = json_decode($html, true);//decode the string
            $review = new \App\Reviews();
            $review->all_reviews_data = $html;
            $review->id_in_shop = $piis->id_in_shop ;
            $review->save();
       }

    }

    public static function count_ratings()
    {
        $reviews = \App\Reviews::get();
        foreach($reviews as $review)
        {
            dd($reviews);
            $review->review_text=$reviews;
            $review->rating_count_per_star =$reviews;
            $review->save();
        }
    }

}