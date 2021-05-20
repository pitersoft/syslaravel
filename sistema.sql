-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2021 at 08:14 PM
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
(1, 2, '2021-03-13 07:05:46', '2021-03-13 03:02:51', '132332323'),
(2, 3, '2021-03-13 07:03:46', '2021-03-13 03:02:51', '45635430'),
(3, 4, '2021-03-13 07:28:35', '2021-03-13 03:02:51', '245543453'),
(4, 5, '2021-03-13 07:29:37', '2021-03-13 03:02:51', '74454254'),
(5, 6, '2021-03-13 07:30:06', '2021-03-13 03:02:51', '15782584'),
(6, 7, '2021-03-13 07:30:54', '2021-03-13 03:02:51', '78994562'),
(7, 8, '2021-03-13 07:32:03', '2021-03-13 03:02:51', '142424175'),
(8, 1, '2021-03-16 08:24:37', '2021-03-16 03:24:37', '321421426l'),
(9, 1, '2021-03-17 08:29:33', '2021-03-17 03:29:33', 'i42434241412'),
(10, 9, '2021-03-18 07:57:48', '2021-03-18 02:57:48', 'jk4452546'),
(11, 11, '2021-03-20 08:01:33', '2021-03-20 03:01:33', '8523358hg'),
(12, 11, '2021-03-20 08:03:25', '2021-03-20 03:03:25', 'hg254645645');

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
(1, 1, '2021-04-30 08:40:13', 'Salud', '17:40:01', '2021-04-29 03:40:01', 1, 'Prueba.'),
(2, 2, '2021-04-29 10:19:00', 'Salud', '03:40:01', '2021-04-28 07:40:01', 2, 'Nuevo'),
(3, 3, '2021-04-29 10:19:01', 'Salud', '04:40:01', '2021-04-28 07:40:01', 2, 'numero1'),
(4, 6, '2021-04-29 10:19:01', 'Salud', '02:40:01', '2021-04-29 05:40:01', 2, '1234');

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
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2021_05_12_192036_create_accesos_table', 1),
(42, '2021_05_12_192105_create_diligencias_table', 1),
(43, '2021_05_12_192159_create_nivels_table', 1),
(44, '2021_05_12_192232_create_permisos_table', 1),
(45, '2021_05_12_192300_create_personas_table', 1),
(46, '2021_05_12_192352_create_visitas_table', 1),
(47, '2021_05_13_212415_create_usuarios_table', 1),
(51, '2014_10_12_000000_create_users_table', 2);

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
(1, 'Cliente', 'Persona Natural que compra productos para su consumo.', 1),
(2, 'Vendedor', 'Persona Natural o Jurídica que vende los productos comprados.', 1),
(3, 'Proovedor', 'Persona Jurídica encargada del abastecimiento de los productos.', 1),
(4, 'Controlador', 'Registra visitas en el sistema.', 1),
(5, 'Supervisor', 'Encargado de supervisar.', 1),
(6, 'Administrador', 'Encargado de administrar.', 1),
(7, 'Contador', 'Contador.', 1);

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
(1, 1, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 0, 0, 0, 0),
(4, 4, 0, 0, 1, 0, 0, 0, 0),
(5, 6, 1, 1, 1, 1, 1, 1, 1),
(6, 7, 0, 0, 0, 0, 0, 0, 0),
(7, 5, 0, 0, 0, 0, 0, 0, 0);

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
(1, 'Gustavo Rivaldo', 'Graos', 'Santos', 44636445, '2003-04-01', 910183710, 'Mz 01 Lt 11 Las Palmeras', '2021-05-12 15:00:00', '2021-05-12 15:00:00'),
(2, 'Jorge Luis', 'Sanchez', 'Quispe', 78945625, '1999-10-15', 921424524, 'Mz 17 Lt 09 Las Palmeras', '2021-05-12 15:00:00', '2021-05-12 15:00:00'),
(3, 'Fernando Eduardo ', 'Jimenez', 'Perez', 77789825, '2021-05-01', 987654321, 'N°256 Avenida Egipto', '2021-05-12 15:00:00', '2021-05-12 15:00:00');

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
  `estado` int(11) DEFAULT NULL,
  `perfil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `idnivel`, `name`, `apellidos`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `login`, `estado`, `perfil`) VALUES
(1, 6, 'Gustavo Rivaldo', 'Graos Santos', 'grgs95859@gmail.com', NULL, '$2y$10$gQx.9Sk2TjQcpg/TMiZdn.h0W5i5l82lNZkGWW4xOKulTsOjjx/TG', NULL, '2021-05-13 10:49:47', '2021-05-18 03:42:56', 1, 1, 'myAvatar.png'),
(2, 6, 'Administrador', 'admin', 'administrador@gmail.com', NULL, '$2y$10$Mp.n/utuhyIftMMETwlz9eMdgw/j21wgSREJFEFJxne.9ZyAnGSPa', NULL, '2021-05-18 04:32:55', '2021-05-18 04:32:55', 1, 1, 'perfil.png');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitas`
--

CREATE TABLE `visitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idpersona` int(11) NOT NULL,
  `fh_ingreso` timestamp NOT NULL,
  `fh_salida` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitas`
--

INSERT INTO `visitas` (`id`, `idpersona`, `fh_ingreso`, `fh_salida`) VALUES
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
INSERT INTO `visitas` (`id`, `idpersona`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-06 17:33:00', '2021-04-07 01:33:00'),
(2, 2, '2021-04-05 17:33:00', '2021-04-06 01:33:00'),
(3, 1, '2021-04-08 00:52:00', '2021-04-08 04:52:00'),
(4, 3, '2021-03-31 21:03:00', '2021-04-01 21:03:00'),
(5, 2, '2021-04-14 23:03:58', '2021-04-14 23:03:58'),
(6, 3, '2021-04-13 23:04:17', '2021-04-15 23:04:23'),
(7, 1, '2021-04-08 22:55:00', '2021-04-08 23:56:00');

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
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
