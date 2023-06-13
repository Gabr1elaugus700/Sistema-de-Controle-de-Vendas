# Meu repositório

# CRIANDO O BANCO DE DADOS (MySql): 

!É IMPORTANTE SEGUIR OS MESMOS PROCEDIMENTOS E NOMES PARA O FUNCIONAMENTO CORRETO!

### CRIE O BANCO DE DADOS "controle" ###

Crie um usuário "admin" com senha "admin" para acesso ao seu banco de dados; 
{
    CREATE USER 'admin'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `admin`;GRANT ALL PRIVILEGES ON `admin`.* TO 'admin'@'localhost';GRANT ALL PRIVILEGES ON `admin\_%`.* TO 'admin'@'localhost';GRANT ALL PRIVILEGES ON `controle`.* TO 'admin'@'localhost';
}

1- Primeira tabela: 

{
    CREATE TABLE `controle`.`vendas` (`id` INT(100) NOT NULL , `nomeProd` VARCHAR(75) NOT NULL , `tecido` VARCHAR(50) NOT NULL , `cor` VARCHAR(50) NOT NULL , `tamanho` VARCHAR(5) NOT NULL , `data` DATE NOT NULL, `modoPag` VARCHAR(15) NOT NULL) ENGINE = InnoDB;
}

2- Crie a coluna Valor: 
{
    ALTER TABLE `vendas` ADD `Valor` FLOAT(50) NOT NULL AFTER `modoPag`;
}

3- Adicionando vendas à tabela: 
{
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('1','Fernanda ','Dry Fit','Preto','GG','05/6/2023','Pix',104.4);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('2','Duda','Liso','Preto','GG','05/6/2023','Pix',1329);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('3','Melina ','Dry Fit','Laranja','G','2023/05/06','Pix',75.90);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('4','Liz ','Belize','Preto','G','2023/05/06','Pix',69.90);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('5','Caroline','Liso','Amarelo e Pink','P','2023/05/06','Credito',79.90);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('6','Caroline','Liso','Amarelo e Pink','M','2023/05/06','Credito',79.90);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('7','Julia','Liso','Branco','P','2023/05/06','Pix',49.90);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('8','Gabi','Liso','Preto','GG','2023/05/06','Pix',99.90);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('9','Gabi','Liso','Branco','G ','2023/05/06','Pix',99.90);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('10','Caroline','Liso','Azul e Rosa','PP','2023/05/06','Pix',79.90);
insert into vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag, valor) VALUES ('11','Tabata','Liso','Rose','PP','2023/05/06','Pix',79.90);

}

---> CRIANDO TABELA DE CADASTRO DE PRODUTOS:
{
    
}