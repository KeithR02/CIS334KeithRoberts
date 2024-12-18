<!DOCTYPE html>
<html>
<head>
    <!-- Created 12-17-2024 by Keith Roberts -->
    <title>Jellies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Password Checker</h1>
<?php
//An array of 10 passwords, 5 good and 5 bad.
$Passwords = array(
    "sd%feL1qxdT2", //good passwords
    "g2-bru4Life5",
    "eC3bri#-dvrv",
    "x4ihf+e6F4Eq",
    "d531_fPur#62",

    "password", //bad passwords
    "i like cats",
    "jeffery",
    "12345",
    "password1"
);

// function to check if a password is valid
function checkPassword($password) {

    if (preg_match('/^.{12,}$/', $password) == 0) {
        echo "Password '{$password}' must be at least 12 characters long.<br>";
        return false;
    }

    if (preg_match('/\d/', $password) == 0) {
        echo "Password '{$password}' must contain at least one number.<br>";
        return false;
    }

    if (preg_match('/[a-z]/', $password) == 0) {
        echo "Password '{$password}' must contain at least one lowercase letter.<br>";
        return false;
    }

    if (preg_match('/[A-Z]/', $password) == 0) {
        echo "Password '{$password}' must contain at least one uppercase letter.<br>";
        return false;
    }

    if (preg_match('/[\W_]/', $password) == 0) {
        echo "Password '{$password}' must contain at least one non alphanumeric character.<br>";
        return false;
    }

    if (preg_match('/\s/', $password) == 1) {
        echo "Password '{$password}' cannot contain spaces.<br>";
        return false;
    }else {
        return true;
    }

}

// for each loop that checks the array of passwords
foreach ($Passwords as $password) {
    echo "--------------------------------------------------------------------------<br>";
    echo "Checking Password: '{$password}'<br><br>";
    $result = checkPassword($password);
    if ($result === true) {
        echo "Password '{$password}' is valid.<br>";
    }
}
?>

</body>
</html>