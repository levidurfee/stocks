CREATE TABLE `nyse` (
	`id` MEDIUMINT(30) UNSIGNED NOT NULL AUTO_INCREMENT,
	`symbol` VARCHAR(5) NULL DEFAULT NULL,
	`date` DATETIME NOT NULL,
	`open` DECIMAL(20,4) NOT NULL,
	`high` DECIMAL(20,4) NOT NULL,
	`low` DECIMAL(20,4) NOT NULL,
	`close` DECIMAL(20,4) NOT NULL,
	`volume` DECIMAL(20,4) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `unique_index` (`symbol`, `date`),
	INDEX `id` (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;
