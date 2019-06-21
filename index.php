<?php
session_start();

require_once "includes/usersDAO.php";

//dump($_SERVER);
//die;
$requestUri=$_SERVER["REQUEST_URI"] === "/" ? "index.php/" : $_SERVER["REQUEST_URI"];

$routes = [
  "/index.php/" => [
            "uri" => "/index.php",
            "authorized" => "ANNONYMOUS",
            "ressource" => "home"
  ],
  "/index.php/security/profile" => [ 
          "uri" => "/index.php/security/profile",
          "authorized" => "security",
          "ressource" => "views/profile"
          
    ],
    "/index.php/security/login" => [
        "uri" => "/index.php/security/login",
        "authorized" => "ANONYMOUS",
        "ressource" => "security/login"
    ],
   /index.php/admin/user" => [
        "uri" => "/index.php/security/profile",
        "authorized" => "ANONYMOUS",
        "ressource" => "views/profile"
    ]

];

dump($routes);
$currentRoute=$routes[$_SERVER["REQUEST_URI"]];

if (($currentRoute["authorized"]==="security") && (isset($_SESSION["security"]))){
    header("location: /");
    exit();
}



require_once "includes/usersDAO.php";

//
//echo hash('sha256','password');
//
//echo password_hash('password', PASSWORD_DEFAULT);

$errorlogin=false;

if (isset($_SESSION ) && isset($_SESSION["flashback"]["error"]) && isset($_SESSION["flashback"]["error"]["login"])){
    $errorlogin=$_SESSION["flashback"]["error"]["login"];
    unset($_SESSION["flashback"]["error"]["login"]);
}


//die;

//dump($users);

/*$result=mysqli_query($connection, "select * from product where id=3");
dump(mysqli_fetch_all($result));
dump(mysqli_fetch_assoc($result));*/

/*$query = "select * from product";
$q = $db->query($query);

dump($q->fetchAll($db::FETCH_ASSOC));
*/

//dump($_SESSION["security"]);


?>
<!doctype HTML>
<html>

<head>
    <title>titre</title>
</head>

<body>
<?php
require_once "views/".$currentRoute["ressource"].".php";
?>

</body>
</html>
