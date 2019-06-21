<?php

echo "test";

$users = [
    [
        "id" => 1,
        "nom"=>"Sookia",
        "prenom"=>"khalid",
        "email"=>"khalid.sookia@iknsa.com",
        "pass"=>"paris"
    ],
    [
        "id" => 2,
        "nom"=>"camara",
        "prenom"=>"moussa",
        "email"=>"moussa.camara@iknsa.com",
        "pass"=>"cergy"
    ],
    [
        "id" => 3,
        "nom"=>"Kifia",
        "prenom"=>"moustakine",
        "email"=>"moustakine.kifia@iknsa.com",
        "pass"=>"Nanterre"
    ]
];

$data = [
    [
        "id" => 2,
        "age" => 23,
        "pass" => "toto"
    ],
    [
        "id" => 1,
        "age" => 15,
        "pass" => "nanterre"

    ],
    [
        "id" => 3,
        "age" => 35,
        "pass" => "Nanterre"
    ]
];

$index=[];

foreach ($users as $key => $user ) {
    //   echo $key;
    //   foreach ($data as )
    //   echo $val;
    //dump($user);
    foreach ($data as $datum){
        if ($datum["id"] === $user["id"]) {
            /*$index["id"] = $datum["id"];
            $index["age"] = $datum["age"];
            $index["pass"] = $datum["pass"];
            $index["nom"] = $user["nom"];
            $index["prenom"]=$user["prenom"];
            $index["email"]=$user["email"];*/
            //$index = array_merge($data, $users);
            $users[$key]=array_merge($user, $datum);
            //dump($index);
            //  $index=array_merge($user, $datum);
            //  dump($index);
        }
    }

}
//dump($users);
//dump($index);
setcookie ("cookie","test" );
dump($_COOKIE);

?>
