<?php



/**
 * The sephora URL was taken from accessing https://www.sephora.com/shop/face-serum:
 * Then going to dev tools > network tab > XHR > refresh the page > check Name column for files loading > find this file: https://www.sephora.com/api/catalog/categories/cat60103/products?currentPage=1&pageSize=60&content=true&includeRegionsMap=true and open in new tab. Then adjust 'pageSize=' to 405, and all the serum category's products are loaded
 */

 /**
  * Grabs the JSON file from https://www.sephora.com/shop/face-serum
  * @$html will load a string
  */


function convert_to_csv($input_array, $output_file_name, $delimiter)
{
    /** open raw memory as file, no need for temp files, be careful not to run out of memory thought */
    $f = fopen('php://memory', 'w');
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

$product_target_urls_sephora = [];
$html = file_get_contents('https://www.sephora.com/api/catalog/categories/cat60103/products?currentPage=1&pageSize=300&content=true&includeRegionsMap=true');
//var_dump($html);

/**
 * json_decode function will take a JSON encoded string and converts it into a PHP variable
 */
$data = json_decode($html, true);
//var_dump($data);

foreach($data['products'] as $product) {

    $product_target_url = $product['targetUrl'];

    $product_target_urls_sephora[] = [
        $product_target_url
    ];



}

convert_to_csv($product_target_urls_sephora, 'product_target_urls_sephora_0_300.csv', ',');
//print_r($product_target_urls_sephora);


