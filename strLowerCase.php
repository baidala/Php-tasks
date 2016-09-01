<?php
   function strLowerCase( &$str ) {
       for ( $i = 0, $lower = $str[$i]; isset($str[$i]); $i++ ) {
           $lower = $str[$i];
           if ( $lower > '@' && $lower < '[' ) {
               $lower = chr( ord($lower)+ 32 );
               $str[$i] = $lower;
           }
       }
   }
   
   
    $str = "BaLk";
    strLowerCase($str);
    
    echo $str . PHP_EOL ;
?>
