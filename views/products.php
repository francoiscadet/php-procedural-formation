<?php

require_once "includes/createProducts.php";



?>

<form action="/index.php/products" method="post" enctype="multipart/form-data">
    <div>
        <label for="nom">name</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="code">code barre</label>
        <input type="text" id="code" name="code">
    </div>
    <div>
        <label for="created by">creepar</label>
        <input type="text" disabled="disabled"  id="created by">
        <span><?= $_SESSION["security"]["id"]?></span>
    </div>
    <div>
        <label for"image">images</label>
        <input type="file" name="image" id="image">
    </div>
</form>

<html>
<input type="submit">


</html>
