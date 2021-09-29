<?php
require_once 'database.php';

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
    <h1>Welcome to PAPERWEIGHT-WORLD!</h1>
    <h3>Where no paper is lost</h3>
    <hr>
</header>

<article>
    <?php
    echo $display;
    ?>
</article>
</body>
</html>
