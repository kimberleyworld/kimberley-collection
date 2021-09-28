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
    <a href="https://www.google.com/search?q=cats&rlz=1C5CHFA_enGB969GB969&oq=cats&aqs=chrome..69i57j46i67i433j0i433i457i512j0i402l2j46i199i291i433i512j46i433i512j0i433i512l2j0i512.977j0j7&sourceid=chrome&ie=UTF-8" target="_blank" >
        <div class="add">
            <h1>+</h1>
            <p>ADD</p>
        </div>
    </a>
    </section>
</body>
</html>
