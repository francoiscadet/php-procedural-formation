
<?php if (isset($_SESSION["security"])): ?>
    <a href="security/profile.php">modifier le profil</a>
<?php endif; ?>

<?php if (isset($_SESSION["security"])): ?>
    <form action="security/logout.php" method="post">
        <input type="submit" value="deconnexion" name="deconnexion">
    </form>
<?php endif; ?>



<?php if (isset($_SESSION["security"])): ?>
    <p>Bienvenue <?= $_SESSION["security"]["nom"]; ?></p>
<?php endif; ?>

<?php if (!isset($_SESSION["security"])): ?>

    <form action="security/login.php" method="post">
        <div>
            <?php if ($errorlogin): ?>
                <div>
                    <p>erreur connexion</p>
                </div>
            <?php endif; ?>
            <label for="login-email">email</label>
            <input type="text" id="login-email" name="email" value="<?= $errorlogin; ?>"><br/>

            <div>
                <label for="login-pass">nom </label>
                <input type="text" id="login-pass"  name="pass"> <br/><br/>
            </div>

            <input type="submit">


    </form>

    <form method="post" action="">
        <div>
            <label for="nom">nom </label>
            <input type="text" id="nom" name="nom"><br/>
        </div>
        <div>
            <label for="prenom">prenom </label>
            <input type="text" id="prenom" name="prenom"><br/>
        </div>
        <div>
            <label for="email">email</label>
            <input type="text" id="email" name="email" ><br/>
            <div>
                <label for="password">password</label>
                <input type="text" id="password"  name="password"> <br/>
            </div>

            <input type="submit">
    </form>
<?php endif; ?>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th>pass</th>
    </tr>

    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
        <tr>

            <th><?= $user["id"]; ?></th>
            <th><?= $user["nom"]; ?></th>
            <th><?= $user["prenom"]; ?></th>
            <th><?= $user["email"]; ?></th>
            <th><?= $user["pass"]; ?></th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>