document.addEventListener("DOMContentLoaded", () => {

    const json = "file.json";
    

    function jsonValueKey(json, key) {
        fetch(json)
            .then(response => response.json()) 
            .then(file => console.log(file[key]));
        
    }
})