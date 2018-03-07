<?php
$html = file_get_contents('https://www.sephora.com/api/catalog/categories/cat60103/products?currentPage=1&pageSize=100&content=true&includeRegionsMap=true');
/**
 * json_decode function will take a JSON encoded string and converts it into a PHP variable
 */
$data=[];
$data = json_decode($html, true);

$csvFileName = 'json.csv';
//Open file pointer.
$fp = fopen($csvFileName, 'w');

    foreach($data['products'] as $product)
    {
   // $product_target_url = $product['targetUrl'];
        // $product_brand_name = $product['brandName'];
        // //$product_id_by_sephora = $product['productId'];
        // $product_title = $product['displayName'];
        // $product_rating = $product['rating'];
        // $product_image_url = $product['image450'];
        // $product_SKU = $product['currentSku'];
        //var_dump($product['currentSku']);
        // $product_price = $product_SKU['listPrice'];
        $scraped_at_date = date("Y/m/d");
        echo '<pre>';
        print_r($product);
        echo '</pre>';
    }
    // fclose($fp);

    foreach($data['products'] as $product)
    {
        fputcsv($fp, $product );
    }
    fclose($fp);