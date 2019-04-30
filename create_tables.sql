CREATE TABLE IF NOT EXISTS `customer` (
  `accountID` int(11) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `phoneNumber` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `employee` (
  `name` varchar(60) DEFAULT NULL,
  `employeeID` int(11) NOT NULL DEFAULT '0',
  `email` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `inventory` (
  `itemNumber` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantityInStock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `transactions` (
  `transactionID` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `totalSpent` float DEFAULT NULL,
  `paymentMethod` varchar(20) DEFAULT NULL,
  `employeeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;