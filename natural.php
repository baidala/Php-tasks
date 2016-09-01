<?php
    $input = fgets(STDIN);
    list($max) = sscanf($input, "%d");

    echo implode(' ', range(1, $max)) . PHP_EOL;
   
      
?>
