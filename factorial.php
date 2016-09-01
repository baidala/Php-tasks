<?php
    $input = fgets(STDIN);
    list($number) = sscanf($input, "%d");
    
    if ( $number < 0 ) {
        $factor = -1;
    } else {
        $factor = 1;
    }
    for ( $i = 1; $i <= $number; $i++ ) {
            $factor *= $i;
        }
    echo  $factor . PHP_EOL;
?>
