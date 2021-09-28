<?php

$db = new PDO ('mysql:host=db; dbname=kimberley-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`,`main-colour`,`category`,`material`,`size`,`heavyness`,`img-url` FROM `kimberley-collection`;");

$query->execute();

$paperweights = $query->fetchAll();

//echo '<pre>';
//var_dump($paperweights);
//echo '</pre>';


//function getName (array $dbSource){
//    return $dbSource['name'];
//}
//
//function getImage (array $dbSource){
//    return $dbSource['img-url'];
//}
//
//function retrieveItemFromArray(array $arr, string $key)
//{
//    return $arr[$key];
//}
//
//echo getImage($paperWInfo[4]);
//echo retrieveItemFromArray($paperWInfo[4], 'img-url');
//$data = ['name' => 'kimberley'];
//$name = 'kimberley';
//echo '<h1>. $data["name"] .</h1>';

function generateHtml(array $paperweights) : string
{
     $displayString = '';

    foreach ($paperweights as $key => $output) {
        $displayString .= '<div class="weightInfo">';
        $displayString .= "<h1>" . $output['name'] . "</h1> ";
        $displayString .= '<div class="weightText">' . "<p>Colour: " .   $output['main-colour'] . "</p>" ;
        $displayString .= "<p>Category: " . $output['category'] . "</p>";
        $displayString .= "<p>Material: " .$output['material'] . "</p>";
        $displayString .= "<p>Size: " . $output['size'] . "</p>";
        $displayString .= "<p>Heavyness: " . $output['heavyness'] . "</p>" . '</div>';
        $displayString .= " <img src='" . $output['img-url'] . "' /><br>". '</div>';
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
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width,
 initial-scale=1.0">
</head>



<body>
    <header>
        <h1>Welcome to PAPERWEIGHT-WORLD!</h1>
        <h3>Where no paper is lost</h3>
        <hr>
    </header>


    <section>
            <div class="weightInfo">
                <a href="https://www.google.com/search?q=cats&rlz=1C5CHFA_enGB969GB969&oq=cats&aqs=chrome..69i57j46i67i433j0i433i457i512j0i402l2j46i199i291i433i512j46i433i512j0i433i512l2j0i512.977j0j7&sourceid=chrome&ie=UTF-8" target="_blank" >
                <h1>+</h1>
                </a>
                <p>ADD</p>
            </div>


        <article>
            <?php
            echo $result;
            ?>
        </article>

    </section>
</body>
</html>
