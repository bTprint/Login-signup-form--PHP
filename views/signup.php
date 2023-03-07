<?php
define('CSS_PATH', '../css/'); //define CSS path 
define('JS_PATH', 'template/js/'); //define JavaScript path 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style.css">
    <title>Login</title>
</head>
<body>
    <div class="background" >
        <div >
            <header>

            </header>
        </div> <br><br>
        <div id="form">
            <div id="box">
                <form method="post">
                    <div id="title">Register</div> <br>
                    <input id="input" type="text" name="user_name" placeholder="Name"><br>
                    <input id="input" type="email" name="email" placeholder="Email"> <br>
                    <input id="input" type="password" name="password" placeholder="Password"><br>

                    <input id="button" type="submit" value="login"><br>

                    <p class="para" >Already Registered? <a href="/views/login.php">Login Here</a> </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>