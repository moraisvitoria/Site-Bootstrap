DROP DATABASE IF exists academia1;
CREATE DATABASE academia1 character set utf8 collate utf8_general_ci;
USE academia1;

CREATE table endereco (
    cep char(9) primary key,
    rua varchar(60) NOT NULL,
    bairro varchar(40) NOT NULL,
    cidade varchar(40) NOT NULL,
    uf char(2) NOT NULL
);

CREATE table aluno(
    matricula integer primary key auto_increment,
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
    idprofessor integer primary key auto_increment,
    dispinibilidade varchar(40) NOT NULL,
    cpffuncionario char(14) NOT NULL,
    foreign key(cpffuncionario)references funcionario(cpffuncionario)
);

CREATE table atividade(
    idatividade integer primary key auto_increment,
    nomeatividade varchar(60) NOT NULL,
    descricao varchar(100) NOT NULL
);

CREATE table habilitaprofessor(
    idhabilitacao integer primary key auto_increment,
    idatividade integer NOT NULL,
    idprofessor integer NOT NULL,
    foreign key (idatividade) references atividade(idatividade),
    foreign key (idprofessor)references professor(idprofessor)
);

CREATE table aula(
    idaula integer primary key auto_increment,
    dataaula date NOT NULL,
    horario varchar(30) NOT NULL,
    idprofessor integer NOT NULL,
    idatividade integer NOT NULL,
    foreign key(idprofessor)references professor(idprofessor),
    foreign key(idatividade)references atividade(idatividade)
);

CREATE table aulaaluno(
    idaulaaluno integer primary key auto_increment,
    matricula integer NOT NULL,
    idaula integer NOT NULL,
    foreign key(matricula)references aluno(matricula),
    foreign key (idaula)references aula(idaula)
);

CREATE table produto(
    codigoproduto integer primary key auto_increment,
    nome varchar(60) NOT NULL,
    cor varchar(30) NOT NULL,
    valor double NOT NULL,
    tamanho char(2) NOT NULL,
    quantidade integer NOT NULL
);

CREATE table venda(
    idvenda integer primary key auto_increment,
    data date NOT NULL,
    valor double NOT NULL,
    quantidade integer NOT NULL,
    codigoproduto integer NOT NULL,
    cpffuncionario char(14) NOT NULL,
    foreign key(codigoproduto)references produto(codigoproduto),
    foreign key(cpffuncionario)references funcionario(cpffuncionario)
);

insert into endereco(
    cep,
    rua,
    bairro,
    cidade,
    uf
) values (
    '23085-610',
    'Rua Padre Pauwels',
    'Campo Grande',
    'Rio de Janeiro', 
    'RJ'
), (
    '23036-060',
    'Estrada Cabuçu de Baixo',
    'Guaratiba',
    'Rio de Janeiro',
    'RJ'
);

insert into aluno(
    nome,
    telefone,
    cpf,
    rg,
    datanascimento,
    cep,
    numerocasa,
    complemento,
    foto
) values (
    'Pedro',
    '(21)98924-7323',
    '12555',
    '646.894.546-0',
    '1998/09/24',
    '23085-610',
     11,
    'ap 102',
    'vazio'
),
