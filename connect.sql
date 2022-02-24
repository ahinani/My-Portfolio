SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `fn` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `sub` varchar(90) NOT NULL,
  `ta` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;