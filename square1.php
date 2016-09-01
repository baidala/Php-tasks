<?php
    $input = fgets(STDIN);
    list($count) = sscanf($input, "%d");
    
    for ( $row = 1; $row <= $count; $row++ ) {
        echo implode(' ', range(1, $count)) . PHP_EOL;
    }
?>
