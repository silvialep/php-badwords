<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura le parolacce</title>
</head>
<body>
    <h2>Ecco il tuo testo</h2>
    <p style="height: 200px; width: 300px; border: 1px solid black">
        <?php 
        
        echo $_POST['paragrafo'];

        
        ?>
    </p>
    <p>
        <?php

        echo 'La sua lunghezza è di ' . strlen($_POST['paragrafo']) . ' caratteri e di ' . str_word_count($_POST['paragrafo']) . ' parole';

        ?>
    </p>
</body>
</html>