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

<!--            <div class="weightInfo" id="add">-->
<!--                <a href="https://www.google.com/search?q=cats&rlz=1C5CHFA_enGB969GB969&oq=cats&aqs=chrome..69i57j46i67i433j0i433i457i512j0i402l2j46i199i291i433i512j46i433i512j0i433i512l2j0i512.977j0j7&sourceid=chrome&ie=UTF-8" target="_blank" >-->
<!--                <h1>+</h1>-->
<!--                </a>-->
<!--                <p>ADD</p>-->
<!--            </div>-->


<article>
    <?php
    echo $display;
    ?>
</article>
</body>
</html>
