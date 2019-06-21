<?php

require_once "includes/pdo.php";

$query = $db->query("SELECT * FROM products");
$products = $query->fetchAll($db::FETCH_ASSOC);

