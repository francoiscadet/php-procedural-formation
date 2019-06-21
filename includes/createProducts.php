<?php

if ($_SERVER["REQUEST_METHOD"]==="post") {
    require_once "includes/pdo.php";
    $sql ="INSERT INTO products(nom, code, created) values (:nom, :code, :created by)";
    $query=$db->prepare($sql);


    $query->bindValue('nom', $_POST["nom"]);
    $query->bindValue('code', $_POST["code"]);
    $query->bindValue('created by', $_POST["created by"]);

}