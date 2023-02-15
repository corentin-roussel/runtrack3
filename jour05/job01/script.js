let inscription = document.querySelector("#inscription")
let connexion = document.querySelector("#connexion")
let div = document.querySelector("#place");


inscription.addEventListener("click", () => {

    fetch('inscription.php')
        .then(response => {
            return response.text();
        })
        .then(form => {
            div.innerHTML = form;
            let submit = document.querySelector("#submit");
            let registerForm = document.querySelector('#register');

            submit.addEventListener("click", (e) => {

                e.preventDefault();
                fetch("inscription.php", {
                    method: "POST",
                    body: new FormData(registerForm)
                })
                    .then(response => {
                        return response;
                    })
            })
                // let formData = new FormData(register);
                // console.log(formData);

        })


})

connexion.addEventListener("click", () => {
    
    fetch('connexion.php') 
        .then(response  => {
            return response.text();
        })
        .then(form => {
            div.innerHTML = form;
            let submit = document.querySelector("#submit");
            let connexionForm = document.querySelector("#connexion")
        })
})
