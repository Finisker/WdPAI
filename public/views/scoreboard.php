<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/scoreboard.css">

    <title>SCOREBOARD</title>
</head>

<body>
    <div class="container">

        <div class="top">
            <img class="small-logo" src="public/img/logo.svg">
            <a href="http://localhost:8080/main" class="acc-button">Back</a>
        </div>

        <div class="scoreboard">

            <div class="title-column">
                #
                <br>#1
                <br>#2
                <br>#3
                <br>#4
                <br>#5
                <br>#6
                <br>#7
                <br>#8
                <br>#9
                <br>Sum
            </div>

            <div class="players">
                <div class="player1">

                    <div class="title">
                        Tomek
                    </div>

                    <form class="score1" action="score1" method="POST">
                        <input name="score1" type="text">
                        <input name="score2" type="text">
                        <input name="score3" type="text">
                        <input name="score4" type="text">
                        <input name="score5" type="text">
                        <input name="score6" type="text">
                        <input name="score7" type="text">
                        <input name="score8" type="text">
                        <input name="score9" type="text">
                    </form>
                    <output for="sum1">0</output>

                </div>

                <div class="player2">

                    <div class="title">
                        Bartek
                    </div>

                    <form class="score2" action="score2" method="POST">
                        <input name="score1" type="text">
                        <input name="score2" type="text">
                        <input name="score3" type="text">
                        <input name="score4" type="text">
                        <input name="score5" type="text">
                        <input name="score6" type="text">
                        <input name="score7" type="text">
                        <input name="score8" type="text">
                        <input name="score9" type="text">
                    </form>
                    <output for="sum2">0</output>

                </div>

                <div class="player3">

                    <div class="title">
                        Gracz 3
                    </div>

                    <form class="score3" action="score3" method="POST">
                        <input name="score1" type="text">
                        <input name="score2" type="text">
                        <input name="score3" type="text">
                        <input name="score4" type="text">
                        <input name="score5" type="text">
                        <input name="score6" type="text">
                        <input name="score7" type="text">
                        <input name="score8" type="text">
                        <input name="score9" type="text">
                    </form>
                    <output for="sum3">0</output>

                </div>

                <div class="player4">

                    <div class="title">
                        Gracz 4
                    </div>

                    <form class="score4" action="score4" method="POST">
                        <input name="score1" type="text">
                        <input name="score2" type="text">
                        <input name="score3" type="text">
                        <input name="score4" type="text">
                        <input name="score5" type="text">
                        <input name="score6" type="text">
                        <input name="score7" type="text">
                        <input name="score8" type="text">
                        <input name="score9" type="text">
                    </form>
                    <output for="sum4">0</output>

                </div>

                <div class="player5">

                    <div class="title">
                        Gracz 5
                    </div>

                    <form class="score5" action="score5" method="POST">
                        <input name="score1" type="text">
                        <input name="score2" type="text">
                        <input name="score3" type="text">
                        <input name="score4" type="text">
                        <input name="score5" type="text">
                        <input name="score6" type="text">
                        <input name="score7" type="text">
                        <input name="score8" type="text">
                        <input name="score9" type="text">
                    </form>
                    <output for="sum5">0</output>

                </div>
            </div>
        </div>

        <form class="save" action="save" method="POST">
            <button type="submit">SAVE YOUR GAME!</button>
        </form>
    </div>
</body>
