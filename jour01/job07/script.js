function jourTravaille(param1, param2, param3) {
    
    const monthNames = [
        "Janvier",
        "Février",
        "Mars",
        "Avril",
        "Mai",
        "Juin",
        "Juillet",
        "Aout",
        "Septembre",
        "Octobre",
        "Novembre",
        "Décembre",
    ]

    let date = new Date(param1, param2 - 1, param3);

    
    let day = date.getDate();
    let month = monthNames[date.getMonth()];
    let year = date.getFullYear(4);
    let weekend = date.getDay();

    

    let stringDate = day.toString() + "/" + month.toString() + "/" + year;




    let jourFeries = ["1/Janvier/2020",
        "13/Avril/2020",
        "1/Mai/2020",
        "8/Mai/2020",
        "21/Mai/2020",
        "1/Juin/2020",
        "14/Juillet/2020",
        "15/Septembre/2020",
        "1/Novembre/2020",
        "11/Novembre/2020",
        "25/Décembre/2020"];

    if(jourFeries.includes(stringDate)) {
        console.log("Le "+ day + " " + month + " " + year + " est un jour férié");
    }else if (weekend == 0 || weekend == 6) {
        console.log("Le "+ day + " " + month + " " + year + " est un week-end");
    }else {
        console.log("Le "+ day + " " + month + " " + year + " est un jour de travail");
    }


}
jourTravaille(); 