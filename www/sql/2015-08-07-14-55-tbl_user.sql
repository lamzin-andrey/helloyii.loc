DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL COMMENT 'Логин',
  `password` varchar(128) NOT NULL COMMENT 'Пароль',
  `email` varchar(128) NOT NULL COMMENT 'Email',
  `phone` BIGINT(17) NOT NULL COMMENT 'Телефон',
  `delta` INTEGER DEFAULT 0  COMMENT 'Позиция',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
