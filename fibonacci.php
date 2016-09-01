<?php
    function fibonacci($n) {
        $first = 0;
        $second = 1;
        $result = 0;
        
        if ( $n == 1 || $n == -1 ) {
            return 1;
        }
        if ( $n == 0 ) {
            return 0;
        }
        if ( $n > 46 || $n < -46 ) {
            return 0;
        }
        if ( $n > 0 ) {
            for ( $i = 2; $i <= $n; $i++ ) {
                $result = $second + $first;
                $first = $second;
                $second = $result;
            }
            return $result;
        }
    
        $n *= -1;
        for ( $i = 2; $i <= $n; $i++ ) {
            $result = $first - $second;
            $first = $second;
            $second = $result;
        }
        return $result;

    }
        
    echo  fibonacci($number) . PHP_EOL;
?>
