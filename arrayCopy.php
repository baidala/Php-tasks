<?php
   function arrayCopy( array &$destination, array &$source, $size ) {
       for ( $i = 0; $i < $size; $i++ ) {
         $destination[$i] = $source[$i];
       }
   }
    
    

    $arrayTarg = array();
    $arraySource = range(1, 20);
        
    arrayCopy($arrayTarg, $arraySource, 10);
    print_r($arraySource);
    print_r($arrayTarg);
    
  

?>
