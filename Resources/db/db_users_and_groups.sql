CREATE TABLE  `Groups` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE  `Users` (
	`id` int NOT NULL AUTO_INCREMENT,
	`last_name` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`middle_name` varchar(255) DEFAULT NULL,
	`date_added` DATETIME,
	`fk_group_id` int NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`fk_group_id`) references Groups(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


INSERT INTO `Groups` (`id`, `name`) VALUES(1, 'Symfony Pros');
INSERT INTO `Groups` (`id`, `name`) VALUES(2, 'Doctrine Dumps');
INSERT INTO `Groups` (`id`, `name`) VALUES(3, 'Teachers Extraordinaire');

INSERT INTO `Users` (`id`, `last_name`, `first_name`, `middle_name`, `fk_group_id`) VALUES(1, 'Here', 'Your', 'Name', 1);
INSERT INTO `Users` (`id`, `last_name`, `first_name`, `fk_group_id`) VALUES(2, 'Potencier', 'Fabien', 1);
INSERT INTO `Users` (`id`, `last_name`, `first_name`, `fk_group_id`) VALUES(3, 'Funai', 'Kurt',  3);
INSERT INTO `Users` (`id`, `last_name`, `first_name`, `fk_group_id`) VALUES(4, 'Ewing', 'Court',  3);
INSERT INTO `Users` (`id`, `last_name`, `first_name`, `middle_name`, `fk_group_id`) VALUES(5, 'You', 'The', 'Old', 2); 

