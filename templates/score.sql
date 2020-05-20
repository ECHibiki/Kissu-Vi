CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) UNSIGNED NOT NULL,
  `board` varchar(255) NOT NULL,
  `score` int(11) UNSIGNED DEFAULT 0,
  CONSTRAINT pk_score PRIMARY KEY(id, board)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `scorers` (
  `score_id` int(11) UNSIGNED NOT NULL,
  `board` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  CONSTRAINT fk_score_id FOREIGN KEY (score_id, board) REFERENCES score(id, board) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
