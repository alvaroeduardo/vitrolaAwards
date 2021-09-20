INSERT INTO cargo_psc(nome_psc, num_ctgr) VALUES('Melhor Programação', 1);

ALTER TABLE `vitrolaawards`.`votos` 
ADD COLUMN `Melhor Programação` VARCHAR(45) NOT NULL ;

SELECT * FROM votos;