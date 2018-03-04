-- 
-- Editor SQL for DB table users
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `users` (
	`id` int(10) NOT NULL auto_increment,
	`username` varchar(255),
	`steamid64` varchar(255),
	`auid` varchar(255),
	`gebdat` date,
	`alt_aktl` numeric(9,2),
	`email` varchar(255),
	`register_ip` varchar(255),
	`reg_date` varchar(255),
	`passwort` varchar(255),
	PRIMARY KEY( `id` )
);