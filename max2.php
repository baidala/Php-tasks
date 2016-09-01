<?php
    $input = fgets(STDIN);
    list($x, $y) = sscanf($input, "%d %d");
    
    if ( $x > $y ) {
        echo $x. PHP_EOL ;
    } else {
        echo $y . PHP_EOL;
    } 
?>
