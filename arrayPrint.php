<?php
   function arrayPrint( &$out, array $array, $size ) {
       $result = array(); 
       for ( $i = 0; $i < $size; $i++ ) {
           $result[$i] = $array[$i];
       }
       fwrite($out, implode(' ', $result) . PHP_EOL);
    }


    
    $in = fopen("task.in", "r");
    $out = fopen("task.out", "w");
    $array = range(1, 20);
    
    arrayPrint( $out, $array, 8 );
    
    fclose($in);
    fclose($out);
?>
