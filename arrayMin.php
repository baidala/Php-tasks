<?php
   function arrayMin( array &$array, $size ) {
     $min = $array[0];
    
     for ( $count = $size - 1; $count > 0; $count-- ) {
        if ( $array[$count] < $min ) {
            $min = $array[$count];
        }
     }
     return $min;

   }
    
    

    $array = range(1, 20);
        
    echo arrayMin($array, count($array)) . PHP_EOL;
    print_r($array);

    
  

?>
