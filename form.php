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
<form method="post" action="database.php" >
    <h3>Name</h3>
    <input type="text" name="name" placeholder="Paper-weight name">
    <br>
    <h3>Main Colour</h3>
    <input type="text" name="main-colour" placeholder="Main colour">
    <br>
    <h3>Category</h3>
    <input list="category" placeholder="Pick a category">
    <datalist id="category">
        <option value="Trippy">
        <option value="Boring">
        <option value="Fun">
        <option value="Silly">
    </datalist>
    <br>
    <h3>Material</h3>
    <input list="material" placeholder="Pick a material">
    <datalist id="material">
        <option value="Glass">
        <option value="Metal">
        <option value="Plastic">
        <option value="Unknown">
    </datalist>
    <br>
    <h3>Size</h3>
    <input list="size" placeholder="Size">
    <datalist id="size">
        <option value="Small">
        <option value="Medium">
        <option value="Large">
    </datalist>
    <br>
    <h3>Heavyness</h3>
    <input list="heavyness" placeholder="Heavyness">
    <datalist id="heavyness">
        <option value="Light">
        <option value="Weighty">
        <option value="Heavy">
    </datalist>
    <br>
    <h3>Image URL</h3>
    <input type="url" name="img-url" placeholder="Input the images URL here">
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>