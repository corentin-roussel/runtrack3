let numbers = [10, 100, 28, 69, 37, 12, 46, 78];

function tri(numbers, order){

    if(order === "asc") {
        
        return numbers.sort((a, b) => a - b);

    }else if(order === "desc") {

        return numbers.sort((a, b) => b - a);
    }

}


console.log(tri(numbers, "asc"));