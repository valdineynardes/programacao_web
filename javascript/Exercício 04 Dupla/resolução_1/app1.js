/**
 * Escreva um algoritmo que defina um vetor de elementos inteiros de tamanho 5 (utilizando array),
 * leia valores de entrada para este vetor e escreva a soma dos elementos que ocupam os índices pares do vetor (utilizando função).
*/

// Algoritmo que define um vetor de 5 posições.

function somatorioPar(){
    let soma = 0;
    let numeros = prompt("Digite uma série de 5 números separados por espaços: ");
    numeros = numeros.split(" ");

    for (let i = 0; i < numeros.length; i += 2){
        soma = soma + parseFloat(numeros[i]);
    }
    alert("O somatório dos números nas posições pares é: " + soma);
    document.write("O vetor fornecido foi: [", numeros,"]")
} // fim da funcao somatorioPar


// let cinco = []
// let tamanho = 5

// function somatorioPar(){
//     for (let i = 1; i <= tamanho; i++){
//         let numeros = parseInt(prompt("Digite um número: "));
//         cinco.push(numeros);
//     }
//     let somatorio = cinco[0]+cinco[2]+cinco[4]
//     alert("O somatório é: " + somatorio);
//     document.write("O vetor formado foi: [", cinco, "]");
// } // fim da funcao somatorioPar