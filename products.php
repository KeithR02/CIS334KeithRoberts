<!DOCTYPE html>
<html>
<head>
<!-- Created 12-03-2024 by Keith Roberts -->
<!-- Updated 12-10-2024 -->
<title>Products</title>\
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>

<!-- Includes the navigation -->
<?php include 'inc_navigation.php'; ?>
<hr />

<!-- Includes the login status -->
<?php include 'inc_welcome.php'; ?>
<hr />

<h1>Jellies Products</h1>

<?php //Jellyfish product arrays (name, price, country of origin, and size)
$Products = array(
    array("Blue Jelly", "56.99", "USA", "Large"),
    array("Green Jelly", "67.74", "UK", "Small"),
    array("Moon Jelly", "63.28", "Spain", "Large"),
    array("Red Jelly", "93.52", "Australia", "Medium"),
    array("Purple Jelly", "48.66", "Mexico", "Small")
)
?>

<table>
    <tr>
        <th>Jellyfish Type</th>
        <th>Price</th>
        <th>Country of Origin</th>
        <th>Jellyfish Size</th>
    </tr>

    <?php foreach ($Products as $Product) {
        echo "<tr>";
        echo "<td>" . $Product[0] . "</td>";
        echo "<td>" . $Product[1] . "</td>";
        echo "<td>" . $Product[2] . "</td>";
        echo "<td>" . $Product[3] . "</td>";
        echo "<tr>";
    }
    ?>

</table>

<hr />
<!-- Includes the footer -->
<?php include 'inc_footer.php'; ?>

</body>
</html>