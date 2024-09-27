<?php
$n = $_GET['n'] ?? 0;
$primos = [];
$numero = 2;

while (count($primos) < $n) {
    $eh_primo = true;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $eh_primo = false;
            break;
        }
    }

    if ($eh_primo) {
        $primos[] = $numero;
    }

    $numero++;
}

echo "Os primeiros $n números primos são: " . implode(", ", $primos) . "<br>";
?>
