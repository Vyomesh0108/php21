<!-- Write a program to create Php Parser/XML Parser to write & read XML file? -->
<!-- For Write -> WriteXmlStudent.php  -->
<!-- For Read -> ReadXmlStudent.php  -->

<html>
    <head>

    </head>
    <body>
    
        <?php

            $doc = new DOMDocument();
            $doc -> load("student.xml");     // To open document to read

            $std = $doc -> getElementsByTagName("student");

            echo "<table border='5' cellspacing='10' cellpadding='10' align='center'>";

            foreach($std as $st)
            {
                $tid = $st -> getElementsByTagName("id");
                $vid = $tid -> item(0) -> nodeValue;
                
                $tna = $st -> getElementsByTagName("name");
                $vna = $tna -> item(0) -> nodeValue;
                
                $tag = $st -> getElementsByTagName("age");
                $vag = $tag -> item(0) -> nodeValue;

                echo "<tr><td> $vid </td><td> $vna </td><td> $vag </td></tr>";
            }

            echo "</table>";

        ?>

    </body>
</html>