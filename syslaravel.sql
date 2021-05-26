-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2021 at 11:42 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syslaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesos`
--

CREATE TABLE `accesos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha_hora_acceso` timestamp NOT NULL,
  `fecha_modificacion` timestamp NOT NULL,
  `ip_conexion` char(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accesos`
--

INSERT INTO `accesos` (`id`, `idusuario`, `fecha_hora_acceso`, `fecha_modificacion`, `ip_conexion`) VALUES
(1, 2, '2021-03-13 02:05:46', '2021-03-12 22:02:51', '132332323'),
(2, 3, '2021-03-13 02:03:46', '2021-03-12 22:02:51', '45635430'),
(3, 4, '2021-03-13 02:28:35', '2021-03-12 22:02:51', '245543453'),
(4, 5, '2021-03-13 02:29:37', '2021-03-12 22:02:51', '74454254'),
(5, 6, '2021-03-13 02:30:06', '2021-03-12 22:02:51', '15782584'),
(6, 7, '2021-03-13 02:30:54', '2021-03-12 22:02:51', '78994562'),
(7, 8, '2021-03-13 02:32:03', '2021-03-12 22:02:51', '142424175'),
(8, 1, '2021-03-16 03:24:37', '2021-03-15 22:24:37', '321421426l'),
(9, 1, '2021-03-17 03:29:33', '2021-03-16 22:29:33', 'i42434241412'),
(10, 9, '2021-03-18 02:57:48', '2021-03-17 21:57:48', 'jk4452546'),
(11, 11, '2021-03-20 03:01:33', '2021-03-19 22:01:33', '8523358hg'),
(12, 11, '2021-03-20 03:03:25', '2021-03-19 22:03:25', 'hg254645645');

-- --------------------------------------------------------

--
-- Table structure for table `diligencias`
--

CREATE TABLE `diligencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha_hora_ingreso` timestamp NOT NULL,
  `motivo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempo` time NOT NULL,
  `fecha_hora_retorno` timestamp NOT NULL,
  `estado` int(11) NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diligencias`
--

INSERT INTO `diligencias` (`id`, `idusuario`, `fecha_hora_ingreso`, `motivo`, `tiempo`, `fecha_hora_retorno`, `estado`, `descripcion`) VALUES
(1, 1, '2021-04-30 03:40:13', 'Salud', '17:00:00', '2021-04-28 22:40:01', 1, 'Prueba.'),
(2, 2, '2021-04-29 05:19:00', 'Salud', '03:00:00', '2021-04-28 02:49:00', 2, 'Nuevo'),
(3, 3, '2021-04-29 05:19:01', 'Salud', '04:00:00', '2021-04-29 15:19:01', 2, 'numero1'),
(4, 6, '2021-04-29 05:19:01', 'Salud', '02:00:00', '2021-04-29 00:48:00', 2, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_05_24_184526_create_diligencias_table', 1),
(15, '2021_05_24_184813_create_permisos_table', 1),
(16, '2021_05_24_184926_create_personas_table', 1),
(17, '2021_05_24_185023_create_visitas_table', 1),
(18, '2021_05_24_190604_create_accesos_table', 1),
(19, '2021_05_24_190650_create_nivels_table', 1),
(20, '2021_05_25_003512_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nivels`
--

CREATE TABLE `nivels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nivel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nivels`
--

