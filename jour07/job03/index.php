<?php

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tailwind</title>
</head>
<body>
    <header>
        <nav class="bg-green-600 py-8">
            <ul class="flex justify-center">
                <li><a class="m-10 text-4xl font-sans text-green-200" href="index.php">Accueil</a></li>
                <li><a class="m-10 text-4xl font-sans text-green-200" href="index.php">Inscription</a></li>
                <li><a class="m-10 text-4xl font-sans text-green-200" href="index.php">Connexion</a></li>
                <li><a class="m-10 text-4xl font-sans text-green-200" href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <label for="">Femme</label><input type="radio" name="sex">
        <label for="">Homme</label><input type="radio" name="sex">
        <label for="">Ne se prononce pas</label><input type="radio" name="sex">
        <label for="">Prénom</label><input type="text">
        <label for="">Nom</label><input type="text">
        <label for="">Adresse</label><input type="text">
        <label for="">E-mail</label><input type="email">
        <label for="">Mot de passe :</label><input type="password">
        <label for="">Conf de mot de passe :</label><input type="password">
        <label for="">Informatique</label><input type="checkbox">
        <label for="">Sport</label><input type="checkbox">
        <label for="">Voyages</label><input type="checkbox">
        <label for="">Lecture</label><input type="checkbox">
        <input type="submit" value="Envoyer !">
    </main>
    <footer class="bg-green-400">
        <div class="p-8">
            <ul class="flex justify-center">
                <li><a class="mx-3 text-lg text-green-900" href="index.php">Accueil</a></li>
                <li><a class="mx-3 text-lg text-green-900" href="index.php">Inscription</a></li>
                <li><a class="mx-3 text-lg text-green-900" href="index.php">Connexion</a></li>
                <li><a class="mx-3 text-lg text-green-900" href="index.php">Rechercher</a></li>
            </ul>
        </div>
        <div class="flex justify-center pb-8">
            <h2 class="text-xl text-green-900">Corentin Roussel TAILWIND</h2>
        </div>
    </footer>
</body>
</html>
