<?php
    function cache_file ($url)
    {
            // define the path and name of cached file (prepare string that represents future file name )
            //$cachefile = dirname(__FILE__) . '/cache/'.md5($url).'.php';
            $cachefile = dirname(__FILE__) . '/cache/'.strtr($url, ':/?&=','_____').'.html';

        // if the file doesn't exist,
        if (!file_exists($cachefile)) {
            // download the file from the URL
            $source=file_get_contents($url);
            // save it into the cachefile for future use
            file_put_contents($cachefile, $source);

        } else { // if cachefile is present
            //source will become the contents of the cachefile
            $source=file_get_contents($cachefile) ;
        }
        return $source;
    }
    function cache_image($url)
    {
            // define the path and name of cached file (prepare string that represents future file name )
            //$cachefile = dirname(__FILE__) . '/cache/'.md5($url).'.php';
        $cachefile = dirname(__FILE__) . '/cache/'.strtr($url, ':/?&=','_____');

        // if the file doesn't exist,
        if (!file_exists($cachefile)) {
            // download the file from the URL
            $source=file_get_contents($url);
            // save it into the cachefile for future use
            file_put_contents($cachefile, $source);

        } else { // if cachefile is present
            //source will become the contents of the cachefile
        }
        return $cachefile;
    }

    if ($title1 == $title2)




//get records into database
// looping through the pages to get the product title, product brands, product rating, and number of ratings

$products = [];

for($i = 1; $i < 3; $i++){
    $html = cache_file('https://www.influenster.com/reviews/face-serums?page='.$i); //get the html returned from the following url\
    $influenster_serums_doc_page = new DOMDocument();
    libxml_use_internal_errors(TRUE); //disable libxml errors
    /**
     * get specific product title, product rating, number of ratings
     */
    if(!empty($html)){ //if any html is actually returned

        $influenster_serums_doc_page->loadHTML($html);
        libxml_clear_errors(); //remove errors for yucky html

        $influenster_serums_xpath = new DOMXPath($influenster_serums_doc_page);

        //get all the product TITLES
        $product_details = $influenster_serums_xpath->query('//div[@class="category-product-detail"]');
        //foreach through each of products on page
        //$detail holds variable
        foreach($product_details as $detail){
            //$detail at end of following queries mean: look within the context of $detail
            $titles = $influenster_serums_xpath->query('./div[@class="category-product-title"]', $detail);
            $brands = $influenster_serums_xpath->query('./div[@class="category-product-brand"]', $detail);
            $ratings = $influenster_serums_xpath->query('.//div[@class="category-product-rating"]', $detail);
            $prices = $influenster_serums_xpath->query('.//div[@class="category-product-varieties"]', $detail);
            $scraped_at_date = date("Y/m/d");


            $products[] = [
                'product_title' => trim($titles[0]->nodeValue),
                'product_brand_name' => trim($brands[0]->nodeValue),
                'rating' => trim($ratings[0]->nodeValue),
                'price' => trim($prices[0]->nodeValue),
                'scraped_at_date' =>($scraped_at_date)
            ];

        insert insert query here

        }
    }
}

create database connection

echo '<pre>';
print_r($products);
echo '</pre>';


// We're done! Save the cached content to a file
$fp = fopen($cachefile, 'w');
fwrite($fp, ob_get_contents());

fclose($fp);