INSERT INTO `nivels` (`id`, `nivel`, `descripcion`, `estado`) VALUES
(1, 'Administrador', 'Encargado de administrar.', 1),
(2, 'Cliente', 'Persona Natural que compra productos para su consumo.', 1),
(3, 'Vendedor', 'Persona Natural o Jurídica que vende los productos comprados.', 1),
(4, 'Proovedor', 'Persona Jurídica encargada del abastecimiento de los productos.', 1),
(5, 'Contador', 'Contador.', 1),
(6, 'Controlador', 'Registra visitas en el sistema.', 1),
(7, 'Supervisor', 'Encargado de supervisar.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idnivel` int(11) NOT NULL,
  `usuarios` int(11) NOT NULL,
  `personas` int(11) NOT NULL,
  `visitas` int(11) NOT NULL,
  `permisos` int(11) NOT NULL,
  `reporte_permisos` int(11) NOT NULL,
  `diligencias` int(11) NOT NULL,
  `reporte_diligencias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permisos`
--

INSERT INTO `permisos` (`id`, `idnivel`, `usuarios`, `personas`, `visitas`, `permisos`, `reporte_permisos`, `diligencias`, `reporte_diligencias`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 2, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 0, 0, 0, 0),
(4, 4, 0, 0, 0, 0, 0, 0, 0),
(5, 5, 0, 0, 0, 0, 0, 0, 0),
(6, 6, 0, 0, 1, 0, 0, 0, 0),
(7, 7, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_pat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_mat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`id`, `nombres`, `apellido_pat`, `apellido_mat`, `dni`, `fecha_nacimiento`, `telefono`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'Gustavo Rivaldo', 'Graos', 'Santos', 44636445, '2003-04-01', 910183710, 'Mz 01 Lt 11 Las Palmeras', NULL, NULL),
(2, 'Jorge Luis', 'Sanchez', 'Quispe', 78945625, '1999-10-15', 921424524, 'Mz 17 Lt 09 Las Palmeras', NULL, NULL),
(3, 'Fernando Eduardo ', 'Jimenez', 'Perez', 77789825, '2021-05-01', 987654321, 'N°256 Avenida Egipto', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idnivel` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `perfil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `idnivel`, `name`, `apellidos`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `login`, `estado`, `perfil`) VALUES
(1, 1, 'Gustavo', 'Graos Santos', 'grgs95859@gmail.com', NULL, '$2y$10$aQNHG3qMDzPAjvEfEYTzc.zNg0sDTBFAJtq9vASfwtrZqODzGoox6', NULL, '2021-05-25 05:30:09', '2021-05-25 05:30:09', 1, 1, 'perfil.png'),
(2, 2, 'Cliente', 'Cliente', 'cliente@gmail.com', NULL, '$2y$10$mfCbiIu1o1Bq9gUouVqrJeeoNbey9rLxmcxvdEAmRLu64mReT.Xeu', '74XW3iRJbq5h6LPICUPTTxgqKelJTfRqbyXyPupgggktRuszeVdnYnhuD9gU', '2021-05-25 05:30:50', '2021-05-25 05:30:50', 1, 1, 'perfil.png'),
(3, 6, 'Controlador', 'Controlador', 'controlador@gmail.com', NULL, '$2y$10$aYklt07cyQR8EvZl8bBNEOvmieRXeKTB97cv8yJ5C3dVvUnZ6648u', 'jx0btIUGWf5bdN2RjvwW4tgIAEpayUrh09PysIIAnj9osN46O3WFV4KyI3JP', '2021-05-25 05:42:29', '2021-05-25 06:07:45', 1, 1, 'perfil.png');

-- --------------------------------------------------------

--
-- Table structure for table `visitas`
--

CREATE TABLE `visitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idpersona` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitas`
--

INSERT INTO `visitas` (`id`, `idpersona`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-06 17:33:00', '2021-04-07 01:33:00'),
(2, 2, '2021-04-05 17:33:00', '2021-04-06 01:33:00'),
(3, 1, '2021-04-08 00:52:00', '2021-04-08 04:52:00'),
(4, 3, '2021-03-31 21:03:00', '2021-04-01 21:03:00'),
(5, 2, '2021-04-14 23:03:58', '2021-04-14 23:03:58'),
(6, 3, '2021-04-13 23:04:17', '2021-04-15 23:04:23'),
(7, 1, '2021-04-08 22:55:00', '2021-04-08 23:56:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diligencias`
--
ALTER TABLE `diligencias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `nivels`
--
ALTER TABLE `nivels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesos`
--
ALTER TABLE `accesos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `diligencias`
--
ALTER TABLE `diligencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nivels`
--
ALTER TABLE `nivels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
