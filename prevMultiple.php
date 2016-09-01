<?php
    $input = fgets(STDIN);
    list($number, $divisor) = sscanf($input, "%d %d");
    
    if ( $divisor < 0 ) {
            $divisor *= -1;
    }
    $count = (int)($number / $divisor) * $divisor;
    
    for ( ; $number < $count; $count -= $divisor );

    echo $count . PHP_EOL;
?>
