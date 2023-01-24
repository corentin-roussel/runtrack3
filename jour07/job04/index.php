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
        <form class="rounded-2xl p-5 m-10" action="">
            <div class="flex justify-center mr-80">
                <div>
                    <div class="form-check m-3">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1" name="civilite">
                        <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
                            Femme
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="civilite">
                        <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                            Homme
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="civilite">
                        <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                            Autre
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Nom :</label>
                    <input
                            type="text"
                            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
                            id="exampleFormControlInput1"
                            placeholder="Example label"
                    />
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Prénom :</label>
                    <input
                            type="text"
                            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
                            id="exampleFormControlInput1"
                            placeholder="Example label"
                    />
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Adresse :</label>
                    <input
                            type="text"
                            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
                            id="exampleFormControlInput1"
                            placeholder="Example label"
                    />
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700"
                    >E-mail :</label
                    >
                    <input
                            type="email"
                            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
                            id="exampleFormControlInput1"
                            placeholder="Example label"
                    />
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700"
                    >Mot de passe :</label
                    >
                    <input
                            type="password"
                            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
                            id="exampleFormControlInput1"
                            placeholder="Example label"
                    />
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700"
                    >Conf de mot de passe</label
                    >
                    <input
                            type="password"
                            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
                            id="exampleFormControlInput1"
                            placeholder="Example label"
                    />
                </div>
            </div>
            <div class="flex justify-center mr-64">
                <div>
                    <div class="form-check m-3">
                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                            Sport
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            Cinéma
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            Voyages
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            Informatique
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="
          px-6
          py-2.5
          bg-green-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-green-700 hover:shadow-lg
          focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-green-800 active:shadow-lg
          transition
          duration-150
          ease-in-out">Envoyer
                </button>
            </div>
        </form>
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
