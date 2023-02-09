<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/players.css">

    <title>PLAYERS</title>
</head>

<body>
    <div class="container">

        <div class="top">
            <img class="small-logo" src="public/img/logo.svg">
            <a href="main.php" class="acc-button">Back</a>
        </div>

        <div class="players-container">

            <form class="players" action="players" method="POST">

                <div class="players-place">
                    Choose number of players and their names!
                </div>
                <input name="player1" type="text" placeholder="player1">
                <input name="player2" type="text" placeholder="player2">
                <input name="player3" type="text" placeholder="player3">
                <input name="player4" type="text" placeholder="player4">
                <input name="player5" type="text" placeholder="player5">
                <div class="number-place">
                    Choose number of rounds!
                </div>
                <input name="rounds" type="number" placeholder="1">
                <button type="submit">PLAY</button>
            </form>
        </div>

    </div>
</body>