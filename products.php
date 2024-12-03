<!DOCTYPE html>
<html>
<head>
<!-- Created 12-03-2024 by Keith Roberts -->
<title>Products</title>\
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
<!-- Navigation Menu -->
<div id="navContainer">
    <?php //arrays for nav links and captions
    $navCaptions = array("Home", "Products");
    $navLinks = array("index.php", "products.php");

    //a for loop to display each caption and link inside the arrays
    for ($i = 0; $i < count($navCaptions); $i++) {
        echo '<a href="' . $navLinks[$i] . '">' . $navCaptions[$i] . '</a>';
    }
    ?>
</div>

<h1>Jellies Products</h1>
<hr />
<?php //Jellyfish product arrays (name, price, country of origin, and size)
$BlueJellyfish = array("Blue Jelly", "56.99", "USA", "Large");
$GreenJellyfish = array("Green Jelly", "67.74", "UK", "Small");
$MoonJellyfish = array("Moon Jelly", "63.28", "Spain", "Large");
$RedJellyfish = array("Red Jelly", "93.52", "Australia", "Medium");
$PurpleJellyfish = array("Purple Jelly", "48.66", "Mexico", "Small");
?>

<table>
    <tr>
        <th>Jellyfish Type</th>
        <th>Price</th>
        <th>Country of Origin</th>
        <th>Jellyfish Size</th>
    </tr>
    <tr>
        <td><?php echo $BlueJellyfish[0]; ?></td>
        <td><?php echo $BlueJellyfish[1]; ?></td>
        <td><?php echo $BlueJellyfish[2]; ?></td>
        <td><?php echo $BlueJellyfish[3]; ?></td>
    </tr>
    <tr>
        <td><?php echo $GreenJellyfish[0]; ?></td>
        <td><?php echo $GreenJellyfish[1]; ?></td>
        <td><?php echo $GreenJellyfish[2]; ?></td>
        <td><?php echo $GreenJellyfish[3]; ?></td>
    </tr>
    <tr>
        <td><?php echo $MoonJellyfish[0]; ?></td>
        <td><?php echo $MoonJellyfish[1]; ?></td>
        <td><?php echo $MoonJellyfish[2]; ?></td>
        <td><?php echo $MoonJellyfish[3]; ?></td>
    </tr>
    <tr>
        <td><?php echo $RedJellyfish[0]; ?></td>
        <td><?php echo $RedJellyfish[1]; ?></td>
        <td><?php echo $RedJellyfish[2]; ?></td>
        <td><?php echo $RedJellyfish[3]; ?></td>
    </tr>
    <tr>
        <td><?php echo $PurpleJellyfish[0]; ?></td>
        <td><?php echo $PurpleJellyfish[1]; ?></td>
        <td><?php echo $PurpleJellyfish[2]; ?></td>
        <td><?php echo $PurpleJellyfish[3]; ?></td>
    </tr>
</table>
</body>
</html>