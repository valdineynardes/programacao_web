<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];

$media = ($nota1 + $nota2) / 2;
$mensagem = "";

if ($media >= 70) {
    $mensagem = "Aluno aprovado! Média: " . number_format($media, 2);
} elseif ($media < 30) {
    $mensagem = "Aluno reprovado! Média: " . number_format($media, 2);
} else {
    // Solicitar a nota da prova final
    echo "<div style='font-family: Arial, sans-serif; font-size: 20px; text-align: center; margin-top: 20px;'>
            Aluno em recuperação! Média: " . number_format($media, 2) . "<br>
            <form action='calcula_aprovacao_final.php' method='GET'>
                <input type='hidden' name='media_anterior' value='$media'>
                <label for='nota_final'>Digite a nota da prova final:</label>
                <input type='number' id='nota_final' name='nota_final' min='0' max='100' required>
                <button type='submit' class='btn btn-primary'>Calcular Média Final</button>
            </form>
          </div>";
    exit;
}

echo "<div style='font-family: Arial, sans-serif; font-size: 20px; text-align: center; margin-top: 20px;'>
        $mensagem
      </div>";
?>
