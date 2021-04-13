CREATE DATABASE p1;
USE p1;
CREATE TABLE paciente (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(200) NOT NULL,
  documento VARCHAR(32) NOT NULL,
  data_cadastro DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO
  paciente (
    id,
    nome,
    documento,
    data_cadastro
  )
VALUES
  (
    1,
    'murilo',
    '44948711845',
    '2021-04-12 19:42:12'
  );