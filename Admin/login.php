<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>singIn</title>
<link href="css/Login.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

    <style type="text/css">
        body {
                background: url(ImageSrc/AdminLogImg.jpg);
                background-size: cover;
             }
    </style>

</head>

<body>
   <div class="signin">

    <form action="loginAction.php" method="POST">
    <h2 style="color:#fff;">Sing in</h2>
    <input type="email" name="email" placeholder="Email address" required/><br /><br />
    <br />
    <input type="password" name="password" placeholder="Password" required/><br /><br />
    <br /><br /><br /><br /><br /><br />
    <a><input type="submit" name="submit" value="Log In"/></a><br /><br />
    <a class="stylesh" href="register.php">Sing up</a><br>
        
            <?php
                if(isset($_GET["status"]))
                  {
                    if($_GET["status"]=="NotOk")
                        {
                            echo "<div id='status' style='color:#F44336'>
                            <br><label>email or password are wrong</label>
                            </div>";
                        }
                  }
                               
            ?>


    <div id="container">
    
    </div><br /><br /><br />

    </form>
    </div>

</body>
</html>

