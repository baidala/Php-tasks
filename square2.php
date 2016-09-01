<?php
    $input = fgets(STDIN);
    list($size) = sscanf($input, "%d");
    
    for ( $row = 1, $start = $row, $end = $size; $row <= $size; $row++, $end = $row * $size) {
        echo implode(' ', range($start, $end)) . PHP_EOL;
        $start = $end + 1;
        
    }
?>
