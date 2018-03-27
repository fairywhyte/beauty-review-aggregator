<?php



$starNumber = 4.3;


    for($x=1;$x<=$starNumber;$x++) {
        echo '<img src="../star.png" />';
    }
    if (strpos($starNumber,'.')) {
        echo '<img src="../half-star.png" />';
        $x++;
    }
    while ($x<=5) {
        echo '<img src="../blank-star.png" />';
        $x++;
    }






?>