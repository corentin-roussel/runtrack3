document.addEventListener("DOMContentLoaded", function() {

    const placement = document.querySelector("body");

    const button = document.createElement("button");
    button.setAttribute("id", "button")
    button.textContent = "Cliquez ici !";
    placement.appendChild(button);

    const text = document.createElement("p");
    text.setAttribute("id", "compteur");
    text.textContent = 0;
    placement.appendChild(text);
    
    function addone() {
        text.textContent ++;
    }

    
    const idButton = document.querySelector("#button")
    
    idButton.addEventListener("click", () => {
        addone()
    });
});