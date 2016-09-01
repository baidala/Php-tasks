<?php
    $input = fgets(STDIN);
    list($a, $b) = sscanf($input, "%d %d");

    if ( $a > $b && $b > 0 ) {
        echo "alpha" . PHP_EOL;
    } elseif ( $a < 0 && $b == 0 ) {
        echo "bravo" . PHP_EOL;
    } elseif ( $a == 0 || $b == 0 ) {
        echo "charlie" . PHP_EOL;
    } else {
        echo "zulu" . PHP_EOL;
    } 
   
      
?>
