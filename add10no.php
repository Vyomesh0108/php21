<!-- Write a php program to enter 10 numbers & print sum? -->

<html>
    <head>

    </head>
    <body>

        <?php

            if(isset($_REQUEST['sub']))
            {
                $s = 0;
                $no = $_REQUEST['t'];

                foreach($no as $val)
                {
                    $s = $s + $val;
                }

                echo "<br> Sum = $s";
            }
            else
            {

        ?>

        <!-- For calling same file using action tag in html or php file -->
        <!-- We have 2 methods -->
        <!-- 1) <form name="f1" action="write same filename" i.e action="first.php"> -->
        <!-- 2) <form name="f1" action="<?php $_SERVER['PHP_SELF']?>" -->

        <form name="f1" action="<?php $_SERVER['PHP_SELF']?>">
    
        <?php

            for($i=1; $i<=10; $i++)
            {
                echo "<br> Enter no $i <input type='text' name='t[]'>";
            }

        ?>
    
        <br><br>

        <input type="submit" name="sub" value="ADD">

        </form>

        <?php

            }

        ?>    

    </body>
</html>