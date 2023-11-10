-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/10/2023 às 12:54
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `checklist`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `checklists`
--

CREATE TABLE `checklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `listDate` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `checklists`
--

INSERT INTO `checklists` (`id`, `name`, `listDate`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Acampamento (20/10)', '2023-10-20', 1, '2023-10-20 21:31:09', '2023-10-20 21:31:09'),
(2, 'Lista de tarefas', '2023-10-24', 1, '2023-10-24 13:35:48', '2023-10-24 13:35:48'),
(6, 'Lista de tarefas', '2023-10-25', 1, '2023-10-24 21:03:13', '2023-10-24 21:03:13'),
(7, 'Lista de tarefas', '2023-10-26', 1, '2023-10-26 17:51:07', '2023-10-26 17:51:07'),
(8, 'Site : Personal Blog', '2023-11-12', 1, '2023-10-26 17:52:27', '2023-10-26 17:52:27'),
(9, 'Site : Checklist', '2023-11-26', 1, '2023-10-26 18:22:43', '2023-10-26 18:22:43'),
(10, 'Teste do banco', '2023-10-30', 1, '2023-10-26 21:12:41', '2023-10-26 21:12:41'),
(11, 'Lista de tarefas para o domingo', '2023-10-28', 1, '2023-10-26 23:58:30', '2023-10-26 23:58:46'),
(12, 'Lista de tarefas', '2023-10-27', 1, '2023-10-27 13:48:39', '2023-10-27 13:48:39');

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_08_01_003157_create_checklists_table', 1),
(12, '2023_08_02_005342_create_tasks_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(250) NOT NULL,
  `conclusion` tinyint(1) NOT NULL,
  `checklist_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `conclusion`, `checklist_id`, `created_at`, `updated_at`) VALUES
