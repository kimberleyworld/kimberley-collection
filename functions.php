<?php

function getDb() : PDO {
    $db = new PDO('mysql:host=db; dbname=kimberley-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function retrievePaperWeights($db){
    $query = $db->prepare("SELECT `name`,`main-colour`,`category`,`heavyness`,`img-url` FROM `kimberley-collection`;");
    $query->execute();
    return $query->fetchAll();
}

function generateHtml(array $paperweights) : string
{
    $displayString = '';
    if (empty($paperweights)){
        $displayString = 'No info';
    }
    foreach ($paperweights as $output){
        $displayString .= '<div class="weightInfo">' . "<img src='" . $output['img-url'] . "'/><br>";
        $displayString .= '<div>' . "<h1>" . $output['name'] . "</h1>";
        $displayString .=  "<p>Colour: " .   $output['main-colour'] . "</p>" ;
        $displayString .= "<p>Category: " . $output['category'] . "</p>";
        $displayString .= "<p>Heavyness: " . $output['heavyness'] . "</p>" . '</div>';
        $displayString .= '</div>';
    }
    return $displayString;
}

/*
 * @param array $input put in the user input via POST
 * @return array cleansed data ready to go into DB
 */
function validateData(array $input) : array {
    $cleansedData = [];
    foreach ($input as $key=>$newPWData){
        $cleansedData[$key] = htmlspecialchars($newPWData);
    }
    return $cleansedData;
}

function dbInsertion(PDO $db, $cleansedInput) {
    var_dump($cleansedInput);
    $query = $db->prepare("INSERT INTO `kimberley-collection` (`name`,`category`,`main-colour`,`heavyness`,`img-url`) VALUES (:name,:category,:main,:heavyness,:img);");
    $query->bindParam(':name', $cleansedInput['name']);
    $query->bindParam(':category', $cleansedInput['category']);
    $query->bindParam(':main', $cleansedInput['main-colour']);
    $query->bindParam(':heavyness', $cleansedInput['heavyness']);
    $query->bindParam(':img', $cleansedInput['img-url']);
    return $query->execute();
}



