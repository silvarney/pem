-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13-Fev-2021 às 07:00
-- Versão do servidor: 8.0.23-0ubuntu0.20.04.1
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `saude`
--

--
-- Extraindo dados da tabela `acompanhamentos`
--

INSERT INTO `acompanhamentos` (`id`, `item`, `quantidade`, `inserido`, `user_id`, `area_id`, `created_at`, `updated_at`) VALUES
(5, 'Gestantes acompanhadas', 20, '2020-12-10', 1, 0, '2021-02-06 22:28:01', '2021-02-07 15:40:59'),
(6, 'Gestantes acompanhadas', 12, '2021-02-11', 1, 0, '2021-02-01 22:28:01', '2021-02-01 15:40:59'),
(7, 'Gestantes menores de 19 anos', 12, '2021-02-11', 1, 0, '2021-02-11 14:13:39', '2021-02-11 14:13:39'),
(8, 'Gestantes acompanhadas', 23, '2021-02-11', 1, 0, '2021-02-11 14:13:52', '2021-02-11 14:13:52'),
(9, 'Gestantes acompanhadas', 31, '2021-02-01', 1, 0, '2021-02-11 14:14:05', '2021-02-11 14:14:05'),
(10, 'Gestantes menores de 19 anos', 3, '2021-02-01', 1, 0, '2021-02-11 14:14:26', '2021-02-11 14:14:26');

--
-- Extraindo dados da tabela `areas`
--

INSERT INTO `areas` (`id`, `unidade`, `cnae`, `status`, `bairro`, `cidade`, `estado`, `cep`, `logradouro`, `descricao`, `numero`, `created_at`, `updated_at`) VALUES
(1, 'PATRIMÔNIO', '65767', 'ativo', 'ZONA RURAL', 'SÃO DOMINGOS DO CAPIM', 'PARÁ', '68689-000', 'Ramal', 'DO 10', '0', '2021-01-21 15:02:53', '2021-01-21 15:02:53'),
(2, 'ESPERANÇA', '89320', 'ativo', 'ZONA RURAL', 'SÃO DOMINGOS DO CAPIM', 'PARÁ', '68689-000', 'Ramal', 'DO BOA ESPERANÇA', '0', '2021-01-21 15:02:53', '2021-01-21 15:02:53'),
(3, 'BAIRRO ALTO', NULL, 'ativo', 'Centro', 'São Domingos do Capim', 'PA', '68680-000', 'Avenida', 'prox a escola', 's/n', '2021-01-28 02:51:50', '2021-01-28 02:51:50');

--
-- Extraindo dados da tabela `comorbidades`
--

INSERT INTO `comorbidades` (`id`, `tipo`, `doenca`, `paciente_id`, `user_id`, `area_id`, `created_at`, `updated_at`) VALUES
(5, 'DC Transmissíveis', 'Doença de Chagas', 4, 1, 1, '2021-01-01 16:13:23', '2021-02-07 16:13:23'),
(6, 'DC Transmissíveis', 'Doença de Chagas', 5, 1, 1, '2021-02-11 16:14:30', '2021-02-07 16:14:30'),
(7, 'DC Transmissíveis', 'Hanseníase', 1, 1, 1, '2021-02-11 16:48:28', '2021-02-11 16:48:28'),
(8, 'DC Não Transmissíveis', 'Hepatite B/C', 1, 1, 1, '2021-02-11 16:48:43', '2021-02-11 16:48:43'),
(9, 'DC Transmissíveis', 'Hanseníase', 1, 1, 1, '2021-02-11 16:48:28', '2021-02-11 16:48:28'),
(10, 'DC Transmissíveis', 'Hanseníase', 1, 1, 1, '2021-02-11 16:48:28', '2021-02-11 16:48:28');

--
-- Extraindo dados da tabela `comunidades`
--

