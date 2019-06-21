<?php

if ($_SERVER["REQUEST_METHOD"]==="post") {
    require_once "includes/pdo.php";
    $sql ="INSERT INTO products(nom, code, created,image_name, image_type) values (:nom, :code, :created by, :image_name, :image_type)";
    $query=$db->prepare($sql);


    $query->bindValue('nom', $_POST["nom"]);
    $query->bindValue('code', $_POST["code"]);
    $query->bindValue('created by', $_POST["created by"]);
    $query->bindValue('image_name', $_FILES["image"]["name"]);
    $query->bindValue('image_type', $_FILES["image"]["type"]);
    if (!$query->execute()){
        dump($db->errorInfo());
        die("error 101");
    }
    move_uploaded_file( $FILES["tmp_name"], "/var/www/html/php-deux/uploads");

}