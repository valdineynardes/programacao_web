<?php
$caracteres = explode(',', $_GET['caracteres'] ?? '');
$array = array_map('trim', $caracteres);
$vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

foreach ($array as &$caractere) {
    if (in_array($caractere, $vogais)) {
        $caractere = '*';
    }
}

echo "Array após substituição: " . implode(", ", $array) . "<br>";
?>
