/**
 * Crie um botão em HTML que chama uma janela com uma caixa de texto para inserir um
 * valor. Dependendo do valor introduzido mostra uma mensagem difernete na página.
 * Entre 0 e 3, "Reprovado"; Entre 3 e 7 "Prova Final"; Maior que 7 "Aprovado".
 */

function situacao(){
    let nota = parseFloat(prompt("Entre com a nota: "));
    if(nota < 3){
        alert("Reprovado");
    }else if(nota < 7){
        alert("Prova Final")
    }else{
        alert ("Aprovado");
    }

}// Fim da funcção situação.

// function situacao(){
//     let nota = parseFloat(prompt("Entre com a nota: "));

//     if(nota >= 0 && nota < 3){
//         alert("Reprovado");
//     }else if(nota >= 3 && nota < 7){
//         alert("Prova Final");
//     }else if(nota >= 7){
//         alert("Aprovado");
//     }
// }// Fim da funcção situação.