INSERT INTO `comunidades` (`id`, `nome`, `status`, `area_id`, `microarea_id`, `created_at`, `updated_at`) VALUES
(1, 'São Marcos', 'ativo', 0, 1, '2021-01-23 15:36:47', '2021-01-23 15:36:47'),
(2, 'Santa Maria', 'ativo', 0, 1, '2021-01-23 15:38:44', '2021-01-23 15:38:44'),
(3, 'Areal', 'ativo', 1, 1, '2021-01-23 15:52:54', '2021-01-23 15:52:54'),
(4, 'NOVO HORIZONTE', 'ativo', 1, 2, '2021-01-23 15:53:19', '2021-01-23 15:53:19'),
(5, 'teste', 'ativo', 1, 2, '2021-01-23 15:53:40', '2021-01-23 15:53:40'),
(6, 'teste 3', 'ativo', 2, 3, '2021-01-23 15:53:58', '2021-01-23 15:53:58');

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id`, `tipo`, `paciente_id`, `funcionario_id`, `area_id`, `created_at`, `updated_at`) VALUES
(4, 'Enfermeiro', 5, 6, 1, '2021-02-06 14:18:25', '2021-02-07 16:14:03'),
(6, 'Médico', 1, 1, 1, '2021-02-06 22:18:39', '2021-02-06 22:18:39'),
(7, 'Vacinação', 4, 6, 1, '2021-02-06 22:19:20', '2021-02-06 22:19:20');

--
-- Extraindo dados da tabela `demograficos`
--

INSERT INTO `demograficos` (`id`, `item`, `quantidade`, `inserido`, `user_id`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'Número de usuários acompanhados no mês', 391, '2021-01-01', 1, 1, '2021-02-07 17:06:51', '2021-02-07 17:22:18'),
(2, 'Número de usuários', 241, '2021-02-11', 1, 1, '2021-02-11 17:07:20', '2021-02-07 17:25:49');

--
-- Extraindo dados da tabela `estoques`
--

INSERT INTO `estoques` (`id`, `codigo`, `produto`, `validade`, `quantidade`, `user_id`, `area_id`, `created_at`, `updated_at`) VALUES
(2, '0001', 'DIPIRONA 400MG', '2026-12-23', 33, 1, 1, '2021-02-05 05:00:49', '2021-02-07 17:25:09'),
(3, '0002', 'IBUPROFENO 400MG', '2021-06-30', 124, 1, 1, '2021-02-05 05:39:33', '2021-02-07 16:18:11'),
(4, '0003', 'CEFALEXINA 750MG', '2021-12-31', 87, 1, 1, '2021-02-05 05:49:05', '2021-02-07 16:16:30');

--
-- Extraindo dados da tabela `familias`
--

INSERT INTO `familias` (`id`, `numero`, `status`, `area_id`, `microarea_id`, `comunidade_id`, `created_at`, `updated_at`) VALUES
(1, '001', 'ativo', 2, 1, 3, '2021-01-23 16:30:54', '2021-01-23 16:30:54'),
(2, '002', 'ativo', 2, 1, 3, '2021-01-23 16:31:42', '2021-01-23 16:31:42'),
(3, '003', 'ativo', 2, 1, 3, '2021-01-23 16:31:58', '2021-01-23 16:31:58');

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `nascimento`, `sexo`, `raca`, `pai`, `mae`, `naturalidade`, `fone`, `rg`, `cpf`, `funcao`, `registro`, `status`, `bairro`, `cidade`, `estado`, `cep`, `logradouro`, `descricao`, `numero`, `complemento`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'Maria Pereira da Silva', '1974-01-08', 'feminino', 'preta', NULL, 'Antonia Pereira da Silva', 'São Domingos do Capim', '(91)78736537', '5674321', '987.987.987-98', 'Agente de Saúde', '0001', 'ativo', 'Bairro Novo', 'São Domingos do Capim', 'Pará', '68689-000', 'Avenida', 'prox a escola', '0', NULL, 2, '2021-01-21 12:11:49', '2021-01-21 12:11:49'),
(2, 'Antonio Marcos de Oliveira', '1974-01-08', 'feminino', 'branco', NULL, 'Maria Marcos de Oliveira', 'São Domingos do Capim', '(91)98376483', '7869436', '001.987.987-98', 'Agente de Saúde', '0001', 'ativo', 'Nova Esperança', 'São Domingos do Capim', 'Pará', '68689-000', 'Rua', 'Principal', '39', NULL, 2, '2021-01-21 12:11:49', '2021-01-21 12:11:49'),
(5, 'NATALIA NASCIMENTO GOMES', '1985-02-02', 'Feminino', 'Parda', 'ABEL DO NASCIMENTO GOMES', 'BERNADETE DO NASCIMENTO GOMES', 'TOMÉ-AÇU', '(91)991919191', '3754241', '001.002.003-04', 'Enfermeiro(a)', '425353', 'Ativo', 'Novo Horizonte', 'Concórdia', 'PA', '68685-000', 'Avenida', 'Dom Pedro Primeiro', '00', 'prox ao fim da rua.', 1, '2021-01-23 17:06:12', '2021-01-23 17:06:12'),
(6, 'JORGE ALMEIDA', '1984-08-15', 'Masculino', 'Indígena', 'MARIO ALMEIDA', 'MARIA ALMEIDA', 'Belém', '67123-92', '4783291', '111.111.111-11', 'Médico(a)', '863849', 'Ativo', 'Centro', 'SÃO DOMINGOS DO CAPIM', 'Pará', '68689-000', 'Avenida', 'Principal', '09', 'prox da escola', 1, '2021-01-23 17:10:19', '2021-01-23 17:10:19');

--
-- Extraindo dados da tabela `microareas`
--

INSERT INTO `microareas` (`id`, `nome`, `status`, `area_id`, `funcionario_id`, `created_at`, `updated_at`) VALUES
(1, 'Barro Alto', 'ativo', 1, 1, '2021-01-21 15:21:16', '2021-01-21 15:21:16'),
(2, 'Vila Nona', 'ativo', 1, 2, '2021-01-23 15:22:35', '2021-01-23 15:22:35'),
(3, 'Pista', 'ativo', 2, 1, '2021-01-23 15:23:05', '2021-01-23 15:23:05');

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_20_160912_create_areas_table', 1),
(5, '2021_01_20_160915_create_funcionarios_table', 1),
(6, '2021_01_20_160921_create_microareas_table', 1),
(7, '2021_01_20_160935_create_comunidades_table', 1),
(8, '2021_01_20_160946_create_familias_table', 1),
(9, '2021_01_20_160951_create_pacientes_table', 1),
(10, '2021_01_20_203437_create_consultas_table', 1),
(11, '2021_02_03_221557_create_estoques_table', 2),
(12, '2021_02_03_222207_create_retiradas_table', 2),
(13, '2021_02_06_102055_create_acompanhamentos_table', 3),
(14, '2021_02_06_102113_create_comorbidades_table', 3),
(15, '2021_02_07_140304_create_demograficos_table', 4),
(16, '2021_02_07_140316_create_moradias_table', 4);

--
-- Extraindo dados da tabela `moradias`
--

INSERT INTO `moradias` (`id`, `item`, `quantidade`, `inserido`, `user_id`, `area_id`, `created_at`, `updated_at`) VALUES
(2, 'Água fervida', 125, '2021-02-01', 1, 1, '2021-02-07 17:27:18', '2021-02-07 17:28:43'),
(3, 'Com energia elétrica', 213, '2021-01-01', 1, 1, '2021-02-07 17:27:45', '2021-02-07 17:27:45');

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `nascimento`, `sexo`, `raca`, `pai`, `mae`, `naturalidade`, `fone`, `rg`, `cpf`, `cartao`, `prontuario`, `status`, `bairro`, `cidade`, `estado`, `cep`, `logradouro`, `descricao`, `numero`, `complemento`, `area_id`, `microarea_id`, `comunidade_id`, `familia_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'MARIA EVANGELISTA', '1970-11-08', 'Masculino', 'Amarela', 'RAIMUNDO EVANGELISTA', 'ANTONIA EVANGELISTA', 'Tomé-Açu', '(91)99191-9191', '5424222', '001.003.004-05', '947 2987 3476', '87928374', 'ativo', 'Novo Horizonte', 'São Domingos do Capim', 'PA', '68685-000', 'Avenida', 'Principal', '08', 'prox a escola', 2, 1, 3, 1, 1, '2021-01-26 22:31:54', '2021-01-28 02:09:39'),
(2, 'JUJU MARIA', '2017-01-02', 'Masculino', 'Amarela', 'JOSE LOLO', 'VIVI CACA', 'São Domingos do Capim', '(98)87987-9798', '7453648', '898.798.798-79', '123 4567 890', '09', 'ativo', 'com nova luz', 'São Domingos do Capim', 'PE', '68635-000', 'Ramal', 'saia preta', 'sn', 'prox a igreja', 1, 1, 3, 1, 1, '2021-01-26 23:12:40', '2021-01-28 02:10:20'),
(4, 'MARCELO LIMA', NULL, 'Masculino', 'Amarela', 'MARCIO LIMA', 'MARIA LIMA', 'TOMÉ-AÇU', NULL, NULL, NULL, NULL, NULL, 'ativo', NULL, 'SÃO DOMINGOS DO CAPIM', 'PA', NULL, 'Avenida', NULL, NULL, NULL, 1, 1, 3, 1, 1, '2021-01-27 23:13:46', '2021-01-27 23:13:46'),
(5, 'RITA DA FACADA', '1990-12-07', 'Feminino', 'Indígena', 'RITO PAI', 'RITA MÃE', 'RITALINA', NULL, NULL, NULL, '111 2222 3333 4444', NULL, 'ativo', NULL, 'RITACITY', 'PA', NULL, 'Avenida', NULL, NULL, NULL, 2, 1, 3, 1, 1, '2021-01-27 23:22:24', '2021-01-27 23:22:24');

--
-- Extraindo dados da tabela `retiradas`
--

INSERT INTO `retiradas` (`id`, `quantidade`, `paciente_id`, `estoque_id`, `user_id`, `area_id`, `created_at`, `updated_at`) VALUES
(2, 8, 1, 2, 1, 1, '2021-02-05 05:26:50', '2021-02-03 05:26:50'),
(6, 3, 4, 4, 1, 1, '2021-02-05 05:49:40', '2021-02-05 05:49:40');

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cpf`, `tipo`, `nivel`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Silvarney Henrique da Silva', 'silvarneyhenrique@gmail.com', '968.962.642-69', 'Enfermeiro', 'Normal', 'desativado', NULL, 's123', NULL, NULL, '2021-02-07 22:39:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
