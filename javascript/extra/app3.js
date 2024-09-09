// Função que calcula idade.
// function calcularIdade(){
//     let anoAtual = new Date().getFullYear();
//     let anoNascimento = parseInt(prompt("Digite o ano de nascimento:"));
//     let idade = anoAtual - anoNascimento
//     alert("A idade é: " + idade);
// }

// function lerDatas(){
//     let anoNascimento = []
//     let inputPrompt = (parseInt(prompt("Digite o ano de nascimento:")));
//     anoNascimento = inputPrompt.split(' ');
   
//     let idade = []
//     for(let i = 0; i < 4; i++){
        
//     }
//     let anoAtual = new Date().getFullYear()
//     let p1 = anoAtual - anoNascimento[0];
//     let p2 = anoAtual - anoNascimento[1];
//     let p3 = anoAtual - anoNascimento[2];
//     let p4 = anoAtual - anoNascimento[3];
//     document.write("As datas informadas foram: ", anoNascimento,"<br>");
//     let vetorIdade = [p1, p2, p3, p4]
//     document.write("As idades são: ", vetorIdade);
// }

//Lendo as idade e populando o array
function lerDatas(){
    let anoNascimento = []
    for(let i = 1; i <= 4; i++){
    anoNascimento.push(parseInt(prompt("Digite o ano de nascimento:")));
}
    let anoAtual = new Date().getFullYear()
    let p1 = anoAtual - anoNascimento[0];
    let p2 = anoAtual - anoNascimento[1];
    let p3 = anoAtual - anoNascimento[2];
    let p4 = anoAtual - anoNascimento[3];
    document.write("As datas informadas foram: ", anoNascimento,"<br>");
    document.write("Ano atual é: "+ anoAtual,"<br>");
    document.write("A pessoa 1 tem: " + p1,"<br>");
    document.write("A pessoa 2 tem: " + p2,"<br>");
    document.write("A pessoa 3 tem: " + p3,"<br>");
    document.write("A pessoa 4 tem: " + p4,"<br>");
    let vetorIdade = [p1, p2, p3, p4]
    document.write("As idades são: ", vetorIdade);
    // let maiorDezoito = vetorIdade.map([i]>=18)
    // document.write(maiorDezoito.length)
    // let maiorDezoito = vetorIdade.filter(maiorDezoito>18).length;
    // document.write("Quantidade de pessoas " + quantidadeElementos + " maiores que 18 anos");
   
}