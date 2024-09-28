<?php
for ($i = 1; $i <= 5; $i++) {
    $numero = $_GET["numero$i"];
    $quadrado = $numero * $numero;
    print "O quadrado de $numero é $quadrado<br>";
}
?>
