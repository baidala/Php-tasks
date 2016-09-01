<?php
    $input = fgets(STDIN);
    list($max, $x, $y, $z) = sscanf($input, "%d %d %d %d");
    
    if ( $x > $max ) {
        $max = $x ;
    } 
    if ( $y > $max ) {
        $max = $y ;
    } 
    if ( $z > $max ) {
        $max = $z ;
    }
    echo $max . PHP_EOL; 
?>
