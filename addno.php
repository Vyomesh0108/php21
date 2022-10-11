<!-- Write a php program to add 2 numbers using single php file? -->

<html>
    <head>    

    </head>    
    <body>

    <?php

        if(isset($_REQUEST['sub']))
        {
            $a = $_REQUEST['n1'];
            $b = $_REQUEST['n2'];

            $c = $a + $b;

            echo "<br><br> Sum = $c";
            header("location: First.php");      // This will call 'First.php' file.
        }
        else
        {

    ?>

    <form name="f1" method="get" action="addno.php">

        Enter no1 : <input type="text" name="n1"><br>
        Enter no2 : <input type="text" name="n2"><br><br>

        <input type="submit" name="sub" value="ADD">

    </form>


    <?php

        }

    ?>    
    
    </body>
</html>
