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

$usernames = array();
$passwords = array();


$host = "localhost";
$user= "root";
$password = "";
$database="krdatabase";
$DBConnect = @new mysqli($host,$user,$password,$database);
if ($DBConnect->connect_error)
    echo "The database server is not available at the moment. " .
        "Connect Error is " . $DBConnect->connect_errno .
        " " . $DBConnect->connect_error . ".";
else{
    echo "Connection made";
    echo "<br />MySQL server version: " .  $DBConnect->server_version;
    echo "<br />MySQL client version: " .  $DBConnect->client_version;

    $DBConnect->close();
}

// searchPasswordFile function
function searchPasswordFile() {
    global $usernames;
    global $passwords;

    // This opens the password.txt file and reads the usernames and passwords
    $file = fopen("password.txt", "r");


    if ($file) { // This checks if the file has been opened

        // this loops through the file to check each username and password
        while (($username = fgets($file)) !== false) {
            $password = fgets($file); //change code here
            $usernames[] = trim($username); //stores username in an array
            $passwords[] = trim($password); //stores password in an array
        }

        fclose($file); // Closes the file when finished
    }
}

//this function searches for a username and password in the arrays
function searchPasswordArrays($username, $password) {
    global $usernames;
    global $passwords;
    global $isLogin;

    //This loops to find a matching password and username with the arrays
    for ($i = 0; $i < count($usernames); $i++) {
        if ($usernames[$i] === $username && $passwords[$i] === $password) {
            $isLogin = true;
            break;
        }
    }
}

// I followed this tutorial to check if the form had been submitted \/
// https://hibbard.eu/how-to-tell-if-a-form-has-been-submitted-using-php/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    searchPasswordFile();

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
        searchPasswordArrays($username, $password);

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