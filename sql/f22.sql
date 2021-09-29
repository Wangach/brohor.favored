/*Fifa 22 users*/
CREATE TABLE `systwone`.`f2users` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(1000) NOT NULL , `password` VARCHAR(1000) NOT NULL , `phone` INT NOT NULL , `alias` VARCHAR(100) NOT NULL , `favteam` VARCHAR(100) NOT NULL , `login` INT NOT NULL DEFAULT '0' , `unomas` INT NOT NULL , `regdate` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;


/*Fifa 22 Looser-pay*/
CREATE TABLE `systwone`.`f2looser` ( `id` INT NOT NULL , `Hplayer` VARCHAR(100) NOT NULL , `Aplayer` VARCHAR(100) NOT NULL , `Hteam` VARCHAR(100) NOT NULL , `Ateam` VARCHAR(100) NOT NULL , `Hscore` INT NOT NULL , `Ascore` INT NOT NULL , `winner` VARCHAR(100) NOT NULL , `looser` VARCHAR(100) NOT NULL , `tomatch` VARCHAR(10) NOT NULL , `coupon` VARCHAR(10) NOT NULL , `debt` INT NOT NULL , `tarehe` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `matchid` INT NOT NULL ) ENGINE = InnoDB;



/*Fifa 22 Fair Game*/