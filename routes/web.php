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

Route::get('/result', 'MainController@result');
Route::get('/search', 'SearchController@index');

Route::get('/store', 'ProductController@store');
Route::get('/scrape_description', 'ProductController@scrape_description');
Route::get('/load_influenster', 'ServiceController@load_influenster');
Route::get('/json_scrape_sephora', 'ProductController@json_scrape_sephora');
Route::get('/scrape_image_sephora', 'ProductController@json_scrape_image');
Route::get('/scrape_reviews_sephora', 'ProductController@scrape_review');
Route::get('/matching', 'ProductController@matching');
Route::get('/get_five_stars', 'ProductController@get_five_stars');
Route::get('/get_image/{product_slug}', 'ImageController@show');

/* Home Page Queries Controllers */
Route::get('/get_five_star_rated_80_percent_products', 'TopChartController@get_five_star_rated_80_percent_products');
Route::get('/get_most_recommended', 'TopChartController@get_most_recommended');
Route::get('/get_highest_average_rating', 'TopChartController@get_highest_average_rating');