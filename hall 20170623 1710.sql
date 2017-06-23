--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.2.63.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 23.06.2017 17:10:13
-- Версия сервера: 5.5.5-10.1.19-MariaDB
-- Версия клиента: 4.1
--


-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE hall;

--
-- Описание для таблицы tickets_category
--
DROP TABLE IF EXISTS tickets_category;
CREATE TABLE tickets_category (
  id INT(11) NOT NULL AUTO_INCREMENT,
  category_name VARCHAR(255) DEFAULT NULL,
  category_price VARCHAR(255) DEFAULT NULL,
  category_color VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 1
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы user
--
DROP TABLE IF EXISTS user;
CREATE TABLE user (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) DEFAULT NULL,
  password VARCHAR(255) DEFAULT NULL,
  email VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 3
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы tickets_category
--

-- Таблица hall.tickets_category не содержит данных

-- 
-- Вывод данных для таблицы user
--
INSERT INTO user VALUES
(1, 'Artem', 'e13e0554f557ba882751e261b5a60777b337bea6', 'admin@cib.net.ua'),
(2, 'Another', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'lanart@ex.ua');

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;