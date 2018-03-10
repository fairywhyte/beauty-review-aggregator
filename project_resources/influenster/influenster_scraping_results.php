public function insert(){
        $fo =  Input::only('title','brand', 'price');
    $b = DB::table('products')->insert($fo);

    var_dump($fo );

    $fo = Array
    (
        0 => Array
            (
                'title' => Kiehl's Midnight Recovery Concentrate
                'brand' => Kiehl's
                'rating' => 4.6 (1091 reviews)
                'price' => 4 varieties from $46.00
                'scraped_at_date' => 2018/02/28
            )

        1 => Array
            (
                'title' => Drunk Elephant T.L.C. Framboos Glycolic Night Serum
                'brand' => Drunk Elephant
                'rating' => 4.5 (1839 reviews)
                'price' => 2 varieties from $90.00
                'scraped_at_date' => 2018/02/28
            )

        2 => Array
            (
                'title' => The Ordinary "Buffet"
                'brand' => The Ordinary
                'rating' => 4.6 (307 reviews)
                'price' =>
                'scraped_at_date' => 2018/02/28
            )

        3 => Array
            (
                'title' => Ole Henriksen Truth Serum
                'brand' => Ole Henriksen
                'rating' => 4.4 (4938 reviews)
                'price' => 8 varieties from $48.00
                'scraped_at_date' => 2018/02/28
            )

        4 => Array
            (
                'title' => Caudalie Vinosource S.O.S Thirst Quenching Serum 1 oz
                'brand' => Caudalie
                'rating' => 4.5 (928 reviews)
                'price' => 2 varieties from $49.00
                'scraped_at_date' => 2018/02/28
            )

        5 => Array
            (
                'title' => Sunday Riley Good Genes Treatment
                'brand' => Sunday Riley
                'rating' => 4.5 (3612 reviews)
                'price' => 2 varieties from $105.00
                'scraped_at_date' => 2018/02/28
            )

        6 => Array
            (
                'title' => COSRX Advanced Snail 96 Mucin Power Essence
                'brand' => COSRX
                'rating' => 4.7 (288 reviews)
                'price' => 2 varieties from $20.90
                'scraped_at_date' => 2018/02/28
            )

        7 => Array
            (
                'title' => FARSÃLI Unicorn Essence
                'brand' => FARSÃLI
                'rating' => 4.5 (641 reviews)
                'price' => 2 varieties from $20.00
                'scraped_at_date' => 2018/02/28
            )

        8 => Array
            (
                'title' => Drunk Elephant T.L.C. Framboos Glycolic Night Serum
                'brand' => Drunk Elephant
                'rating' => 4.4 (416 reviews)
                'price' => From $134.00
                'scraped_at_date' => 2018/02/28
            )

        9 => Array
            (
                'title' => EstÃ©e Lauder Advanced Night Repair Synchronized Recovery Complex II Duo
                'brand' => EstÃ©e Lauder
                'rating' => 4.5 (878 reviews)
                'price' =>
                'scraped_at_date' => 2018/02/28
            )

        10 => Array
            (
                'title' => Drunk Elephant C-Firma Day Serum
                'brand' => Drunk Elephant
                'rating' => 4.3 (1177 reviews)
                'price' => 2 varieties from $80.00
                'scraped_at_date' => 2018/02/28
            )

        11 => Array
            (
                'title' => The Ordinary Advanced Retinoid 2% Serum
                'brand' => The Ordinary
                'rating' => 4.6 (270 reviews)
                'price' =>
                'scraped_at_date' => 2018/02/28
            )

        12 => Array
            (
                'title' => Clinique Repairwear Laser Focus Wrinkle & UV Damage Corrector
                'brand' => Clinique
                'rating' => 4.3 (859 reviews)
                'price' =>
                'scraped_at_date' => 2018/02/28
            )

        13 => Array
            (
                'title' => REN Perfect Canvas Skin Finishing Serum
                'brand' => REN
                'rating' => 4.4 (254 reviews)
                'price' => From $55.00
                'scraped_at_date' => 2018/02/28
            )

        14 => Array
            (
                'title' => Caudalie Vinoperfect Complexion Correcting Radiance Serum
                'brand' => Caudalie
                'rating' => 4.3 (1035 reviews)
                'price' => From $79.00
                'scraped_at_date' => 2018/02/28
            )

        15 => Array
            (
                'title' => LANEIGE Water Bank Serum
                'brand' => Laneige
                'rating' => 4.5 (1036 reviews)
                'price' =>
                'scraped_at_date' => 2018/02/28
            )

        16 => Array
            (
                'title' => SUNDAY RILEY C.E.O. Rapid Flash Brightening Serum
                'brand' => Sunday Riley
                'rating' => 4.4 (781 reviews)
                'price' => From $85.00
                'scraped_at_date' => 2018/02/28
            )

        17 => Array
            (
                'title' => Caudalie Vinoperfect Radiance Serum 1 oz
                'brand' => Caudalie
                'rating' => 4.3 (1989 reviews)
                'price' =>
                'scraped_at_date' => 2018/02/28
            )

    )



    }
























