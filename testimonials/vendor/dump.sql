-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.39 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных review
CREATE DATABASE IF NOT EXISTS `review` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `review`;

-- Дамп структуры для таблица review.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `review_id` int(11) unsigned NOT NULL DEFAULT '0',
  `author_id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы review.images: ~5 rows (приблизительно)
DELETE FROM `images`;
INSERT INTO `images` (`id`, `review_id`, `author_id`, `name`) VALUES
	(1, 1, 1, '1.jpg'),
	(2, 1, 1, '2.jpg'),
	(3, 1, 1, '3.jpg'),
	(4, 3, 3, '1.jpg'),
	(5, 3, 3, '2.jpg');

-- Дамп структуры для таблица review.review
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `review` varchar(3600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) unsigned NOT NULL DEFAULT '0',
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы review.review: ~5 rows (приблизительно)
DELETE FROM `review`;
INSERT INTO `review` (`id`, `review`, `author_id`, `date`) VALUES
	(1, 'Производительность для full hd топ. DLSS конечно решает. Без DLSS карта, уровня 1660 super. Но охлаждение храмает, лучше ставить в продуваемый корпус ATX. И делать андервольт. У меня получилось 0.825в, частота 1777 по ядру. По чипу 60, hotspot 80. В стоке, частота 2000, 1.25в. Охлаждение не справляется. По чипу 80, hotspot 110. При этом можно гнать память, + 1000 Мгц. ', 1, '2023-07-18 18:31:48'),
	(2, 'Одно из самых ужасных исполнений данной видеокарты. Одна теплотрубка на такой чип это по сути ничего. Два вентилятора, да, нормально. Но толку от них если остальная система охлаждения никакущая. Даже у одновентиляторной той же Асус Феникс их две и она холоднее. Люди, не берите это. ', 2, '2023-07-17 09:14:31'),
	(3, 'Греется под 75 градусов на 100% оборотах вертушек. Hot spot вообще под 90 градусов. Сделал андервольт через msi afterburner до 0.875. Теперь 60 градусов по чипу и 70 на hot spot. Производители карт вообще не думают о напруге, зашивают максимально стабильный вольтаж с большим запасом под разгон. Из-за чего такие огрызки с ужасным охладом на одной теплотрубке просто плавятся в течении года. На секундочку - одновентиляторная палит stormx имеет 3 теплотрубки и на порядки холоднее этого куска пластика. Достоинства: За такой прайс их нет ', 3, '2023-07-12 11:52:14'),
	(4, 'Взял под замену 1070. Справедливости ради, нужно отметить что у меня широкоформатный 2к-монитор. Имейте это ввиду, читая отзыв. По играм: - Киберпанк - сразу мимо. У меня есть подозрение, что он ни на каком железе нормально не будет работать. 50 кадров со включенным DLSS и выключенным RTX. К слову, на 1070 было 40 кадров. - Вольфенштейн - на моём мониторе со включенным RTX тянет 60 кадров. Без RTX - 100. - Танки - тут и ёжику понятно. Максимальные настройки, миллиард кадров/наносек и тп. Прогнал карту тестами. Вот чё получил: - 70-75 градусов на чипе для неё - норма. Не самые большие температуры, но многовато. Тест памяти не запускал - Попробовал выжать кулер на максимум во время теста. Температуру сбрасывает, но как-то совсем медленно и грустно Гнать/капать зефир не пробовал. По шуму - не заметил разницы с 1070 Вывод. Карта под игры 2016-2018 года. Вольфенштайн и ведьмак - на максималках. Под 2-4к мониторы и киберпанк нужно что-то по цене машины. ', 4, '2023-07-19 20:21:41'),
	(5, 'Тест', 3, '2023-07-19 19:41:54');

-- Дамп структуры для таблица review.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы review.user: ~4 rows (приблизительно)
DELETE FROM `user`;
INSERT INTO `user` (`id`, `name`, `email`) VALUES
	(1, 'Илья', 'in@gmail.com'),
	(2, 'Роман', 'roman@gmail.com'),
	(3, 'Jorik', 'Jorik@gmail.com'),
	(4, 'Антон', 'anton@gmail.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
