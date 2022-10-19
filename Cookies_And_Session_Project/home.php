<html>
    <head>

    </head>
    <body>

        <?php

            if(isset($_COOKIE['mydate']) && isset($_COOKIE['amount']))      // If Cookie found then
            {
                echo "<h1 align='center'> Your Last Pizza Purchase Was Of &nbsp;" .$_COOKIE['amount'].  " Rs &nbsp;On &nbsp;" .$_COOKIE['mydate']. "</h1>";
            } 


            if(isset($_REQUEST['sub']))
            {
                $cna = $_REQUEST['cna'];
                $tad = $_REQUEST['tad'];
                $mob = $_REQUEST['mob'];

                session_start();       // It is compulsory to start session before using it.

                $_SESSION['name'] = $cna;
                $_SESSION['add'] = $tad;
                $_SESSION['mob'] = $mob;

                header("location: menu.php");
            }
            else
            {

        ?>

        <form name="f1" name="home.php">

            Name : <input type="text" name="cna"><br>
            Address : <textarea name="tad"></textarea><br>
            Mobile : <input type="text" name="mob"><br><br>

            <input type="submit" name="sub" value="Show Menu">
            <input type="reset" name="res" value="Cancel">

        </form>

        <?php

            }

        ?>


    </body>
</html>