SET time_zone = "+00:00";

-- Database: 'spaceship'
--
-- --------------------------------------------------------
--
-- Table structure for table 'user'
--

DROP TABLE IF EXISTS 'user';
CREATE TABLE IF NOT EXISTS 'user' (
  'registration_date' datetime NOT NULL DEFAULT '1979-01-01 00:00:00',
  'password' varchar(32) NOT NULL,
  'email' varchar(32) NOT NULL,
  'name' varchar(32) DEFAULT NULL,
  'activated' tinyint(1) NOT NULL DEFAULT '0',
  'admin' tinyint(1) NOT NULL DEFAULT '0',
  'phone' char(11) DEFAULT NULL,
  'country' varchar(10) DEFAULT NULL,
  'domain' varchar(20) DEFAULT NULL,
  'disabled' tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
