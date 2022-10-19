<?php

    echo strlen("Hello Php!");      // Returns the lenght of string.
    echo "<br>";

    echo str_word_count("Hello Php!");      // Counts the number of words in a string.
    echo "<br>";

    echo strrev("Hello Php");       // Reverse the string.
    echo "<br>";

    echo strpos("Hello Vyomesh", "Vyomesh");    // Returns the position of the word we search.
    echo "<br>";

    echo str_replace("World", "Vyomesh", "Hello World!");   // Replace some characters with some other characters in a string.
    echo "<br>";

    echo(pi());     // Returns the value of Pie
    echo "<br>";

    echo(min(0, 50, -6, -1, 90, 100));      // Finds the lowest value in a list.
    echo "<br>";

    echo(max(0, 50, -6, -1, 90, 100));      // Finds the highest value in a list.
    echo "<br>";

    echo(abs(-6.7));    // Returns the absolute (positive) value of numbers.
    echo "<br>";

    echo(sqrt(64));     // Returns the square root of a numbers.
    echo "<br>";

    echo(round(0.60));  // Rounds a floating-point number to its nearest integer.
    echo "<br>";
    echo(round(0.49));
    echo "<br>";

    echo(rand());       // Generates a random numbers.
    echo "<br>";
    echo(rand(10, 100));    // Generates a random numbers between 10-100.
    echo "<br>";

    echo strtolower("Hello");   // Convert string to lowercase.
    echo "<br>";
    
    echo strtoupper("hello");   // Convert string to uppercase.
    echo "<br>";

    $d = strtotime("02:00 am January 18 2000");
    echo "<br> Created date is : ".date("Y-m-d h:i:s a", $d);
    
    date_default_timezone_set("Asia/Kolkata");
    echo "<br> Time = ".date("h:i:s");      // Display time in 12-hours system.
    echo "<br> Time = ".date("H:i:s a");    // Display time in 24-hours system.
    echo "<br> Today is : ".date("l");      // Display the name of the day.

?>