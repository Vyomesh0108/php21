<html>
    <head>

    </head>
    <body>

        <?php

            session_start();

            $cna = $_SESSION['name'];
            $cad = $_SESSION['add'];
            $mob = $_SESSION['mob'];
            $sum = $_SESSION['sum'];

            $con = new mysqli("localhost","root","","mafiapizza") or Die("Database not found ... ");

            $result = $con -> query("select * from cart");

            date_default_timezone_set("Asia/Kolkata");
            $dt = date("d/M/Y");
            $ti = date("H:i:s");

            echo "<h1 align='center'> Tax Invoice </h1>";
            echo "<br><br>";

            echo "<table border='5' cellpadding='10' align='center'>";

            echo "<tr colspan='5' rowspan='2' align='center'><td colspan='1'><img src='pizzamafia.jpg' alt='Pizza' width='60' height='50'></td>
                  <th colspan='3'> Pizza Mafia </th><td> Date : $dt <br> Time : $ti </td></tr> 
                  <tr align='center'><td colspan='2'> Customer Name : <br> $cna </td><td colspan='2'> Customer Address : <br> $cad </td><td> Customer Phone No : $mob </td></tr>
                  <tr align='center'><td><b> Pizza Id </td><td><b> Pizza Name </td><td><b> Quantity </td><td><b> Price </td><td><b> Amount </td><tr>";

            while($row = $result -> fetch_row())
            {
                echo "<tr><td align='center'> $row[3] </td><td align='center'> $row[4] </td><td align='center'> $row[5] </td><td align='center'> $row[6] </td><td align='center'> $row[7] </td></tr>";
            }      

            echo "<tr align='center'><td colspan='4'><b> Total : </td><td> $sum </td></tr>";

            echo "</table>";

            $con -> query("delete from cart");

            $con -> close();
        ?>

    </body>
</html>