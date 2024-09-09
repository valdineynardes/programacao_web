// let carro = {
//     tipo: "fiat",
//     modelo: "500",
//     cor: "branco"
// };

// document.write(carro.tipo + "<br>" + carro.cor + "<br>");
// document.write(carro["modelo"]);

// let carro = {
//     tipo: "Fiat",
//     modelo: "500",
//     cor: "branco",
//     getDetalhes: function(){
//         return this.tipo + " " + this.cor;
//     }
// };

// document.write(carro.getDetalhes());

let motocicletas = {
    marca: "Harley-Davidson",
    nome: "Brakout",
    caracteristicas: ["preta", "1800cc", "18 litros", "4 tempos"],

    mostreDetalhes: function(){
        return (alert(this.marca + " " + this.nome));
    },
    mostreNome: function(){
        return (alert(this.nome));
    },
    mostreCaracteristicas: function(){
        return (alert(this.caracteristicas));
    }
};

motocicletas.mostreDetalhes();