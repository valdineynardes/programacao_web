<?php
$media_anterior = $_GET['media_anterior'];
$nota_final = $_GET['nota_final'];

$media_final = ($media_anterior * (2/3)) + ($nota_final * (1/3));
$mensagem = "";

if ($media_final >= 50) {
    $mensagem = "Aluno aprovado por final! Média final: " . number_format($media_final, 2);
} else {
    $mensagem = "Aluno reprovado! Média final: " . number_format($media_final, 2);
}

echo "<div style='font-family: Arial, sans-serif; font-size: 20px; text-align: center; margin-top: 20px;'>
        $mensagem
      </div>";
?>
