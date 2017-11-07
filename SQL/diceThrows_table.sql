create table if not EXISTS `diceThrows`(
`id` int(20) auto_increment not NULL,
`thrower_id` int(10) NOT NULL,
`dice_number` int(10) NOT NULL,
`dice_type` varchar(10) NOT NULL,
`values` varchar(255),
`sum_values` int(20),
primary key(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;