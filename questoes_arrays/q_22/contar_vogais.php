<?php
$caracteres = explode(',', $_GET['caracteres'] ?? '');
$array = array_map('trim', $caracteres);
$vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$contador = 0;

foreach ($array as $caractere) {
    if (in_array($caractere, $vogais)) {
        $contador++;
    }
}

echo "O número de vogais é: $contador<br>";
?>
