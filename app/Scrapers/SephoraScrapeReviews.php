<?php

namespace App\Scrapers;

class SephoraScrapeReviews{
    public static function convert_to_csv($input_array, $output_file_name, $delimiter)
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

    public static function scrape_review(){
        $review_attributes=[];
        $html = file_get_contents('https://api.bazaarvoice.com/data/reviews.json?Filter=ProductId%3AP309308&Sort=Helpfulness%3Adesc&Limit=50&Offset=0&Include=Products%2CComments&Stats=Reviews&passkey=rwbw526r2e7spptqd2qzbkp7&apiversion=5.4');
        $data = json_decode($html, true);
        foreach($data['Results'] as $result)
        {
            $rating= $result['Rating'];
            $review_text= $result['ReviewText'];
            $review_attributes[] =[
                $rating,
                $review_text
            ];
        }
        static::convert_to_csv($review_attributes, 'reviews-test.csv', ',');
    }

}