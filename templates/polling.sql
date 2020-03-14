CREATE TABLE IF NOT EXISTS `poll` (
  `id` int(11) UNSIGNED NOT NULL,
  `board` varchar(255) NOT NULL,
  `questionaire_json` mediumtext NOT NULL,
  `mutliple_choice` int(1) NOT NULL,
  `post_count` int(20) NOT NULL,
  `expires` int(20) NOT NULL,
  `created` int(20) NOT NULL,
  `colors` varchar(255),
  CONSTRAINT pk_poll PRIMARY KEY(id, board) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `responders` (
  `poll_id` int(11) UNSIGNED NOT NULL,
  `board` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `responses` mediumtext NOT NULL,
  CONSTRAINT fk_poll_id FOREIGN KEY (poll_id, board) REFERENCES poll(id, board) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
