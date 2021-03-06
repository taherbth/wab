CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `account_category` varchar(100) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `transition_password` varchar(100) NOT NULL,
  `sponsor_id` varchar(100) NOT NULL,
  `binary_id` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `pin_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `join_date` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `nominy_name` varchar(100) NOT NULL,
  `nominy_mobile_number` varchar(100) NOT NULL,
  `nominy_relationship` varchar(100) NOT NULL,
  `nominy_present_address` varchar(100) NOT NULL,
  `nominy_permanent_address` varchar(100) NOT NULL,
  `nominy_email` varchar(100) NOT NULL,
  `nominy_country` varchar(100) NOT NULL,
  `nominy_city` varchar(100) NOT NULL,
  `nominy_zip_code` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `bank_account_name` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `bank_account_number` varchar(100) NOT NULL,
  `bank_account_type` varchar(100) NOT NULL,
  `swift_code` varchar(100) NOT NULL,
  `terms` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;