DROP TABLE IF EXISTS `withheld`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `withheld` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `thread` int(11) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `name` varchar(35) DEFAULT NULL,
  `trip` varchar(15) DEFAULT NULL,
  `capcode` varchar(50) DEFAULT NULL,
  `body` text NOT NULL,
  `body_nomarkup` text,
  `time` int(11) NOT NULL,
  `bump` int(11) DEFAULT NULL,
  `files` text,
  `num_files` int(11) DEFAULT '0',
  `filehash` text CHARACTER SET ascii,
  `password` varchar(20) DEFAULT NULL,
  `ip` varchar(39) CHARACTER SET ascii NOT NULL,
  `sticky` int(1) NOT NULL,
  `locked` int(1) NOT NULL,
  `cycle` int(1) NOT NULL,
  `sage` int(1) NOT NULL,
  `embed` text,
  `slug` varchar(256) DEFAULT NULL,
  `reference` varchar(256)  NOT NULL,
  `board`  varchar(256) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `thread_id` (`thread`,`id`),
  KEY `filehash` (`filehash`(40)),
  KEY `time` (`time`),
  KEY `ip` (`ip`),
  KEY `list_threads` (`thread`,`sticky`,`bump`)
) ENGINE=MyISAM AUTO_INCREMENT=164 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;