<!-- menudb.php, show.php, insert.php, update.php, delete.php -->

<html>
    <head>

    </head>
    <body>

        <?php

            if(isset($_REQUEST['sub']))
            {
                $s = $_REQUEST['sub'];

                if($s=="Show Data")
                {
                    header("location: show.php");
                }
                elseif($s=="Insert Data")
                {
                    header("location: insert.php");
                }
                elseif($s=="Update Data")
                {
                    header("location: update.php");
                }
                elseif($s=="Delete Data")
                {
                    header("location: delete.php");
                }
            }
            else
            {

        ?>

        <form name="f1" action="menudb.php">

            <input type="submit" name="sub" value="Show Data"><br><br>

            <input type="submit" name="sub" value="Insert Data"><br><br>
            
            <input type="submit" name="sub" value="Update Data"><br><br>
            
            <input type="submit" name="sub" value="Delete Data"><br><br>

        </form>

        <?php

            }

        ?>    

    </body>
</html>