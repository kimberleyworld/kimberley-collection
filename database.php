<?php

$db = new PDO ('mysql:host=db; dbname=kimberley-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`,`main-colour`,`category`,`material`,`size`,`heavyness`,`img-url` FROM `kimberley-collection`;");

$query->execute();

$paperweights = $query->fetchAll();

//echo '<pre>';
//var_dump($paperweights);
//echo '</pre>';

function generateHtml(array $paperweights) : string
{
     $displayString = '';

    foreach ($paperweights as $key => $output) {
        $displayString .= '<div class="weightInfo">' . " <img src='" . $output['img-url'] . "' /><br>";
        $displayString .= '<div>' . "<h1>" . $output['name'] . "</h1> ";
        $displayString .=  "<p>Colour: " .   $output['main-colour'] . "</p>" ;
        $displayString .= "<p>Category: " . $output['category'] . "</p>";
        $displayString .= "<p>Material: " .$output['material'] . "</p>";
        $displayString .= "<p>Size: " . $output['size'] . "</p>";
        $displayString .= "<p>Heavyness: " . $output['heavyness'] . "</p>" . '</div>';
        $displayString .= '</div>';
    }

    return $displayString;
}

$result = generateHtml($paperweights);



//---------psudo---------------------
//plan out basic HTML header structure
//Header CSS
//media querry header
//Make main section html
//create articles html
//link db info on articles (function)
// article CSS

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
            echo $result;
            ?>
        </article>
</body>
</html>
