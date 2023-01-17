document.addEventListener("DOMContentLoaded", function() {

    const placement = document.querySelector("body");

    const textarea = document.createElement("textarea");
    textarea.setAttribute("id", "keylogger");
    placement.appendChild(textarea);

    const idTextarea = document.querySelector("#keylogger")

    let keylogger = ''; //On définit keylogger pour stocker les inputs

    document.addEventListener("keydown", (e) =>  { //On écoute le document pour un input on sotck l'input en paramétre
        let key = e.key; //On définit que l'input keyboardevent on veut récuperer la clé

        if(key.length === 1) { //si la longueur de la variable key est égale a 1

            keylogger += key; //On ajoute la variable key a keylogger

            if(document.activeElement) { //si le textarea est focus le document.activeElement renvoie l'élement contenu dans le DOM qui ale focus a cet instant 
                keylogger += key; //On ajoute la variable key a keylogger
            }
            textarea.value = keylogger; //On affiche keylogger dans la value de textarea
        }
    });
});