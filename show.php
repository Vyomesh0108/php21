<!-- menudb.php, show.php, insert.php, update.php, delete.php -->

<html>
    <head>

    </head>
    <body>

        <?php

            // new mysqli("ipaddress","username","password","database_name");

            $con = new mysqli("localhost","root","","stddb") or die("Database Connection Error ..... ");

            echo "<br> Database Connected .... ";

            $rs = $con -> query("select * from mytab");

            echo "<br> No of Records = ".mysqli_num_rows($rs);

            echo "<br><br>";

            echo "<table border='5'>";

            while($row = $rs -> fetch_row())
            {
                echo "<tr><td> $row[0] </td><td> $row[1] </td><td> $row[2] </td></tr>";
            }

            echo "</table>";

            $con -> close();

        ?>

    </body>
</html>