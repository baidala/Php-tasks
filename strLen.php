<?php
   function stringLen( &$str ) {
       $len=0;
       for ( ; isset($str[$len]); $len++ );
       return $len;
   }
   
   $str = "test string";
    echo stringLen($str) . PHP_EOL ;
?>
