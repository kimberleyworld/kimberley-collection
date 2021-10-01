<?php
require_once 'form.php';
function getDb(){
    $db = new PDO ('mysql:host=db; dbname=kimberley-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function retrievePaperWeights($db){
    $query = $db->prepare("SELECT `name`,`main-colour`,`category`,`material`,`size`,`heavyness`,`img-url` FROM `kimberley-collection`;");

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
        $displayString .= "<p>Material: " .$output['material'] . "</p>";
        $displayString .= "<p>Size: " . $output['size'] . "</p>";
        $displayString .= "<p>Heavyness: " . $output['heavyness'] . "</p>" . '</div>';
        $displayString .= '</div>';
    }
    return $displayString;
}

/**
 * @param array $input put in the user input via POST
 * @return array cleansed data ready to go into DB
 */
function validateData(array $input) : array {
    $cleansedData = [];
    if (empty($input)){
        $cleansedData = ['No info'];
    }
    foreach ($input as $key=>$newPWData){
        $cleansedData[$key] = htmlspecialchars($newPWData);
    }
    return $cleansedData;
}

//function putIntoDb(array $userCleanData, PDO $db){
//
//    $query = $db->prepare ("INSERT INTO `kimberley-collection` (`name`,`category`,`main-colour`,`material`,`size`,`heavyness`,`img-url`) VALUES (':name' ,':category',':main-colour',':material',':size',':heavyness',':img-url')");
//    $query->bind_param(':name', $userCleanData['name']);
//    $query->bind_param(':category', $userCleanData['category']);
//    $query->bind_param(':main-colour', $userCleanData['main-colour']);
//    $query->bind_param(':material', $userCleanData['material']);
//    $query->bind_param(':size', $userCleanData['size']);
//    $query->bind_param(':heavyness', $userCleanData['heavyness']);
//    $query->bind_param(':img-url', $userCleanData['img-url']);
//    return $query->execute();
//    echo 'yes';
//}
?>


