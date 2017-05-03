CREATE TABLE clientes (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  cpf_cnpj varchar(14) NOT NULL,
  nascimento date NOT NULL,
  endereco varchar(255) NOT NULL,
  bairro varchar(100) NOT NULL,
  cep int(8) NOT NULL,
  cidade varchar(100) NOT NULL,
  estado varchar(100) NOT NULL,
  telefone int(13) NOT NULL,
  celular int(13) NOT NULL,
  data_criacao date NOT NULL,
  data_atualizacao date NOT NULL,
  constraint pk_clientes primary key(id)
);



desc clientes;

INSERT INTO clientes(nome,cpf_cnpj,nascimento,endereco,bairro,cep,cidade,estado,telefone,celular,data_criacao,data_atualizacao) VALUES('José Da Silva','02117834921','1990-10-02','Bezerra Menezes','São Gerardo','60325002','Fortaleza','Ceará','32281923','963172634','2017-01-01','2017-01-01');

INSERT INTO clientes(nome,cpf_cnpj,nascimento,endereco,bairro,cep,cidade,estado,telefone,celular,data_criacao,data_atualizacao) VALUES('Maria das Flores','18374817256','1992-05-28','Av. Tristão Gonçalves','Centro','60015000','Fortaleza','Ceará','32521935','937263849','2017-02-02','2017-02-02');

INSERT INTO clientes(nome,cpf_cnpj,nascimento,endereco,bairro,cep,cidade,estado,telefone,celular,data_criacao,data_atualizacao) VALUES('Karina Kelly','27481983183','1990-02-25','Av. Tristão Gonçalves','Centro','60015000','Fortaleza','Ceará','32521935','937263849','2017-03-02','2017-03-03');

SELECT * FROM clientes;