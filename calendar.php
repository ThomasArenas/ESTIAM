<?php

include "calendarFunctions.php";

$year = $_GET['annee'];

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
HTML;

for ($i = 0; $i < 3; $i++) {
    $html .= "<div class=\"columns\">";
    for ($j = 1; $j < 5; $j++) {
        $html .= '<div class="column is-2">';
        $html .= calendar($i*4 + $j, $year, True); 
        $html .= '</div>';
    }
    $html .= "</div>";
}

$html .= <<<HTML
    </body>
</html>
HTML;

echo $html;