DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(25) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pswd` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile_no` (`mobile_no`)
)

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `star` float DEFAULT '3',
  `city` varchar(20) DEFAULT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `veg_nonveg` varchar(6) DEFAULT 'veg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`address`,`mobile_no`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
)

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `u_id` varchar(25) NOT NULL,
  `r_id` int(11) NOT NULL,
  PRIMARY KEY (`u_id`,`r_id`),
  FOREIGN KEY (`u_id`) REFERENCES user(`id`),
  FOREIGN KEY (`r_id`) REFERENCES restaurant(`id`)
)

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `r_id` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  FOREIGN KEY (`r_id`) REFERENCES restaurant(`id`)
)

DROP TABLE IF EXISTS `serves`;
CREATE TABLE IF NOT EXISTS `serves` (
  `r_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `star` float NOT NULL DEFAULT '3',
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT '0',
  PRIMARY KEY (`r_id`,`f_id`),
  FOREIGN KEY (`r_id`) REFERENCES restaurant(`id`),
  FOREIGN KEY (`f_id`) REFERENCES food(`id`),
  check (star<=5 && star >= 0)
)

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `u_id` varchar(25) NOT NULL,
  `r_id` int(11) NOT NULL,
  `qnty` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`u_id`,`r_id`,`date`),
  FOREIGN KEY (`u_id`) REFERENCES user(`id`), 
  FOREIGN KEY (`r_id`) REFERENCES restaurant(`id`) 
) 