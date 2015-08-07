DROP TABLE IF EXISTS `tbl_advertise`;
CREATE TABLE tbl_advertise (
	id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
	title VARCHAR(1024) DEFAULT '' COMMENT 'Заголовок объявления',
	description TEXT DEFAULT ''  COMMENT 'Текст объявления',
	category_id INTEGER DEFAULT 0 COMMENT 'Категория',
	created DATETIME COMMENT 'Время создания',
	is_accepted TINYINT DEFAULT 0 COMMENT 'Проверен модератором',
	count_views INTEGER DEFAULT 0 COMMENT 'Количество просмотров',
	`delta` INTEGER DEFAULT 0 COMMENT 'Позиция'
)ENGINE=InnoDB  DEFAULT CHARSET=UTF8;
