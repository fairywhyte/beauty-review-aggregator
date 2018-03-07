<?php




if (($handle = fopen ( public_path () . '/MOCK_DATA.csv', 'r' )) !== FALSE) {
        while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {

            //saving to db logic goes here

        }
        fclose ( $handle );
    }