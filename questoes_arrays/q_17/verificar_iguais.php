<?php
$numeros1 = explode(',', $_GET['numeros1'] ?? '');
$array1 = array_map('trim', $numeros1);
$numeros2 = explode(',', $_GET['numeros2'] ?? '');
$array2 = array_map('trim', $numeros2);

if ($array1 === $array2) {
    echo "Os arrays são iguais.<br>";
} else {
    echo "Os arrays são diferentes.<br>";
}
?>
