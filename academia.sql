CREATE table endereco (
    cep char(9) primary key,
    rua varchar(60) NOT NULL,
    bairro varchar(40) NOT NULL,
    cidade varchar(40) NOT NULL,
    uf char(2) NOT NULL
);

CREATE table aluno(
    matricula integer primary key,
    nome varchar(60) NOT NULL,
    telefone varchar(15) NOT NULL,
    cpf char(14) NOT NULL,
    rg varchar(15) NOT NULL,
    datanascimento date NOT NULL,
    cep char(9) NOT NULL,
    numerocasa smallint NOT NULL,
    complemento varchar(30),
    foto varchar(255),
    foreign key(cep)references endereco(cep)
);

CREATE table funcionario(
    cpffuncionario char(14) primary key,
    nome varchar(60) NOT NULL,
    telefone varchar(15) NOT NULL,
    rg varchar(15) NOT NULL,
    numerocasa smallint NOT NULL,
    complemento varchar(30),
    foto varchar(255),
    cep char(9) NOT NULL,
    foreign key(cep)references endereco(cep)
);

CREATE table professor(
    idprofessor integer primary key,
    dispinibilidade varchar(40) NOT NULL,
    cpffuncionario char(14) NOT NULL,
    foreign key(cpffuncionario)references funcionario(cpffuncionario)
);

