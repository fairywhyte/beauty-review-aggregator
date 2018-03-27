<?php
function convert_to_csv($input_array, $output_file_name, $delimiter)
{
    /** open raw memory as file, no need for temp files, be careful not to run out of memory thought */
    $f = fopen('influenster.csv', 'w');
    /** loop through array  */
    foreach ($input_array as $line) {
        /** default php csv handler **/
        fputcsv($f, $line, $delimiter);
    }
    /** rewrind the "file" with the csv lines **/
    fseek($f, 0);
    /** modify header to be downloadable csv file **/
    header('Content-Type: application/csv');
    header('Content-Disposition: attachement; filename="' . $output_file_name . '";');
    /** Send file to browser for download */
    fpassthru($f);
}

$products = [];

    for($i = 1; $i < 438; $i++)
    {
        $html = mb_convert_encoding( file_get_contents('https://www.influenster.com/reviews/face-serums?page='.$i), "HTML-ENTITIES", "UTF-8" ); //get the html returned from the following url\

        $influenster_serums_doc_page = new DOMDocument();
        libxml_use_internal_errors(TRUE); //disable libxml errors
        /**
         * get specific product title, product rating, number of ratings
         */
        if(!empty($html))
        { //if any html is actually returned

            $influenster_serums_doc_page->loadHTML($html);
            libxml_clear_errors(); //remove errors for yucky html
            $influenster_serums_xpath = new DOMXPath($influenster_serums_doc_page);

            //foreach through each of products on page
            //$detail holds variable
            $product_details = $influenster_serums_xpath->query('//div[@class="category-product-detail"]');
            foreach($product_details as $detail)
            {
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
                    'scraped_at_date' =>($scraped_at_date),
                ];

            }
        }
    }
    convert_to_csv($products, 'serum.csv', ',');