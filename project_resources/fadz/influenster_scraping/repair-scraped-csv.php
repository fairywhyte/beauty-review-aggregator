<?php

//define the file you wish to work with
$source_file = 'influenster.csv';
$target_file = 'influenster-corrected.csv';

//open the file to read it
$fh = fopen($source_file, 'r');

//open the file to write into it
$fh2 = fopen($target_file, 'w');
$all_my_unique_column_values = [];
//fgetcsv — Gets line from file pointer and parse for CSV fields
while ($row = fgetcsv($fh, 0, ',')){
    //var_dump($row);
    //if the row count is less than 5 ignore it
    if(count($row) < 5) continue;

    //select the first 3 characters (0-3) from the column (space included)
    $first_three = substr($row[1], 0, 3);

    //if the first 3 characters = By or by
    if ($first_three == 'By '|| $first_three == 'by '){
        // var_dump($row[1]);
        //then remove it
        $extract_name = substr($row[1], 3);
        var_dump($extract_name);
    } else {
        //do nothing and leave it as is
        $extract_name = $row[1];
    }

    // if the first thing in the string = the above extracted sting (the brand)
    if(substr($row[0], 0, strlen($extract_name)) == $extract_name)
    {
        //remove it and replace it with blank
        $remove_brand = str_replace($extract_name, '', $row[0]);
    }
    else
    {
        //do nothing
        $remove_brand = $row[0];
    }

    //new_row equals the above defined row
    $new_row = $row;
    //trim removes white spaces from the beginning of string
    $new_row[0] = trim($remove_brand);

    //$data = array_flip(array_flip($new_row[0]));

    //create a new file with all the above defined changes
    if (array_search($new_row[0], $all_my_unique_column_values) === false) {
        fputcsv($fh2, $new_row);
        $all_my_unique_column_values[] = $new_row[0];
    }
}

//close the files, (they should close on their own but this is better practice)
fclose($fh);
fclose($fh2);