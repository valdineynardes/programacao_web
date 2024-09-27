<?php
$capitalInformada = $_GET['capital'];
$capitalInformada = trim(strtolower($capitalInformada)); // Remove espaços e converte para minúsculo

$capitalCorreta = "brasília";

if ($capitalInformada === $capitalCorreta) {
    $resultado = "Correta! A capital do Brasil é Brasília.";
} else {
    $resultado = "Errada! A capital do Brasil é Brasília.";
}

echo "<div class='container mt-5'>";
echo "<h1 class='text-center'>Resultado</h1>";
echo "<p class='text-center'><strong>Resposta informada:</strong> " . ucfirst($capitalInformada) . "</p>";
echo "<h3 class='text-center'>$resultado</h3>";
echo "<a href='index.html' class='btn btn-primary d-block mx-auto' style='width: 200px;'>Tentar Novamente</a>";
echo "</div>";
?>
