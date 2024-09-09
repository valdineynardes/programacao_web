function calcularIMC(){
       
    let peso = parseFloat(prompt("Digite o seu 'peso': "));
    let altura = parseFloat(prompt("Digite sua altura: "));
    let imc = parseFloat(peso/(altura*altura));

    if(imc<20){
        document.write("Situação: ABAIXO DO PESO");
    }else if(imc>=20 && imc<25){
        document.write("Situação: PESO NORMAL");
    }else if(imc>=25 && imc<30){
        document.write("Situação: SOBREPESO");
    }else if(imc>=30 && imc<40){
        document.write("Situação: OBESO");
    }else{
        document.write("Situação: OBESO MÓRBIDO");
    }
}