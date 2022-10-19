<html>
    <head>

    </head>
    <body>

        <?php

            session_start();

            $cna = $_SESSION['name'];
            $cad = $_SESSION['add'];
            $mob = $_SESSION['mob'];

            echo "<h1 align='center'> Welcome to Mafia Pizza Mr./Ms. ".$cna." </h1>";

            $con = new mysqli("localhost","root","","mafiapizza") or Die("Database not found ... ");

            $result = $con -> query("select * from menu");

            $con -> close();

            echo "<br><br> <table border='5' cellspacing='5'>";

            echo "<tr><th> Pizza Id </th><th> Pizza Name </th><th> Price </th></tr>";

            while($row = $result -> fetch_row())
            {
                echo "<tr><td align='center'> $row[0] </td><td align='center'> $row[1] </td><td align='center'> $row[2] </td></tr>";
            }

            echo "</table>";

            if(isset($_REQUEST['sb']))
            {
                $sb = $_REQUEST['sb'];

                if($sb == "Add to Cart")
                {
                    $pid = $_REQUEST['pid'];
                    $qty = $_REQUEST['qty'];

                    $con = new mysqli("localhost","root","","mafiapizza") or Die("Database not found !!!");

                    $result = $con -> query("select * from menu where pid = $pid");

                    $row = $result -> fetch_row();

                    $pna = $row[1];
                    $price = $row[2];
                    $amt = $price * $qty;

                    $con -> query("insert into cart values('$cna', '$mob', '$cad', $pid, '$pna', $qty, $price, $amt)");

                    $con -> close();
                }
                elseif($sb == "Buy Now")
                {
                    $con = new mysqli("localhost","root","","mafiapizza") or Die("Database not found...!!!");

                    $res = $con -> query("select sum(amount) from cart");

                    $row = $res -> fetch_row();
                    $sum = $row[0];

                    // $con -> query("delete from cart");

                    date_default_timezone_set("Asia/Kolkata");
                    $dt = date("d/M/Y").",".date("H:i:s");

                    $con -> query("insert into buy values('$cna', '$mob', '$dt', $sum)");

                    $con -> close();

                    $_SESSION['sum'] = $sum;

                    setcookie('mydate', $dt);   // Used to create Cookie
                    setcookie('amount', $sum);

                    header("location: bill.php");
                }
            }
        ?>

        <br><br>

        <form name="f2" action="menu.php">

            Enter Pizza Id : <input type="text" name="pid"><br>
            Enter Quantity : <input type="text" name="qty"><br><br> 

            <input type="submit" name="sb" value="Buy Now">
            <input type="submit" name="sb" value="Add to Cart">
            <input type="reset" name="res" value="Cancel">

        </form>

    </body>
</html>