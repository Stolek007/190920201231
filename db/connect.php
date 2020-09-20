<?php

/*
 * CREATE TABLE `addresses` (
	`id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`city` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
	`area` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
	`street` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
	`house` VARCHAR(10) NOT NULL COLLATE 'utf8_general_ci',
	`additional_info` TEXT(65535) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

 * */

// Connecting to DataBase
$mysql = new \PDO('mysql:host=localhost;dbname=test_antagosoft;', 'root', 'root');
$mysql->exec('SET NAMES UTF8');