<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'MainController@index');
Route::get('/details/{slug}', 'ProductController@show');

Route::get('/results', 'MainController@result');
Route::get('/search', 'SearchController@index');
Route::get('/home', 'BlockController@fill_blocks');

//1.Scraping Sephora Face Serum
Route::get('/json_scrape_sephora', 'ProductController@json_scrape_sephora');

//2.Store the sephora products into the scraped_products table
Route::get('/store', 'ProductController@store');

//3.scrape the product description and num_of_ratings save into the description and num_of_ratings columns.
Route::get('/scrape_description', 'ProductController@scrape_description');

//4.scrape the reviews and images from sephora individual product page
Route::get('/scrape_reviews_sephora', 'ProductController@scrape_review');
Route::get('/get_five_stars', 'ProductController@get_five_stars');
Route::get('/scrape_image_sephora', 'ProductController@json_scrape_image');

//5.Store influenster products into the table scraped_products
Route::get('/load_influenster', 'ServiceController@load_influenster');

//6.Compare between the sephora and influenster products based on the same slug and push into final table products
Route::get('/matching', 'ProductController@matching');

//7.To be called by detail page to display the individual product detail page
Route::get('/get_image/{product_slug}', 'ImageController@show');

/* Home Page Queries Controllers */
// Block Metrics
Route::get('/get_five_star_rated_80_percent_products', 'TopChartController@get_five_star_rated_80_percent_products');
Route::get('/get_most_recommended', 'TopChartController@get_most_recommended');
Route::get('/get_highest_average_rating', 'TopChartController@get_highest_average_rating');
Route::get('/get_all', 'TopChartController@get_all');

// Block Origin
Route::get('/get_asian_beauty_brands', 'OriginController@get_asian_beauty_brands');
Route::get('/get_american_beauty_brands', 'OriginController@get_american_beauty_brands');
Route::get('/get_french_beauty_brands', 'OriginController@get_french_beauty_brands');

// Block Brands
Route::get('/get_the_ordinary_products', 'BrandController@get_the_ordinary_products');
Route::get('/get_estee_lauder_products', 'BrandController@get_estee_lauder_products');
Route::get('/get_kate_sommerville_products', 'BrandController@get_kate_sommerville_products');