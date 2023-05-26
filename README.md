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
