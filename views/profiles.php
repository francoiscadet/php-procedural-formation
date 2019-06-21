<form method="post" action="../security/profiles.php">
    <div>
        <label for="nom">nom </label>
        <input type="text" id="nom" name="nom" value="<?= $_SESSION["security"]["nom"] ?>">
    </div>
    <div>
        <label for="prenom">prenom </label>
        <input type="text" id="prenom" name="prenom" value="<?= $_SESSION["security"]["prenom"] ?>">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" id="email" name="email" value="<?= $_SESSION["security"]["email"] ?>">
        <div>
            <label for="password">password</label>
            <input type="text" id="password"  name="password" value="">
        </div>

        <input type="submit" value="modifier" name="modifier">

</form>
<form action="../security/delete.php">
    </i><input type="submit">
</form>
