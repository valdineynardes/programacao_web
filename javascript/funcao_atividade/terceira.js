/*
    3 - Criar função que receba um array como parâmetro e imprima o array ordenado.
*/
numeros=[]
for (let i = 1; i <= 5; i++) {
    let num=parseFloat(prompt("Digite um número: "));
    numeros.push(num);
}
document.write("Os números ordenados são:", "<br>", numeros.sort());