CREATE TABLE `users` (
  `userID` mediumint(8) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL default '',
  `password` varchar(100) NOT NULL default '',
  `email` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`userID`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


CREATE TABLE `message` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `from` varchar(50) NOT NULL default '',
  `to` varchar(50) NOT NULL default '',
  `msg` TEXT,
  `read` tinyint(1) default 0,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `users` VALUES (1, 'admin', '********', 'hello@word.me');
