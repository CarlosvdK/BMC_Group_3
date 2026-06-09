-- Foundry database dump
-- Import this file in phpMyAdmin (Import tab) after creating a database called `foundry`.
-- One single table: `users` (each user is a founder). It covers BOTH mandatory
-- functionalities: registration/login writes to it, and the Founder Directory reads from it.

CREATE DATABASE IF NOT EXISTS `foundry` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `foundry`;

-- --------------------------------------------------------

-- Table structure for table `users`
CREATE TABLE `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,          -- Technical / Commercial / Domain expert
  `industry` varchar(50) DEFAULT NULL,
  `looking_for` varchar(100) DEFAULT NULL,  -- desired co-founder profile
  `bio` text,
  `admin` int(11) NOT NULL DEFAULT 0,       -- 0 = founder, 1 = administrator
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- Some sample founders so the directory is not empty during the demo
INSERT INTO `users`
(`firstname`,`lastname`,`email`,`username`,`password`,`city`,`role`,`industry`,`looking_for`,`bio`,`admin`) VALUES
('Admin','Foundry','admin@foundry.eu','admin','admin@123','Barcelona','Domain expert','Platform','Anyone','System administrator account.',1),
('Marta','Riera','marta@foundry.eu','marta','marta@123','Barcelona','Technical','Climate','Commercial co-founder','Backend engineer who wants to build climate software. Ex-fintech.',0),
('Tom','Hayes','tom@foundry.eu','tom','tom@123','London','Commercial','Fintech','Technical co-founder','Sales and operations background, looking for a strong technical partner.',0),
('Lena','Vogel','lena@foundry.eu','lena','lena@123','Munich','Domain expert','Healthcare','Execution co-founder','Doctor with a clear product idea for hospital workflows.',0);
