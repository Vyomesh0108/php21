<?php

    // mkdir("GTU");   // Make directory.
    // rmdir("GTU");   // Remove directory.

    // unlink("myfirst.php")   // Remove file.
    // copy("first.php","myfirst.php")     // Copy file to another file.
    // rename("myfirst.php", "xyz.php")    // Rename file name.

    /* Mode
    r = Read
    w = Write
    a = Append 

    $fp = fopen("first.php","r") or die("File does not exist");

    echo "<br> file exists";

    while(!feof($fp))
    {
        $ch = fgetc($fp);
        echo $ch;
    }
    fclose($fp);    */

    $fp = fopen("first.php",'r');
    $fq = fopen("second.php",'w');

    while(!feof($fp))
    {
        // $ch = fgetc($fp);
        // $fputc($fq, $ch);    <- Error

        $line = fgets($fp);
        fputs($fq, $line);
    }

    fclose($fp);
    fclose($fq);

    echo "<br> File copied .... ";  
?>