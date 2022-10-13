<!-- menudb.php, show.php, insert.php, update.php, delete.php -->

<html>
    <head>
        
    </head>
    <body>

        <?php

            if(isset($_REQUEST['sub']))
            {
                $id = $_REQUEST['tid'];
                $na = $_REQUEST['tna'];
                $ag = $_REQUEST['tag'];

                $con = new mysqli("localhost","root","","stddb") or die("Database Connection Error ...");

                echo "<br> Database Connection ... ";

                $con -> query("update mytab set na = '$na', ag = $ag where id = $id");

                $con -> close();
                header("location: menudb.php");
            }
            else
            {

        ?>

        <form name="f3" action="update.php">

            Id : <input type="text" name="tid"> <br>
            Name : <input type="text" name="tna"> <br>
            Age : <input type="text" name="tag"> <br><br>

            <input type="submit" name="sub" value="Update Now">

        </form>

        <?php

            }

        ?>    

    </body>
</html>