<?php
require_once("../_include/db.php");
var_dump($_POST);


if(!empty($_POST)) {

    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    
    $req = "INSERT INTO utilisateurs (prenom, nom, email, password) VALUES (?, ?, ?, ?)";
    $req = $connect->prepare($req);
    $req->execute(array($prenom, $nom, $email, $password));
    
}
?>



<form id="register" method="post">

    <label for="fname">Prénom</label>
    <input type="text" placeholder="Veuillez renseigner votre prénom." name="prenom" id="prenom">

    <label for="lname">Nom</label>
    <input type="text" placeholder="Veuillez renseigner votre nom." name="nom" id="nom">

    <label for="email">E-mail</label>
    <input type="email" placeholder="Veuillez renseigner votre e-mail." name="email" id="email">

    <label for="password">Mot de passe :</label>
    <input type="password" placeholder="Veuillez renseigner votre mdp." name="password" id="password">

    <input type="submit" name="submit" id="submit" value="Inscription">
</form>

