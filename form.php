<?php
require_once 'functions.php';

$db = getDb();

//$cleansedArray = validateData($_POST);
//dbInsertion($db, $cleansedArray);



//echo putIntoDb(array $cleansedArray, PDO $db);

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
<form method="post" action="submit.php" >
    <h3>Name</h3>
    <input type="text" name='name' placeholder="Paper-weight name" class="fields" maxlength="255" required>
    <br>
    <h3>Main Colour</h3>
    <input type="text" name="main-colour" placeholder="Main colour" class="fields" maxlength="255" required>
    <br>
    <h3>Category</h3>
    <select name="category" id="category" class="fields" required>
        <option value="Trippy">Trippy</option>
        <option value="Boring">Boring</option>
        <option value="Fun">Fun</option>
        <option value="Silly">Silly</option>
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
    <input type="submit" value="Add">
</form>
</body>
</html>