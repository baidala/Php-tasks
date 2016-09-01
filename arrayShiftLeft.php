<?php
   function arrayShiftLeft(array &$array, $size) {
      $temp = $array[0];
    
      for ( $count = 1; $count < $size; $count++ ) {
          $array[$count-1] = $array[$count];
      }
      $array[$size-1] = $temp;
   }

    $array = range(1, 20);
        
    echo arrayShiftLeft($array, count($array)) . PHP_EOL;
    print_r($array);

    
  

?>
