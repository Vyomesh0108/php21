<!-- Write a program to enter email & password & check user is authorized or not using single php file? -->
<!-- 3 Files :- 1) login.php  2) success.php  3) error.php -->

<html>
    <head>

    </head>
    <body>

        <?php 

            if(isset($_REQUEST['sub']))
            {
                $a = $_REQUEST['tus'];
                $b = $_REQUEST['tpa'];

                if($a=='abc@gmail.com' && $b=='abc123')
                {
                    header("location: success.php");
                }
                else
                {
                    header("location: error.php");
                }
            }
            else
            {

        ?>

        <form name="f1" action="login.php">

            Enter Email : <input type="text" name="tus"><br>
            Enter Password : <input type="password" name="tpa"><br><br>

            <input type="submit" name="sub" value="Login">

        </form>

        <?php

            }

        ?>    

    </body>
</html>