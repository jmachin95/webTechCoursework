<?php session_start();
if(!isset($_SESSION['loggedin'])) header("Location: session.php");
if($_SESSION['loggedin']===FALSE) header("Location: session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secret Area</title>
        <link rel="stylesheet" href="secret.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet"> 
    
    </head>
    <body>
        <div class="container">
            <p>Welcome to the private message area for
            <?php echo $_SESSION['username'];?>.
            
            <?php
                if($_SESSION['admin'] == 1){
                    echo "(Admin)";
                }
            ?>
            </p>
            <h1>Messages:</h1>
            <?php
                // PHP code here to retrieve messages for this user ...
            ?>
            <form action="logout.php" method="POST">
                <input type="submit" name="logout" value="Log out">
            </form>
            
        </div>
        <p>&copy; 2017 Private Message Limited</p>
    </body>
</html>