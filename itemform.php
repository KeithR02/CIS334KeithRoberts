<!DOCTYPE html>
<html>
<head>
    <!-- Created 1-7-2025 by Keith Roberts -->
    <!-- This page is to ask the user for information about the product they would like and
    then displays back their information after they clicked submit. -->
    <title>Products Form</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>

<?php
//initialized variables
$ShowForm = TRUE;
$errorCount = 0;
$type = "";
$origin = "";
$size = "";
$pastPurchase = "";

// validation function for country of origin
function validateCountry($data, $fieldName) {
    global $errorCount;

    // checks if the field is empty
    if (empty($data)) {
        echo "\"$fieldName\" is a required field.<br />\n";
        ++$errorCount;
        $retval = "";
    } else {
        $data = trim($data);
        // this checks if the country name contains only letters and spaces
        if (preg_match("/^[a-zA-Z\s]+$/", $data)) {
            $retval = $data;
        } else {
            echo "\"$fieldName\" must only contain letters and spaces.<br />\n";
            ++$errorCount;
            $retval = "";
        }
    }
    return $retval;
}

if (isset($_POST['Submit']))
{
    $type = ($_POST['type']);
    $origin = validateCountry($_POST['origin'],"Country of origin");
    $size = ($_POST['size']);
    $pastPurchase = isset($_POST['pastPurchase']) ? "Yes" : "No";

    // if invalid this shows the form again to the customer
    if ($errorCount != 0) {
        $ShowForm = TRUE;
    } else {
        $ShowForm = FALSE;
        echo "<h2>Item Submitted:</h2>";
        echo "<p>Type: $type</p>";
        echo "<p>Country of origin: $origin</p>";
        echo "<p>Size: $size</p>";
        echo "<p>Purchased before?: $pastPurchase</p>";
    }
}
if ($ShowForm == TRUE) {
    ?>
    <p><b>Form For Input</b></p>
    <form name="contact" action="itemform.php" method="post">

        <!-- dropdown for types of jellyfish -->
        <label for="type">Jellyfish Type:</label>
        <select id="type" name="type" required>
            <option value="">--Select Type--</option>
            <option value="Blue Jelly">Moon Jellyfish</option>
            <option value="Green Jelly">Lion's Mane Jellyfish</option>
            <option value="Moon Jelly">Aurelia Jellyfish</option>
            <option value="Red Jelly">Box Jellyfish</option>
            <option value="Purple Jelly">Immortal Jellyfish</option>
        </select> <br><br>

        <!-- text box for country of origin -->
        <label for="origin">Country of origin:</label>
        <input type="text" id="origin" name="origin" required><br><br>

        <!-- radio buttons for jellyfish size -->
        <label>Size:</label> <br>
        <input type="radio" id="small" name="size" value="Small" required>
        <label for="small">Small</label> <br>
        <input type="radio" id="medium" name="size" value="Medium" required>
        <label for="medium">Medium</label> <br>
        <input type="radio" id="large" name="size" value="Large" required>
        <label for="large">Large</label> <br><br>

        <!-- Checkbox for past purchase -->
        <label for="pastPurchase">Have you purchased from us before?</label>
        <input type="checkbox" id="pastPurchase" name="pastPurchase"> <br><br>


        <!-- Submit button -->
        <input type="submit" name="Submit" value="Send Form" />

    </form>
    <?php
}
?>
</body>
</html>