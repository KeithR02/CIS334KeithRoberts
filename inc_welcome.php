<!DOCTYPE html>
<html>
<head>
    <!-- Created 12-10-2024 by Keith Roberts -->
    <title>Jellies</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>

<!-- Navigation Menu -->
<!--<div id="NavContainer">-->
<!--    <a href="index.php">Home</a>-->
<!--    <a href="products.php">Products</a>-->
<!--    <a href="about.php">About Us</a>-->
<!--    <a href="contact.php">Contact</a>-->
<!--</div>-->

<!--<hr/>-->

<!--Title-->
<p>Check login status</p>

<!--Created two variables, one for login, one for username and an if statement to check login-->
    <?php
        $isLogin = false;

        $username = null;

        if ($isLogin) {
            echo "Welcome, $username!";
        } else {
            echo "Please log in to continue.";
        }
    ?>

</body>
</html>
