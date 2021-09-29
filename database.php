<?php
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


    foreach ($paperweights as $output) {
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



//---------psudo---------------------
//plan out basic HTML header structure
//Header CSS
//media querry header
//Make main section html
//create articles html
//link db info on articles (function)
// article CSS

?>


