<?php
$capital = $_GET['capital'];

if (strcasecmp($capital, 'Brasília') == 0) {
    print "Resposta correta!";
} else {
    print "Resposta errada. A capital do Brasil é Brasília.";
}
?>
