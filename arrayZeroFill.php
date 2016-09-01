<?php
   function arrayZeroFill( array &$array, $size ) {
       $array = array_fill(0, $size, 0);
   }
    
    

    $array = array();
        
    arrayZeroFill($array, 10);
    print_r($array);
    
  

?>
