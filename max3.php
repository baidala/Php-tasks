<?php
    $input = fgets(STDIN);
    list($max, $y, $z) = sscanf($input, "%d %d %d");
    
    if ( $y > $max ) {
        $max = $y ;
    } 
    if ( $z > $max ) {
        $max = $z ;
    }
    echo $max . PHP_EOL; 
?>
