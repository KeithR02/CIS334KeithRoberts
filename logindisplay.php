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
$Username = $_POST['Username'];
$Password = $_POST['Password'];

echo "<p>Your form has been submitted. Thank you, $Username.</p>\n";
echo "<p>Username: $Username.</p>\n";
echo "<p>Password: $Password </p>\n";
?>
</body>
</html>