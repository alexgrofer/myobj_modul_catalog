-- Catalog
CREATE TABLE `setcms_ccatalog_category` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`codename` varchar(255) NOT NULL,
	`parent_id` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`),
	KEY `parent_id` (`parent_id`)
);

CREATE TABLE `setcms_ccatalog_option` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`codename` varchar(255) NOT NULL,
	`type` tinyint(1) NOT NULL, -- логическое bool, список?
	`range` varchar(255) DEFAULT '', -- стандартный максимальный диапазон '20-400'
	PRIMARY KEY (`id`)
);

CREATE TABLE `setcms_ccatalog_category_option` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`category_id` int(11) NOT NULL,
	`option_id` int(11) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uk_category_id_option_id` (`category_id`,`option_id`),
	CONSTRAINT `setcms_ccatalog_category_option_ibfk_category_id` FOREIGN KEY (`category_id`) REFERENCES `setcms_ccatalog_category` (`id`) ON UPDATE CASCADE,
	CONSTRAINT `setcms_ccatalog_category_option_ibfk_option_id` FOREIGN KEY (`option_id`) REFERENCES `setcms_ccatalog_option` (`id`) ON UPDATE CASCADE
);

CREATE TABLE `setcms_ccatalog_option_params` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`codeval` varchar(255) NOT NULL,
	`id_option` int(11) NOT NULL,
	PRIMARY KEY (`id`),
	KEY `id_option` (`id_option`),
	CONSTRAINT `setcms_ccatalog_option_params_ibfk_id_option` FOREIGN KEY (`id_option`) REFERENCES `setcms_ccatalog_category_option` (`id`) ON UPDATE CASCADE
);