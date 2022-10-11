<!-- Write a php program to add 2 numbers? -->

<html>
    <head>

    </head>
    <body>

        <!-- $_GET        It can receive only get requests <br> -->
        <!-- $_POST       It can receive only post requests <br> -->

        <!-- $_REQUEST    It can receive both get & post requests <br> -->

        <?php

            $a = $_REQUEST['n1'];
            $b = $_REQUEST['n2'];

            $c = $a + $b;

            echo "<br><br> Addition = $c";

        ?>

    </body>    
</html>