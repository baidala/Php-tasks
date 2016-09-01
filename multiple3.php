<?php
    $input = fgets(STDIN);
    list($number) = sscanf($input, "%d");
    
    $count = ($number / 3) * 3;
    
    for ( $i = 0; $i <= $count; $i += 3 ) {
        $array[] = $i;
    }
    
    echo implode(' ', $array) . PHP_EOL;
   
      
?>
