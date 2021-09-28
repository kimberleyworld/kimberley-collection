<?php

$db = new PDO ('mysql:host=db; dbname=kimberley-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`,`main-colour`,`category`,`material`,`size`,`heavyness`,`img-url` FROM `kimberley-collection`;");

$query->execute();

$outputs = $query->fetchAll();

//echo '<pre>';
//var_dump($outputs);
//echo '</pre>';

//    foreach ($outputs as $key => $output) {
//        echo $output['name'] . " " . $output['main-colour'] . " " . $output['category'] . " " . $output['material'] . " " . $output['size'] . " " . $output['heavyness'] . " " . $output['img-url'] . "<br>";
//        }

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
</head>
<header>
    <h1>Welcome to PAPERWEIGHT-WORLD!</h1>
    <h3>Where no paper is lost</h3>
    <hr>
</header>

</html>
