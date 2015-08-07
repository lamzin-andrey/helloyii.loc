DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE tbl_category (
	id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
	name VARCHAR(255) DEFAULT '' COMMENT 'Категория',
	parent_id INTEGER DEFAULT 0 COMMENT 'Родительская категория',
	created DATETIME COMMENT 'Время создания',
	is_accepted TINYINT DEFAULT 0  COMMENT 'Проверен модератором',
	quantity_products INTEGER DEFAULT 0  COMMENT 'Количество продуктов в каждой категории',
	delta INTEGER DEFAULT 0  COMMENT 'Позиция'
)ENGINE=InnoDB  DEFAULT CHARSET=UTF8;

