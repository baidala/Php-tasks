<?php
    $input = fgets(STDIN);
    list($a) = sscanf($input, "%d");

    if ( $a % 2 == 0 ) {
        echo "alpha" . PHP_EOL;
    }
    if ( $a % 3 == 0 ) {
        echo "bravo" . PHP_EOL;
    }
    if ( $a % 5 == 0 ) {
        echo "charlien" . PHP_EOL;
    } elseif ( $a % 3 != 0 && $a % 5 != 0 && $a % 2 != 0 ) {
        echo "zulu" . PHP_EOL;
    } 
?>
