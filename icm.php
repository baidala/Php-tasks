<?php
   function gcd( $a, $b) {
        if ( $a % $b == 0 ) {
            return $b;
        }
        return gcd($b, $a % $b);
    }

    function icm( $a, $b) {
        return ($a / gcd($a, $b)) * ($b / gcd($a, $b)) * gcd($a, $b);
    }
    
    $in = fopen("task.in", "r");
    $out = fopen("task.out", "w");
    
    $input = fgets($in);
    list($a, $b) = sscanf($input, "%d %d");
    
    fwrite($out, icm($a, $b) . PHP_EOL);
    
    fclose($in);
    fclose($out);
?>
