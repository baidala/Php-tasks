<?php
   function arraySearch( array &$array, $size, $needle ) {
       $key = array_search($needle, $array);
       if ( $key == FALSE ) {
              return -1;
       } 
       return $key;
   }
    
    

    $array = range(1, 20);
        
    echo arraySearch($array, count($array), 5) . PHP_EOL;
    

    
  

?>
