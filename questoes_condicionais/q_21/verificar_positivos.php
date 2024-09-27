<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

$positivos = 0;

if ($numero1 > 0) {
    $positivos++;
}
if ($numero2 > 0) {
    $positivos++;
}
if ($numero3 > 0) {
    $positivos++;
}

echo "<div style='text-align: center; margin-top: 20px;'>";
echo "Quantidade de números positivos: " . $positivos;
echo "</div>";
?>
