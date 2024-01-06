DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Subject` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Text` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone Number` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL
  PRIMARY KEY (`id`)
);

INSERT INTO `messages`(
    `Subject`,
    `Text`,
    `Email`,
    `Phone Number`
)
VALUES(
    '[value-1]',
    '[value-2]',
    '[value-3]',
    '[value-4]'
);

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Account Name	` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `User` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Price` int NOT NULL,
  `isDeleted` BOOLEAN DEFAULT 0
  PRIMARY KEY (`id`)
);

INSERT INTO `products`(
    `Account Name`,
    `Description`,
    `User`,
    `Password`,
    `Price`,
    `isDeleted`
)
VALUES(
    '[value-1]',
    '[value-2]',
    '[value-3]',
    '[value-4]',
    '[value-5]',
    0
);

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `First Name` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Last Name` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone Number` varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Address`varchar(250) COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `isDeleted` BOOLEAN DEFAULT 0
  PRIMARY KEY (`id`)
);

INSERT INTO `users`(
    `First Name`,
    `Last Name`,
    `Email`,
    `Phone Number`,
    `Address`,
    `isDeleted`
)
VALUES(
    '[value-1]',
    '[value-2]',
    '[value-3]',
    '[value-4]',
    '[value-5]',
    0
);