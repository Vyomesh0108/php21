<!-- Write a program to create Php Parser/XML Parser to write & read XML file? -->
<!-- For Write -> WriteXmlStudent.php  -->
<!-- For Read -> ReadXmlStudent.php  -->

<html>
    <head>

    </head>
    <body>

        <?php

            $con = new mysqli("localhost","root","","stddb") or Die("Database Connection Error ... ");
            $result = $con -> query("select * from mytab");

            $con -> close();

            $doc = new DOMDocument();       // To create document
            $doc -> formatOutput = true;    // To open document to write

            $root = $doc -> createElement("college");   // Create root tag "college".
            $doc -> appendChild($root);

            while($row = mysqli_fetch_row($result))
            {
                $sub = $doc -> createElement("student");
                
                $id = $doc -> createElement("id");
                $id -> appendChild($doc -> createTextNode($row[0]));    // To append data in tag.
                $sub -> appendChild($id);

                $na = $doc -> createElement("name");
                $na -> appendChild($doc -> createTextNode($row[1]));
                $sub -> appendChild($na);
                
                $ag = $doc -> createElement("age");
                $ag -> appendChild($doc -> createTextNode($row[2]));
                $sub -> appendChild($ag);

                $root -> appendChild($sub);
            }

            echo $doc -> saveXML();
            $doc -> save("student.xml");

        ?>

    </body>
</html>