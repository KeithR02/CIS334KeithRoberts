<!DOCTYPE html>
<html>
<head>
    <!-- Created 1-7-2025 by Keith Roberts -->
    <!-- This page is to display the username and password from the login form. -->
    <title>Process Form</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
<p><b>Results from Form</b></p>
<?php
// login variable for checking login status
$isLogin = false;

// searchPasswordFile function
function searchPasswordFile($username, $password) {
    global $isLogin;

    // This opens the password.txt file and reads the usernames and passwords
    $file = fopen("password.txt", "r");


    if ($file) { // This checks if the file has been opened

        // this loops through the file to check each username and password
        while (($line = fgets($file)) !== false) {
            $storedUsername = trim($line);
            $storedPassword = trim(fgets($file));

            // assigns a true value if the username and password match
            if ($storedUsername === $username && $storedPassword === $password) {
                $isLogin = true;
                break;
            }
        }

        fclose($file); // Closes the file when finished
    }
}

// I followed this tutorial to check if the form had been submitted \/
// https://hibbard.eu/how-to-tell-if-a-form-has-been-submitted-using-php/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // This checks if the create button was pressed
    if (isset($_POST['create'])) {
        // used "a" for append mode to write a new username and password to the password.txt file
        $file = fopen("password.txt", "a");

        if ($file) {
            // this writes the username and password
            fwrite($file, $username . "\n");
            fwrite($file, $password . "\n");

            fclose($file);
            echo "<p>Your new login was created.</p>\n";
        } else {
            echo "<p>Unable to create new login.</p>\n";
        }
    }
    // This checks to see if the submit button was pressed
    elseif (isset($_POST['Submit'])) {
        // calls the function searchPasswordFile
        searchPasswordFile($username, $password);

        // This displays if your login was successful or invalid
        if ($isLogin) {
            echo "<p>Login successful! Welcome, $username.</p>\n";
        } else {
            echo "<p>Invalid username or password. Please try again.</p>\n";
        }
    }
}
?>

</body>
</html>