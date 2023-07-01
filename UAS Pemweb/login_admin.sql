-- Database: 'login_admin'

-- Struktur dari tabel 'login_admin'

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table 'login_admin'

INSERT INTO `login_admin` (`id`, `username`, `password`) VALUES
(1, 'jipo910', 'admin'),
(2, 'jipo911', 'boom');
