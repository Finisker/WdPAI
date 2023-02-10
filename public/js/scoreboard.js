const player1_in = [];
const player2_in = [];
const player3_in = [];
const player4_in = [];
const player5_in = [];

const sum1_out = document.getElementById("sum1_out");
const sum2_out = document.getElementById("sum2_out");
const sum3_out = document.getElementById("sum3_out");
const sum4_out = document.getElementById("sum4_out");
const sum5_out = document.getElementById("sum5_out");

const score1= document.getElementsByName("score1")
const score2= document.getElementsByName("score2")
const score3= document.getElementsByName("score3")
const score4= document.getElementsByName("score4")
const score5= document.getElementsByName("score5")

function initialize(){
    for(let j=0; j<9; j++){
        let elementId = "player1"+(j+1)+"_in";
        player1_in[j]= document.getElementById(elementId);
    }

    for(let j=0; j<9; j++){
        let elementId = "player2"+(j+1)+"_in";
        player2_in[j]= document.getElementById(elementId);
    }

    for(let j=0; j<9; j++){
        let elementId = "player3"+(j+1)+"_in";
        player3_in[j]= document.getElementById(elementId);
    }

    for(let j=0; j<9; j++){
        let elementId = "player4"+(j+1)+"_in";
        player4_in[j]= document.getElementById(elementId);
    }

    for(let j=0; j<9; j++){
        let elementId = "player5"+(j+1)+"_in";
        player5_in[j]= document.getElementById(elementId);
    }
}

function show_score1(){

    let sum = 0;
    for (let i = 0; i < 9; i++) {
        let number = player1_in[i].value;

        if(isNumber(number)){
            number = parseInt(number);
        } else {
            number = 0;
        }

        sum += number;
    }

    sum1_out.innerText = sum;
}

function show_score2(){

    let sum = 0;
    for (let i = 0; i < 9; i++) {
        let number = player2_in[i].value;

        if(isNumber(number)){
            number = parseInt(number);
        } else {
            number = 0;
        }

        sum += number;
    }

    sum2_out.innerText = sum;
}

function show_score3(){

    let sum = 0;
    for (let i = 0; i < 9; i++) {
        let number = player3_in[i].value;

        if(isNumber(number)){
            number = parseInt(number);
        } else {
            number = 0;
        }

        sum += number;
    }

    sum3_out.innerText = sum;
}

function show_score4(){

    let sum = 0;
    for (let i = 0; i < 9; i++) {
        let number = player4_in[i].value;

        if(isNumber(number)){
            number = parseInt(number);
        } else {
            number = 0;
        }

        sum += number;
    }

    sum4_out.innerText = sum;
}

function show_score5(){

    let sum = 0;
    for (let i = 0; i < 9; i++) {
        let number = player5_in[i].value;

        if(isNumber(number)){
            number = parseInt(number);
        } else {
            number = 0;
        }

        sum += number;
    }

    sum5_out.innerText = sum;
}

function isNumber(string) {
    return /\d/.test(string);
}

document.addEventListener('DOMContentLoaded', initialize);

score1.forEach(score =>{
    score.addEventListener('keyup',show_score1);
})
score2.forEach(score =>{
    score.addEventListener('keyup',show_score2);
})
score3.forEach(score =>{
    score.addEventListener('keyup',show_score3);
})
score4.forEach(score =>{
    score.addEventListener('keyup',show_score4);
})
score5.forEach(score =>{
    score.addEventListener('keyup',show_score5);
})