<?php

require_once 'functions.php';

//check to see if there is any data submitted to this page
//if there is then we will grab the data and send to the db (then redirect to homepage)
// if not redirect back to homepage.

if(isset($_POST['name'])) {
    $newPW['name'] = $_POST['name'];
    $newPW['category'] = $_POST['category'];
    $newPW['main-colour'] = $_POST['main-colour'];
    $newPW['heavyness'] = $_POST['heavyness'];
    $newPW['img-url'] = $_POST['img-url'];
    $sanitisedItem = validateData($newPW);
    if($sanitisedItem) {
        $db = getDb();
        dbInsertion($db, $sanitisedItem);
//        header('Location: index.php');
    }
}

//header('Location: index.php');