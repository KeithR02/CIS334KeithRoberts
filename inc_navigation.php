<!DOCTYPE html>
<html>
<head>
    <!-- Created 12-10-2024 by Keith Roberts -->
    <title>Jellies</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>

<!--Title-->
<h1>Navigation Menu</h1>

<!-- Navigation Menu -->
<div id="navContainer">
    <?php //arrays for nav links and captions
    $navCaptions = array("Home", "Products");
    $navLinks = array("index.php", "products.php");

    //a foreach loop to display each caption and link inside the arrays
    foreach ($navLinks as $index => $navLink) {
        echo '<a href="' . $navLink . '">' . $navCaptions[$index] . '</a>';
    }
    ?>
</div>

</body>
</html>