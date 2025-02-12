<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Created 12-10-2024 by Keith Roberts -->
    <title>Jellies</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>

<h3>Navigation Menu</h3>

<div id="NavContainer">
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About Us</a>
    <a href="contact.php">Contact</a>
</div>

 <form action="loginform.php">
     <input type="submit" value="Go To Login Form" />
 </form>

<hr/>

<!--Title-->
<p>Check login status</p>

<?php
// checks sessions to see if user is logged in
if ($_SESSION['isLogin'] === true) {
    // grabs the username from cookies
    $username = $_COOKIE['Username'];
    echo "<p>Welcome, $username! You are logged in.</p>";
} else {
    echo "<p>Please log in to continue.</p>";
}
?>

</body>
</html>
