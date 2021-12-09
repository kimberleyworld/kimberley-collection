<?php
require_once 'functions.php';

$db = getDb();
$paperweights = retrievePaperWeights($db);
$display = generateHtml($paperweights);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PAPERWEIGHT-WORLD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<header>
    <p class="title">PAPERWEIGHT-WORLD!</p>
    <p class="subheading">Where no paper is lost</p>
    <hr>
</header>

<div class="add">
    <a href="form.php" target="_blank" >
        <h1>+</h1>
    </a>
    <p>ADD</p>
</div>

<article>
    <?php
    echo $display;
    ?>
</article>
</body>
</html>
