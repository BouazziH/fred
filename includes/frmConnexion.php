<form action="index.php?page=connexion" method="post">

    <div>
        <label for="login">user name</label>
        <input type="text" id="login" name="login" value="<?=$login?>">
    </div>
    <div>
        <label for="password"> mot de passe</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <input type="submit" value="Connexion">
        <input type="reset" value="Effacer">
    </div>
    <input type="hidden" name="frmConnexion">
</form>