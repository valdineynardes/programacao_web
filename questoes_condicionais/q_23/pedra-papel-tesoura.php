<?php
$usuario = $_GET['escolha'];

$opcoes = ["Pedra", "Papel", "Tesoura"];
$computador = $opcoes[array_rand($opcoes)];

if ($usuario == $computador) {
    $resultado = "Empate!";
} elseif (($usuario == "Pedra" && $computador == "Tesoura") ||
          ($usuario == "Papel" && $computador == "Pedra") ||
          ($usuario == "Tesoura" && $computador == "Papel")) {
    $resultado = "Você venceu!";
} else {
    $resultado = "Computador venceu!";
}

echo "<div class='container mt-5'>";
echo "<h1 class='text-center'>Resultado</h1>";
echo "<p class='text-center'><strong>Você escolheu:</strong> $usuario</p>";
echo "<p class='text-center'><strong>Computador escolheu:</strong> $computador</p>";
echo "<h3 class='text-center'>$resultado</h3>";
echo "<a href='index.html' class='btn btn-primary d-block mx-auto' style='width: 200px;'>Jogar Novamente</a>";
echo "</div>";
?>
