<?php
$numero = $_GET['numero'] ?? 0;
$eh_primo = true;

if ($numero <= 1) {
    $eh_primo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $eh_primo = false;
            break;
        }
    }
}

if ($eh_primo) {
    echo "O número $numero é primo.";
} else {
    echo "O número $numero não é primo.";
}
?>
