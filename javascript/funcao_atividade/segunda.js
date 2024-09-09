/*
    2 - Criar função que imrpima se um número é par ou ímpar.
*/
function parImpar (numero){
    if(numero%2==0){
        document.write("O número ", numero, " é par");
    }else{
        document.write("O número ", numero, " é ímpar");
    }
}

let numero=parseFloat(prompt("Informe valor para saber se é par ou ímpar."));
let resultado=parImpar(numero);