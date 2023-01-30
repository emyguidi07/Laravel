create database bdLaravel;
use bdLaravel;
create table tbCliente(
	idCliente int primary key auto_increment,
    nome varchar(50),
    dataNasc date,
    genero varchar(20),
    estadoCivil varchar(25),
    endereco varchar(50),
    numero varchar(4),
    complemento varchar(50),
    cep varchar(8),
    bairro varchar(50), 
    cidade varchar(50),
    cpf varchar(11),
    rg varchar(9), 
    telefone int,
    celular varchar(11),
    email varchar(50)
);
insert into tbCliente
values 
(default, 'João Guimarães', '2003-03-25', 'Masculino', 'Solteiro', 'Rua da Mooca', '54', 'apto 81 bloco B', '08910003',
 'Mooca', 'São Paulo', '52446789710', '548889124', '23173868','11912652739', 'jao123adm@gmail.com');
 
 
create table tbCategoria(
	idCategoria int primary key auto_increment,
    categoria varchar(50)
);
insert into tbCategoria
values
(default, 'Tecnologia'),
(default, 'Roupas');

create table tbProduto(
	idProduto int primary key auto_increment,
    idCategoria int,
    produto varchar(50),
    valor float
);
insert into tbProduto
values
(default, '1', 'Alexa 3º ger.', 289.90),
(default, '2', 'Camisa Brasil Copa 22.', 129.90);

create table tbPedido(
	idPedido int primary key auto_increment,
    idCategoria int,
	idProduto int,
    idCliente int,
    qtd_produto int,
    data_entrega date,
    data_saida date,
    valortotal float
);
insert into tbPedido
values
(default, '1', '1', '1', '1', '2022-09-09', '2022-09-05', 289.90);

create table tbContato(
idContato int PRIMARY key AUTO_INCREMENT,
    nome varchar(40),
    email varchar(40),
    fone varchar(40),
    assunto varchar(40),   
    mensagem varchar(500)
);

insert into tbcontato values(
null,
    'Ana',
  'ana@gmail.com',
    '1199999-9999',
    'Assunto ana',   
    'msg ana'  
);
/*chave estrangeira de Produtos*/
ALTER TABLE tbProduto
ADD CONSTRAINT fk_cat FOREIGN KEY (idCategoria) REFERENCES tbCategoria (idCategoria);

/*chavas estrangeiras de Pedidos*/
ALTER TABLE tbPedido
ADD CONSTRAINT fk_pedp FOREIGN KEY (idProduto) REFERENCES tbProduto (idProduto);

ALTER TABLE tbPedido
ADD CONSTRAINT fk_pedc FOREIGN KEY (idCategoria) REFERENCES tbCategoria (idCategoria);

ALTER TABLE tbPedido
ADD CONSTRAINT fk_pedcl FOREIGN KEY (idCliente) REFERENCES tbCliente (idCliente);

