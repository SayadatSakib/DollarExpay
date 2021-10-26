<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>singUp</title>
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

    <form action="registerAction.php" method="POST">
    <h2 style="color:#fff;">Sing up</h2>
    <input type="text" name="uname" placeholder="User name" required/><br /><br />
    <br />
    <input type="email" name="email" placeholder="Email address" required/><br /><br />
    <br />
    <input type="password" name="password" placeholder="Password" required/><br /><br />
    <br />
    <input type="password" name="cpassword" placeholder="Confirm Password" required/><br /><br />
    <br /><br /><br /><br />
    <a><input type="submit" name="submit" value="Log In"/></a><br /><br />
        



    <div id="container">
    
    </div><br /><br /><br />

    </form>
    </div>

</body>
</html>

