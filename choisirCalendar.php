<?php

$html = <<<HTML
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> My first HTML5 page </title>
        <link rel="stylesheet" media="screen" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.css" />
    </head>
    
    <body>
        <form action="calendar.php" method="GET">
            <div class="columns">
                <div class="column is-4">
                    <p>Quelle année voulez-vous consultez ?</p>
                </div>
                <div class="column">
                    <input type="text" id="annee" name="annee">
                </div>
            </div>

            <input type="submit" value="Soumettre formulaire">
        </form>
    </body>
</html>
HTML;

echo $html;