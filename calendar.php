<?php

include "calendarFunctions.php";

$year = $_GET['annee'];
$yearPrec = $year - 1;
$yearSuiv = $year + 1;

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
        <div>
            <h1>Calendrier $year</h1>
        </div>
HTML;

for ($i = 0; $i < 3; $i++) {
    $html .= "<div class=\"columns\">";
    if ($i == 0) {
        $html .= <<<HTML
        <div class="column is-2 precedent">
            <a href="calendar.php?annee=$yearPrec"><</a>
        </div>
HTML;
    } else {
        $html .= "<div class=\"column is-2\"></div>";
    }
    for ($j = 1; $j < 5; $j++) {
        $html .= '<div class="column is-2">';
        $html .= calendar($i*4 + $j, $year, False); 
        $html .= '</div>';
    }
    if ($i == 0) {
        $html .= <<<HTML
        <div class="column is-2 suivant">
            <a href="calendar.php?annee=$yearSuiv">></a>
        </div>
HTML;
    } else {
        $html .= "<div class=\"column is-2\"></div>";
    }
    $html .= "</div>";
}

$html .= <<<HTML
    </body>
</html>
HTML;

echo $html;