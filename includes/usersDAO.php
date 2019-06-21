<?php

require_once "pdo.php";

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    echo "je souhaite creer un user";


    $sql = "INSERT INTO user(nom,prenom,email,pass) VALUES (:nom1, :prenom, :email, :pass)";
    $query=$db->prepare($sql);

    $query->bindvalue('nom1', $_POST["nom"]);
    $query->bindvalue('prenom', $_POST["prenom"]);
    $query->bindvalue('email', $_POST["email"]);
    //$query->bindvalue('pass', $_POST["password"]);
    $query->bindvalue('pass', password_hash($_POST["password"], PASSWORD_DEFAULT));

    if (!$query->execute()) {
        dump($db->errorInfo());
//        die "erreur numero 10";
    }

    //   $db->prepare($sql)->execute();
}

$query=$db->query("select * from user");
$users=$query->fetchAll($db::FETCH_ASSOC);

