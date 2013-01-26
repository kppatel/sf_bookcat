SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Jules Verne', '2013-01-22 12:55:09', '2013-01-22 12:55:09'),
(2, 'Malcom Gladwell', '2013-01-23 11:20:48', '2013-01-23 11:20:48');

INSERT INTO `books` (`id`, `title`, `author_id`, `category_id`, `is_read`, `rating`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Around the world in 80 days', 1, 1, 1, 3, '', '2013-01-22 12:56:05', '2013-01-24 12:20:50'),
(2, 'Outliers', 2, 2, 0, 0, '', '2013-01-23 11:21:51', '2013-01-26 11:00:46'),
(3, 'Blink', 2, 2, 1, 3, '', '2013-01-26 11:43:22', '2013-01-26 11:43:52');

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sci-fi', '2013-01-22 12:55:28', '2013-01-22 12:55:28'),
(2, 'Non-fiction', '2013-01-23 11:21:21', '2013-01-23 11:21:21');
SET FOREIGN_KEY_CHECKS=1;