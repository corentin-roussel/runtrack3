document.addEventListener("DOMContentLoaded", function() {

    window.addEventListener("scroll", () => {
        let hauteur = document.documentElement.scrollHeight - window.innerHeight; //On définit la hauteur est égale a la hauteur du document(toute la page html) moins la taille de la fenêtre (l'écran)
        let position = window.scrollY; //On récupere la position du scroll vertical de la fenêtre 
        let largeur = document.documentElement.clientWidth; //On récupere la largeur du document(toute la page html) et on définit la largeur a toute la largeur de l'écran pour que la barre de scroll s'arrëte au bon endroit 

        let barre = (position / hauteur)  * largeur; //On définit que le scroll de la barre est égale a la position divisé par la hauteur fois la largeur

        document.getElementById("barre").style.width = barre + "px"; //On récupere l'id du footer #barre et on lui applique une width en css qui est égale a barre concaténe avec pixels
    }); 
});