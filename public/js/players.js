const player1_in = document.getElementById("player1_in");
const player2_in = document.getElementById("player2_in");
const player3_in = document.getElementById("player3_in");
const player4_in = document.getElementById("player4_in");
const player5_in = document.getElementById("player5_in");

const play_b = document.getElementById("play_b");

let player1;
let player2;
let player3;
let player4;
let player5;

function play(){
    player1 = player1_in.value;
    player2 = player2_in.value;
    player3 = player3_in.value;
    player4 = player4_in.value;
    player5 = player5_in.value;
    location.assign('http://localhost:8080/players');
}

play_b.addEventListener("click", play);






