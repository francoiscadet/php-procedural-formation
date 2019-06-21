<?php

session_start();
require_once "../includes/pdo.php";


//$query2 = $db->query("select * from user where nom=".$_POST["user"]);

if ($_SERVER["REQUEST_METHOD"]==="POST") {

    $pass= $_POST["password"] === "" ? "" : ", pass = :pass";

    $sql = "UPDATE user set nom = :nom, prenom = :prenom, email = :email".$pass." WHERE id = :id";

    $query = $db->prepare($sql);

    $query->bindValue('nom', $_POST["nom"]);
    $query->bindValue('prenom', $_POST["prenom"]);
    $query->bindValue('email', $_POST["email"]);
    if ($pass !== "") {
        $query->bindValue('pass', password_hash($_POST["password"], PASSWORD_DEFAULT));
    }
    $query->bindValue('id', $_SESSION["security"]["id"]);

    if (!$query->execute()) {
        dump($db->errorInfo());
        die("error");
    }

    $_SESSION["security"] = array_merge($_SESSION["security"], $_POST);
}


?>