(1, '2 camisas (se couber bota mais 1)', 1, 1, '2023-10-20 21:34:09', '2023-10-20 21:58:29'),
(2, '2 calças (leves)', 1, 1, '2023-10-20 21:34:33', '2023-10-20 21:52:07'),
(4, 'barraca', 1, 1, '2023-10-20 21:35:16', '2023-10-20 22:41:56'),
(5, '2 meias', 1, 1, '2023-10-20 21:35:33', '2023-10-20 21:58:35'),
(6, '2 cuecas', 1, 1, '2023-10-20 21:35:40', '2023-10-20 21:58:38'),
(7, 'kit de higiene (pente, escova, pasta de dente, sabonete)', 1, 1, '2023-10-20 21:36:59', '2023-10-20 22:19:40'),
(8, 'toalha', 1, 1, '2023-10-20 21:37:10', '2023-10-20 22:04:45'),
(9, 'lençol grosso e fino', 1, 1, '2023-10-20 21:37:22', '2023-10-20 22:04:49'),
(10, 'Celular e fone de ouvido', 1, 1, '2023-10-20 21:38:34', '2023-10-20 22:49:21'),
(11, 'Biblia', 1, 1, '2023-10-20 21:38:42', '2023-10-20 22:19:43'),
(12, 'lição de jovens', 1, 1, '2023-10-20 21:38:57', '2023-10-20 22:19:47'),
(13, 'carteira', 1, 1, '2023-10-20 21:39:06', '2023-10-20 22:19:35'),
(14, 'cartão de especialidades', 1, 1, '2023-10-20 21:39:25', '2023-10-20 22:21:10'),
(15, 'lanterna', 1, 1, '2023-10-20 21:39:32', '2023-10-20 22:19:34'),
(16, 'alimentos (1 kg de açúcar; 2 reais de pão; 1 kg de arroz; \r\n 4 ovos; Sal; 1 cabeça de alho; 1 molho de coentro; 2 tomate )', 1, 1, '2023-10-20 21:42:42', '2023-10-20 23:04:17'),
(17, 'bussola', 1, 1, '2023-10-20 21:44:46', '2023-10-20 22:19:50'),
(18, 'bolsa campori inabalavel, caderninho e estojo', 1, 1, '2023-10-20 21:46:19', '2023-10-20 22:19:53'),
(19, 'sandália', 1, 1, '2023-10-20 21:52:31', '2023-10-20 22:49:17'),
(20, '1 short', 1, 1, '2023-10-20 21:52:38', '2023-10-20 21:58:31'),
(21, 'prato, copo e colher', 1, 1, '2023-10-20 22:41:49', '2023-10-20 23:04:20'),
(30, 'Fazer slide para apresentação de amanhã do projeto Internetês', 1, 2, '2023-10-24 15:37:21', '2023-10-24 19:15:53'),
(31, 'Estudar para prova de sociologia.', 1, 6, '2023-10-24 15:37:40', '2023-10-25 22:10:51'),
(32, 'Estudar sobre o uso das redes sociais por crianças e seus perigos para essa faixa etária.', 1, 2, '2023-10-24 15:40:02', '2023-10-25 16:34:53'),
(34, 'Revisar slide, perguntas e materiais para a apresentação de amanhã de pratica de ensino 2', 1, 2, '2023-10-24 19:24:13', '2023-10-25 16:34:57'),
(35, 'Criar perguntas para o quiz', 1, 2, '2023-10-24 19:24:28', '2023-10-25 16:34:48'),
(36, 'Atividade livro volta ao mundo em 13 escolas', 1, 6, '2023-10-24 21:05:13', '2023-10-25 18:22:44'),
(37, 'Finalizar formulário de levantamento de requisitos do site \"Rosatour\"', 1, 6, '2023-10-24 21:17:34', '2023-10-26 17:50:10'),
(38, 'Estudar para a prova de sistemas de informação', 1, 6, '2023-10-25 17:18:43', '2023-10-25 22:10:55'),
(39, 'Estudar para a prova de matemática', 1, 7, '2023-10-26 17:51:42', '2023-10-26 23:19:32'),
(40, 'Ajeitar layout do navbar', 0, 8, '2023-10-26 18:21:30', '2023-10-26 18:21:30'),
(41, 'Estilizar a pagina home', 0, 8, '2023-10-26 18:21:39', '2023-10-26 18:21:39'),
(42, 'Revizar erros de segurança nas paginas de login e registro', 0, 8, '2023-10-26 18:21:50', '2023-10-26 18:21:50'),
(43, 'Estilizar pagina de Admin', 0, 8, '2023-10-26 18:21:58', '2023-10-26 18:21:58'),
(44, 'Organizar e declarar funções do Admin', 0, 8, '2023-10-26 18:22:07', '2023-10-26 18:22:07'),
(45, 'Finalizar primeira versão do front', 0, 8, '2023-10-26 18:22:15', '2023-10-26 18:22:15'),
(46, 'Finalizar função de importar tarefas', 0, 9, '2023-10-26 18:23:00', '2023-10-26 18:23:00'),
(85, 'Editar folheto do trabalho de prática de ensino 2', 1, 7, '2023-10-26 23:21:01', '2023-10-27 03:29:12'),
(86, 'Dedicar 30 minutos para adiantar o site \"Personal Blog\"', 1, 7, '2023-10-26 23:28:48', '2023-10-27 13:50:11'),
(87, 'Desenvolver as funções da parte de criação do blog', 0, 12, '2023-10-27 03:30:47', '2023-10-27 13:50:54'),
(88, 'Dar ajustes no layout', 0, 12, '2023-10-27 03:30:47', '2023-10-27 13:51:01'),
(89, 'Mudar as cores para se adequar a nova paleta do site', 0, 12, '2023-10-27 03:30:47', '2023-10-27 13:51:07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adriano Miguel', 'adrianosantos260804@gmail.com', NULL, '$2y$10$LKCtQtWCfEF4t54CTV2l7OPV9XzYz199NNM6xV3sj67v6pikyMwtO', 'Cm4GISeCUJVEgy2G31GwUv5uGBaVilfVbDI1nmcNy1vZsXL0pTnCM2CMRhc5', '2023-10-20 21:30:54', '2023-10-20 21:30:54');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `checklists`
--
ALTER TABLE `checklists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checklists_user_id_foreign` (`user_id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_checklist_id_foreign` (`checklist_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `checklists`
--
ALTER TABLE `checklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `checklists`
--
ALTER TABLE `checklists`
  ADD CONSTRAINT `checklists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_checklist_id_foreign` FOREIGN KEY (`checklist_id`) REFERENCES `checklists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
