window.addEventListener("resize", () => {
    let smallDevice = window.matchMedia("(max-width: 767px)");
    let midDevice = window.matchMedia("(max-width: 1599px) and (min-width: 768px)");
    let bigDevice = window.matchMedia("(min-width: 1600px)");

    const section = document.querySelectorAll(".section");



    section.forEach(section => {
        if(bigDevice.matches) {
            document.body.style.flexDirection = "row";
            document.body.style.justifyContent = "center";

            section.style.width = "20vw";
        }else if(midDevice.matches) {
            document.body.style.flexWrap = "wrap";
            document.body.style.justifyContent = "center";

            section.style.width = "40vw";
        }else if(smallDevice.matches) {
            document.body.style.flexDirection = "column";
            document.body.style.alignItems = "center";

            section.style.width = "80vw";
        }
    })

})