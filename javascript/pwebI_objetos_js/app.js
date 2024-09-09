    /* Crie um objeto chamado aluno com as seguintes propriedades:
        • nome_aluno;
        • endereco_aluno;
        • nome_curso.
    Usando o alert, exiba o nome do aluno, endereço do aluno e curso do aluno.
    */

    let aluno = {
        nome_aluno: "Valdiney de Vasconcels Nardes",
        endereco_aluno: "Avenida, S/N, Bairro",
        nome_curso: "Técnico em Informática",
    
        dadosAluno: function(){
            return (alert(this.nome_aluno + "; " + this.endereco_aluno + "; " + this.nome_curso + "."));
        },
    
        /* Utilizando o exercício anterior, crie um método chamado exibirDetalhes
        que exiba o nome do aluno e o nome do curso */
        
        exibirDetalhes: function(){
            return (document.write(this.nome_aluno + "<br>" + this.nome_curso));
        },
    };
    
    aluno.dadosAluno();
    aluno.exibirDetalhes();