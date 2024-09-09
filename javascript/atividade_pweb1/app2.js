function salarioBase(){
    let salarioBase = parseFloat(prompt("Digite o seu salário: "));
    //aumentos e descontos
    let salarioReceber = salarioBase*1.04
    document.write("O seu salario é: R$", salarioReceber);
}