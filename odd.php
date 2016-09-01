<?php
    $input = fgets(STDIN);
    list($number) = sscanf($input, "%d");
    
    if ( $number % 2 == 0 ) {
        $number -= 1;
    }
    
    for ( $i = 1; $i <= $number; $i += 2 ) {
        $array[] = $i;
    }
    
    echo implode(' ', $array) . PHP_EOL;
   
      
?>
