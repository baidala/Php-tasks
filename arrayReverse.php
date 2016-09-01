<?php
   function arrayReverse( array &$array, $size) {
    for ( $count = 0, $revers = $size - 1; $count < $revers; $count++, $revers-- ) {
        $temp = $array[$count];
        
        $array[$count] = $array[$revers];
        $array[$revers] = $temp;
    }
}

    
    

    $array = range(1, 20);
        
    echo arrayReverse($array, count($array)) . PHP_EOL;
    print_r($array);

    
  

?>
