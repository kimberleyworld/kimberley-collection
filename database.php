<?php

$db = new PDO ('mysql:host=db; dbname=kimberley-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`,`main-colour`,`category`,`material`,`size`,`heavyness`,`img-url` FROM `kimberley-collection`;");

$query->execute();

$outputs = $query->fetchAll();

//echo '<pre>';
//var_dump($outputs);
//echo '</pre>';

    foreach ($outputs as $key => $output) {
        echo $output['name'] . " " . $output['main-colour'] . " " . $output['category'] . " " . $output['material'] . " " . $output['size'] . " " . $output['heavyness'] . " " . "<br>";
        }

