<?php
$num = $_GET['numero'];
$lucas1 = 2;
$lucas2 = 1;
$isLucas = false;

if ($num == $lucas1 || $num == $lucas2) {
    $isLucas = true;
} else {
    for ($i = 2; $i < 20; $i++) {
        $lucasNext = $lucas1 + $lucas2;
        if ($lucasNext == $num) {
            $isLucas = true;
            break;
        }
        $lucas1 = $lucas2;
        $lucas2 = $lucasNext;
    }
}

if ($isLucas) {
    print "$num é um número de Lucas.";
} else {
    print "$num não é um número de Lucas.";
}
?>
