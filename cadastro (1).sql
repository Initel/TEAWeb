CREATE DATABASE `cadastro`;

USE `cadastro`;

CREATE TABLE `diario` (
  `id` int(11) NOT NULL,
  `usuario_id` varchar(255) DEFAULT NULL,
  `anotacao` varchar(1000) DEFAULT NULL,
  `data_criacao` datetime DEFAULT current_timestamp(),
  `emocao` varchar(10) DEFAULT NULL
);

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `status` enum('pendente','concluída') DEFAULT 'pendente',
  `data_criacao` datetime DEFAULT current_timestamp()
);


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  `nivel` varchar(255) DEFAULT NULL,
  `tipo_acompanhamento` varchar(255) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL
);


INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `responsavel`, `nivel`, `tipo_acompanhamento`, `idade`) VALUES
(1, 'admin', 'admin@example.com', '1234', NULL, NULL, NULL, NULL),
(2, 'teste', 'teste@gmail.com', '4321', NULL, NULL, NULL, NULL),;

ALTER TABLE `diario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `diario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `tarefas`
  ADD CONSTRAINT `tarefas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;