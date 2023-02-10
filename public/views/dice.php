<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/dice.css">
    <script type="text/javascript" src="./public/js/dice.js" defer></script>
    <title>DICE</title>
</head>

<body>
    <div class="container">

        <div class="top">
            <img class="small-logo" src="public/img/logo.svg">
            <a href="http://localhost:8080/main" class="acc-button">Back</a>
        </div>

        <div class="dice-grid">
            <div class="dice-row">
                <img src="public/img/dice4.svg">
                <div id="dice4_down">
                    <input type="image" id="minus4" src="public/img/minus.svg" />
                </div>
                <div id="dice4_count" class="dice_out">
                    0
                </div>
                <div id="dice4_up">
                    <input type="image" id="plus4" src="public/img/plus.svg" />
                </div>
            </div>

            <div class="dice-row">
                <img src="public/img/dice6.svg">
                <div id="dice6_down">
                    <input type="image" id="minus6" src="public/img/minus.svg" />
                </div>
                <div id="dice6_count" class="dice_out">
                    0
                </div>
                <div id="dice6_up">
                    <input type="image" id="plus6" src="public/img/plus.svg" />
                </div>
            </div>

            <div class="dice-row">
                <img src="public/img/dice8.svg">
                <div id="dice8_down">
                    <input type="image" id="minus8" src="public/img/minus.svg" />
                </div>
                <div id="dice8_count" class="dice_out">
                    0
                </div>
                <div id="dice8_up">
                    <input type="image" id="plus8" src="public/img/plus.svg" />
                </div>
            </div>

            <div class="dice-row">
                <img src="public/img/dice10.svg">
                <div id="dice10_down">
                    <input type="image" id="minus10" src="public/img/minus.svg" />
                </div>
                <div id="dice10_count" class="dice_out">
                    0
                </div>
                <div id="dice10_up">
                    <input type="image" id="plus10" src="public/img/plus.svg" />
                </div>
            </div>

            <div class="dice-row">
                <img src="public/img/dice12.svg">
                <div id="dice12_down">
                    <input type="image" id="minus12" src="public/img/minus.svg" />
                </div>
                <div id="dice12_count" class="dice_out">
                    0
                </div>
                <div id="dice12_up">
                    <input type="image" id="plus12" src="public/img/plus.svg" />
                </div>
            </div>

            <div class="dice-row">
                <img src="public/img/dice20.svg">
                <div id="dice20_down">
                    <input type="image" id="minus20" src="public/img/minus.svg" />
                </div>
                <div id="dice20_count" class="dice_out">
                    0
                </div>
                <div id="dice20_up">
                    <input type="image" id="plus20" src="public/img/plus.svg" />
                </div>
            </div>
        </div>

        <input type="button" class="roll" id="roll" value="ROLL!"/>

        <div class="result">
            <output id="roll_out">0</output>
        </div>
    </div>
</body>
