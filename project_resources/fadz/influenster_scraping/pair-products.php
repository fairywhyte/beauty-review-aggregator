<?php

//SAVED CODE THAT MAY OR MAY NOT BE USED LATER ON

//REPLACE THE PRODUCT NAMES WITH SIMPLE NAMES FOR BETTER COMPARING

// function reduce($string)
// {
// $string = preg_replace('~[^\pL0-9]+~u', '-', $string);
// $string = trim($string, "-");
// $string = iconv("utf-8", "us-ascii//TRANSLIT", $string);
// $string = strtolower($string);
// $string = preg_replace('~[^-a-z0-9]+~', '', $string);
// return $string;
// }



// LINES I MIGHT NEED LATER TO SPECIFY WHICH FILES I AM WORKING WITH

//$row_seph = fgetcsv($fh_seph, 0, ',')
//while ($row_infl = fgetcsv($fh_infl, 0, ','))


//COMPARISSON "FUNCTION" THAT MAY OR MAY NOT WORK AND THAT MIGHT GET USED LATER ON

// if (($file3 = fopen("file3.csv", "w")) !== FALSE) {
//     if (($file1 = fopen("file1.csv", "r")) !== FALSE) {
//       while (($file1Row = fgetcsv($file1)) !== FALSE) {
//         if (($file2 = fopen("file2.csv", "r")) !== FALSE) {
//           while (($file2Row = fgetcsv($file2)) !== FALSE) {
//             if ( strtolower(trim($file2Row[0])) == strtolower(trim($file1Row[1])) )
//               fputcsv($file3, $file1Row);
//           }
//           fclose($file2);
//         }
//       }
//       fclose($file1);
//     }
//     fclose($file3);
//   }

// build an array of products from website1
// build an array of products from website2


$source_file_influencer = 'serum51-100.csv';
$source_file_sephora = '../sephora_scraping/sephora_face_serum_product_attributes_1-300.csv';

$fh_infl = fopen($source_file_influencer, 'r');
$fh_seph = fopen($source_file_sephora, 'r');


$sephora_products = [];
while ($row_seph = fgetcsv($fh_seph, 0, ',')){



   $key = seoize($row_seph[1]);
   $sephora_products[$key] = $row_seph;
}



$influencer_products = [];
while ($row_infl = fgetcsv($fh_infl, 0, ',')){



    $key = seoize($row_infl[0]);
    $influencer_products[$key] = $row_infl;
}


foreach($sephora_products as $key => $product)
{

    if (isset($influencer_products[$key]))
    {

    }

}