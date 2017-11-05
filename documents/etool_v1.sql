CREATE TABLE `tbl_account` (
	`account_id` INT NOT NULL,
	`username` varchar(45) NOT NULL,
	`password` TEXT(255) NOT NULL,
	`account_privilege` varchar(45) NOT NULL,
	PRIMARY KEY (`account_id`)
);

CREATE TABLE `tbl_user` (
	`user_id` INT(11) NOT NULL AUTO_INCREMENT,
	`fname` varchar(45) NOT NULL,
	`lname` varchar(45) NOT NULL,
	`email` varchar(45) NOT NULL,
	`user_picture` INT(45) NOT NULL,
	`user_account` INT(45) NOT NULL,
	PRIMARY KEY (`user_id`)
);

CREATE TABLE `tbl_projects` (
	`project_id` INT(11) NOT NULL,
	`title` varchar(45) NOT NULL,
	`database_name` varchar(45) NOT NULL,
	`project_owner` INT(11) NOT NULL,
	`file` INT(11) NOT NULL,
	`status` INT(11) NOT NULL,
	`date_created` TIMESTAMP NOT NULL,
	`date_updated` TIMESTAMP NOT NULL,
	PRIMARY KEY (`project_id`)
);

CREATE TABLE `tbl_guide` (
	`guide_id` INT(11) NOT NULL,
	`guide_title` TEXT NOT NULL,
	`body` TEXT NOT NULL,
	`category` INT(11) NOT NULL,
	`author` INT(11) NOT NULL,
	`date_created` TIMESTAMP NOT NULL,
	`date_updated` TIMESTAMP NOT NULL
);

CREATE TABLE `tbl_guide_category` (
	`category_id` INT(11) NOT NULL AUTO_INCREMENT,
	`category_name` varchar(45) NOT NULL,
	PRIMARY KEY (`category_id`)
);

CREATE TABLE `tbl_file` (
	`file_id` INT(11) NOT NULL AUTO_INCREMENT,
	`filename` varchar(45) NOT NULL,
	`file_description` varchar(45) NOT NULL,
	`file_type` INT(11) NOT NULL,
	PRIMARY KEY (`file_id`)
);

CREATE TABLE `tbl_type` (
	`type_id` INT(11) NOT NULL AUTO_INCREMENT,
	`type_name` varchar(45) NOT NULL,
	`description` varchar(45) NOT NULL,
	PRIMARY KEY (`type_id`)
);

ALTER TABLE `tbl_user` ADD CONSTRAINT `tbl_user_fk0` FOREIGN KEY (`user_picture`) REFERENCES `tbl_account`(`account_Id`);

ALTER TABLE `tbl_user` ADD CONSTRAINT `tbl_user_fk1` FOREIGN KEY (`user_account`) REFERENCES `tbl_account`(`account_id`);

ALTER TABLE `tbl_projects` ADD CONSTRAINT `tbl_projects_fk0` FOREIGN KEY (`project_owner`) REFERENCES `tbl_user`(`user_id`);

ALTER TABLE `tbl_projects` ADD CONSTRAINT `tbl_projects_fk1` FOREIGN KEY (`file`) REFERENCES `tbl_file`(`file_id`);

ALTER TABLE `tbl_guide` ADD CONSTRAINT `tbl_guide_fk0` FOREIGN KEY (`category`) REFERENCES `tbl_guide_category`(`category_id`);

ALTER TABLE `tbl_guide` ADD CONSTRAINT `tbl_guide_fk1` FOREIGN KEY (`author`) REFERENCES `tbl_user`(`user_id`);

ALTER TABLE `tbl_file` ADD CONSTRAINT `tbl_file_fk0` FOREIGN KEY (`file_type`) REFERENCES `tbl_type`(`type_id`);

