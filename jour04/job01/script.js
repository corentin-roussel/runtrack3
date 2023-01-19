document.addEventListener("DOMContentLoaded", () => {

    const body = document.querySelector("body");
    const button = document.querySelector("#button")


    button.addEventListener("click", () => {
        fetch("expression.txt")
        .then(function(response) {
            return response.text();
        })
        .then(function(citation) {
            const p = document.createElement("p");
            body.appendChild(p);

            p.innerHTML = citation;
        }) 
    })
   
})