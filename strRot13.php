<?php
   function strRot13( &$str ) {
       for ( $i = 0, $symbol = $str[$i]; isset($str[$i]); $i++ ) {
    	$symbol = $str[$i];
        if ( $symbol > '@' && $symbol < 'N' ) {
            $symbol = chr( ord($symbol)+13 );
            $str[$i] = $symbol;
        } else if ( $symbol > '`' && $symbol < 'n' ) {
            $symbol = chr( ord($symbol)+13 );
            $str[$i] = $symbol;
        } else if ( $symbol > 'M' && $symbol < '[' ) {
            $symbol = chr( ord($symbol)-13 );
            $str[i] = $symbol;
        } else if ( $symbol > 'm' && $symbol < '{' ) {
            $symbol = chr( ord($symbol)-13 );
            $str[$i] = $symbol;
        }
    }

   }
   
    $str = "balk";
    strRot13($str);
    
    echo $str . PHP_EOL ;
?>
