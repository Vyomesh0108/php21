<html>
    <head>

    </head>
    <body>

        <?php

            echo "<br> Welcome to the world of php";
            print "<br> We are in Vadodara, Gujarat";

            // This is comment
            /*

            It 
            is multi-line
            comment
            */

            # This is also a comment

            $a = 10;
            $b = "Vyomesh";
            $c = 5.6;
            $d = True;

            echo "<br> No = ".$a." === ".gettype($a);
            echo "<br> Name = $b"." = ".gettype($b);
            echo "<br> Height = $c"." = ".gettype($c);
            echo "<br> Bool = $d"." = ".gettype($d);

            echo "<br><br> Date = ".date("d, D / m, M / y");

            date_default_timezone_set("Asia/Kolkata");
            echo "<br><br> Time = ".date("h : i : s");

            $w = "<script> document.write(window.innerWidth); </script>";
            $h = "<script> document.write(window.innerHeight); </script>";
        
            echo "<br> Width = $w";
            echo "<br> Height = $h";

            $a = 5;
            $b = 5.0;

            // Checks value only
            if($a == $b)
            {
                echo "<br> Both are Same";
            }
            else
            {
                echo "<br> Both are not Same";
            }

            // Checks values as well as type
            if($a === $b)
            {
                echo "<br> Both are Same";
            }
            else
            {
                echo "<br> Both are not Same";
            }

            $a = array(10, 20, 30, 40, 50);
            $s = 0;
            echo "<br>";

            for($i=0; $i<count($a); $i++)
            {
                echo " ".$a[$i];
                $s = $s + $a[$i];
            }

            echo "<br> Sum = $s";

            echo "<br><br>";
            $s = 0;

            foreach($a as $val)
            {
                echo "  $val";
                $s = $s + $val;
            }

            echo "<br> Sum = $s";

        ?>

    </body>
</html><!-- Write a program to enter email & password & check user is authorized or not using single php file? -->
<!-- 3 Files :- 1) Login.php  2) Success.php  3) Error.php -->

<html>
    <head>

    </head>
    <body>

        <?php

        echo "<br> UnAuthorised User ....";

        ?>

    </body>
</html>