const player1_in = document.getElementById("player1_in");
const player2_in = document.getElementById("player2_in");
const player3_in = document.getElementById("player3_in");
const player4_in = document.getElementById("player4_in");
const player5_in = document.getElementById("player5_in");

const play_b = document.getElementById("play_b");

function play(){
    location.assign('http://localhost:8080/players');
}


play_b.addEventListener("click", play);






