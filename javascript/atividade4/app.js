/**
 * 1 - Solicitar dois números de entradao ao usuário;
 * 2 - Criar uma função que receba e calcule uma expressão;
 * 3 - Expressao: a = 5x+6y
 * 4 - Entrada pelo prompt;
 * 5 - Saída pelo alert.
*/
function lerDados(){
    let x = parseInt(prompt("Digite o primeiro número:"));
    let y = parseInt(prompt("Digite o segundo número:"));
    let expressaoCalculada = calcularExpressao(x, y);
    alert("A expressão calculada é: " + expressaoCalculada);
}
function calcularExpressao(x, y){
    return a = 2*x+6*y
}
