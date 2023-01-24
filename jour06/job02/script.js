window.addEventListener("resize", () => {
    let smallDevice = window.matchMedia("(max-width: 1280px)");
    let midDevice = window.matchMedia("(max-width: 1680px) and (min-width: 1280px)");
    let bigDevice = window.matchMedia("(max-width: 1920px) and (min-width: 1680px)");


    if(bigDevice.matches) {
        document.body.style.backgroundColor = "#ffca4b";
    }else if(midDevice.matches) {
        document.body.style.backgroundColor = "#275fa0";
    }else if(smallDevice.matches) {
        document.body.style.backgroundColor = "#ffffff";
    }else {
        document.body.style.backgroundColor = "#88c1d0";
    }
})