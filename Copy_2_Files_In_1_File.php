<!-- Write a program to copy 2 files & concate to 1 file? -->
<!-- Read line by line -->

<?php

    $f1 = fopen("first.php","r");
    $f2 = fopen("error.php","r");
    $f3 = fopen("concatefile.php","w");

    while(!feof($f1))
    {
        $line = fgets($f1);
        fputs($f3, $line);
    }

    while(!feof($f2))
    {
        $line = fgets($f2);
        fputs($f3, $line);
    }

    fclose($f1);
    fclose($f2);
    fclose($f3);

    echo "<br> File copied....";
?>