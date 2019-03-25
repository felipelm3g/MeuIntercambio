/* Criar o banco de dados */
CREATE DATABASE IF NOT EXISTS DB_COMBUSTON CHARACTER SET utf8 COLLATE utf8_general_ci;

/* Criando usuario de sistema */
CREATE USER 'ac_system'@'localhost' IDENTIFIED BY '12345@Flm';
GRANT INSERT ON DB_COMBUSTON . * TO 'ac_system'@'localhost';
GRANT SELECT ON DB_COMBUSTON . * TO 'ac_system'@'localhost';
GRANT UPDATE ON DB_COMBUSTON . * TO 'ac_system'@'localhost';
GRANT DELETE ON DB_COMBUSTON . * TO 'ac_system'@'localhost';

/* Reload permisões */
FLUSH PRIVILEGES;

/* Tabela dos usuarios */
CREATE TABLE IF NOT EXISTS T_USER (
	USER_ID      BIGINT UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, #ID Usuario
    USER_MAIL    VARCHAR(60) NOT NULL, #E-mail do Usuario
    USER_PASS    VARCHAR(100) NOT NULL, #Senha do Usuario
    
    USER_NOME    VARCHAR(60) NOT NULL, #Nome do Usuario
    USER_END     VARCHAR(60), #Endereço
    
    PRIMARY KEY (USER_ID)
);

INSERT INTO T_USER (USER_MAIL, USER_PASS, USER_NOME, USER_END)
VALUES ('natashow@gmail', 'MTIzNDU=', 'Natasha', 'Av. Engenheiro Abdias, 45');
INSERT INTO T_USER (USER_MAIL, USER_PASS, USER_NOME, USER_END)
VALUES ('felipe.lm@hotmail.com.br', 'MTIzNDU=', 'Felipe', 'Av. Engenheiro Abdias, 2041');
INSERT INTO T_USER (USER_MAIL, USER_PASS, USER_NOME, USER_END)
VALUES ('julionetto', 'MTIzNDU=', 'Julio Netto', 'Av. Engenheiro Abdias, 10');

SELECT * FROM T_USER;