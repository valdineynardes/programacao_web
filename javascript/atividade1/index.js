let numeros = [];
let tamanho = 10;

for (let i = 1; i <= tamanho; i++) {
    numeros.push(i);
}
console.log("3 - O Vetor 'numeros' é: \n", numeros);
console.log(`3 - O Vetor 'numeros' é: ${numeros}`);
console.log(`4 - A soma da da posição 3 com a posição 8 é: ${numeros[2] + numeros[7]}`);
console.log(`5 - Resultado da multiplicação da posição 5 por 50: ${numeros[4] * 50}`);
console.log(`6 - A quantidade de elementos do Vetor 'numeros' é: ${numeros.length}`);
