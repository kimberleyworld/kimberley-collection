<?php
require_once 'database.php';
$cleansedArray = validateData($_POST);

if (strlen($cleansedArray['name']) > 2 && strlen($cleansedArray['main-colour']) > 2){
    echo "<h1> Try again!<br> </h1><h3>Name and Main Colour field must each be less than 255 charecters, you have "
        . strlen($cleansedArray['main-colour']) . " in Main Colour and " .strlen($cleansedArray['name']) . " in Name </h3>";
} else if (strlen($cleansedArray['name']) > 2){
    echo "<h1> Try again!<br> </h1><h3>Name field must be less than 255 charecters, you have " . strlen($cleansedArray['name']) . "</h3>";
} else if (strlen($cleansedArray['main-colour']) > 2){
    echo "<h1> Try again!<br> </h1><h3>Main Colour field must be less than 255 charecters, you have " . strlen($cleansedArray['main-colour']) . "</h3>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PAPERWEIGHT-WORLD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<header>
    <h1>+</h1>
    <hr>
</header>
<body>
<form method="post" action="form.php" >
    <h3>Name</h3>
    <input type="text" name="name" placeholder="Paper-weight name" class="fields">
    <br>
    <h3>Main Colour</h3>
    <input type="text" name="main-colour" placeholder="Main colour" class="fields">
    <br>
    <h3>Category</h3>
    <select name="category" id="category" class="fields">
        <option value="trippy">Trippy</option>
        <option value="boring">Boring</option>
        <option value="fun">Fun</option>
        <option value="silly">Silly</option>
    </select>
    <br>
    <h3>Material</h3>
    <select name="material" id="material" class="fields">
        <option value="glass">Glass</option>
        <option value="metal">Metal</option>
        <option value="plastic">Plastic</option>
        <option value="unknown">Unknown</option>
    </select>
    <br>
    <h3>Size</h3>
    <select name="size" id="size" class="fields">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select>
    <br>
    <h3>Heavyness</h3>
    <select name="heavyness" id="heavyness" class="fields">
        <option value="Light">Light</option>
        <option value="Weighty">Weighty</option>
        <option value="Heavy">Heavy</option>
    </select>
    <br>
    <h3>Image URL</h3>
    <input type="url" name="img-url" placeholder="Input the images URL here" class="fields">
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>