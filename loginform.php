<!DOCTYPE html>
<html>
<head>
    <!-- Created 1-7-2025 by Keith Roberts -->
    <!-- This page is for my login form input. -->
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
<p><b>Login Form</b></p>
<form name="login" action="logindisplay.php" method="post">

    <p>Your Username: <input type="text" name="Username" value="" /></p>

    <p>Your Password: <input type="text" name="Password" value="" size="5" /></p>

    <p>
        <input type="reset" value="Clear Form" />
        &nbsp;&nbsp;
        <input type="submit" name="Submit" value="Submit Login" />
        &nbsp;&nbsp;
        <input type="submit" name="create" value="Create Login" />
    </p>
</form>
</body>
</html>