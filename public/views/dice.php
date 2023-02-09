<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/dice.css">

    <title>DICE</title>
</head>

<body>
    <div class="container">

        <div class="top">
            <img class="small-logo" src="public/img/logo.svg">
            <a href="main.php" class="acc-button">Back</a>
        </div>

        <div class="dice-grid">

            <div class="dice-row">
                <img src="public/img/dice4.svg">
                <button type="button"><img src="public/img/minus.svg"></button>
                <output for="dice4">0</output>
                <button type="button"><img src="public/img/plus.svg"></button>
            </div>

            <div class="dice-row">
                <img src="public/img/dice6.svg">
                <button type="button"><img src="public/img/minus.svg"></button>
                <output for="dice6">0</output>
                <button type="button"><img src="public/img/plus.svg"></button>
            </div>

            <div class="dice-row">
                <img src="public/img/dice8.svg">
                <button type="button"><img src="public/img/minus.svg"></button>
                <output for="dice8">0</output>
                <button type="button"><img src="public/img/plus.svg"></button>
            </div>

            <div class="dice-row">
                <img src="public/img/dice10.svg">
                <button type="button"><img src="public/img/minus.svg"></button>
                <output for="dice10">0</output>
                <button type="button"><img src="public/img/plus.svg"></button>
            </div>

            <div class="dice-row">
                <img src="public/img/dice12.svg">
                <button type="button"><img src="public/img/minus.svg"></button>
                <output for="dice12">0</output>
                <button type="button"><img src="public/img/plus.svg"></button>
            </div>

            <div class="dice-row">
                <img src="public/img/dice20.svg">
                <button type="button"><img src="public/img/minus.svg"></button>
                <output for="dice20">0</output>
                <button type="button"><img src="public/img/plus.svg"></button>
            </div>
        </div>

        <button class="roll" type="submit">ROLL!</button>
        <div class="result">
            <output for="dice-result">5+3+4+6=18</output>
        </div>
    </div>
</body>
