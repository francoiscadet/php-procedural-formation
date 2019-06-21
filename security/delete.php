<?php

if ($_SERVER["REQUEST_METHOD"]!=="POST"){
    header("location: ".$_SERVER["HTTP_REFERER"]);
    exit();
}

$sql = "UPDATE user SET nom = :nom, prenom = :prenom, email = :email, pass = :pass WHERE id = :id";

dump($sql);

$query = $db->prepare($sql);

$query->bindValue('nom', "a");
$query->bindValue('prenom',"a");
$query->bindValue('email', $_SESSION["security"]["id"]. "@rgpd");
$query->bindValue('pass', "a");
//}
$query->bindValue('id', $_SESSION["security"]["id"]);

if (!$query->execute()) {
    dump($db->errorInfo());
    die("error");
}