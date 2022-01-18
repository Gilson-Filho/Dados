CREATE TABLE IF NOT EXISTS `programadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `programadores` (`id`, `nome`, `sobrenome`) VALUES
(1, ' Gilson', 'Filho'),
(2, 'Jamily', 'Franciele'),
(3, 'Jaiane', 'Souza'),
(4, 'Jaine', 'Daniele'),
(5, 'Deilde', 'Vieira'),
(6, 'Celio', 'Pardim');
