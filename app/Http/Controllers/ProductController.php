<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\ProductIsInShop;
use Illuminate\Http\Request;
use App\Reviews;



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

                $key = str_slug($data[2]);

                $csv_data = new ProductIsInShop ();
                $csv_data->id_in_shop = $data[0];
                $csv_data->brand= $data[1];
                $csv_data->title = $data[2];
                $csv_data->rating = $data[3];
                $csv_data->price = $data[4];
                $csv_data->product_url = $data[5];
                $csv_data->image450 = $data[8];
                $csv_data->scraped_at = $data[9];
                $csv_data->shop_id = $data[10];
                $csv_data->skuId = $data[11];
                $csv_data->slug = $key;

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

    public function scrape_review()
    {
        \App\Scrapers\SephoraScrapeReviews::scrape_review();
    }

    public function count_ratings()
    {
        \App\Scrapers\SephoraScrapeReviews::count_ratings();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //get product for the matchng slug from the product table
        //use first instead of get to the the first row then go look for the column you want
        $product= Product::where('slug', $slug)->first();

        //sending the name of the variable and the value
        return view('details', ['product' => $product]);
    }

    public function get_five_stars(){
        /*
        * This function will go inside the all_reviews_data column from the reviews table, extract the count of 5 star ratings, calculate the total number of ratings, and return the count of 5 star ratings, and the percentage of 5 star ratings of the total number of ratings
        */

        // This foreach loop will make sure that each product from sephora is grabbed from the scraped_products table, and that its all_reviews_data column is then grabbed from the reviews table

        //step 1. Go inside the scraped_products table and select only the products from sephora where shop_id = 1
        $sephora_products = \App\ProductIsInShop::where('shop_id', 1)->get();

        //step 2. For each of these products
        foreach($sephora_products as $product) {
            //grab the id_in_shop that is the common_id between the scraped_products table and the reviews_table
            $id_in_shop = $product->id_in_shop;

        //get the id in shop from the reviews table, and make the connection between the scraped products table via $id
        $review = \App\Reviews::where('id_in_shop', $id_in_shop)->first();

        // once we are inside the reviews table, grab the all_reviews_data column
        $reviews_data = $review->all_reviews_data;

        //output exceptions if there are any
        try {
            $reviews_data = json_decode($reviews_data);

            //grab the actual elements from the json array (the all_reviews_data column)
            $all_ratings = $reviews_data->Includes->Products->{$id_in_shop}->ReviewStatistics->RatingDistribution;

            $starsRating = [];
            $count = 0;

                //for each of the star ratings (1,2,3,4,5) ,loop through them and find the count
                foreach($all_ratings as $rating) {
                    $starsRating[$rating->RatingValue] = $rating->Count;
                    // $count is the total number of reviews
                    $count += $rating->Count;
                }

                //grab the RECOMMENDED COUNT
                 $recommended_count = $reviews_data->Includes->Products->{$id_in_shop}->ReviewStatistics->RecommendedCount;

                //define the recommended count percentage column
                $recommended_count_percentage = $recommended_count / $count;
               //save the recommended count and recommended count percentage variables into the reviews table
                $review->recommended_count = $recommended_count;
                $review->recommended_count_percentage = $recommended_count_percentage;

                if(isset($starsRating[5])){
                    // grab the number of five star ratings
                    $review->five_star_rating_count = $starsRating[5];
                    // if the five star rating exists, calculate the five star percentage
                    // $percentage = number of five stars / the number of reviews
                    $review->five_star_rating_percentage = $starsRating[5]/($count);
                    // $review->five_star_rating_percentage->save();
                }else{
                    $review->five_star_rating_count = 0;
                }
                //$save the entire new row including the 2 new fields into the reviews table
                $review->save();
            } catch (\Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), " at product ",$id_in_shop,"\n";
            }

        }

    }

    public function matching() {
        // select sephora products
        $sephora_products = \App\ProductIsInShop::where('shop_id', 1)->get();

        //iterate through them
        foreach($sephora_products as $sephora_product) {
        //select the products which have the same slug but don't have the sephora shop id
        //select the shopid other than sephora where slug from sephora equals slug from non sephora shop id
        $non_sephora_products = \App\ProductIsInShop::where('shop_id','!=', 1)->where('slug', $sephora_product->slug)->get();

            if(count($non_sephora_products) >= 1){
            //To calculate the average rating of Sephora, first calculate the sum
            //step 1.calculate the number of ratings * the sephora rating
            $sum =  $sephora_product->num_of_ratings * $sephora_product->rating;

            //step 2. select the number of ratings
            $count = $sephora_product->num_of_ratings;

                foreach($non_sephora_products as $non_sephora_product) {
                    $sum += $non_sephora_product->num_of_ratings * $non_sephora_product->rating;
                    $count += $non_sephora_product->num_of_ratings;
                }

                $average = 0;
                if($count > 0){
                    $average = $sum / $count;
                }

                $matched_product = new Product();
                $matched_product->title = $sephora_product->title;
                $matched_product->brand_id = Brand::where('name', $sephora_product->brand)->first()->id;
                $sephora_reviews = Reviews::where('id_in_shop', $sephora_product->id_in_shop)->first();
                $matched_product->five_star_rating_percentage = $sephora_reviews->five_star_rating_percentage;
                $matched_product->recommended_count_percentage = $sephora_reviews->recommended_count_percentage;

                $reviews_data = $sephora_reviews->all_reviews_data;

                $maxFeedback = 0;
                $reviewText = '';

                //output exceptions if there are any
                try {
                    $reviews_data = json_decode($reviews_data);
                    foreach($reviews_data->Results as $review){
                        if($review->TotalPositiveFeedbackCount > $maxFeedback){
                            $maxFeedback = $review->TotalPositiveFeedbackCount;
                            $reviewText = $review->ReviewText;

                        }
                    }

                } catch (\Exception $e) {
                    echo 'Caught exception: ',  $e->getMessage(), " at product ",$id_in_shop,"\n";
                }
                $matched_product->most_helpful_review = $reviewText;
                $matched_product->most_helpful_count = $maxFeedback;
                $matched_product->description = $sephora_product->description;
                $matched_product->slug = $sephora_product->slug;
                $matched_product->price = $sephora_product->price;
                $matched_product->average_rating = $average;
                $matched_product->total_number_of_ratings = $count;
                $matched_product->product_skuId = $sephora_product->skuId;
                $matched_product->save();
            }
        }
    }

    public function show_results() {
        $products = Product::where('brand_id', 29)->get();
        return view('results', ['products' => $products]);
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
