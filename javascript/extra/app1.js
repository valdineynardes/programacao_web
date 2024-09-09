/**
 * 1 - Entada de dados com prompt;
 * 2 - Criar uma função para leitura do valor;
 * 3 - Criar uma função para avaliar o número digitado;
 * 3.1 - Condições: ser divisível por 10, por 5 ou por 2 o nenhum.
*/

function lerDados(){
    let numero = parseFloat(prompt("Digite um número:"));
    if(numero%10==0){
        alert("O número " + numero + " é divisivel por 10.");
    }else{
        if(numero%5==0){
            alert("O número " + numero + " é divisivel por 5.");
        }else
        if(numero%2==0){
            alert("O número " + numero + " é divisivel por 2.")
        }else{
            alert("O número " + numero + " não é divisível por 10, 5 ou 2.");
        }
    }
}