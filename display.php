<?php
    $title = $_GET["title"];
    $author = $_GET["author"];
    $year = $_GET["year"];
    $journal = $_GET["journal"];
    $doi = $_GET["doi"];
    $school = $_GET["school"];
?>

<html>
    <head>
        <title>display.php</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="display.css">
    </head>

    <body class="container-fluid">
        <h1>Record Data</h1>
        <div>
            <label>Title</label>: <?php echo $title ?>
        </div>

        <div>
            <label>Author</label>: <?php echo $author ?>
        </div>

        <div>
            <label>Year</label>: <?php echo $year ?>
        </div>

        <div>
            <label>Journal</label>: <?php echo $journal ?>
        </div>

        <div>
            <label>DOI</label>: <?php echo $doi ?>
        </div>

        <div>
            <label>School Name</label>: <?php echo $school ?>
        </div>
    </body>

</html>