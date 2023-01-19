document.addEventListener("DOMContentLoaded", () => {
    const json = "pokemon.json";


    fetch(json)
        .then(response => response.json())
        .then(function(json) {
            json.forEach(pokemon => {
                let type = [pokemon.type];
                let option = document.createElement("option");
                let select = document.querySelector("#type");
                
                select.appendChild(option)
                option.innerHTML = type;
            });
        });

})