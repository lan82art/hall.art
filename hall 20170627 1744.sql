--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.2.63.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 27.06.2017 17:44:02
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
-- Описание для таблицы order_items
--
DROP TABLE IF EXISTS order_items;
CREATE TABLE order_items (
  ticket_id VARCHAR(255) DEFAULT NULL,
  order_id VARCHAR(255) DEFAULT NULL
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы orders
--
DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
  id INT(11) NOT NULL AUTO_INCREMENT,
  user_id VARCHAR(255) DEFAULT NULL,
  amount DECIMAL(8, 2) DEFAULT NULL,
  status VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 1
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы tickets_category
--
DROP TABLE IF EXISTS tickets_category;
CREATE TABLE tickets_category (
  id INT(11) NOT NULL AUTO_INCREMENT,
  category_name VARCHAR(255) DEFAULT NULL,
  category_price VARCHAR(255) DEFAULT NULL,
  category_color VARCHAR(255) DEFAULT NULL,
  category_limit VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 6
AVG_ROW_LENGTH = 3276
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы tikets
--
DROP TABLE IF EXISTS tikets;
CREATE TABLE tikets (
  id INT(11) NOT NULL AUTO_INCREMENT,
  location VARCHAR(255) DEFAULT NULL,
  category VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 12
AVG_ROW_LENGTH = 1820
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
AUTO_INCREMENT = 6
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы order_items
--

-- Таблица hall.order_items не содержит данных

-- 
-- Вывод данных для таблицы orders
--

-- Таблица hall.orders не содержит данных

-- 
-- Вывод данных для таблицы tickets_category
--
INSERT INTO tickets_category VALUES
(1, '400грн.', '400', 'green', '5'),
(2, '300грн.', '300', 'orange', '10'),
(3, '250грн.', '250', 'blue', '10'),
(4, '200грн.', '200', 'light-blue', '10'),
(5, '100грн.', '100', 'red', '15');

-- 
-- Вывод данных для таблицы tikets
--
INSERT INTO tikets VALUES
(1, 'A0101', '4'),
(4, 'A0102', '4'),
(5, 'A0103', '4'),
(6, 'A0105', '4'),
(7, 'A0106', '4'),
(8, 'A0107', '4'),
(9, 'A0108', '4'),
(10, 'A0109', '4'),
(11, 'A0110', '4');

-- 
-- Вывод данных для таблицы user
--
INSERT INTO user VALUES
(1, 'Artem', 'e13e0554f557ba882751e261b5a60777b337bea6', 'admin@cib.net.ua'),
(2, 'Another', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'lanart@ex.ua'),
(3, 'ThirdUser', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'lanart@mail.ua'),
(4, 'FourthName', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'admin@cib.net'),
(5, 'asdasdas', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 'sergej-bespaliy@mail.ru');

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;