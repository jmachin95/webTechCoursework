<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="session.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet"> 
    
    </head>

    <body>
        <div class="row">
            <div class="column">
                <form action="login.php" method="post">

                    <label>User Name</label>
                    <input type="text" name="username" placeholder="User Name">
                    <br>
                    <label>Password</label>
                    <input type="text" name="password" placeholder="Password">
                    <br>

                    <button type="submit">Login</button>

                </form>
            </div>  
            <div class="column">
                <p><strong>Hint:</strong> Use login Username: admin Password: password to access the 
                    admin login. Use the login Username: notadmin Password: notpassword 
                    to access the non-admin login.</p>

                <ul>
                    <li>The login in system is case sensitive</li>
                    <li>Functionality to add new users is disabled</li>
                </ul>       
            </div>  
        </div>
        

    </body> 
</html>