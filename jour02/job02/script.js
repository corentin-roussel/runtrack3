    const placement = document.querySelector("body");

    const text = document.createElement("article");
    text.setAttribute("id", "text");
    text.textContent = "L'important n'est pas la chute, mais l'atterrissage.";

    placement.appendChild(text);
    const id = document.querySelector("#text");
    
    function showhide() {
        if(id.style.display != "none"){
            id.style.display = "none";
        } else {
            id.style.display = "block";
        }
    }
    
    const button = document.querySelector("#button")
    
    button.addEventListener("click", () => {
        showhide()
    });

