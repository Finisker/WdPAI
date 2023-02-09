<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/account.css">

    <title>ACCOUNT</title>
</head>

<body>
    <div class="container">

        <div class="top">
            <img class="small-logo" src="public/img/logo.svg">
            <a href="main.php" class="acc-button">Back</a>
        </div>

        <output for="email-out">email: </output>
        <output for="email-out">nick: </output>
        <output for="email-out">number of games saved: </output>
        <output for="email-out">date of account creation:  </output>
        <form class="delete-acc" action="delete-acc" method="POST">
            <button type="submit">DELETE YOUR ACCOUNT</button>
        </form>
    </div>
</body>
