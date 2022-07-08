DROP DATABASE IF EXISTS `apache_spark`;
CREATE DATABASE `apache_spark`;

DROP TABLE IF EXISTS `apache_spark`.`contact_requests`;
CREATE TABLE `apache_spark`.`contact_requests`
	(
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`name` VARCHAR(128) NOT NULL,
		`email` VARCHAR(128) NOT NULL,
		`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
	); 

DROP TABLE IF EXISTS `apache_spark`.`users`;
CREATE TABLE `apache_spark`.`users`
	(
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`name` VARCHAR(128) NOT NULL,
		`email` VARCHAR(128) NOT NULL UNIQUE,
		`password` VARCHAR(256) NOT NULL,
		`admin` BOOLEAN DEFAULT '0' NOT NULL,
		`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
	);

DROP TABLE IF EXISTS `apache_spark`.`blogs`;
CREATE TABLE `apache_spark`.`blogs`
	(
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`author_id` INT,
		`title` VARCHAR(128) NOT NULL,
		`content` TEXT NOT NULL,
		`featured` BOOLEAN DEFAULT '0' NOT NULL,
		`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		FOREIGN KEY (`author_id`) REFERENCES `apache_spark`.`users`(`id`)
	);

DROP TABLE IF EXISTS `apache_spark`.`comments`;
CREATE TABLE `apache_spark`.`comments`
	(
		`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`content` TEXT NOT NULL,
		`user_id` INT,
		`blog_id` INT,
		`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
		FOREIGN KEY (`user_id`) REFERENCES `apache_spark`.`users`(`id`),
		FOREIGN KEY (`blog_id`) REFERENCES `apache_spark`.`blogs`(`id`)
	);