$foo = array
(
    0 => array
(
'lang' => 'en',
'title' => 'good like' ),

1 => array
(
'lang' => 'fr',
'title' => 'good like2'
) )


$fo = Array
(
    0 => Array
        (
            'title' => Kiehl's Midnight Recovery Concentrate
            'brand' => Kiehl's
            'rating' => 4.6 (1091 reviews)
            'price' => 4 varieties from $46.00
            'scraped_at_date' => 2018/02/28
        )

    1 => Array
        (
            'title' => Drunk Elephant T.L.C. Framboos Glycolic Night Serum
            'brand' => Drunk Elephant
            'rating' => 4.5 (1839 reviews)
            'price' => 2 varieties from $90.00
            'scraped_at_date' => 2018/02/28
        )

    2 => Array
        (
            'title' => The Ordinary "Buffet"
            'brand' => The Ordinary
            'rating' => 4.6 (307 reviews)
            'price' =>
            'scraped_at_date' => 2018/02/28
        )

    3 => Array
        (
            'title' => Ole Henriksen Truth Serum
            'brand' => Ole Henriksen
            'rating' => 4.4 (4938 reviews)
            'price' => 8 varieties from $48.00
            'scraped_at_date' => 2018/02/28
        )

    4 => Array
        (
            'title' => Caudalie Vinosource S.O.S Thirst Quenching Serum 1 oz
            'brand' => Caudalie
            'rating' => 4.5 (928 reviews)
            'price' => 2 varieties from $49.00
            'scraped_at_date' => 2018/02/28
        )

    5 => Array
        (
            'title' => Sunday Riley Good Genes Treatment
            'brand' => Sunday Riley
            'rating' => 4.5 (3612 reviews)
            'price' => 2 varieties from $105.00
            'scraped_at_date' => 2018/02/28
        )

    6 => Array
        (
            'title' => COSRX Advanced Snail 96 Mucin Power Essence
            'brand' => COSRX
            'rating' => 4.7 (288 reviews)
            'price' => 2 varieties from $20.90
            'scraped_at_date' => 2018/02/28
        )

    7 => Array
        (
            'title' => FARSÃLI Unicorn Essence
            'brand' => FARSÃLI
            'rating' => 4.5 (641 reviews)
            'price' => 2 varieties from $20.00
            'scraped_at_date' => 2018/02/28
        )

    8 => Array
        (
            'title' => Drunk Elephant T.L.C. Framboos Glycolic Night Serum
            'brand' => Drunk Elephant
            'rating' => 4.4 (416 reviews)
            'price' => From $134.00
            'scraped_at_date' => 2018/02/28
        )

    9 => Array
        (
            'title' => EstÃ©e Lauder Advanced Night Repair Synchronized Recovery Complex II Duo
            'brand' => EstÃ©e Lauder
            'rating' => 4.5 (878 reviews)
            'price' =>
            'scraped_at_date' => 2018/02/28
        )

    10 => Array
        (
            'title' => Drunk Elephant C-Firma Day Serum
            'brand' => Drunk Elephant
            'rating' => 4.3 (1177 reviews)
            'price' => 2 varieties from $80.00
            'scraped_at_date' => 2018/02/28
        )

    11 => Array
        (
            'title' => The Ordinary Advanced Retinoid 2% Serum
            'brand' => The Ordinary
            'rating' => 4.6 (270 reviews)
            'price' =>
            'scraped_at_date' => 2018/02/28
        )

    12 => Array
        (
            'title' => Clinique Repairwear Laser Focus Wrinkle & UV Damage Corrector
            'brand' => Clinique
            'rating' => 4.3 (859 reviews)
            'price' =>
            'scraped_at_date' => 2018/02/28
        )

    13 => Array
        (
            'title' => REN Perfect Canvas Skin Finishing Serum
            'brand' => REN
            'rating' => 4.4 (254 reviews)
            'price' => From $55.00
            'scraped_at_date' => 2018/02/28
        )

    14 => Array
        (
            'title' => Caudalie Vinoperfect Complexion Correcting Radiance Serum
            'brand' => Caudalie
            'rating' => 4.3 (1035 reviews)
            'price' => From $79.00
            'scraped_at_date' => 2018/02/28
        )

    15 => Array
        (
            'title' => LANEIGE Water Bank Serum
            'brand' => Laneige
            'rating' => 4.5 (1036 reviews)
            'price' =>
            'scraped_at_date' => 2018/02/28
        )

    16 => Array
        (
            'title' => SUNDAY RILEY C.E.O. Rapid Flash Brightening Serum
            'brand' => Sunday Riley
            'rating' => 4.4 (781 reviews)
            'price' => From $85.00
            'scraped_at_date' => 2018/02/28
        )

    17 => Array
        (
            'title' => Caudalie Vinoperfect Radiance Serum 1 oz
            'brand' => Caudalie
            'rating' => 4.3 (1989 reviews)
            'price' =>
            'scraped_at_date' => 2018/02/28
        )

)