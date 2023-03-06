CREATE DATABASE IF NOT EXISTS `web`;
USE `web`;
DROP TABLE IF EXISTS `web_users`;
CREATE TABLE `web_users` (
  `user_id` int(8) unsigned NOT NULL auto_increment, 
  `user_Lname` varchar(180) NOT NULL default '',
  `user_Fname` varchar(180) NOT NULL default '',
  `user_email` varchar(180) NOT NULL default '',
  `user_password` varchar(180) NOT NULL default '',
  `user_date_added` date NOT NULL,
  `user_time_added` time NOT NULL,	
  PRIMARY KEY  (`user_id`)
);