    function citation() {
        const citation = document.querySelector("#citation").innerHTML;
        console.log(citation);
    }
    
    const button = document.querySelector("#button")
    
    button.addEventListener("click", () => {
        citation()
    })

