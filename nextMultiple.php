<?php
    $input = fgets(STDIN);
    list($number, $divisor) = sscanf($input, "%d %d");
    
    $count = (int)($number / $divisor) * $divisor;
    
    if ( $number > $count ) {
        if ( $divisor < 0 ) {
            $divisor *= -1;
        }
        $count += $divisor;
        echo $count . PHP_EOL;
    } else {
        echo $count . PHP_EOL;
    }
?>
