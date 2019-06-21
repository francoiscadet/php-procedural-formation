<?php

require_once "../includes/pdo.php";

session_start();

if ($_SERVER["REQUEST_METHOD"]!== "POST" || empty($_POST) || $_POST["email"] === "" || $_POST["pass"]==="") {
    header ("location: /");
    exit();
}

//dump($_POST);
$email=$_POST["email"];
$pass=$_POST["pass"];

//dump($_SESSION);

if (isset($_SESSION) && isset($_SESSION["error"]) && isset($_SESSION["error"]["login"])) {
    $errorlogin = $_SESSION["flashback"]["error"]["login"];
}

$query=$db->query("select * from user where email='".$email."'");

$user=$query->fetch(($db::FETCH_ASSOC));

/*if(!empty($_POST) && $_POST["email"] === "" && $_POST["pass"]===""){
    echo "non vide";
    header ('location /');
}*/

if (!password_verify($pass, $user["pass"])) {
    $_SESSION["flashback"] = [
        "error"=> [
            "login" => $email
        ]
    ];

    header ("location: /");
    exit();


}

$_SESSION["security"] = $user;
header('Location: ' . $_SERVER["HTTP_REFERER"]);
//dump($user);
