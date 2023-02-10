<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/scoreboard.css">
    <script type="text/javascript" src="./public/js/scoreboard.js" defer></script>
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

                    <div class="title" id="player1_out">
                        Tomek
                    </div>

                    <form class="score1" action="score1" method="POST">
                        <input name="score1" id="player11_in" type="text">
                        <input name="score1" id="player12_in" type="text">
                        <input name="score1" id="player13_in" type="text">
                        <input name="score1" id="player14_in" type="text">
                        <input name="score1" id="player15_in" type="text">
                        <input name="score1" id="player16_in" type="text">
                        <input name="score1" id="player17_in" type="text">
                        <input name="score1" id="player18_in" type="text">
                        <input name="score1" id="player19_in" type="text">
                    </form>
                    <div class="sum_out" id="sum1_out">0</div>

                </div>

                <div class="player2">

                    <div class="title">
                        Bartek
                    </div>

                    <form class="score2" action="score2" method="POST">
                        <input name="score2" id="player21_in" type="text">
                        <input name="score2" id="player22_in" type="text">
                        <input name="score2" id="player23_in" type="text">
                        <input name="score2" id="player24_in" type="text">
                        <input name="score2" id="player25_in" type="text">
                        <input name="score2" id="player26_in" type="text">
                        <input name="score2" id="player27_in" type="text">
                        <input name="score2" id="player28_in" type="text">
                        <input name="score2" id="player29_in" type="text">
                    </form>
                    <div class="sum_out" id="sum2_out">0</div>

                </div>

                <div class="player3">

                    <div class="title">
                        Gracz 3
                    </div>

                    <form class="score3" action="score3" method="POST">
                        <input name="score3" id="player31_in" type="text">
                        <input name="score3" id="player32_in" type="text">
                        <input name="score3" id="player33_in" type="text">
                        <input name="score3" id="player34_in" type="text">
                        <input name="score3" id="player35_in" type="text">
                        <input name="score3" id="player36_in" type="text">
                        <input name="score3" id="player37_in" type="text">
                        <input name="score3" id="player38_in" type="text">
                        <input name="score3" id="player39_in" type="text">
                    </form>
                    <div class="sum_out" id="sum3_out">0</div>

                </div>

                <div class="player4">

                    <div class="title">
                        Gracz 4
                    </div>

                    <form class="score4" action="score4" method="POST">
                        <input name="score4" id="player41_in" type="text">
                        <input name="score4" id="player42_in" type="text">
                        <input name="score4" id="player43_in" type="text">
                        <input name="score4" id="player44_in" type="text">
                        <input name="score4" id="player45_in" type="text">
                        <input name="score4" id="player46_in" type="text">
                        <input name="score4" id="player47_in" type="text">
                        <input name="score4" id="player48_in" type="text">
                        <input name="score4" id="player49_in" type="text">
                    </form>
                    <div class="sum_out" id="sum4_out">0</div>

                </div>

                <div class="player5">

                    <div class="title">
                        Gracz 5
                    </div>

                    <form class="score5" action="score5" method="POST">
                        <input name="score5" id="player51_in" type="text">
                        <input name="score5" id="player52_in" type="text">
                        <input name="score5" id="player53_in" type="text">
                        <input name="score5" id="player54_in" type="text">
                        <input name="score5" id="player55_in" type="text">
                        <input name="score5" id="player56_in" type="text">
                        <input name="score5" id="player57_in" type="text">
                        <input name="score5" id="player58_in" type="text">
                        <input name="score5" id="player59_in" type="text">
                    </form>
                    <div class="sum_out" id="sum5_out">0</div>
                </div>
            </div>
        </div>

        <div class="save">
            <input type="button" class="save_b" id="save_b" value="SAVE YOUR GAME!"/>
        </div>
    </div>
</body>
