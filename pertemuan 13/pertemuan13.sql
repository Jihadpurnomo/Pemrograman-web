-- database 'dbminggu13'
-- Struktur dari tabel 'bljr_login'

CREATE DATABASE dbminggu13;

CREATE TABLE bljr_login (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table 'bljr_login`
INSERT INTO bljr_login (id, username, password) VALUES
(1, 'Andi', 'uhuy123'),
(2, 'Santoso', 'qwerty'),
(3, 'Samsul', 'dodolpret'),
(4, 'Administrator', 'admin456');
