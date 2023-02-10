<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/players.css">
    <script type="text/javascript" src="./public/js/players.js" defer></script>
    <title>PLAYERS</title>
</head>

<body>
    <div class="container">

        <div class="top">
            <img class="small-logo" src="public/img/logo.svg">
            <a href="http://localhost:8080/main" class="acc-button">Back</a>
        </div>

        <div class="players-container">

            <div class="players">

                <div class="players-place">
                    Choose number of players and their names!
                </div>
                <input name="player1" id="player1_in" type="text" placeholder="player1">
                <input name="player2" id="player2_in" type="text" placeholder="player2">
                <input name="player3" id="player3_in" type="text" placeholder="player3">
                <input name="player4" id="player4_in" type="text" placeholder="player4">
                <input name="player5" id="player5_in" type="text" placeholder="player5">
                <div class="number-place">
                    Choose number of rounds!
                </div>
                <input name="rounds" id="number_of_rounds_in" type="number" placeholder="1">
                <button type="submit" id="play_b">PLAY</button>
            </div>
        </div>
    </div>
</body>
