<?php
require_once 'database.php';
$cleansedArray = validateData($_POST);

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
    <input type="text" name="name" placeholder="Paper-weight name" class="fields" maxlength="255" required>
    <br>
    <h3>Main Colour</h3>
    <input type="text" name="main-colour" placeholder="Main colour" class="fields" maxlength="255" required>
    <br>
    <h3>Category</h3>
    <select name="category" id="category" class="fields" required>
        <option value="trippy">Trippy</option>
        <option value="boring">Boring</option>
        <option value="fun">Fun</option>
        <option value="silly">Silly</option>
    </select>
    <br>
    <h3>Material</h3>
    <select name="material" id="material" class="fields" required>
        <option value="glass">Glass</option>
        <option value="metal">Metal</option>
        <option value="plastic">Plastic</option>
        <option value="unknown">Unknown</option>
    </select>
    <br>
    <h3>Size</h3>
    <select name="size" id="size" class="fields" required>
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select>
    <br>
    <h3>Heavyness</h3>
    <select name="heavyness" id="heavyness" class="fields" required>
        <option value="Light">Light</option>
        <option value="Weighty">Weighty</option>
        <option value="Heavy">Heavy</option>
    </select>
    <br>
    <h3>Image URL</h3>
    <input type="url" name="img-url" placeholder="Input the images URL here" class="fields" required>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>