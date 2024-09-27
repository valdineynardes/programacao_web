<?php
$palindromo = explode(',', $_GET['palindromo'] ?? '');
$array = array_map('trim', $palindromo);
$array_invertido = array_reverse($array);

if ($array === $array_invertido) {
    echo "O array é um palíndromo.<br>";
} else {
    echo "O array não é um palíndromo.<br>";
}
?>
