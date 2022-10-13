<!-- menudb.php, show.php, insert.php, update.php, delete.php -->

<html>
    <head>

    </head>
    <body>

        <?php

            if(isset($_REQUEST['sub']))
            {
                $id = $_REQUEST['tid'];

                $con = new mysqli("localhost","root","","stddb") or Die("Database Connection Error ... ");

                echo "<br> Database Connected ... ";

                $con -> query("delete from mytab where id = $id");

                $con -> close();
                header("location: menudb.php");
            }
            else
            {

        ?>

        <form name="f4" action="delete.php">

            Id : <input type="text" name="tid"> <br><br>

            <input type="submit" name="sub" value="Delete Now">

        </form>

        <?php

            }

        ?>    

    </body>
</html>