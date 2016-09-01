<?php
   function arrayScan( &$in, array &$array, $limit ) {
       $input = fgets($in);
       $array = explode(" ", $input, $limit+1);
       $temp = array_pop($array);
       
       return count($array);
    }
?>
