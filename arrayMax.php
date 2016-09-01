<?php
   function arrayMax( array &$array, $size ) {
      $max = $array[0];
    
      for ( $count = $size - 1; $count > 0; $count-- ) {
        if ( $array[$count] > $max ) {
            $max = $array[$count];
        }
    }
    return $max;

   }
    
    

    $array = range(1, 20);
        
    echo arrayMax($array, count($array)) . PHP_EOL;
    print_r($array);

    
  

?>
