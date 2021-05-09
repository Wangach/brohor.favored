/*CREATE TABLE `systwone`.`lmatches` ( `Hplayer` VARCHAR(1000) NOT NULL , `Aplayer` VARCHAR(1000) NOT NULL , `Hteam` VARCHAR(1000) NOT NULL , `Ateam` VARCHAR(1000) NOT NULL , `Hscore` INT NOT NULL , `Ascore` INT NOT NULL , `winner` VARCHAR(1000) NOT NULL , `looser` VARCHAR(1000) NOT NULL , `tomatch` VARCHAR(100) NOT NULL , `tarehe` VARCHAR(100) NOT NULL , `wakati` VARCHAR(100) NOT NULL , `debt` INT NOT NULL , `matchid` VARCHAR(1000) NOT NULL ) ENGINE = InnoDB;*/




CREATE TABLE `systwone`.`lmatches` ( `Hplayer` VARCHAR(1000) NOT NULL , `Aplayer` VARCHAR(1000) NOT NULL , `Hteam` VARCHAR(1000) NOT NULL , `Ateam` VARCHAR(1000) NOT NULL , `Hscore` INT NOT NULL , `Ascore` INT NOT NULL , `winner` VARCHAR(1000) NOT NULL , `looser` VARCHAR(1000) NOT NULL , `tomatch` VARCHAR(100) NOT NULL , `tarehe` VARCHAR(100) NOT NULL , `wakati` VARCHAR(100) NOT NULL , `debt` INT NOT NULL , `matchid` VARCHAR(1000) NOT NULL ) ENGINE = InnoDB;

#online 
CREATE TABLE `johnitox_systwone`.`lmatches` ( `no` INT NOT NULL AUTO_INCREMENT , `Hplayer` VARCHAR(100) NOT NULL , `Aplayer` VARCHAR(100) NOT NULL , `Hteam` VARCHAR(100) NOT NULL , `Ateam` VARCHAR(100) NOT NULL , `Hscore` INT NOT NULL , `Ascore` INT NOT NULL , `winner` VARCHAR(100) NOT NULL , `looser` VARCHAR(100) NOT NULL , `tomatch` VARCHAR(100) NOT NULL , `tarehe` VARCHAR(100) NOT NULL , `wakati` VARCHAR(100) NOT NULL , `debt` INT NOT NULL , `matchid` VARCHAR(100) NOT NULL , PRIMARY KEY (`no`)) ENGINE = InnoDB; 