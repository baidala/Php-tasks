<?php
    $input = fgets(STDIN);
    list($size) = sscanf($input, "%d");
    
    $count = $size * $size;
    $step = $size - 1;
    
    for ( $row = 1; $row <= $size; $row++ ) {
        $start = $count - $step;
        $end = $count;
        echo implode(' ', range($start, $end)) . PHP_EOL;
        $count -= $size;
        
    }
?>
