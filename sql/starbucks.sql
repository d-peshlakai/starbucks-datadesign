DROP TABLE IF EXISTS starRating;
DROP TABLE IF EXISTS coffee;
DROP TABLE IF EXISTS customer;

CREATE TABLE customer(
	customerId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	customerUserName VARCHAR(32) NOT NULL,
	customerSalt CHAR(64) NOT NULL,
	customerHash CHAR(128) NOT NULL,
	customerEmail VARCHAR(128) NOT NULL,
	UNIQUE (customerEmail),
	PRIMARY KEY (customerId)
);

CREATE TABLE coffee (
	coffeeId          INT UNSIGNED AUTO_INCREMENT NOT NULL,
	coffeeName        INT UNSIGNED                NOT NULL,
	coffeePrice       DECIMAL(2, 2),
	coffeeDescription VARCHAR(148)                NOT NULL,
	coffeeItemType    VARCHAR(34)                 NOT NULL,
	coffeeCount       DECIMAL(5, 2),
	coffeeRoast       VARCHAR(32)                 NOT NULL,
	INDEX (coffeeName),
	FOREIGN KEY (coffeeItemType) REFERENCES customer (customerId),
	PRIMARY KEY (coffeeId)
);

CREATE TABLE starRating (
	starRatingCustomerId INT UNSIGNED NOT NULL,
	starDate DATETIME NOT NULL,
	starRating SMALLINT UNSIGNED,
	starRatingCoffeeId VARCHAR(128),
	INDEX (starRatingCoffeeId),
	INDEX (starRatingCustomerId),
	FOREIGN KEY (starRatingCoffeeId) REFERENCES coffee(coffeeId),
	FOREIGN KEY (starRatingCustomerId) REFERENCES customer(customerId),
	PRIMARY KEY (starRatingCoffeeId, starRatingCustomerId)
);