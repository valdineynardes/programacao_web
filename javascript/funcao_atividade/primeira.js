/*
    1 - Criar função que retorne a soma de 2 números.
*/

function adicao (numero1, numero2){
    return numero1+numero2;
}
let numero1=parseFloat(prompt("Para obter a soma, informe o 1º número? "));
let numero2=parseFloat(prompt("Para obter a soma, informe o 2º número? "));
let resultado=adicao(numero1, numero2);
document.write("<br>","O resultado é: ", resultado);

