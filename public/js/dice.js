const dice4 = document.getElementById("dice4_count");
const dice6 = document.getElementById("dice6_count");
const dice8 = document.getElementById("dice8_count");
const dice10 = document.getElementById("dice10_count");
const dice12 = document.getElementById("dice12_count");
const dice20 = document.getElementById("dice20_count");

const incrementCount4 = document.getElementById("dice4_up");
const decrementCount4 = document.getElementById("dice4_down");
const incrementCount6 = document.getElementById("dice6_up");
const decrementCount6 = document.getElementById("dice6_down");
const incrementCount8 = document.getElementById("dice8_up");
const decrementCount8 = document.getElementById("dice8_down");
const incrementCount10 = document.getElementById("dice10_up");
const decrementCount10 = document.getElementById("dice10_down");
const incrementCount12 = document.getElementById("dice12_up");
const decrementCount12 = document.getElementById("dice12_down");
const incrementCount20 = document.getElementById("dice20_up");
const decrementCount20 = document.getElementById("dice20_down");

const roll_b = document.getElementById("roll");
const roll_out = document.getElementById("roll_out");

let count_dice4 = 0;
let count_dice6 = 0;
let count_dice8 = 0;
let count_dice10 = 0;
let count_dice12 = 0;
let count_dice20 = 0;


function isNegative(number) {
    return number<0;
}

function handleIncrement4(){
    count_dice4++;
    dice4.innerHTML = count_dice4;
}

function handleDecrement4(){
    count_dice4--;
    if(isNegative(count_dice4)){
        count_dice4=0;
    }
    dice4.innerHTML = count_dice4;
}

function handleIncrement6(){
    count_dice6++;
    dice6.innerHTML = count_dice6;
}

function handleDecrement6(){
    count_dice6--;
    if(isNegative(count_dice6)){
        count_dice6=0;
    }
    dice6.innerHTML = count_dice6;
}

function handleIncrement8(){
    count_dice8++;
    dice8.innerHTML = count_dice8;
}

function handleDecrement8(){
    count_dice8--;
    if(isNegative(count_dice8)){
        count_dice8=0;
    }
    dice8.innerHTML = count_dice8;
}

function handleIncrement10(){
    count_dice10++;
    dice10.innerHTML = count_dice10;
}

function handleDecrement10(){
    count_dice10--;
    if(isNegative(count_dice10)){
        count_dice10=0;
    }
    dice10.innerHTML = count_dice10;
}

function handleIncrement12(){
    count_dice12++;
    dice12.innerHTML = count_dice12;
}

function handleDecrement12(){
    count_dice12--;
    if(isNegative(count_dice12)){
        count_dice12=0;
    }
    dice12.innerHTML = count_dice12;
}

function handleIncrement20(){
    count_dice20++;
    dice20.innerHTML = count_dice20;
}

function handleDecrement20(){
    count_dice20--;
    if(isNegative(count_dice20)){
        count_dice20=0;
    }
    dice20.innerHTML = count_dice20;
}

function getRandomIntFromZero(end){
    return Math.floor(Math.random() * (end+1));
}

function roll4(){
    let sum=0;
    for (let i=0; i<count_dice4; i++){
        sum+=getRandomIntFromZero(4)
    }
    return sum;
}

function roll6(){
    let sum=0;
    for (let i=0; i<count_dice6; i++){
        sum+=getRandomIntFromZero(6)
    }
    return sum;
}

function roll8(){
    let sum=0;
    for (let i=0; i<count_dice8; i++){
        sum+=getRandomIntFromZero(8)
    }
    return sum;
}

function roll10(){
    let sum=0;
    for (let i=0; i<count_dice10; i++){
        sum+=getRandomIntFromZero(10)
    }
    return sum;
}

function roll12(){
    let sum=0;
    for (let i=0; i<count_dice12; i++){
        sum+=getRandomIntFromZero(12)
    }
    return sum;
}

function roll20(){
    let sum=0;
    for (let i=0; i<count_dice20; i++){
        sum+=getRandomIntFromZero(20)
    }
    return sum;
}

function roll(){
    let roll = roll4()+roll6()+roll8()+roll10()+roll12()+roll20();
    roll_out.innerHTML = roll;
}

incrementCount4.addEventListener("click", handleIncrement4);
decrementCount4.addEventListener("click", handleDecrement4);
incrementCount6.addEventListener("click", handleIncrement6);
decrementCount6.addEventListener("click", handleDecrement6);
incrementCount8.addEventListener("click", handleIncrement8);
decrementCount8.addEventListener("click", handleDecrement8);
incrementCount10.addEventListener("click", handleIncrement10);
decrementCount10.addEventListener("click", handleDecrement10);
incrementCount12.addEventListener("click", handleIncrement12);
decrementCount12.addEventListener("click", handleDecrement12);
incrementCount20.addEventListener("click", handleIncrement20);
decrementCount20.addEventListener("click", handleDecrement20);
roll_b.addEventListener("click", roll);