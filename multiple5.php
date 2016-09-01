<?php
    $input = fgets(STDIN);
    list($number) = sscanf($input, "%d");
    
    $count = ($number / 5) * 5;
    
    for ( $i = 0; $i <= $count; $i += 5 ) {
        $array[] = $i;
    }
    
    echo implode(' ', $array) . PHP_EOL;
   
      
?>
