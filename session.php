<?php

require_once includes/pdo.php;

session_start();

$query = $db->query("select * from user where id=3");

echo "toto";
$_SESSION["user"]=$query->fetch($db::FETCH_ASSOC);

dump($_SESSION);
