<?php
    $fh = fopen('../myfile.php', 'r');

    while (!feof($fh)) {
        echo fgets($fh);
    }
    
    fclose($fh);
    
?>