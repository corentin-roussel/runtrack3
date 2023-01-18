$( document ).ready(function() {


    const buttonShow = document.createElement("button");
    $(buttonShow).attr('id', 'show');
    $(buttonShow).text("Cliquez ici pour afficher");
    $("body").append(buttonShow);

    const buttonHide = document.createElement("button");
    $(buttonHide).attr('id', 'hide');
    $(buttonHide).text("Cliquez ici pour cacher");
    $("body").append(buttonHide);

    const text = document.createElement("p");
    $(text).attr('id', 'text');
    $(text).text("Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie.")
    $("body").append(text);
    $("#text").hide()



    if($("#show").on("click", () => {
        return $("#text").show();
    }));

    if($("#hide").on("click", () => {
        return $("#text").hide();
    }));

});


