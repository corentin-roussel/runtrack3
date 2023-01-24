window.addEventListener("resize", () => {

    let smallDevice = window.matchMedia("(max-width: 1280px)");
    let midDevice = window.matchMedia("(max-width: 1680px) and (min-width: 1280px)");
    let bigDevice = window.matchMedia("(max-width: 1920px) and (min-width: 1680px)");

    let link = document.querySelector("#link");

    console.log(link);

    if(bigDevice.matches) {
        link.href = "style2.css";
    }else if(midDevice.matches) {
        link.href = "style3.css";
    }else if(smallDevice.matches) {
        link.href = "style4.css";
    }else {
        link.href = "style1.css";
    }

})