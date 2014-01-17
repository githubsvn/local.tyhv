-- 
-- Table structure for table `counters`
-- 

CREATE TABLE `counters` (
  `id` int(11) NOT NULL auto_increment,
  `ip` varchar(50) NOT NULL,
  `time` varchar(11) NOT NULL,
  `date_visit` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;
