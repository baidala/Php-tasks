<?php
   function arrayShiftRight(array &$array, $size) {
      $temp = $array[$size - 1];
      for ( $count = $size - 1; $count > 0; $count-- ) {
         $array[$count] = $array[$count-1];        
      }
      $array[0] = $temp;
   }


    $array = range(1, 20);
        
    echo arrayShiftRight($array, count($array)) . PHP_EOL;
    print_r($array);

    
  

?>
