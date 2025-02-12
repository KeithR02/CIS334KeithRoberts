<?php
// This checks if no cookies exist and the submit button was pressed
// It will create a cookie from the login form bellow
if (isset($_POST["Username"]) && !isset($_COOKIE["Username"])) {
    setcookie("Username", $_POST['Username']);
}
?>

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

    <!-- The username input will check if the username is saved via cookies and display the username accordingly -->
    <p>Your Username: <input type="text" name="Username" value="<?php if (isset($_COOKIE["Username"])) { echo $_COOKIE["Username"]; } else { echo ""; } ?>" />

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