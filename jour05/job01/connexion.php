<?php
require_once("../_include/db.php");


if(!empty($_POST)) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));


}
?>

<form id="connexion" method="post">
    <label for="email">E-mail :</label>
    <input type="text" placeholder="Veuillez renseigner votre email." name="email">

    <label for="password">Mot de passe :</label>
    <input type="password" placeholder="Veuillez renseigner votre mdp." name="password">

    <input type="submit" value="Connexion" name="submit" id="submit">
</form>