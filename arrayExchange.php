<?php
   function arrayExchange( array &$array, $len ) {
       for ( $count = 1; $count < $len; $count += 2 ) {
		   $temp = $array[$count];
		   $array[$count] = $array[$count-1];
		   $array[$count-1] = $temp;
	   }

   }
    
    

    $array = range(1, 20);
        
    echo arrayMin($array, count($array)) . PHP_EOL;
    print_r($array);

    
  

?>
