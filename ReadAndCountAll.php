<!-- Write a program to count uppercase, lowercase, space, digits, words & special characters in given file? -->
<!-- Read character by character -->

<?php

    $fp = fopen("first.php","r") or die("File does not exist");

    echo "<br> File exists";

    $up = 0;
    $lw = 0;
    $di = 0;
    $s = 0;
    $sp = 0;
    $w = 0;

    while(!feof($fp))
    {
        $ch = fgetc($fp);
        echo $ch;

        if($ch >= 'A' && $ch <= 'Z')
        {
            $up++;
        }
        else if($ch >= 'a' && $ch <= 'z')
        {
            $lw++;
        }
        else if($ch >= '0' && $ch <= '9')
        {
            $di++;
        }
        else if($ch == '')
        {
            $s++;
        }
        else
        {
            $sp++;
        }
        $w = $s + 1;
    }

    echo "<br><br> Uppercase : $up";
    echo "<br><br> Lowercase : $lw";
    echo "<br><br> Digit : $di";
    echo "<br><br> Space : $up";
    echo "<br><br> Special Character : $sp";
    echo "<br><br> Words : $w";

    fclose($fp);
?>