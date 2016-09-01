<?php
    $input = fgets(STDIN);
    list($border, $divisor) = sscanf($input, "%d %d");
    
    if ( $divisor < 0 ) {
        $divisor = $divisor * (-1);
    }
    
    $count = ($border / $divisor) * $divisor;
    
    for ( $i = 0; $i <= $count; $i += $divisor ) {
        $array[] = $i;
    }
    
    echo implode(' ', $array) . PHP_EOL;
   
      
?>
