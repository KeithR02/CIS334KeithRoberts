CREATE DATABASE krdatabase;

USE krdatabase;

CREATE TABLE Items (
	ItemID int PRIMARY KEY,
	CountryOrigin VARCHAR(255),
	SizeType VARCHAR(255),
	PurchasedBefore VARCHAR(3)
);

CREATE TABLE OrderInformation (
	OrderID int PRIMARY KEY,
	ItemID int,
	QuantityOrdered Int,
	Cost DECIMAL(10, 2),
	OrderDate DATE,
	AdditionalInfo VARCHAR(255),
	FOREIGN KEY (ItemID) REFERENCES Items(ItemID)
);