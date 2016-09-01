<?php
   function arrayScan( &$in, array &$array, $limit ) {
       $input = fgets($in);
       $array = explode(" ", $input, $limit+1);
       $temp = array_pop($array);
       
       return count($array);
    }

    function arrayPrint( &$out, array &$array, $size ) {
       $result = array(); 
       for ( $i = 0; $i < $size; $i++ ) {
           $result[$i] = $array[$i];
       }
       fwrite($out, implode(' ', $result) . PHP_EOL);
    }


    
    $in = fopen("task.in", "r");
    $out = fopen("task.out", "w");

    $array = array();
        
    echo arrayScan( $in, $array, 8 ) . PHP_EOL;
    print_r($array);
    arrayPrint($out, $array, 8);
    
    fclose($in);
    fclose($out);
    
?>
