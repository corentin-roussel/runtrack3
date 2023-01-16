function isPrime(nbr){
    for(let i=2; i<=nbr; i++){
        if(nbr % i == 0 && nbr != i){
            return false;
        }
    }
    return true;
}

function sommeNombresPremiers(num1, num2) {

    if(isPrime(num1) && isPrime(num2)) {
        return num1 + num2;
    }else {
        return console.log("Les deux nombres que vous avez rentrés ne sont pas premiers");
    }
}

console.log(sommeNombresPremiers())