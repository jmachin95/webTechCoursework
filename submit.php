<!DOCTYPE html>
<?php

    //http://www.teach.scam.keele.ac.uk/prin/x5z47/display.php?id=CSC-10025&year=1&name=Cybercrime;
    // $id = $_GET["id"];
    // $name = $_GET["name"];
    // $year = $_GET["year"];

    

?>

<html>
    <head>
        <title><?php echo"$id - $name" ?>  </title>
        <link rel="stylesheet" href="submit.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet"> 
    </head>
    
    <body>
        <div class="row">
            <div class="column">
                <form action="list.php" method="POST">
                    Title: <input type="text" name="title" placeholder="Title"><br>
                    Author: <input type="text" name="author" placeholder="Author"><br>
                    Year: <input type="text" name="year" placeholder="YYYY"><br>
                    Journal: <input type="text" name="journal" placeholder="Journal"><br>
                    DOI: <input type="text" name="doi" placeholder="DOI"><br>
                    School Name: <input type="text" name="name" placeholder="School Name"><br>
                    <input type="submit" value="Submit">
                </form>
            </div>  

            <div class="column">
                <p><strong>Hint:</strong> Enter values to set and store a record. It will be stored and 
                later fetched from a csv file. Ajax is used to update the list, found on the next screen, 
                asynchronously.</p>
    
            </div>  
        </div>
        
    </body>

</html>