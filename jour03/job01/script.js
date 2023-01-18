$( document ).ready(function() {

    const body = document.querySelector("body");

    const buttonShow = document.createElement("button");
    buttonShow.setAttribute("id", "show");
    buttonShow.textContent = ("Cliquez ici pour afficher");
    body.appendChild(buttonShow);

    const buttonHide = document.createElement("button");
    buttonHide.setAttribute("id", "hide");
    buttonHide.textContent = ("Cliquez ici pour cacher");
    body.appendChild(buttonHide);

    const text = document.createElement("p");
    text.setAttribute("id", "text");
    text.textContent = ("Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie.")
    const idText = text.querySelector("#text");
    body.appendChild(text);
    text.style.display = "none";



    function show() {
        if($("#show").on("click", () => {
            return text.style.display = "block";
        }));
    }

    function hide() {
        if($("#hide").on("click", () => {
            return text.style.display = "none"
        }));
    }

    show();

    hide();

});


