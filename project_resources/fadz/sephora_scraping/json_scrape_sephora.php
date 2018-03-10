<?php
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
$product_attributes=[];
$html = file_get_contents('https://www.sephora.com/api/catalog/categories/cat60103/products?currentPage=2&pageSize=300&content=true&includeRegionsMap=true');
$data = json_decode($html, true);
    foreach($data['products'] as $product)
    {
        $product_brand_name = $product['brandName'];
        $product_title = $product['displayName'];
        $product_rating = $product['rating'];
        $product_SKU=$product['currentSku'];
        $product_price = $product_SKU['listPrice'];
        $product_target_url= $product['targetUrl'];
        $product_image_url_img135= $product['image135'];
        $product_image_url_img250= $product['image250'];
        $product_image_url_img450= $product['image450'];
        $scraped_at_date = date("Y/m/d");

        $product_attributes[] =[
        $product_brand_name,
        $product_title,
        $product_rating,
        $product_price,
        'https://www.sephora.com'.$product_target_url,
        'https://www.sephora.com'.$product_image_url_img135,
        'https://www.sephora.com'.$product_image_url_img250,
        'https://www.sephora.com'.$product_image_url_img450,
        $scraped_at_date
        ];
    }
convert_to_csv($product_attributes, 'sephora_face_serum_product_attributes_301-405.csv', ',');
