USE gourmet;

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(25) NOT NULL,
  `pswd` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `mobile_no` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile_no` (`mobile_no`)
);


CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile_no` int(10) DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `veg_nonveg` varchar(6) DEFAULT 'veg',
  PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `serves` (
  `r_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT '0',
  PRIMARY KEY (`r_id`,`f_id`),
  FOREIGN KEY (`r_id`) REFERENCES restaurant(`id`),
  FOREIGN KEY (`f_id`) REFERENCES food(`id`)
);


CREATE TABLE IF NOT EXISTS `books` (
  `u_id` varchar(25) DEFAULT NULL,
  `r_id` int(11) DEFAULT NULL,
  `qnty` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  FOREIGN KEY (`u_id`) REFERENCES user(`id`),
  FOREIGN KEY (`r_id`) REFERENCES restaurant(`id`)
);


CREATE TABLE IF NOT EXISTS `owner` (
  `u_id` varchar(25) NOT NULL,
  `r_id` int(11) NOT NULL,
  PRIMARY KEY (`u_id`,`r_id`),
  FOREIGN KEY (`u_id`) REFERENCES user(`id`),
  FOREIGN KEY (`r_id`) REFERENCES restaurant(`id`)
);

CREATE TABLE IF NOT EXISTS `seats` (
  `r_id` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  FOREIGN KEY (`r_id`) REFERENCES restaurant(`id`)
);

-- IMPORTANT
ALTER TABLE `restaurant` CHANGE `star` `star` DECIMAL(2,1) NOT NULL DEFAULT '0'; 
ALTER TABLE `serves` CHANGE `star` `star` DECIMAL(2,1) NOT NULL DEFAULT '0'; 

-- RUN THIS LINES 
ALTER TABLE `user` ADD `name` VARCHAR(20) NULL DEFAULT NULL AFTER `id`; 
ALTER TABLE `books` ADD `duration` TIME NOT NULL AFTER `time`; 
ALTER TABLE `books` CHANGE `time` `time` TIME NULL DEFAULT NULL; 
ALTER TABLE `books` CHANGE `u_id` `u_id` VARCHAR(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL; 
ALTER TABLE `books` CHANGE `r_id` `r_id` INT(11) NOT NULL; 
ALTER TABLE `books` CHANGE `qnty` `qnty` INT(11) NOT NULL; 
ALTER TABLE `books` CHANGE `time` `time` TIME NOT NULL; 

DROP TABLE `books`;
CREATE TABLE `books` (
  `u_id` varchar(25) NOT NULL,
  `r_id` int(11) NOT NULL,
  `qnty` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `date` date DEFAULT NULL
) 
