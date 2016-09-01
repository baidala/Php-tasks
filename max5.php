<?php
    $input = fgets(STDIN);
    list($max, $a, $b, $c, $d) = sscanf($input, "%d %d %d %d %d");
    
    if ( $a > $max ) {
        $max = $a ;
    } 
    if ( $b > $max ) {
        $max = $b ;
    } 
    if ( $c > $max ) {
        $max = $c ;
    }
    if ( $d > $max ) {
        $max = $d ;
    }
    echo $max . PHP_EOL; 
?>
