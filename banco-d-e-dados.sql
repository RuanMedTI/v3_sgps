CREATE TABLE usuarios (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  senha VARCHAR(100) NULL,
  cpf VARCHAR(14) NULL,
  data_nascimento DATE NULL,
  PRIMARY KEY(id)
);

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`, `data_nascimento`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', '12312312312', '2001-06-04 21:49:00');

CREATE TABLE `compromissos` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `local_compromisso` varchar(255) NOT NULL,
  `data_compromisso` DATE NOT NULL,
  `voluntario_resp` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  PRIMARY KEY(id)
);

INSERT INTO `compromissos` (`id`, `local_compromisso`, `data_compromisso`, `voluntario_resp`, `cidade`, `uf`) VALUES
(1, 'Assossiação do Santa Helena', '2024-01-01 16:45:00', 'Carlos Fontana', 'Lages', 'SC'),
(2, 'Salão Igreja Copacabana', '2024-02-03 13:45:00', 'Rodrigo Silva', 'Lages', 'SC');

CREATE TABLE `locais` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `local_nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  PRIMARY KEY(id)
);

INSERT INTO `locais` (`id`, `local_nome`, `endereco`, `cep`, `cidade`, `uf`) VALUES
(1, 'Igreja do Navio', 'Av. Dom Pedro II', '88500400', 'Lages', 'SC'),
(2, 'Assossiação da Habitação', 'Rua Rogério Ramos', '88500403', 'Lages', 'SC');
