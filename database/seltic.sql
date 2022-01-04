-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2022 a las 23:22:34
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seltic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `folio` int(10) NOT NULL,
  `id_asignacion_fk` int(10) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sello_digital` text NOT NULL,
  `acreditacion` tinyint(2) NOT NULL,
  `estatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`folio`, `id_asignacion_fk`, `fecha_creacion`, `sello_digital`, `acreditacion`, `estatus`) VALUES
(1, 1, '2021-12-15 06:00:00', '41561615', 1, 1),
(2, 2, '2021-12-15 06:00:00', '2452542', 1, 1),
(3, 3, '2021-12-15 06:00:00', '245242', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_profesor_admin_fk` int(10) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `permisos` tinyint(2) NOT NULL,
  `clave_confirmacion` text NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_profesor_admin_fk`, `cargo`, `permisos`, `clave_confirmacion`, `estatus`) VALUES
(1, 'Jefe', 1, '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(2, 'Coordinador', 2, '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(3, 'Analista', 3, '4a7d1ed414474e4033ac29ccb8653d9b', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(10) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_universidad` int(11) DEFAULT NULL,
  `id_persona` bigint(20) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `nombre_uni` varchar(100) NOT NULL,
  `id_tipo_procedencia_fk` int(10) NOT NULL,
  `carrera_especialidad` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `perfil_image` text NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `id_municipio`, `id_universidad`, `id_persona`, `matricula`, `nombre_uni`, `id_tipo_procedencia_fk`, `carrera_especialidad`, `email`, `pw`, `fecha_registro`, `perfil_image`, `estatus`) VALUES
(-3, 15, 3, 20210528160010, '548754215487', 'IPN', 1, 'Informatica', 'chris@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-28 16:00:10', 'https://avatars.githubusercontent.com/u/57198260?v=4', 1),
(1, 15, 2, 20210517145526, '312260633', 'UNAM', 1, 'Informatica', 'alumno@correo.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-05-17 14:55:26', 'https://avatars.githubusercontent.com/u/95256543?v=4', 1),
(2, 15, 2, 20210517185211, '12364HMCN', 'UNAM', 2, 'Derecho', 'lucia@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-17 18:52:11', 'https://avatars.githubusercontent.com/u/57198260?v=4', 1),
(4, 15, 3, 4, '8462215', 'UVM', 2, 'Economia', 'juan@hotmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-06-01 18:49:53', '../resources/default-avatar.png', 0),
(5, 15, 2, 2, '9874631', 'UNAM', 4, 'Matematicas aplicadas a la computacion', 'paola@hotmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2021-06-02 18:49:53', 'https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4', 1),
(6, 283, 2, 20210609044700, '2521515', 'TEC', 1, 'Informatica', 'juan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-09 04:47:00', 'https://avatars.githubusercontent.com/u/95256543?v=4', 1),
(7, 721, 3, 20210706223646, '3125252525', 'IPN', 1, 'Informatica', 'fernando@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', '2021-07-06 22:36:46', 'https://avatars.githubusercontent.com/u/57198260?v=4', 1),
(61, 15, 2, 10, '315543292', 'UNAM', 2, 'Informatica', 'maria@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:42', 'https://avatars.githubusercontent.com/u/43283439?v=4', 1),
(62, 15, 2, 11, '317511556', 'UNAM', 2, 'Derecho', 'jose@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:42', 'https://avatars.githubusercontent.com/u/57198260?v=4', 1),
(63, 15, 3, 12, '313757886', 'IPN', 1, 'Derecho', 'juan@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:42', '../resources/default-avatar.png', 1),
(64, 15, 3, 13, '314684992', 'IPN', 1, 'Derecho', 'luis@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:42', 'https://avatars.githubusercontent.com/u/95256543?v=4', 1),
(65, 15, 2, 14, '312265878', 'UNAM', 2, 'Derecho', 'francisco@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:43', '../resources/default-avatar.png', 1),
(66, 15, 3, 15, '315920738', 'IPN', 1, 'Matematicas', 'jesus@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:43', 'https://avatars.githubusercontent.com/u/57198260?v=4', 1),
(67, 15, 3, 16, '314731852', 'IPN', 1, 'Economia', 'ana@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:43', 'https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4', 1),
(68, 15, 3, 17, '316469221', 'IPN', 1, 'Fisica', 'rosa@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:43', 'https://avatars.githubusercontent.com/u/43283439?v=4', 1),
(69, 15, 2, 18, '316558268', 'UNAM', 2, 'Informatica', 'jorge@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:43', '../resources/default-avatar.png', 1),
(70, 15, 3, 19, '319445117', 'IPN', 1, 'Informatica', 'miguel@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:43', 'https://avatars.githubusercontent.com/u/57198260?v=4', 1),
(71, 15, 3, 20, '319720345', 'IPN', 1, 'Informatica', 'carlos@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:43', '../resources/default-avatar.png', 1),
(72, 15, 2, 21, '317949041', 'UNAM', 2, 'Fisica', 'juana@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:44', 'https://avatars.githubusercontent.com/u/21067489?v=4', 1),
(73, 15, 3, 22, '312987763', 'IPN', 1, 'Matematicas', 'martha@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:44', '../resources/default-avatar.png', 1),
(74, 15, 2, 23, '318315377', 'UNAM', 2, 'Fisica', 'guadalupe@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:44', 'https://avatars.githubusercontent.com/u/43283439?v=4', 1),
(75, 15, 3, 24, '313070921', 'IPN', 1, 'Economia', 'pedro@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:44', '../resources/default-avatar.png', 1),
(76, 15, 3, 25, '310894963', 'IPN', 1, 'Informatica', 'manuel@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:45', 'https://avatars.githubusercontent.com/u/21067489?v=4', 1),
(77, 15, 2, 26, '317064235', 'UNAM', 2, 'Derecho', 'victor@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:45', '../resources/default-avatar.png', 1),
(78, 15, 3, 27, '312985573', 'IPN', 1, 'Derecho', 'antonio@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:45', '../resources/default-avatar.png', 1),
(79, 15, 2, 28, '317540297', 'UNAM', 2, 'Derecho', 'alejandro@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:45', '../resources/default-avatar.png', 1),
(80, 15, 3, 29, '316911865', 'IPN', 1, 'Matematicas', 'margarita@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:45', '../resources/default-avatar.png', 1),
(81, 15, 3, 30, '314732396', 'IPN', 1, 'Matematicas', 'mario@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:45', 'https://avatars.githubusercontent.com/u/21067489?v=4', 1),
(82, 15, 3, 31, '316669472', 'IPN', 1, 'Economia', 'roberto@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:46', '../resources/default-avatar.png', 1),
(83, 15, 2, 32, '319121219', 'UNAM', 2, 'Economia', 'claudia@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:46', '../resources/default-avatar.png', 1),
(84, 15, 3, 33, '315773290', 'IPN', 1, 'Informatica', 'laura@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:46', 'https://avatars.githubusercontent.com/u/21067489?v=4', 1),
(85, 15, 2, 34, '315902940', 'UNAM', 2, 'Matematicas', 'ricardo@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:46', '../resources/default-avatar.png', 1),
(86, 15, 3, 35, '310712592', 'IPN', 1, 'Matematicas', 'fernando@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:46', '../resources/default-avatar.png', 1),
(87, 15, 2, 36, '313202510', 'UNAM', 2, 'Economia', 'javier@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:47', '../resources/default-avatar.png', 1),
(88, 15, 3, 37, '314999038', 'IPN', 1, 'Informatica', 'sergio@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:47', '../resources/default-avatar.png', 1),
(89, 15, 2, 38, '312850067', 'UNAM', 2, 'Economia', 'martin@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:47', '../resources/default-avatar.png', 1),
(90, 15, 3, 39, '311337649', 'IPN', 1, 'Matematicas', 'veronica@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-22 12:27:47', '../resources/default-avatar.png', 1),
(91, 23, 4, 10, '12345678', 'OTRA', 3, 'Materia Oscura', 'ejemplo@prueba@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-24 14:09:47', '../resources/default-avatar.png', 0),
(92, 575, 2, 20211228193223, '123156', '', 1, 'Quimica', 'manuel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-28 19:32:23', '../resources/default-avatar.png', 0),
(93, 276, 3, 20211228193851, '135156416', 'IPN', 1, 'Informatica', 'camila@hotmail.com', '202cb962ac59075b964b07152d234b70', '2021-12-28 19:38:51', '../resources/default-avatar.png', 0),
(94, 1889, 4, 20211228130159, '41561615', 'IPN', 5, 'Super heroe', 'peeter@spiderman.com', '202cb962ac59075b964b07152d234b70', '2021-12-28 13:01:59', '../resources/default-avatar.png', 0),
(95, 76, 2, 20220103224547, '456156165', '', 1, 'Animal', 'cuyo@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-01-03 22:45:47', '../resources/default-avatar.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `id_archivo` bigint(20) NOT NULL,
  `id_doc_sol_fk` bigint(20) NOT NULL,
  `id_inscripcion_fk` bigint(20) NOT NULL,
  `codigo_doc` varchar(20) NOT NULL,
  `name_archivo` varchar(50) NOT NULL,
  `name_file_md5` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notas` varchar(100) NOT NULL,
  `estado_revision` tinyint(1) NOT NULL DEFAULT '0',
  `estado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id_archivo`, `id_doc_sol_fk`, `id_inscripcion_fk`, `codigo_doc`, `name_archivo`, `name_file_md5`, `path`, `fecha_creacion`, `notas`, `estado_revision`, `estado`) VALUES
(1, 1, 124, '1234DOC', 'CREDENCIAL.pdf', '56348b099f6fa7db99cf2382b95fb936', 'prueba/1/56348b099f6fa7db99cf2382b95fb936.pdf', '2021-06-10 05:58:21', 'aquí van las notas', 1, 1),
(2, 2, 124, '32543434', 'doc', 'doc', 'path', '2021-06-23 05:00:00', 'Subido a revicion', 0, 1),
(132, 11, 123456789, '32543434', 'doc', 'doc', 'ca', '2022-01-03 06:00:00', 'cdcs', 0, 0),
(133, 11, 1415254252, 'fewf', 'efw', 'few', 'fewfw', '2022-01-04 01:51:20', '', 0, 0),
(134, 11, 1415254252, 'fewf', 'efw', 'few', 'fewfw', '2022-01-04 01:51:25', '', 0, 0),
(135, 12, 527242452, '32543434', 'doc', 'doc', 'ruta', '2022-01-04 01:53:58', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_grupo`
--

CREATE TABLE `asignacion_grupo` (
  `id_asignacion` int(10) NOT NULL,
  `id_grupo_fk` int(5) NOT NULL,
  `id_profesor_fk` int(10) NOT NULL,
  `generacion` int(5) NOT NULL,
  `semestre` varchar(10) NOT NULL,
  `campus_cede` tinyint(2) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `fecha_inicio_inscripcion` date NOT NULL,
  `fecha_lim_inscripcion` date NOT NULL,
  `fecha_inicio_actas` date NOT NULL,
  `fecha_fin_actas` date NOT NULL,
  `cupo` int(5) NOT NULL,
  `costo_real` decimal(10,2) NOT NULL,
  `notas` text NOT NULL,
  `modalidad` tinyint(3) NOT NULL,
  `visible_publico` tinyint(1) NOT NULL DEFAULT '0',
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignacion_grupo`
--

INSERT INTO `asignacion_grupo` (`id_asignacion`, `id_grupo_fk`, `id_profesor_fk`, `generacion`, `semestre`, `campus_cede`, `fecha_creacion`, `fecha_inicio`, `fecha_fin`, `fecha_inicio_inscripcion`, `fecha_lim_inscripcion`, `fecha_inicio_actas`, `fecha_fin_actas`, `cupo`, `costo_real`, `notas`, `modalidad`, `visible_publico`, `estatus`) VALUES
(1, 1, 1, 2020, '2021-2', 1, '2021-05-24 05:00:00', '2021-05-24', '2021-05-24', '0000-00-00', '2021-05-27', '2021-05-26', '2021-05-27', 30, '1500.00', 'NOTAS APLICADAS', 1, 0, 1),
(2, 2, 2, 2020, '2021-2', 0, '2021-05-24 05:00:00', '2021-05-25', '2021-05-28', '0000-00-00', '2021-05-26', '2021-05-29', '2021-05-31', 30, '1000.00', 'SEGUNDO CURSO PRUEBA', 2, 0, 1),
(3, 3, 4, 2020, '2021-2', 1, '2021-06-16 05:00:00', '2021-06-30', '2021-09-16', '0000-00-00', '2021-06-23', '2021-09-27', '2021-09-30', 15, '1200.00', 'NOTAS APLICADAS', 1, 0, 1),
(765432453, 5, 3, 2021, '2021-2', 2, '2021-07-12 05:00:00', '2021-07-26', '2021-09-29', '0000-00-00', '2021-07-19', '2021-09-20', '2021-07-26', 30, '1000.00', 'SIN NOTAS', 1, 0, 1),
(765432454, 40, 4, 2021, '2021-2', 3, '2021-12-18 21:14:01', '2021-07-21', '2021-07-28', '2021-12-12', '2021-12-18', '2022-02-21', '2021-12-30', 30, '1500.00', 'NOTAS APLICADAS', 1, 1, 1),
(765432455, 66, 9, 2023, '2021-1', 1, '2021-12-23 18:54:25', '2021-12-24', '2022-03-30', '2021-12-13', '2021-12-30', '2022-03-22', '2022-01-06', 20, '1000.00', 'Curso prueba de Chris', 2, 0, 1),
(765432456, 67, 8, 2021, '2021-1', 1, '2021-12-23 18:57:45', '2021-12-23', '2021-12-23', '2021-12-23', '2021-12-23', '2021-12-23', '2021-12-23', 10, '800.00', 'SIN NOTAS', 0, 0, 1),
(765432457, 68, 5, 2022, '2021-1', 1, '2021-12-23 19:25:41', '2021-12-23', '2021-12-23', '2021-12-23', '2021-12-23', '2021-12-23', '2021-12-23', 5, '500.00', 'PRUEBA CON JENNI', 2, 0, 1),
(765432458, 48, 12, 2021, '2020-2', 1, '2021-12-27 20:06:56', '2021-12-27', '2021-12-27', '2021-12-27', '2021-12-27', '2021-12-27', '2021-12-27', 30, '2700.00', '', 0, 0, 1),
(765432459, 48, 4, 2021, '2020-2', 1, '2021-12-28 17:49:49', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', 30, '3050.00', '', 0, 0, 1),
(765432460, 62, 13, 2021, '2020-2', 1, '2021-12-29 00:04:49', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', 30, '3050.00', '', 0, 0, 1),
(765432461, 48, 13, 2021, '2020-2', 1, '2021-12-29 00:05:38', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', '2021-12-28', 30, '3050.00', '', 0, 0, 1),
(765432462, 48, 8, 2021, '2020-2', 1, '2021-12-29 00:06:21', '2022-01-01', '2022-01-31', '2021-12-01', '2021-12-31', '2022-02-01', '2022-02-11', 30, '3050.00', '', 0, 1, 1),
(765432463, 59, 13, 2021, '2020-2', 1, '2021-12-30 22:06:46', '2021-12-05', '2021-12-10', '2021-12-01', '2021-12-03', '2021-12-26', '2021-12-31', 30, '3050.00', '', 0, 1, 1),
(765432464, 47, 11, 2021, '2020-2', 1, '2021-12-30 22:20:48', '2021-12-01', '2021-12-31', '2021-12-19', '2021-12-30', '2020-01-01', '2022-01-06', 30, '2100.00', '', 0, 1, 1),
(765432465, 70, 5, 2021, '2021-2', 0, '2021-12-31 22:51:45', '2022-01-01', '2022-01-31', '2021-12-27', '2022-02-02', '2022-01-31', '2022-02-04', 30, '2000.00', 'Prueba 1', 0, 1, 1),
(765432466, 11, 12, 2022, '2021-2', 1, '2022-01-04 00:11:37', '2022-01-03', '2022-01-03', '2022-01-03', '2022-01-03', '2022-01-03', '2022-01-03', 30, '2700.00', '', 0, 1, 1),
(765432467, 9, 9, 2022, '2021-2', 1, '2022-01-04 19:45:47', '2022-01-04', '2022-01-04', '2022-01-04', '2022-01-04', '2022-01-04', '2022-01-04', 30, '2100.00', '', 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_procedencia`
--

CREATE TABLE `asignacion_procedencia` (
  `id_tipo_procedencia_fk` int(10) NOT NULL,
  `id_curso_fk` int(10) NOT NULL,
  `porcentaje_desc` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignacion_procedencia`
--

INSERT INTO `asignacion_procedencia` (`id_tipo_procedencia_fk`, `id_curso_fk`, `porcentaje_desc`) VALUES
(-8, 1, '0.00'),
(-8, 2, '0.00'),
(-8, 3, '0.00'),
(-8, 4, '0.00'),
(-8, 19, '50.00'),
(1, 1, '70.00'),
(1, 2, '70.00'),
(1, 3, '70.00'),
(1, 4, '70.00'),
(1, 19, '50.00'),
(1, 20, '50.00'),
(2, 1, '50.00'),
(2, 19, '50.00'),
(2, 20, '50.00'),
(3, 1, '70.00'),
(3, 2, '70.00'),
(3, 3, '70.00'),
(3, 4, '70.00'),
(3, 15, '40.00'),
(3, 19, '50.00'),
(4, 1, '30.00'),
(4, 2, '30.00'),
(4, 3, '30.00'),
(4, 4, '30.00'),
(4, 19, '30.00'),
(5, 1, '30.00'),
(5, 2, '30.00'),
(5, 3, '30.00'),
(5, 4, '30.00'),
(5, 19, '0.00'),
(5, 20, '50.00'),
(6, 1, '10.00'),
(6, 2, '10.00'),
(6, 3, '10.00'),
(6, 4, '10.00'),
(6, 19, '50.00'),
(7, 1, '10.00'),
(7, 2, '10.00'),
(7, 3, '10.00'),
(7, 4, '10.00'),
(7, 19, '50.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `id_aula` int(5) NOT NULL,
  `edificio` varchar(10) NOT NULL,
  `aula` varchar(10) NOT NULL,
  `campus` varchar(30) NOT NULL,
  `cupo` int(5) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aulas`
--

INSERT INTO `aulas` (`id_aula`, `edificio`, `aula`, `campus`, `cupo`, `estado`) VALUES
(1, 'H', '101', 'Campo 4', 20, 1),
(2, 'H', '102', 'Campo 1', 15, 1),
(3, 'A1', '101', 'Campo 4', 10, 1),
(4, 'F', '202', 'Campo 1', 32, 1),
(6, 'E', '101A', 'Campo 1', 10, 1),
(7, 'B', '1001', 'Campo 4', 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `img_constancia_profesor` text NOT NULL,
  `img_constancia_alumno` text NOT NULL,
  `version_sistema` varchar(10) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id`, `img_constancia_profesor`, `img_constancia_alumno`, `version_sistema`, `last_update`) VALUES
(1, 'link', 'link', '2.0', '2021-12-21 22:46:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constancia_alumno`
--

CREATE TABLE `constancia_alumno` (
  `id_constancia_alumno` int(5) NOT NULL,
  `id_profesor_admin_firma_fk` int(10) NOT NULL,
  `id_inscripcion_acta_fk` bigint(20) NOT NULL,
  `sello_digital` text NOT NULL,
  `verificada` tinyint(1) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qr_verificador` text NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constancia_profesor`
--

CREATE TABLE `constancia_profesor` (
  `id_constancia` int(5) NOT NULL,
  `id_admin_firma_fk` int(10) NOT NULL,
  `folio_acta_fk` int(10) NOT NULL,
  `sello_digital` text NOT NULL,
  `verificada` tinyint(1) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qr_verificador` text NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(10) NOT NULL,
  `id_profesor_admin_acredita` int(10) DEFAULT NULL,
  `id_profesor_autor` int(10) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `route` text NOT NULL,
  `nombre_curso` varchar(50) NOT NULL,
  `dirigido_a` text NOT NULL,
  `objetivo` text NOT NULL,
  `descripcion` text NOT NULL,
  `no_sesiones` int(3) NOT NULL,
  `antecedentes` text NOT NULL,
  `aprobado` tinyint(2) NOT NULL,
  `costo_sugerido` decimal(10,2) NOT NULL,
  `link_temario_pdf` text NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_acreditacion` datetime DEFAULT NULL,
  `banner_img` text NOT NULL,
  `tipo_curso` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `id_profesor_admin_acredita`, `id_profesor_autor`, `codigo`, `route`, `nombre_curso`, `dirigido_a`, `objetivo`, `descripcion`, `no_sesiones`, `antecedentes`, `aprobado`, `costo_sugerido`, `link_temario_pdf`, `fecha_creacion`, `fecha_acreditacion`, `banner_img`, `tipo_curso`) VALUES
(1, 1, 2, '001', '', 'Induccion al computo II', 'Publico en general', 'Objetivo', 'Descripcion', 9, 'Ningun antecedente', 1, '2100.00', 'https://www.bdmedia.mx/cursos/curso_marketing_digital/documentos/temario.pdf', '2021-05-18 13:04:26', '2021-05-19 20:03:52', '../resources/banners/1/banner-20211228021254.jpg', 2),
(2, NULL, 5, '002', '', 'Excel Avanzado', 'Publico en general', 'Incursionar a las nuevas generaciones en las macros en excel', 'En este curso en alumno aprenderá a etc, etc, etc', 17, 'Conocimientos basicos en excel', 0, '2850.00', 'https://www.gob.mx/cms/uploads/attachment/file/312952/Temario-Jefatura_de_Sistemas..xlsx.pdf', '2021-05-18 22:55:43', NULL, 'https://edu.tauformar.com/wp-content/uploads/2021/04/EXCEL.png', 0),
(3, NULL, 2, '003', '', 'Aspel NOI Basico I', 'Alumnos de la carrera de administración', 'Al término del curso el participante obtendrá los conocimientos y habilidades que le permitan dominar el sistema, esto es, instalarlo y configurarlo para adaptarlo a las necesidades especificas de la empresa, así como lograr un uso eficaz de las diversas herramientas que el sistema proporciona. De esta forma, se inicia la operación con el sistema con las bases que aseguran la correcta operación y uso del mismo.', 'CURSO ASPEL NOI 9.0 EN LINEA INCLUYE NIVEL BASICO, INTERMEDIO Y AVANZADO. TIEMPO DE ACCESO 3 MESES LAS 24 HORAS DEL DÍA.', 50, 'Conocimiento de Excel', 0, '3050.00', 'https://proteco.mx/temarios/javabasico.pdf', '2021-05-19 13:57:09', NULL, '../resources/banners/3/banner-20211228020712.png', 0),
(4, 3, 1, '004', '', 'Diccionarios de datos', 'Publico en general', 'Dar a conocer las nuevas metodologias dentro de la programacion', 'Aqui va la descripcion del curso', 13, 'Conocimientos basicos en programacion', 1, '2700.00', 'http://www.gesfomediaformacion.com/temarios/TEMARIO%20FACEBOOK.pdf', '2021-05-19 20:58:23', '2021-12-22 12:20:20', '../resources/banners/4/banner-20211228020410.png', 1),
(10, NULL, 7, '002', '', 'Macros en Excel Avanzados', 'Publico en general', 'Incursionar a las nuevas generaciones en las macros en excel', 'En este curso en alumno aprenderá a etc, etc, etc', 17, 'Conocimientos basicos en excel', 0, '2850.00', 'https://www.gob.mx/cms/uploads/attachment/file/312952/Temario-Jefatura_de_Sistemas..xlsx.pdf', '2021-05-18 22:55:43', NULL, 'https://edu.tauformar.com/wp-content/uploads/2021/04/EXCEL.png', 1),
(11, 1, 10, '001', '', 'Reparacion de Computo', 'Publico en general', 'Objetivo', 'Descripcion', 9, 'Ningun antecedente', 1, '2100.00', 'https://www.bdmedia.mx/cursos/curso_marketing_digital/documentos/temario.pdf', '2021-05-18 13:04:26', '2021-05-19 20:03:52', '../resources/banners/11/banner-20211228021532.jpg', 2),
(12, NULL, 1, '003', '', 'Aspel COI', 'Alumnos de la carrera de administración', 'Al término del curso el participante obtendrá los conocimientos y habilidades que le permitan dominar el sistema, esto es, instalarlo y configurarlo para adaptarlo a las necesidades especificas de la empresa, así como lograr un uso eficaz de las diversas herramientas que el sistema proporciona. De esta forma, se inicia la operación con el sistema con las bases que aseguran la correcta operación y uso del mismo.', 'CURSO ASPEL NOI 9.0 EN LINEA INCLUYE NIVEL BASICO, INTERMEDIO Y AVANZADO. TIEMPO DE ACCESO 3 MESES LAS 24 HORAS DEL DÍA.', 50, 'Conocimiento de Excel', 0, '3050.00', 'https://proteco.mx/temarios/javabasico.pdf', '2021-05-19 13:57:09', NULL, '../resources/banners/12/banner-20211228021628.jpg', 1),
(15, 3, 8, '004', '', 'Inteligencia Artificial', 'Publico en general', 'Dar a conocer las nuevas metodologias dentro de la programacion', 'Aqui va la descripcion del curso', 13, 'Conocimientos basicos en programacion', 1, '2700.00', 'http://www.gesfomediaformacion.com/temarios/TEMARIO%20FACEBOOK.pdf', '2021-05-19 20:58:23', NULL, '../resources/banners/15/banner-20211228021345.jpg', 1),
(19, 1, 7, '001', '', 'Induccion al computo', 'Publico en general', 'Objetivo', 'Descripcion', 9, 'Ningun antecedente', 1, '2100.00', 'https://www.bdmedia.mx/cursos/curso_marketing_digital/documentos/temario.pdf', '2021-05-18 13:04:26', '2021-05-19 20:03:52', '../resources/banners/19/banner-20211228021125.jpg', 2),
(20, 1, 11, '001', '', 'Word', 'Publico en general', 'Objetivo', 'Descripcion', 9, 'Ningun antecedente', 1, '2100.00', 'https://www.bdmedia.mx/cursos/curso_marketing_digital/documentos/temario.pdf', '2021-05-18 13:04:26', '2021-05-19 20:03:52', '../resources/banners/20/banner-20211221234318.jpg', 2),
(21, NULL, 1, '002', '', 'Excel Basico', 'Publico en general', 'Incursionar a las nuevas generaciones en las macros en excel', 'En este curso en alumno aprenderá a etc, etc, etc', 17, 'Conocimientos basicos en excel', 0, '2850.00', 'https://www.gob.mx/cms/uploads/attachment/file/312952/Temario-Jefatura_de_Sistemas..xlsx.pdf', '2021-05-18 22:55:43', NULL, 'https://edu.tauformar.com/wp-content/uploads/2021/04/EXCEL.png', 3),
(22, 1, 8, '001', '', 'Power Pint', 'Publico en general', 'Objetivo', 'Descripcion', 9, 'Ningun antecedente', 1, '2100.00', 'https://www.bdmedia.mx/cursos/curso_marketing_digital/documentos/temario.pdf', '2021-05-18 13:04:26', '2021-05-19 20:03:52', '../resources/banners/22/banner-20211217032305.jpg', 2),
(23, NULL, 3, '003', '', 'C++ Basico', 'Alumnos de la carrera de administración', 'Al término del curso el participante obtendrá los conocimientos y habilidades que le permitan dominar el sistema, esto es, instalarlo y configurarlo para adaptarlo a las necesidades especificas de la empresa, así como lograr un uso eficaz de las diversas herramientas que el sistema proporciona. De esta forma, se inicia la operación con el sistema con las bases que aseguran la correcta operación y uso del mismo.', 'CURSO ASPEL NOI 9.0 EN LINEA INCLUYE NIVEL BASICO, INTERMEDIO Y AVANZADO. TIEMPO DE ACCESO 3 MESES LAS 24 HORAS DEL DÍA.', 50, 'Conocimiento de Excel', 0, '3050.00', 'https://proteco.mx/temarios/javabasico.pdf', '2021-05-19 13:57:09', NULL, '../resources/banners/23/banner-20211228021024.webp', 4),
(99, NULL, 9, '002', '', 'Java Basico', 'Publico en general', 'Incursionar a las nuevas generaciones en las macros en excel', 'En este curso en alumno aprenderá a etc, etc, etc', 17, 'Conocimientos basicos en excel', 0, '2850.00', 'https://www.gob.mx/cms/uploads/attachment/file/312952/Temario-Jefatura_de_Sistemas..xlsx.pdf', '2021-05-18 22:55:43', NULL, '../resources/banners/99/banner-20211228021447.jpg', 1),
(100, 3, 4, '004', '', 'Diseño Web', 'Publico en general', 'Dar a conocer las nuevas metodologias dentro de la programacion', 'Aqui va la descripcion del curso', 13, 'Conocimientos basicos en programacion', 1, '2700.00', 'http://www.gesfomediaformacion.com/temarios/TEMARIO%20FACEBOOK.pdf', '2021-05-19 20:58:23', NULL, '../resources/banners/100/banner-20211222000250.jpg', 1),
(101, NULL, 9, '003', '', 'Phyton Basico', 'Alumnos de la carrera de administración', 'Al término del curso el participante obtendrá los conocimientos y habilidades que le permitan dominar el sistema, esto es, instalarlo y configurarlo para adaptarlo a las necesidades especificas de la empresa, así como lograr un uso eficaz de las diversas herramientas que el sistema proporciona. De esta forma, se inicia la operación con el sistema con las bases que aseguran la correcta operación y uso del mismo.', 'CURSO ASPEL NOI 9.0 EN LINEA INCLUYE NIVEL BASICO, INTERMEDIO Y AVANZADO. TIEMPO DE ACCESO 3 MESES LAS 24 HORAS DEL DÍA.', 50, 'Conocimiento de Excel', 0, '3050.00', 'https://proteco.mx/temarios/javabasico.pdf', '2021-05-19 13:57:09', NULL, 'https://www.cursosaspelenlinea.com.mx/wp-content/uploads/2018/08/aspel-nube.png', 1),
(220104503, NULL, 1, '8080', '', 'Curso Premium', 'algo', 'algo', 'algo', 5, 'algo', 0, '1500.00', '../resources/temario/220104503/temario-20220104130339.pdf', '2022-01-04 13:03:39', NULL, '../resources/banners/ban-fesc.jpg', 1),
(2021123042, NULL, 1, '3660', '', 'Trabajo en equipo', 'Alumnos de la carrera de Informática', 'Que los participantes reconozcan los elementos básicos del trabajo en equipo, la importancia del líder y de cada uno de los integrantes del equipo de trabajo, a través de la reflexión y desarrollo de habilidades y actitudes para el logro de los objetivos estratégicos.', 'Aprende a trabajar ene quipo mendiante tecnicas especializadas', 5, 'Ninguno', 0, '300.00', '../resources/temario/2021123042/temario-20211230195958.pdf', '2021-12-30 19:59:58', NULL, '../resources/banners/2021123042/banner-20211230195958.jpg', 3),
(2112300843, NULL, 1, '150', '', 'Curso Z', 'bdfbdf', 'bfdbfd', 'vdfvbfd', 1, 'bdfbfd', 0, '500.00', '../resources/temario/', '2021-12-30 20:17:04', NULL, '../resources/banners/default.jpg', 3),
(2112301484, NULL, 1, '3660', '', 'Curso prueba', 'Presentar a los estudiavdslemas.', 'Presentar a los estudiantes las características de la creatividad mediante actividades lúdicas que les permitan visualizar la utilidad que tienen las herramientas matemáticas en el aprendizaje y la resolución de problemas.', 'vfdbvfdbf', 1, 'Prvsdvermitadvsdvsdvsque tienen las herramientas matemáticas en el aprendizaje y la resolución de problemas.', 0, '300.00', '../resources/temario/2112301484/temario-20211230201423.pdf', '2021-12-30 20:14:22', NULL, '../resources/banners/2112301484/banner-20211230201423.jpg', 4),
(2112302070, NULL, 1, '150', '', 'Curso Z', 'bdfbdf', 'bfdbfd', 'vdfvbfd', 1, 'bdfbfd', 0, '500.00', '../resources/temario/', '2021-12-30 20:17:45', NULL, '../resources/banners/default.jpg', 3),
(2147483647, NULL, 1, '500', '', 'Aprende Finanzas basicas', 'vfdv fdv ', 'vfd vfd vd', 'vfdvdvfd ', 15, 'vdf vfdvdf', 0, '600.00', '../resources/temario/', '2022-01-04 12:29:21', NULL, '../resources/banners/2147483647/banner-20220104210055.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_depto` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_depto`, `nombre`) VALUES
(-12, 'ghtrhbgfhbgf'),
(-9, 'Depto Borrar'),
(-8, 'Depto Borrar'),
(-7, 'ITSE'),
(1, 'Informatica'),
(2, 'Contabilidad'),
(3, 'IME'),
(4, 'Veterinaria'),
(5, 'Administracion'),
(6, 'Agricola'),
(7, 'QUIMICA'),
(10, 'Ingeniería'),
(11, 'ARTES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docs_solicitados_curso`
--

CREATE TABLE `docs_solicitados_curso` (
  `id_doc_sol` bigint(20) NOT NULL,
  `id_documento_fk` int(5) NOT NULL,
  `id_curso_fk` int(10) NOT NULL,
  `obligatorio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docs_solicitados_curso`
--

INSERT INTO `docs_solicitados_curso` (`id_doc_sol`, `id_documento_fk`, `id_curso_fk`, `obligatorio`) VALUES
(1, 2, 3, 0),
(2, 1, 3, 0),
(4, 2, 4, 0),
(5, 1, 1, 0),
(6, 2, 2, 0),
(7, 1, 10, 0),
(8, 1, 11, 0),
(9, 1, 12, 0),
(10, 2, 12, 0),
(11, 3, 12, 1),
(12, 1, 15, 1),
(13, 2, 15, 1),
(14, 3, 15, 1),
(15, 4, 15, 1),
(16, 5, 15, 1),
(17, 6, 15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(5) NOT NULL,
  `nombre_doc` varchar(20) NOT NULL,
  `formato_admitido` varchar(5) NOT NULL,
  `tipo` tinyint(3) NOT NULL,
  `peso_max_mb` int(5) NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `nombre_doc`, `formato_admitido`, `tipo`, `peso_max_mb`, `estatus`) VALUES
(1, 'CURP', 'pdf', 2, 2, 1),
(2, 'CREDENCIAL', 'pdf', 0, 3, 1),
(3, 'FICHA DE PAGO', 'pdf', 1, 3, 1),
(4, 'ACTA', 'pdf', 2, 5, 1),
(5, 'CERTIFICADO 1 NVL', '%', 0, 6, 1),
(6, 'CERTIFICADO 2 NVL', 'IMG', 0, 3, 1),
(7, 'Tarjeta de la Leche', 'PDF', 1, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `clave` varchar(2) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `abrev` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `clave`, `estado`, `abrev`) VALUES
(1, '01', 'Aguascalientes', 'Ags.'),
(2, '02', 'Baja California', 'BC'),
(3, '03', 'Baja California Sur', 'BCS'),
(4, '04', 'Campeche', 'Camp.'),
(5, '05', 'Coahuila de Zaragoza', 'Coah.'),
(6, '06', 'Colima', 'Col.'),
(7, '07', 'Chiapas', 'Chis.'),
(8, '08', 'Chihuahua', 'Chih.'),
(9, '09', 'Ciudad de México', 'CDMX'),
(10, '10', 'Durango', 'Dgo.'),
(11, '11', 'Guanajuato', 'Gto.'),
(12, '12', 'Guerrero', 'Gro.'),
(13, '13', 'Hidalgo', 'Hgo.'),
(14, '14', 'Jalisco', 'Jal.'),
(15, '15', 'México', 'Mex.'),
(16, '16', 'Michoacán de Ocampo', 'Mich.'),
(17, '17', 'Morelos', 'Mor.'),
(18, '18', 'Nayarit', 'Nay.'),
(19, '19', 'Nuevo León', 'NL'),
(20, '20', 'Oaxaca', 'Oax.'),
(21, '21', 'Puebla', 'Pue.'),
(22, '22', 'Querétaro', 'Qro.'),
(23, '23', 'Quintana Roo', 'Q. Roo'),
(24, '24', 'San Luis Potosí', 'SLP'),
(25, '25', 'Sinaloa', 'Sin.'),
(26, '26', 'Sonora', 'Son.'),
(27, '27', 'Tabasco', 'Tab.'),
(28, '28', 'Tamaulipas', 'Tamps.'),
(29, '29', 'Tlaxcala', 'Tlax.'),
(30, '30', 'Veracruz de Ignacio de la Llave', 'Ver.'),
(31, '31', 'Yucatán', 'Yuc.'),
(32, '32', 'Zacatecas', 'Zac.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(5) NOT NULL,
  `id_curso_fk` int(10) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  `estatus` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `id_curso_fk`, `grupo`, `estatus`) VALUES
(1, 4, '666', 0),
(2, 4, '667', 1),
(3, 1, '1001', 0),
(4, 1, '1002', 1),
(5, 2, '1601', 0),
(6, 2, '1602', 1),
(7, 3, '1851', 1),
(8, 3, '1852', 1),
(9, 19, '1500', 1),
(10, 19, '1501', 1),
(11, 15, '1000', 1),
(12, 15, '1000', 1),
(13, 15, '1000', 1),
(14, 15, '1001', 1),
(15, 15, '1003', 1),
(16, 15, '1004', 1),
(17, 15, '1005', 1),
(18, 15, '1006', 1),
(19, 15, '1007', 1),
(20, 15, '1008', 1),
(21, 15, '1009', 1),
(22, 15, '1010', 1),
(23, 15, '1011', 1),
(24, 15, '1012', 1),
(25, 15, '1013', 1),
(26, 15, '1014', 1),
(27, 15, '1015', 1),
(28, 4, '668', 1),
(29, 4, '669', 1),
(30, 4, '670', 1),
(31, 19, '1502', 1),
(32, 4, '671', 1),
(38, 19, '1503', 1),
(39, 19, '1504', 1),
(40, 2, '1603', 1),
(41, 1, '1003', 1),
(43, 12, '1000', 1),
(44, 12, '1001', 1),
(45, 11, '650', 1),
(46, 11, '651', 1),
(47, 11, '652', 1),
(48, 100, '1000', 1),
(49, 21, '1000', 1),
(50, 10, '1000', 1),
(55, 1, '1004', 1),
(56, 1, '1005', 1),
(57, 1, '1006', 1),
(58, 1, '1007', 1),
(59, 4, '672', 1),
(60, 19, '1505', 1),
(61, 2, '1604', 1),
(62, 15, '1016', 1),
(63, 99, '6051', 1),
(64, 1, '1008', 1),
(65, 1, '1009', 1),
(66, 20, '666', 1),
(67, 20, '667', 1),
(68, 20, '668', 1),
(70, 22, '2711', 1),
(71, 19, '1506', 1),
(72, 100, '1001', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_clase_presencial`
--

CREATE TABLE `horario_clase_presencial` (
  `id_horario_pres` bigint(20) NOT NULL,
  `id_grupo_fk` int(5) NOT NULL,
  `id_aula_fk` int(5) NOT NULL,
  `dia_semana` tinyint(2) NOT NULL,
  `hora_inicio` time NOT NULL,
  `duracion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario_clase_presencial`
--

INSERT INTO `horario_clase_presencial` (`id_horario_pres`, `id_grupo_fk`, `id_aula_fk`, `dia_semana`, `hora_inicio`, `duracion`) VALUES
(1, 1, 2, 1, '07:00:00', 120),
(2, 2, 3, 3, '07:00:00', 50),
(3, 3, 2, 2, '07:00:00', 50),
(4, 4, 2, 3, '10:00:00', 120),
(5, 5, 2, 2, '07:00:00', 50),
(6, 6, 2, 5, '08:00:00', 50),
(7, 7, 2, 4, '07:00:00', 120),
(8, 8, 2, 4, '07:00:00', 50),
(9, 9, 2, 2, '07:00:00', 120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_clase_virtual`
--

CREATE TABLE `horario_clase_virtual` (
  `id_horario_virtual` int(10) NOT NULL,
  `id_grupo_fk` int(5) NOT NULL,
  `dia_semana` tinyint(2) NOT NULL,
  `hora_inicio` time NOT NULL,
  `duracion` int(5) NOT NULL,
  `reunion` varchar(20) NOT NULL,
  `plataforma` varchar(20) NOT NULL,
  `url_reunion` text NOT NULL,
  `url_plataforma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario_clase_virtual`
--

INSERT INTO `horario_clase_virtual` (`id_horario_virtual`, `id_grupo_fk`, `dia_semana`, `hora_inicio`, `duracion`, `reunion`, `plataforma`, `url_reunion`, `url_plataforma`) VALUES
(1, 1, 1, '08:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(2, 2, 5, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(3, 3, 4, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(4, 4, 2, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(5, 5, 1, '07:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(6, 6, 1, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(7, 7, 2, '13:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(8, 8, 1, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(9, 9, 2, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(10, 10, 2, '07:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(11, 12, 1, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(12, 13, 3, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(13, 14, 3, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(14, 15, 1, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(15, 16, 1, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(16, 17, 3, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(17, 18, 1, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h'),
(18, 19, 1, '11:00:00', 60, 'ZOOM', 'CLASSROOM', 'https://cuaieed-unam.zoom.us/j/86480721543?pwd=N0hHcHUxcjlFQUQ4L21YQ1N4N1dWdz09#success', 'https://classroom.google.com/u/0/h');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_inscripcion` bigint(20) NOT NULL,
  `id_alumno_fk` int(10) NOT NULL,
  `id_asignacion_fk` int(10) NOT NULL,
  `pago_confirmado` tinyint(1) NOT NULL DEFAULT '0',
  `autorizacion_inscripcion` tinyint(1) NOT NULL DEFAULT '0',
  `validacion_constancia` tinyint(1) NOT NULL DEFAULT '0',
  `fecha_solicitud` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_conclusion` datetime DEFAULT NULL,
  `notas` text NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id_inscripcion`, `id_alumno_fk`, `id_asignacion_fk`, `pago_confirmado`, `autorizacion_inscripcion`, `validacion_constancia`, `fecha_solicitud`, `fecha_conclusion`, `notas`, `estatus`) VALUES
(0, 81, 765432454, 0, 0, 0, '2021-01-24 18:17:53', NULL, '', 1),
(1, 61, 765432454, 1, 1, 1, '2021-01-22 18:31:05', '2021-12-22 12:31:05', 'Alumno inscrito a Node js', 1),
(2, 62, 765432454, 1, 1, 1, '2021-02-22 18:31:05', '2021-12-22 12:31:05', 'Alumno inscrito a Node js', 1),
(3, 63, 765432454, 1, 1, 1, '2021-02-22 18:31:05', '2021-12-22 12:31:05', 'Alumno inscrito a Node js', 1),
(4, 64, 765432454, 1, 1, 1, '2021-01-22 18:31:05', '2021-12-22 12:31:05', 'Alumno inscrito a Node js', 1),
(5, 65, 765432454, 1, 1, 1, '2021-03-22 18:31:05', '2021-12-22 12:31:05', 'Alumno inscrito a Node js', 1),
(6, 66, 765432454, 1, 1, 1, '2021-03-22 18:31:06', '2021-12-22 12:31:06', 'Alumno inscrito a Node js', 1),
(7, 67, 765432454, 1, 1, 1, '2021-04-22 17:31:06', '2021-12-22 12:31:06', 'Alumno inscrito a Node js', 1),
(8, 68, 765432454, 1, 1, 1, '2021-04-22 17:31:06', '2021-12-22 12:31:06', 'Alumno inscrito a Node js', 1),
(9, 69, 765432454, 1, 1, 1, '2021-05-22 17:31:06', '2021-12-22 12:31:06', 'Alumno inscrito a Node js', 1),
(10, 70, 765432454, 1, 1, 1, '2021-05-22 17:31:06', '2021-12-22 12:31:06', 'Alumno inscrito a Node js', 1),
(11, 71, 765432454, 1, 1, 1, '2021-06-22 17:31:06', '2021-12-22 12:31:06', 'Alumno inscrito a Node js', 1),
(12, 72, 765432454, 1, 1, 1, '2021-07-22 17:31:07', '2021-12-22 12:31:07', 'Alumno inscrito a Node js', 1),
(13, 73, 765432454, 1, 1, 1, '2021-07-22 17:31:07', '2021-12-22 12:31:07', 'Alumno inscrito a Node js', 1),
(14, 74, 765432454, 1, 1, 1, '2021-09-22 17:31:07', '2021-12-22 12:31:07', 'Alumno inscrito a Node js', 1),
(15, 75, 765432454, 1, 1, 1, '2021-08-22 17:31:13', '2021-12-22 12:31:13', 'Alumno inscrito a Node js', 1),
(123, 65, 765432466, 0, 0, 0, '2022-01-04 00:19:27', NULL, '', 1),
(124, 66, 765432466, 0, 0, 0, '2022-01-03 23:19:27', NULL, '', 1),
(125, 67, 765432466, 0, 0, 0, '2022-01-03 22:19:27', NULL, '', 1),
(126, 68, 765432466, 0, 0, 0, '2022-01-03 21:19:27', NULL, '', 1),
(127, 69, 765432466, 0, 0, 0, '2022-01-03 20:19:27', NULL, '', 1),
(128, 67, 765432466, 0, 0, 0, '2022-01-03 19:19:27', NULL, '', 1),
(129, 71, 765432466, 0, 0, 0, '2022-01-03 18:19:27', NULL, '', 1),
(12345, 81, 765432454, 0, 0, 0, '2021-08-24 17:18:06', NULL, '', 1),
(24524, 1, 765432453, 0, 0, 0, '2021-11-16 17:10:26', NULL, '', 1),
(254287, 1, 3, 0, 0, 0, '2021-08-16 16:10:26', NULL, '', 1),
(2521414, 2, 2, 0, 0, 0, '2021-10-16 16:09:33', '0000-00-00 00:00:00', '', 1),
(14154252, 2, 1, 0, 0, 0, '2021-10-16 16:09:33', '0000-00-00 00:00:00', '', 1),
(21457845, 89, 765432454, 0, 0, 0, '2021-09-24 01:02:37', NULL, '765432454', 1),
(25201414, 2, 2, 0, 0, 0, '2021-11-16 17:09:47', '0000-00-00 00:00:00', '', 1),
(52752452, 5, 3, 0, 0, 0, '2021-12-16 17:08:41', '0000-00-00 00:00:00', '', 1),
(78785875, 5, 3, 0, 0, 0, '2021-12-16 17:08:41', '0000-00-00 00:00:00', '', 1),
(123456789, 1, 1, 1, 1, 0, '2021-05-24 05:00:00', '2021-05-27 00:00:00', 'PRIMER INSCRITO ', 1),
(525425424, 4, 1, 0, 0, 0, '2021-12-16 06:00:00', '0000-00-00 00:00:00', '', 1),
(527242452, 5, 3, 0, 0, 0, '2020-12-16 17:08:48', '0000-00-00 00:00:00', '', 1),
(987654321, 2, 2, 0, 0, 0, '2020-05-24 05:00:00', '2021-05-29 00:00:00', 'SEGUNDO ESTUDIANTE EN 2DO GRUPO', 1),
(1415254252, 2, 1, 0, 0, 0, '2020-12-16 17:09:47', '0000-00-00 00:00:00', '', 1),
(78725285875, 5, 3, 0, 0, 0, '2020-12-16 17:08:48', '0000-00-00 00:00:00', '', 1),
(516543418667, 4, 2, 0, 0, 0, '2021-12-16 06:00:00', '0000-00-00 00:00:00', '', 1),
(522545425424, 4, 1, 0, 0, 0, '2021-12-16 06:00:00', '0000-00-00 00:00:00', '', 1),
(51654653418667, 4, 2, 0, 0, 0, '2021-12-16 06:00:00', '0000-00-00 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_acta`
--

CREATE TABLE `inscripcion_acta` (
  `id_inscripcion_acta` bigint(20) NOT NULL,
  `folio_acta_fk` int(10) NOT NULL,
  `fecha_incorpora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `calificacion` int(3) NOT NULL DEFAULT '0',
  `estatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `keywords`
--

CREATE TABLE `keywords` (
  `id_curso_fk` int(10) NOT NULL,
  `keyword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `id_estado_fk` int(11) NOT NULL,
  `clave` varchar(5) NOT NULL,
  `municipio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `id_estado_fk`, `clave`, `municipio`) VALUES
(1, 1, '001', 'Aguascalientes'),
(2, 1, '002', 'Asientos'),
(3, 1, '003', 'Calvillo'),
(4, 1, '004', 'Cosío'),
(5, 1, '005', 'Jesús María'),
(6, 1, '006', 'Pabellón de Arteaga'),
(7, 1, '007', 'Rincón de Romos'),
(8, 1, '008', 'San José de Gracia'),
(9, 1, '009', 'Tepezalá'),
(10, 1, '010', 'El Llano'),
(11, 1, '011', 'San Francisco de los Romo'),
(12, 2, '001', 'Ensenada'),
(13, 2, '002', 'Mexicali'),
(14, 2, '003', 'Tecate'),
(15, 2, '004', 'Tijuana'),
(16, 2, '005', 'Playas de Rosarito'),
(17, 3, '001', 'Comondú'),
(18, 3, '002', 'Mulegé'),
(19, 3, '003', 'La Paz'),
(20, 3, '008', 'Los Cabos'),
(21, 3, '009', 'Loreto'),
(22, 4, '001', 'Calkiní'),
(23, 4, '002', 'Campeche'),
(24, 4, '003', 'Carmen'),
(25, 4, '004', 'Champotón'),
(26, 4, '005', 'Hecelchakán'),
(27, 4, '006', 'Hopelchén'),
(28, 4, '007', 'Palizada'),
(29, 4, '008', 'Tenabo'),
(30, 4, '009', 'Escárcega'),
(31, 4, '010', 'Calakmul'),
(32, 4, '011', 'Candelaria'),
(33, 5, '001', 'Abasolo'),
(34, 5, '002', 'Acuña'),
(35, 5, '003', 'Allende'),
(36, 5, '004', 'Arteaga'),
(37, 5, '005', 'Candela'),
(38, 5, '006', 'Castaños'),
(39, 5, '007', 'Cuatro Ciénegas'),
(40, 5, '008', 'Escobedo'),
(41, 5, '009', 'Francisco I. Madero'),
(42, 5, '010', 'Frontera'),
(43, 5, '011', 'General Cepeda'),
(44, 5, '012', 'Guerrero'),
(45, 5, '013', 'Hidalgo'),
(46, 5, '014', 'Jiménez'),
(47, 5, '015', 'Juárez'),
(48, 5, '016', 'Lamadrid'),
(49, 5, '017', 'Matamoros'),
(50, 5, '018', 'Monclova'),
(51, 5, '019', 'Morelos'),
(52, 5, '020', 'Múzquiz'),
(53, 5, '021', 'Nadadores'),
(54, 5, '022', 'Nava'),
(55, 5, '023', 'Ocampo'),
(56, 5, '024', 'Parras'),
(57, 5, '025', 'Piedras Negras'),
(58, 5, '026', 'Progreso'),
(59, 5, '027', 'Ramos Arizpe'),
(60, 5, '028', 'Sabinas'),
(61, 5, '029', 'Sacramento'),
(62, 5, '030', 'Saltillo'),
(63, 5, '031', 'San Buenaventura'),
(64, 5, '032', 'San Juan de Sabinas'),
(65, 5, '033', 'San Pedro'),
(66, 5, '034', 'Sierra Mojada'),
(67, 5, '035', 'Torreón'),
(68, 5, '036', 'Viesca'),
(69, 5, '037', 'Villa Unión'),
(70, 5, '038', 'Zaragoza'),
(71, 6, '001', 'Armería'),
(72, 6, '002', 'Colima'),
(73, 6, '003', 'Comala'),
(74, 6, '004', 'Coquimatlán'),
(75, 6, '005', 'Cuauhtémoc'),
(76, 6, '006', 'Ixtlahuacán'),
(77, 6, '007', 'Manzanillo'),
(78, 6, '008', 'Minatitlán'),
(79, 6, '009', 'Tecomán'),
(80, 6, '010', 'Villa de Álvarez'),
(81, 7, '001', 'Acacoyagua'),
(82, 7, '002', 'Acala'),
(83, 7, '003', 'Acapetahua'),
(84, 7, '004', 'Altamirano'),
(85, 7, '005', 'Amatán'),
(86, 7, '006', 'Amatenango de la Frontera'),
(87, 7, '007', 'Amatenango del Valle'),
(88, 7, '008', 'Angel Albino Corzo'),
(89, 7, '009', 'Arriaga'),
(90, 7, '010', 'Bejucal de Ocampo'),
(91, 7, '011', 'Bella Vista'),
(92, 7, '012', 'Berriozábal'),
(93, 7, '013', 'Bochil'),
(94, 7, '014', 'El Bosque'),
(95, 7, '015', 'Cacahoatán'),
(96, 7, '016', 'Catazajá'),
(97, 7, '017', 'Cintalapa'),
(98, 7, '018', 'Coapilla'),
(99, 7, '019', 'Comitán de Domínguez'),
(100, 7, '020', 'La Concordia'),
(101, 7, '021', 'Copainalá'),
(102, 7, '022', 'Chalchihuitán'),
(103, 7, '023', 'Chamula'),
(104, 7, '024', 'Chanal'),
(105, 7, '025', 'Chapultenango'),
(106, 7, '026', 'Chenalhó'),
(107, 7, '027', 'Chiapa de Corzo'),
(108, 7, '028', 'Chiapilla'),
(109, 7, '029', 'Chicoasén'),
(110, 7, '030', 'Chicomuselo'),
(111, 7, '031', 'Chilón'),
(112, 7, '032', 'Escuintla'),
(113, 7, '033', 'Francisco León'),
(114, 7, '034', 'Frontera Comalapa'),
(115, 7, '035', 'Frontera Hidalgo'),
(116, 7, '036', 'La Grandeza'),
(117, 7, '037', 'Huehuetán'),
(118, 7, '038', 'Huixtán'),
(119, 7, '039', 'Huitiupán'),
(120, 7, '040', 'Huixtla'),
(121, 7, '041', 'La Independencia'),
(122, 7, '042', 'Ixhuatán'),
(123, 7, '043', 'Ixtacomitán'),
(124, 7, '044', 'Ixtapa'),
(125, 7, '045', 'Ixtapangajoya'),
(126, 7, '046', 'Jiquipilas'),
(127, 7, '047', 'Jitotol'),
(128, 7, '048', 'Juárez'),
(129, 7, '049', 'Larráinzar'),
(130, 7, '050', 'La Libertad'),
(131, 7, '051', 'Mapastepec'),
(132, 7, '052', 'Las Margaritas'),
(133, 7, '053', 'Mazapa de Madero'),
(134, 7, '054', 'Mazatán'),
(135, 7, '055', 'Metapa'),
(136, 7, '056', 'Mitontic'),
(137, 7, '057', 'Motozintla'),
(138, 7, '058', 'Nicolás Ruíz'),
(139, 7, '059', 'Ocosingo'),
(140, 7, '060', 'Ocotepec'),
(141, 7, '061', 'Ocozocoautla de Espinosa'),
(142, 7, '062', 'Ostuacán'),
(143, 7, '063', 'Osumacinta'),
(144, 7, '064', 'Oxchuc'),
(145, 7, '065', 'Palenque'),
(146, 7, '066', 'Pantelhó'),
(147, 7, '067', 'Pantepec'),
(148, 7, '068', 'Pichucalco'),
(149, 7, '069', 'Pijijiapan'),
(150, 7, '070', 'El Porvenir'),
(151, 7, '071', 'Villa Comaltitlán'),
(152, 7, '072', 'Pueblo Nuevo Solistahuacán'),
(153, 7, '073', 'Rayón'),
(154, 7, '074', 'Reforma'),
(155, 7, '075', 'Las Rosas'),
(156, 7, '076', 'Sabanilla'),
(157, 7, '077', 'Salto de Agua'),
(158, 7, '078', 'San Cristóbal de las Casas'),
(159, 7, '079', 'San Fernando'),
(160, 7, '080', 'Siltepec'),
(161, 7, '081', 'Simojovel'),
(162, 7, '082', 'Sitalá'),
(163, 7, '083', 'Socoltenango'),
(164, 7, '084', 'Solosuchiapa'),
(165, 7, '085', 'Soyaló'),
(166, 7, '086', 'Suchiapa'),
(167, 7, '087', 'Suchiate'),
(168, 7, '088', 'Sunuapa'),
(169, 7, '089', 'Tapachula'),
(170, 7, '090', 'Tapalapa'),
(171, 7, '091', 'Tapilula'),
(172, 7, '092', 'Tecpatán'),
(173, 7, '093', 'Tenejapa'),
(174, 7, '094', 'Teopisca'),
(175, 7, '096', 'Tila'),
(176, 7, '097', 'Tonalá'),
(177, 7, '098', 'Totolapa'),
(178, 7, '099', 'La Trinitaria'),
(179, 7, '100', 'Tumbalá'),
(180, 7, '101', 'Tuxtla Gutiérrez'),
(181, 7, '102', 'Tuxtla Chico'),
(182, 7, '103', 'Tuzantán'),
(183, 7, '104', 'Tzimol'),
(184, 7, '105', 'Unión Juárez'),
(185, 7, '106', 'Venustiano Carranza'),
(186, 7, '107', 'Villa Corzo'),
(187, 7, '108', 'Villaflores'),
(188, 7, '109', 'Yajalón'),
(189, 7, '110', 'San Lucas'),
(190, 7, '111', 'Zinacantán'),
(191, 7, '112', 'San Juan Cancuc'),
(192, 7, '113', 'Aldama'),
(193, 7, '114', 'Benemérito de las Américas'),
(194, 7, '115', 'Maravilla Tenejapa'),
(195, 7, '116', 'Marqués de Comillas'),
(196, 7, '117', 'Montecristo de Guerrero'),
(197, 7, '118', 'San Andrés Duraznal'),
(198, 7, '119', 'Santiago el Pinar'),
(199, 7, '120', 'Capitán Luis Ángel Vidal'),
(200, 7, '121', 'Rincón Chamula San Pedro'),
(201, 7, '122', 'El Parral'),
(202, 7, '123', 'Emiliano Zapata'),
(203, 7, '124', 'Mezcalapa'),
(204, 8, '001', 'Ahumada'),
(205, 8, '002', 'Aldama'),
(206, 8, '003', 'Allende'),
(207, 8, '004', 'Aquiles Serdán'),
(208, 8, '005', 'Ascensión'),
(209, 8, '006', 'Bachíniva'),
(210, 8, '007', 'Balleza'),
(211, 8, '008', 'Batopilas de Manuel Gómez Morín'),
(212, 8, '009', 'Bocoyna'),
(213, 8, '010', 'Buenaventura'),
(214, 8, '011', 'Camargo'),
(215, 8, '012', 'Carichí'),
(216, 8, '013', 'Casas Grandes'),
(217, 8, '014', 'Coronado'),
(218, 8, '015', 'Coyame del Sotol'),
(219, 8, '016', 'La Cruz'),
(220, 8, '017', 'Cuauhtémoc'),
(221, 8, '018', 'Cusihuiriachi'),
(222, 8, '019', 'Chihuahua'),
(223, 8, '020', 'Chínipas'),
(224, 8, '021', 'Delicias'),
(225, 8, '022', 'Dr. Belisario Domínguez'),
(226, 8, '023', 'Galeana'),
(227, 8, '024', 'Santa Isabel'),
(228, 8, '025', 'Gómez Farías'),
(229, 8, '026', 'Gran Morelos'),
(230, 8, '027', 'Guachochi'),
(231, 8, '028', 'Guadalupe'),
(232, 8, '029', 'Guadalupe y Calvo'),
(233, 8, '030', 'Guazapares'),
(234, 8, '031', 'Guerrero'),
(235, 8, '032', 'Hidalgo del Parral'),
(236, 8, '033', 'Huejotitán'),
(237, 8, '034', 'Ignacio Zaragoza'),
(238, 8, '035', 'Janos'),
(239, 8, '036', 'Jiménez'),
(240, 8, '037', 'Juárez'),
(241, 8, '038', 'Julimes'),
(242, 8, '039', 'López'),
(243, 8, '040', 'Madera'),
(244, 8, '041', 'Maguarichi'),
(245, 8, '042', 'Manuel Benavides'),
(246, 8, '043', 'Matachí'),
(247, 8, '044', 'Matamoros'),
(248, 8, '045', 'Meoqui'),
(249, 8, '046', 'Morelos'),
(250, 8, '047', 'Moris'),
(251, 8, '048', 'Namiquipa'),
(252, 8, '049', 'Nonoava'),
(253, 8, '050', 'Nuevo Casas Grandes'),
(254, 8, '051', 'Ocampo'),
(255, 8, '052', 'Ojinaga'),
(256, 8, '053', 'Praxedis G. Guerrero'),
(257, 8, '054', 'Riva Palacio'),
(258, 8, '055', 'Rosales'),
(259, 8, '056', 'Rosario'),
(260, 8, '057', 'San Francisco de Borja'),
(261, 8, '058', 'San Francisco de Conchos'),
(262, 8, '059', 'San Francisco del Oro'),
(263, 8, '060', 'Santa Bárbara'),
(264, 8, '061', 'Satevó'),
(265, 8, '062', 'Saucillo'),
(266, 8, '063', 'Temósachic'),
(267, 8, '064', 'El Tule'),
(268, 8, '065', 'Urique'),
(269, 8, '066', 'Uruachi'),
(270, 8, '067', 'Valle de Zaragoza'),
(271, 9, '002', 'Azcapotzalco'),
(272, 9, '003', 'Coyoacán'),
(273, 9, '004', 'Cuajimalpa de Morelos'),
(274, 9, '005', 'Gustavo A. Madero'),
(275, 9, '006', 'Iztacalco'),
(276, 9, '007', 'Iztapalapa'),
(277, 9, '008', 'La Magdalena Contreras'),
(278, 9, '009', 'Milpa Alta'),
(279, 9, '010', 'Álvaro Obregón'),
(280, 9, '011', 'Tláhuac'),
(281, 9, '012', 'Tlalpan'),
(282, 9, '013', 'Xochimilco'),
(283, 9, '014', 'Benito Juárez'),
(284, 9, '015', 'Cuauhtémoc'),
(285, 9, '016', 'Miguel Hidalgo'),
(286, 9, '017', 'Venustiano Carranza'),
(287, 10, '001', 'Canatlán'),
(288, 10, '002', 'Canelas'),
(289, 10, '003', 'Coneto de Comonfort'),
(290, 10, '004', 'Cuencamé'),
(291, 10, '005', 'Durango'),
(292, 10, '006', 'General Simón Bolívar'),
(293, 10, '007', 'Gómez Palacio'),
(294, 10, '008', 'Guadalupe Victoria'),
(295, 10, '009', 'Guanaceví'),
(296, 10, '010', 'Hidalgo'),
(297, 10, '011', 'Indé'),
(298, 10, '012', 'Lerdo'),
(299, 10, '013', 'Mapimí'),
(300, 10, '014', 'Mezquital'),
(301, 10, '015', 'Nazas'),
(302, 10, '016', 'Nombre de Dios'),
(303, 10, '017', 'Ocampo'),
(304, 10, '018', 'El Oro'),
(305, 10, '019', 'Otáez'),
(306, 10, '020', 'Pánuco de Coronado'),
(307, 10, '021', 'Peñón Blanco'),
(308, 10, '022', 'Poanas'),
(309, 10, '023', 'Pueblo Nuevo'),
(310, 10, '024', 'Rodeo'),
(311, 10, '025', 'San Bernardo'),
(312, 10, '026', 'San Dimas'),
(313, 10, '027', 'San Juan de Guadalupe'),
(314, 10, '028', 'San Juan del Río'),
(315, 10, '029', 'San Luis del Cordero'),
(316, 10, '030', 'San Pedro del Gallo'),
(317, 10, '031', 'Santa Clara'),
(318, 10, '032', 'Santiago Papasquiaro'),
(319, 10, '033', 'Súchil'),
(320, 10, '034', 'Tamazula'),
(321, 10, '035', 'Tepehuanes'),
(322, 10, '036', 'Tlahualilo'),
(323, 10, '037', 'Topia'),
(324, 10, '038', 'Vicente Guerrero'),
(325, 10, '039', 'Nuevo Ideal'),
(326, 11, '001', 'Abasolo'),
(327, 11, '002', 'Acámbaro'),
(328, 11, '003', 'San Miguel de Allende'),
(329, 11, '004', 'Apaseo el Alto'),
(330, 11, '005', 'Apaseo el Grande'),
(331, 11, '006', 'Atarjea'),
(332, 11, '007', 'Celaya'),
(333, 11, '008', 'Manuel Doblado'),
(334, 11, '009', 'Comonfort'),
(335, 11, '010', 'Coroneo'),
(336, 11, '011', 'Cortazar'),
(337, 11, '012', 'Cuerámaro'),
(338, 11, '013', 'Doctor Mora'),
(339, 11, '014', 'Dolores Hidalgo Cuna de la Independencia Nacional'),
(340, 11, '015', 'Guanajuato'),
(341, 11, '016', 'Huanímaro'),
(342, 11, '017', 'Irapuato'),
(343, 11, '018', 'Jaral del Progreso'),
(344, 11, '019', 'Jerécuaro'),
(345, 11, '020', 'León'),
(346, 11, '021', 'Moroleón'),
(347, 11, '022', 'Ocampo'),
(348, 11, '023', 'Pénjamo'),
(349, 11, '024', 'Pueblo Nuevo'),
(350, 11, '025', 'Purísima del Rincón'),
(351, 11, '026', 'Romita'),
(352, 11, '027', 'Salamanca'),
(353, 11, '028', 'Salvatierra'),
(354, 11, '029', 'San Diego de la Unión'),
(355, 11, '030', 'San Felipe'),
(356, 11, '031', 'San Francisco del Rincón'),
(357, 11, '032', 'San José Iturbide'),
(358, 11, '033', 'San Luis de la Paz'),
(359, 11, '034', 'Santa Catarina'),
(360, 11, '035', 'Santa Cruz de Juventino Rosas'),
(361, 11, '036', 'Santiago Maravatío'),
(362, 11, '037', 'Silao de la Victoria'),
(363, 11, '038', 'Tarandacuao'),
(364, 11, '039', 'Tarimoro'),
(365, 11, '040', 'Tierra Blanca'),
(366, 11, '041', 'Uriangato'),
(367, 11, '042', 'Valle de Santiago'),
(368, 11, '043', 'Victoria'),
(369, 11, '044', 'Villagrán'),
(370, 11, '045', 'Xichú'),
(371, 11, '046', 'Yuriria'),
(372, 12, '001', 'Acapulco de Juárez'),
(373, 12, '002', 'Ahuacuotzingo'),
(374, 12, '003', 'Ajuchitlán del Progreso'),
(375, 12, '004', 'Alcozauca de Guerrero'),
(376, 12, '005', 'Alpoyeca'),
(377, 12, '006', 'Apaxtla'),
(378, 12, '007', 'Arcelia'),
(379, 12, '008', 'Atenango del Río'),
(380, 12, '009', 'Atlamajalcingo del Monte'),
(381, 12, '010', 'Atlixtac'),
(382, 12, '011', 'Atoyac de Álvarez'),
(383, 12, '012', 'Ayutla de los Libres'),
(384, 12, '013', 'Azoyú'),
(385, 12, '014', 'Benito Juárez'),
(386, 12, '015', 'Buenavista de Cuéllar'),
(387, 12, '016', 'Coahuayutla de José María Izazaga'),
(388, 12, '017', 'Cocula'),
(389, 12, '018', 'Copala'),
(390, 12, '019', 'Copalillo'),
(391, 12, '020', 'Copanatoyac'),
(392, 12, '021', 'Coyuca de Benítez'),
(393, 12, '022', 'Coyuca de Catalán'),
(394, 12, '023', 'Cuajinicuilapa'),
(395, 12, '024', 'Cualác'),
(396, 12, '025', 'Cuautepec'),
(397, 12, '026', 'Cuetzala del Progreso'),
(398, 12, '027', 'Cutzamala de Pinzón'),
(399, 12, '028', 'Chilapa de Álvarez'),
(400, 12, '029', 'Chilpancingo de los Bravo'),
(401, 12, '030', 'Florencio Villarreal'),
(402, 12, '031', 'General Canuto A. Neri'),
(403, 12, '032', 'General Heliodoro Castillo'),
(404, 12, '033', 'Huamuxtitlán'),
(405, 12, '034', 'Huitzuco de los Figueroa'),
(406, 12, '035', 'Iguala de la Independencia'),
(407, 12, '036', 'Igualapa'),
(408, 12, '037', 'Ixcateopan de Cuauhtémoc'),
(409, 12, '038', 'Zihuatanejo de Azueta'),
(410, 12, '039', 'Juan R. Escudero'),
(411, 12, '040', 'Leonardo Bravo'),
(412, 12, '041', 'Malinaltepec'),
(413, 12, '042', 'Mártir de Cuilapan'),
(414, 12, '043', 'Metlatónoc'),
(415, 12, '044', 'Mochitlán'),
(416, 12, '045', 'Olinalá'),
(417, 12, '046', 'Ometepec'),
(418, 12, '047', 'Pedro Ascencio Alquisiras'),
(419, 12, '048', 'Petatlán'),
(420, 12, '049', 'Pilcaya'),
(421, 12, '050', 'Pungarabato'),
(422, 12, '051', 'Quechultenango'),
(423, 12, '052', 'San Luis Acatlán'),
(424, 12, '053', 'San Marcos'),
(425, 12, '054', 'San Miguel Totolapan'),
(426, 12, '055', 'Taxco de Alarcón'),
(427, 12, '056', 'Tecoanapa'),
(428, 12, '057', 'Técpan de Galeana'),
(429, 12, '058', 'Teloloapan'),
(430, 12, '059', 'Tepecoacuilco de Trujano'),
(431, 12, '060', 'Tetipac'),
(432, 12, '061', 'Tixtla de Guerrero'),
(433, 12, '062', 'Tlacoachistlahuaca'),
(434, 12, '063', 'Tlacoapa'),
(435, 12, '064', 'Tlalchapa'),
(436, 12, '065', 'Tlalixtaquilla de Maldonado'),
(437, 12, '066', 'Tlapa de Comonfort'),
(438, 12, '067', 'Tlapehuala'),
(439, 12, '068', 'La Unión de Isidoro Montes de Oca'),
(440, 12, '069', 'Xalpatláhuac'),
(441, 12, '070', 'Xochihuehuetlán'),
(442, 12, '071', 'Xochistlahuaca'),
(443, 12, '072', 'Zapotitlán Tablas'),
(444, 12, '073', 'Zirándaro'),
(445, 12, '074', 'Zitlala'),
(446, 12, '075', 'Eduardo Neri'),
(447, 12, '076', 'Acatepec'),
(448, 12, '077', 'Marquelia'),
(449, 12, '078', 'Cochoapa el Grande'),
(450, 12, '079', 'José Joaquín de Herrera'),
(451, 12, '080', 'Juchitán'),
(452, 12, '081', 'Iliatenco'),
(453, 13, '001', 'Acatlán'),
(454, 13, '002', 'Acaxochitlán'),
(455, 13, '003', 'Actopan'),
(456, 13, '004', 'Agua Blanca de Iturbide'),
(457, 13, '005', 'Ajacuba'),
(458, 13, '006', 'Alfajayucan'),
(459, 13, '007', 'Almoloya'),
(460, 13, '008', 'Apan'),
(461, 13, '009', 'El Arenal'),
(462, 13, '010', 'Atitalaquia'),
(463, 13, '011', 'Atlapexco'),
(464, 13, '012', 'Atotonilco el Grande'),
(465, 13, '013', 'Atotonilco de Tula'),
(466, 13, '014', 'Calnali'),
(467, 13, '015', 'Cardonal'),
(468, 13, '016', 'Cuautepec de Hinojosa'),
(469, 13, '017', 'Chapantongo'),
(470, 13, '018', 'Chapulhuacán'),
(471, 13, '019', 'Chilcuautla'),
(472, 13, '020', 'Eloxochitlán'),
(473, 13, '021', 'Emiliano Zapata'),
(474, 13, '022', 'Epazoyucan'),
(475, 13, '023', 'Francisco I. Madero'),
(476, 13, '024', 'Huasca de Ocampo'),
(477, 13, '025', 'Huautla'),
(478, 13, '026', 'Huazalingo'),
(479, 13, '027', 'Huehuetla'),
(480, 13, '028', 'Huejutla de Reyes'),
(481, 13, '029', 'Huichapan'),
(482, 13, '030', 'Ixmiquilpan'),
(483, 13, '031', 'Jacala de Ledezma'),
(484, 13, '032', 'Jaltocán'),
(485, 13, '033', 'Juárez Hidalgo'),
(486, 13, '034', 'Lolotla'),
(487, 13, '035', 'Metepec'),
(488, 13, '036', 'San Agustín Metzquititlán'),
(489, 13, '037', 'Metztitlán'),
(490, 13, '038', 'Mineral del Chico'),
(491, 13, '039', 'Mineral del Monte'),
(492, 13, '040', 'La Misión'),
(493, 13, '041', 'Mixquiahuala de Juárez'),
(494, 13, '042', 'Molango de Escamilla'),
(495, 13, '043', 'Nicolás Flores'),
(496, 13, '044', 'Nopala de Villagrán'),
(497, 13, '045', 'Omitlán de Juárez'),
(498, 13, '046', 'San Felipe Orizatlán'),
(499, 13, '047', 'Pacula'),
(500, 13, '048', 'Pachuca de Soto'),
(501, 13, '049', 'Pisaflores'),
(502, 13, '050', 'Progreso de Obregón'),
(503, 13, '051', 'Mineral de la Reforma'),
(504, 13, '052', 'San Agustín Tlaxiaca'),
(505, 13, '053', 'San Bartolo Tutotepec'),
(506, 13, '054', 'San Salvador'),
(507, 13, '055', 'Santiago de Anaya'),
(508, 13, '056', 'Santiago Tulantepec de Lugo Guerrero'),
(509, 13, '057', 'Singuilucan'),
(510, 13, '058', 'Tasquillo'),
(511, 13, '059', 'Tecozautla'),
(512, 13, '060', 'Tenango de Doria'),
(513, 13, '061', 'Tepeapulco'),
(514, 13, '062', 'Tepehuacán de Guerrero'),
(515, 13, '063', 'Tepeji del Río de Ocampo'),
(516, 13, '064', 'Tepetitlán'),
(517, 13, '065', 'Tetepango'),
(518, 13, '066', 'Villa de Tezontepec'),
(519, 13, '067', 'Tezontepec de Aldama'),
(520, 13, '068', 'Tianguistengo'),
(521, 13, '069', 'Tizayuca'),
(522, 13, '070', 'Tlahuelilpan'),
(523, 13, '071', 'Tlahuiltepa'),
(524, 13, '072', 'Tlanalapa'),
(525, 13, '073', 'Tlanchinol'),
(526, 13, '074', 'Tlaxcoapan'),
(527, 13, '075', 'Tolcayuca'),
(528, 13, '076', 'Tula de Allende'),
(529, 13, '077', 'Tulancingo de Bravo'),
(530, 13, '078', 'Xochiatipan'),
(531, 13, '079', 'Xochicoatlán'),
(532, 13, '080', 'Yahualica'),
(533, 13, '081', 'Zacualtipán de Ángeles'),
(534, 13, '082', 'Zapotlán de Juárez'),
(535, 13, '083', 'Zempoala'),
(536, 13, '084', 'Zimapán'),
(537, 14, '001', 'Acatic'),
(538, 14, '002', 'Acatlán de Juárez'),
(539, 14, '003', 'Ahualulco de Mercado'),
(540, 14, '004', 'Amacueca'),
(541, 14, '005', 'Amatitán'),
(542, 14, '006', 'Ameca'),
(543, 14, '007', 'San Juanito de Escobedo'),
(544, 14, '008', 'Arandas'),
(545, 14, '009', 'El Arenal'),
(546, 14, '010', 'Atemajac de Brizuela'),
(547, 14, '011', 'Atengo'),
(548, 14, '012', 'Atenguillo'),
(549, 14, '013', 'Atotonilco el Alto'),
(550, 14, '014', 'Atoyac'),
(551, 14, '015', 'Autlán de Navarro'),
(552, 14, '016', 'Ayotlán'),
(553, 14, '017', 'Ayutla'),
(554, 14, '018', 'La Barca'),
(555, 14, '019', 'Bolaños'),
(556, 14, '020', 'Cabo Corrientes'),
(557, 14, '021', 'Casimiro Castillo'),
(558, 14, '022', 'Cihuatlán'),
(559, 14, '023', 'Zapotlán el Grande'),
(560, 14, '024', 'Cocula'),
(561, 14, '025', 'Colotlán'),
(562, 14, '026', 'Concepción de Buenos Aires'),
(563, 14, '027', 'Cuautitlán de García Barragán'),
(564, 14, '028', 'Cuautla'),
(565, 14, '029', 'Cuquío'),
(566, 14, '030', 'Chapala'),
(567, 14, '031', 'Chimaltitán'),
(568, 14, '032', 'Chiquilistlán'),
(569, 14, '033', 'Degollado'),
(570, 14, '034', 'Ejutla'),
(571, 14, '035', 'Encarnación de Díaz'),
(572, 14, '036', 'Etzatlán'),
(573, 14, '037', 'El Grullo'),
(574, 14, '038', 'Guachinango'),
(575, 14, '039', 'Guadalajara'),
(576, 14, '040', 'Hostotipaquillo'),
(577, 14, '041', 'Huejúcar'),
(578, 14, '042', 'Huejuquilla el Alto'),
(579, 14, '043', 'La Huerta'),
(580, 14, '044', 'Ixtlahuacán de los Membrillos'),
(581, 14, '045', 'Ixtlahuacán del Río'),
(582, 14, '046', 'Jalostotitlán'),
(583, 14, '047', 'Jamay'),
(584, 14, '048', 'Jesús María'),
(585, 14, '049', 'Jilotlán de los Dolores'),
(586, 14, '050', 'Jocotepec'),
(587, 14, '051', 'Juanacatlán'),
(588, 14, '052', 'Juchitlán'),
(589, 14, '053', 'Lagos de Moreno'),
(590, 14, '054', 'El Limón'),
(591, 14, '055', 'Magdalena'),
(592, 14, '056', 'Santa María del Oro'),
(593, 14, '057', 'La Manzanilla de la Paz'),
(594, 14, '058', 'Mascota'),
(595, 14, '059', 'Mazamitla'),
(596, 14, '060', 'Mexticacán'),
(597, 14, '061', 'Mezquitic'),
(598, 14, '062', 'Mixtlán'),
(599, 14, '063', 'Ocotlán'),
(600, 14, '064', 'Ojuelos de Jalisco'),
(601, 14, '065', 'Pihuamo'),
(602, 14, '066', 'Poncitlán'),
(603, 14, '067', 'Puerto Vallarta'),
(604, 14, '068', 'Villa Purificación'),
(605, 14, '069', 'Quitupan'),
(606, 14, '070', 'El Salto'),
(607, 14, '071', 'San Cristóbal de la Barranca'),
(608, 14, '072', 'San Diego de Alejandría'),
(609, 14, '073', 'San Juan de los Lagos'),
(610, 14, '074', 'San Julián'),
(611, 14, '075', 'San Marcos'),
(612, 14, '076', 'San Martín de Bolaños'),
(613, 14, '077', 'San Martín Hidalgo'),
(614, 14, '078', 'San Miguel el Alto'),
(615, 14, '079', 'Gómez Farías'),
(616, 14, '080', 'San Sebastián del Oeste'),
(617, 14, '081', 'Santa María de los Ángeles'),
(618, 14, '082', 'Sayula'),
(619, 14, '083', 'Tala'),
(620, 14, '084', 'Talpa de Allende'),
(621, 14, '085', 'Tamazula de Gordiano'),
(622, 14, '086', 'Tapalpa'),
(623, 14, '087', 'Tecalitlán'),
(624, 14, '088', 'Tecolotlán'),
(625, 14, '089', 'Techaluta de Montenegro'),
(626, 14, '090', 'Tenamaxtlán'),
(627, 14, '091', 'Teocaltiche'),
(628, 14, '092', 'Teocuitatlán de Corona'),
(629, 14, '093', 'Tepatitlán de Morelos'),
(630, 14, '094', 'Tequila'),
(631, 14, '095', 'Teuchitlán'),
(632, 14, '096', 'Tizapán el Alto'),
(633, 14, '097', 'Tlajomulco de Zúñiga'),
(634, 14, '098', 'San Pedro Tlaquepaque'),
(635, 14, '099', 'Tolimán'),
(636, 14, '100', 'Tomatlán'),
(637, 14, '101', 'Tonalá'),
(638, 14, '102', 'Tonaya'),
(639, 14, '103', 'Tonila'),
(640, 14, '104', 'Totatiche'),
(641, 14, '105', 'Tototlán'),
(642, 14, '106', 'Tuxcacuesco'),
(643, 14, '107', 'Tuxcueca'),
(644, 14, '108', 'Tuxpan'),
(645, 14, '109', 'Unión de San Antonio'),
(646, 14, '110', 'Unión de Tula'),
(647, 14, '111', 'Valle de Guadalupe'),
(648, 14, '112', 'Valle de Juárez'),
(649, 14, '113', 'San Gabriel'),
(650, 14, '114', 'Villa Corona'),
(651, 14, '115', 'Villa Guerrero'),
(652, 14, '116', 'Villa Hidalgo'),
(653, 14, '117', 'Cañadas de Obregón'),
(654, 14, '118', 'Yahualica de González Gallo'),
(655, 14, '119', 'Zacoalco de Torres'),
(656, 14, '120', 'Zapopan'),
(657, 14, '121', 'Zapotiltic'),
(658, 14, '122', 'Zapotitlán de Vadillo'),
(659, 14, '123', 'Zapotlán del Rey'),
(660, 14, '124', 'Zapotlanejo'),
(661, 14, '125', 'San Ignacio Cerro Gordo'),
(662, 15, '001', 'Acambay de Ruíz Castañeda'),
(663, 15, '002', 'Acolman'),
(664, 15, '003', 'Aculco'),
(665, 15, '004', 'Almoloya de Alquisiras'),
(666, 15, '005', 'Almoloya de Juárez'),
(667, 15, '006', 'Almoloya del Río'),
(668, 15, '007', 'Amanalco'),
(669, 15, '008', 'Amatepec'),
(670, 15, '009', 'Amecameca'),
(671, 15, '010', 'Apaxco'),
(672, 15, '011', 'Atenco'),
(673, 15, '012', 'Atizapán'),
(674, 15, '013', 'Atizapán de Zaragoza'),
(675, 15, '014', 'Atlacomulco'),
(676, 15, '015', 'Atlautla'),
(677, 15, '016', 'Axapusco'),
(678, 15, '017', 'Ayapango'),
(679, 15, '018', 'Calimaya'),
(680, 15, '019', 'Capulhuac'),
(681, 15, '020', 'Coacalco de Berriozábal'),
(682, 15, '021', 'Coatepec Harinas'),
(683, 15, '022', 'Cocotitlán'),
(684, 15, '023', 'Coyotepec'),
(685, 15, '024', 'Cuautitlán'),
(686, 15, '025', 'Chalco'),
(687, 15, '026', 'Chapa de Mota'),
(688, 15, '027', 'Chapultepec'),
(689, 15, '028', 'Chiautla'),
(690, 15, '029', 'Chicoloapan'),
(691, 15, '030', 'Chiconcuac'),
(692, 15, '031', 'Chimalhuacán'),
(693, 15, '032', 'Donato Guerra'),
(694, 15, '033', 'Ecatepec de Morelos'),
(695, 15, '034', 'Ecatzingo'),
(696, 15, '035', 'Huehuetoca'),
(697, 15, '036', 'Hueypoxtla'),
(698, 15, '037', 'Huixquilucan'),
(699, 15, '038', 'Isidro Fabela'),
(700, 15, '039', 'Ixtapaluca'),
(701, 15, '040', 'Ixtapan de la Sal'),
(702, 15, '041', 'Ixtapan del Oro'),
(703, 15, '042', 'Ixtlahuaca'),
(704, 15, '043', 'Xalatlaco'),
(705, 15, '044', 'Jaltenco'),
(706, 15, '045', 'Jilotepec'),
(707, 15, '046', 'Jilotzingo'),
(708, 15, '047', 'Jiquipilco'),
(709, 15, '048', 'Jocotitlán'),
(710, 15, '049', 'Joquicingo'),
(711, 15, '050', 'Juchitepec'),
(712, 15, '051', 'Lerma'),
(713, 15, '052', 'Malinalco'),
(714, 15, '053', 'Melchor Ocampo'),
(715, 15, '054', 'Metepec'),
(716, 15, '055', 'Mexicaltzingo'),
(717, 15, '056', 'Morelos'),
(718, 15, '057', 'Naucalpan de Juárez'),
(719, 15, '058', 'Nezahualcóyotl'),
(720, 15, '059', 'Nextlalpan'),
(721, 15, '060', 'Nicolás Romero'),
(722, 15, '061', 'Nopaltepec'),
(723, 15, '062', 'Ocoyoacac'),
(724, 15, '063', 'Ocuilan'),
(725, 15, '064', 'El Oro'),
(726, 15, '065', 'Otumba'),
(727, 15, '066', 'Otzoloapan'),
(728, 15, '067', 'Otzolotepec'),
(729, 15, '068', 'Ozumba'),
(730, 15, '069', 'Papalotla'),
(731, 15, '070', 'La Paz'),
(732, 15, '071', 'Polotitlán'),
(733, 15, '072', 'Rayón'),
(734, 15, '073', 'San Antonio la Isla'),
(735, 15, '074', 'San Felipe del Progreso'),
(736, 15, '075', 'San Martín de las Pirámides'),
(737, 15, '076', 'San Mateo Atenco'),
(738, 15, '077', 'San Simón de Guerrero'),
(739, 15, '078', 'Santo Tomás'),
(740, 15, '079', 'Soyaniquilpan de Juárez'),
(741, 15, '080', 'Sultepec'),
(742, 15, '081', 'Tecámac'),
(743, 15, '082', 'Tejupilco'),
(744, 15, '083', 'Temamatla'),
(745, 15, '084', 'Temascalapa'),
(746, 15, '085', 'Temascalcingo'),
(747, 15, '086', 'Temascaltepec'),
(748, 15, '087', 'Temoaya'),
(749, 15, '088', 'Tenancingo'),
(750, 15, '089', 'Tenango del Aire'),
(751, 15, '090', 'Tenango del Valle'),
(752, 15, '091', 'Teoloyucan'),
(753, 15, '092', 'Teotihuacán'),
(754, 15, '093', 'Tepetlaoxtoc'),
(755, 15, '094', 'Tepetlixpa'),
(756, 15, '095', 'Tepotzotlán'),
(757, 15, '096', 'Tequixquiac'),
(758, 15, '097', 'Texcaltitlán'),
(759, 15, '098', 'Texcalyacac'),
(760, 15, '099', 'Texcoco'),
(761, 15, '100', 'Tezoyuca'),
(762, 15, '101', 'Tianguistenco'),
(763, 15, '102', 'Timilpan'),
(764, 15, '103', 'Tlalmanalco'),
(765, 15, '104', 'Tlalnepantla de Baz'),
(766, 15, '105', 'Tlatlaya'),
(767, 15, '106', 'Toluca'),
(768, 15, '107', 'Tonatico'),
(769, 15, '108', 'Tultepec'),
(770, 15, '109', 'Tultitlán'),
(771, 15, '110', 'Valle de Bravo'),
(772, 15, '111', 'Villa de Allende'),
(773, 15, '112', 'Villa del Carbón'),
(774, 15, '113', 'Villa Guerrero'),
(775, 15, '114', 'Villa Victoria'),
(776, 15, '115', 'Xonacatlán'),
(777, 15, '116', 'Zacazonapan'),
(778, 15, '117', 'Zacualpan'),
(779, 15, '118', 'Zinacantepec'),
(780, 15, '119', 'Zumpahuacán'),
(781, 15, '120', 'Zumpango'),
(782, 15, '121', 'Cuautitlán Izcalli'),
(783, 15, '122', 'Valle de Chalco Solidaridad'),
(784, 15, '123', 'Luvianos'),
(785, 15, '124', 'San José del Rincón'),
(786, 15, '125', 'Tonanitla'),
(787, 16, '001', 'Acuitzio'),
(788, 16, '002', 'Aguililla'),
(789, 16, '003', 'Álvaro Obregón'),
(790, 16, '004', 'Angamacutiro'),
(791, 16, '005', 'Angangueo'),
(792, 16, '006', 'Apatzingán'),
(793, 16, '007', 'Aporo'),
(794, 16, '008', 'Aquila'),
(795, 16, '009', 'Ario'),
(796, 16, '010', 'Arteaga'),
(797, 16, '011', 'Briseñas'),
(798, 16, '012', 'Buenavista'),
(799, 16, '013', 'Carácuaro'),
(800, 16, '014', 'Coahuayana'),
(801, 16, '015', 'Coalcomán de Vázquez Pallares'),
(802, 16, '016', 'Coeneo'),
(803, 16, '017', 'Contepec'),
(804, 16, '018', 'Copándaro'),
(805, 16, '019', 'Cotija'),
(806, 16, '020', 'Cuitzeo'),
(807, 16, '021', 'Charapan'),
(808, 16, '022', 'Charo'),
(809, 16, '023', 'Chavinda'),
(810, 16, '024', 'Cherán'),
(811, 16, '025', 'Chilchota'),
(812, 16, '026', 'Chinicuila'),
(813, 16, '027', 'Chucándiro'),
(814, 16, '028', 'Churintzio'),
(815, 16, '029', 'Churumuco'),
(816, 16, '030', 'Ecuandureo'),
(817, 16, '031', 'Epitacio Huerta'),
(818, 16, '032', 'Erongarícuaro'),
(819, 16, '033', 'Gabriel Zamora'),
(820, 16, '034', 'Hidalgo'),
(821, 16, '035', 'La Huacana'),
(822, 16, '036', 'Huandacareo'),
(823, 16, '037', 'Huaniqueo'),
(824, 16, '038', 'Huetamo'),
(825, 16, '039', 'Huiramba'),
(826, 16, '040', 'Indaparapeo'),
(827, 16, '041', 'Irimbo'),
(828, 16, '042', 'Ixtlán'),
(829, 16, '043', 'Jacona'),
(830, 16, '044', 'Jiménez'),
(831, 16, '045', 'Jiquilpan'),
(832, 16, '046', 'Juárez'),
(833, 16, '047', 'Jungapeo'),
(834, 16, '048', 'Lagunillas'),
(835, 16, '049', 'Madero'),
(836, 16, '050', 'Maravatío'),
(837, 16, '051', 'Marcos Castellanos'),
(838, 16, '052', 'Lázaro Cárdenas'),
(839, 16, '053', 'Morelia'),
(840, 16, '054', 'Morelos'),
(841, 16, '055', 'Múgica'),
(842, 16, '056', 'Nahuatzen'),
(843, 16, '057', 'Nocupétaro'),
(844, 16, '058', 'Nuevo Parangaricutiro'),
(845, 16, '059', 'Nuevo Urecho'),
(846, 16, '060', 'Numarán'),
(847, 16, '061', 'Ocampo'),
(848, 16, '062', 'Pajacuarán'),
(849, 16, '063', 'Panindícuaro'),
(850, 16, '064', 'Parácuaro'),
(851, 16, '065', 'Paracho'),
(852, 16, '066', 'Pátzcuaro'),
(853, 16, '067', 'Penjamillo'),
(854, 16, '068', 'Peribán'),
(855, 16, '069', 'La Piedad'),
(856, 16, '070', 'Purépero'),
(857, 16, '071', 'Puruándiro'),
(858, 16, '072', 'Queréndaro'),
(859, 16, '073', 'Quiroga'),
(860, 16, '074', 'Cojumatlán de Régules'),
(861, 16, '075', 'Los Reyes'),
(862, 16, '076', 'Sahuayo'),
(863, 16, '077', 'San Lucas'),
(864, 16, '078', 'Santa Ana Maya'),
(865, 16, '079', 'Salvador Escalante'),
(866, 16, '080', 'Senguio'),
(867, 16, '081', 'Susupuato'),
(868, 16, '082', 'Tacámbaro'),
(869, 16, '083', 'Tancítaro'),
(870, 16, '084', 'Tangamandapio'),
(871, 16, '085', 'Tangancícuaro'),
(872, 16, '086', 'Tanhuato'),
(873, 16, '087', 'Taretan'),
(874, 16, '088', 'Tarímbaro'),
(875, 16, '089', 'Tepalcatepec'),
(876, 16, '090', 'Tingambato'),
(877, 16, '091', 'Tingüindín'),
(878, 16, '092', 'Tiquicheo de Nicolás Romero'),
(879, 16, '093', 'Tlalpujahua'),
(880, 16, '094', 'Tlazazalca'),
(881, 16, '095', 'Tocumbo'),
(882, 16, '096', 'Tumbiscatío'),
(883, 16, '097', 'Turicato'),
(884, 16, '098', 'Tuxpan'),
(885, 16, '099', 'Tuzantla'),
(886, 16, '100', 'Tzintzuntzan'),
(887, 16, '101', 'Tzitzio'),
(888, 16, '102', 'Uruapan'),
(889, 16, '103', 'Venustiano Carranza'),
(890, 16, '104', 'Villamar'),
(891, 16, '105', 'Vista Hermosa'),
(892, 16, '106', 'Yurécuaro'),
(893, 16, '107', 'Zacapu'),
(894, 16, '108', 'Zamora'),
(895, 16, '109', 'Zináparo'),
(896, 16, '110', 'Zinapécuaro'),
(897, 16, '111', 'Ziracuaretiro'),
(898, 16, '112', 'Zitácuaro'),
(899, 16, '113', 'José Sixto Verduzco'),
(900, 17, '001', 'Amacuzac'),
(901, 17, '002', 'Atlatlahucan'),
(902, 17, '003', 'Axochiapan'),
(903, 17, '004', 'Ayala'),
(904, 17, '005', 'Coatlán del Río'),
(905, 17, '006', 'Cuautla'),
(906, 17, '007', 'Cuernavaca'),
(907, 17, '008', 'Emiliano Zapata'),
(908, 17, '009', 'Huitzilac'),
(909, 17, '010', 'Jantetelco'),
(910, 17, '011', 'Jiutepec'),
(911, 17, '012', 'Jojutla'),
(912, 17, '013', 'Jonacatepec de Leandro Valle'),
(913, 17, '014', 'Mazatepec'),
(914, 17, '015', 'Miacatlán'),
(915, 17, '016', 'Ocuituco'),
(916, 17, '017', 'Puente de Ixtla'),
(917, 17, '018', 'Temixco'),
(918, 17, '019', 'Tepalcingo'),
(919, 17, '020', 'Tepoztlán'),
(920, 17, '021', 'Tetecala'),
(921, 17, '022', 'Tetela del Volcán'),
(922, 17, '023', 'Tlalnepantla'),
(923, 17, '024', 'Tlaltizapán de Zapata'),
(924, 17, '025', 'Tlaquiltenango'),
(925, 17, '026', 'Tlayacapan'),
(926, 17, '027', 'Totolapan'),
(927, 17, '028', 'Xochitepec'),
(928, 17, '029', 'Yautepec'),
(929, 17, '030', 'Yecapixtla'),
(930, 17, '031', 'Zacatepec'),
(931, 17, '032', 'Zacualpan de Amilpas'),
(932, 17, '033', 'Temoac'),
(933, 18, '001', 'Acaponeta'),
(934, 18, '002', 'Ahuacatlán'),
(935, 18, '003', 'Amatlán de Cañas'),
(936, 18, '004', 'Compostela'),
(937, 18, '005', 'Huajicori'),
(938, 18, '006', 'Ixtlán del Río'),
(939, 18, '007', 'Jala'),
(940, 18, '008', 'Xalisco'),
(941, 18, '009', 'Del Nayar'),
(942, 18, '010', 'Rosamorada'),
(943, 18, '011', 'Ruíz'),
(944, 18, '012', 'San Blas'),
(945, 18, '013', 'San Pedro Lagunillas'),
(946, 18, '014', 'Santa María del Oro'),
(947, 18, '015', 'Santiago Ixcuintla'),
(948, 18, '016', 'Tecuala'),
(949, 18, '017', 'Tepic'),
(950, 18, '018', 'Tuxpan'),
(951, 18, '019', 'La Yesca'),
(952, 18, '020', 'Bahía de Banderas'),
(953, 19, '001', 'Abasolo'),
(954, 19, '002', 'Agualeguas'),
(955, 19, '003', 'Los Aldamas'),
(956, 19, '004', 'Allende'),
(957, 19, '005', 'Anáhuac'),
(958, 19, '006', 'Apodaca'),
(959, 19, '007', 'Aramberri'),
(960, 19, '008', 'Bustamante'),
(961, 19, '009', 'Cadereyta Jiménez'),
(962, 19, '010', 'El Carmen'),
(963, 19, '011', 'Cerralvo'),
(964, 19, '012', 'Ciénega de Flores'),
(965, 19, '013', 'China'),
(966, 19, '014', 'Doctor Arroyo'),
(967, 19, '015', 'Doctor Coss'),
(968, 19, '016', 'Doctor González'),
(969, 19, '017', 'Galeana'),
(970, 19, '018', 'García'),
(971, 19, '019', 'San Pedro Garza García'),
(972, 19, '020', 'General Bravo'),
(973, 19, '021', 'General Escobedo'),
(974, 19, '022', 'General Terán'),
(975, 19, '023', 'General Treviño'),
(976, 19, '024', 'General Zaragoza'),
(977, 19, '025', 'General Zuazua'),
(978, 19, '026', 'Guadalupe'),
(979, 19, '027', 'Los Herreras'),
(980, 19, '028', 'Higueras'),
(981, 19, '029', 'Hualahuises'),
(982, 19, '030', 'Iturbide'),
(983, 19, '031', 'Juárez'),
(984, 19, '032', 'Lampazos de Naranjo'),
(985, 19, '033', 'Linares'),
(986, 19, '034', 'Marín'),
(987, 19, '035', 'Melchor Ocampo'),
(988, 19, '036', 'Mier y Noriega'),
(989, 19, '037', 'Mina'),
(990, 19, '038', 'Montemorelos'),
(991, 19, '039', 'Monterrey'),
(992, 19, '040', 'Parás'),
(993, 19, '041', 'Pesquería'),
(994, 19, '042', 'Los Ramones'),
(995, 19, '043', 'Rayones'),
(996, 19, '044', 'Sabinas Hidalgo'),
(997, 19, '045', 'Salinas Victoria'),
(998, 19, '046', 'San Nicolás de los Garza'),
(999, 19, '047', 'Hidalgo'),
(1000, 19, '048', 'Santa Catarina'),
(1001, 19, '049', 'Santiago'),
(1002, 19, '050', 'Vallecillo'),
(1003, 19, '051', 'Villaldama'),
(1004, 20, '001', 'Abejones'),
(1005, 20, '002', 'Acatlán de Pérez Figueroa'),
(1006, 20, '003', 'Asunción Cacalotepec'),
(1007, 20, '004', 'Asunción Cuyotepeji'),
(1008, 20, '005', 'Asunción Ixtaltepec'),
(1009, 20, '006', 'Asunción Nochixtlán'),
(1010, 20, '007', 'Asunción Ocotlán'),
(1011, 20, '008', 'Asunción Tlacolulita'),
(1012, 20, '009', 'Ayotzintepec'),
(1013, 20, '010', 'El Barrio de la Soledad'),
(1014, 20, '011', 'Calihualá'),
(1015, 20, '012', 'Candelaria Loxicha'),
(1016, 20, '013', 'Ciénega de Zimatlán'),
(1017, 20, '014', 'Ciudad Ixtepec'),
(1018, 20, '015', 'Coatecas Altas'),
(1019, 20, '016', 'Coicoyán de las Flores'),
(1020, 20, '017', 'La Compañía'),
(1021, 20, '018', 'Concepción Buenavista'),
(1022, 20, '019', 'Concepción Pápalo'),
(1023, 20, '020', 'Constancia del Rosario'),
(1024, 20, '021', 'Cosolapa'),
(1025, 20, '022', 'Cosoltepec'),
(1026, 20, '023', 'Cuilápam de Guerrero'),
(1027, 20, '024', 'Cuyamecalco Villa de Zaragoza'),
(1028, 20, '025', 'Chahuites'),
(1029, 20, '026', 'Chalcatongo de Hidalgo'),
(1030, 20, '027', 'Chiquihuitlán de Benito Juárez'),
(1031, 20, '028', 'Heroica Ciudad de Ejutla de Crespo'),
(1032, 20, '029', 'Eloxochitlán de Flores Magón'),
(1033, 20, '030', 'El Espinal'),
(1034, 20, '031', 'Tamazulápam del Espíritu Santo'),
(1035, 20, '032', 'Fresnillo de Trujano'),
(1036, 20, '033', 'Guadalupe Etla'),
(1037, 20, '034', 'Guadalupe de Ramírez'),
(1038, 20, '035', 'Guelatao de Juárez'),
(1039, 20, '036', 'Guevea de Humboldt'),
(1040, 20, '037', 'Mesones Hidalgo'),
(1041, 20, '038', 'Villa Hidalgo'),
(1042, 20, '039', 'Heroica Ciudad de Huajuapan de León'),
(1043, 20, '040', 'Huautepec'),
(1044, 20, '041', 'Huautla de Jiménez'),
(1045, 20, '042', 'Ixtlán de Juárez'),
(1046, 20, '043', 'Heroica Ciudad de Juchitán de Zaragoza'),
(1047, 20, '044', 'Loma Bonita'),
(1048, 20, '045', 'Magdalena Apasco'),
(1049, 20, '046', 'Magdalena Jaltepec'),
(1050, 20, '047', 'Santa Magdalena Jicotlán'),
(1051, 20, '048', 'Magdalena Mixtepec'),
(1052, 20, '049', 'Magdalena Ocotlán'),
(1053, 20, '050', 'Magdalena Peñasco'),
(1054, 20, '051', 'Magdalena Teitipac'),
(1055, 20, '052', 'Magdalena Tequisistlán'),
(1056, 20, '053', 'Magdalena Tlacotepec'),
(1057, 20, '054', 'Magdalena Zahuatlán'),
(1058, 20, '055', 'Mariscala de Juárez'),
(1059, 20, '056', 'Mártires de Tacubaya'),
(1060, 20, '057', 'Matías Romero Avendaño'),
(1061, 20, '058', 'Mazatlán Villa de Flores'),
(1062, 20, '059', 'Miahuatlán de Porfirio Díaz'),
(1063, 20, '060', 'Mixistlán de la Reforma'),
(1064, 20, '061', 'Monjas'),
(1065, 20, '062', 'Natividad'),
(1066, 20, '063', 'Nazareno Etla'),
(1067, 20, '064', 'Nejapa de Madero'),
(1068, 20, '065', 'Ixpantepec Nieves'),
(1069, 20, '066', 'Santiago Niltepec'),
(1070, 20, '067', 'Oaxaca de Juárez'),
(1071, 20, '068', 'Ocotlán de Morelos'),
(1072, 20, '069', 'La Pe'),
(1073, 20, '070', 'Pinotepa de Don Luis'),
(1074, 20, '071', 'Pluma Hidalgo'),
(1075, 20, '072', 'San José del Progreso'),
(1076, 20, '073', 'Putla Villa de Guerrero'),
(1077, 20, '074', 'Santa Catarina Quioquitani'),
(1078, 20, '075', 'Reforma de Pineda'),
(1079, 20, '076', 'La Reforma'),
(1080, 20, '077', 'Reyes Etla'),
(1081, 20, '078', 'Rojas de Cuauhtémoc'),
(1082, 20, '079', 'Salina Cruz'),
(1083, 20, '080', 'San Agustín Amatengo'),
(1084, 20, '081', 'San Agustín Atenango'),
(1085, 20, '082', 'San Agustín Chayuco'),
(1086, 20, '083', 'San Agustín de las Juntas'),
(1087, 20, '084', 'San Agustín Etla'),
(1088, 20, '085', 'San Agustín Loxicha'),
(1089, 20, '086', 'San Agustín Tlacotepec'),
(1090, 20, '087', 'San Agustín Yatareni'),
(1091, 20, '088', 'San Andrés Cabecera Nueva'),
(1092, 20, '089', 'San Andrés Dinicuiti'),
(1093, 20, '090', 'San Andrés Huaxpaltepec'),
(1094, 20, '091', 'San Andrés Huayápam'),
(1095, 20, '092', 'San Andrés Ixtlahuaca'),
(1096, 20, '093', 'San Andrés Lagunas'),
(1097, 20, '094', 'San Andrés Nuxiño'),
(1098, 20, '095', 'San Andrés Paxtlán'),
(1099, 20, '096', 'San Andrés Sinaxtla'),
(1100, 20, '097', 'San Andrés Solaga'),
(1101, 20, '098', 'San Andrés Teotilálpam'),
(1102, 20, '099', 'San Andrés Tepetlapa'),
(1103, 20, '100', 'San Andrés Yaá'),
(1104, 20, '101', 'San Andrés Zabache'),
(1105, 20, '102', 'San Andrés Zautla'),
(1106, 20, '103', 'San Antonino Castillo Velasco'),
(1107, 20, '104', 'San Antonino el Alto'),
(1108, 20, '105', 'San Antonino Monte Verde'),
(1109, 20, '106', 'San Antonio Acutla'),
(1110, 20, '107', 'San Antonio de la Cal'),
(1111, 20, '108', 'San Antonio Huitepec'),
(1112, 20, '109', 'San Antonio Nanahuatípam'),
(1113, 20, '110', 'San Antonio Sinicahua'),
(1114, 20, '111', 'San Antonio Tepetlapa'),
(1115, 20, '112', 'San Baltazar Chichicápam'),
(1116, 20, '113', 'San Baltazar Loxicha'),
(1117, 20, '114', 'San Baltazar Yatzachi el Bajo'),
(1118, 20, '115', 'San Bartolo Coyotepec'),
(1119, 20, '116', 'San Bartolomé Ayautla'),
(1120, 20, '117', 'San Bartolomé Loxicha'),
(1121, 20, '118', 'San Bartolomé Quialana'),
(1122, 20, '119', 'San Bartolomé Yucuañe'),
(1123, 20, '120', 'San Bartolomé Zoogocho'),
(1124, 20, '121', 'San Bartolo Soyaltepec'),
(1125, 20, '122', 'San Bartolo Yautepec'),
(1126, 20, '123', 'San Bernardo Mixtepec'),
(1127, 20, '124', 'San Blas Atempa'),
(1128, 20, '125', 'San Carlos Yautepec'),
(1129, 20, '126', 'San Cristóbal Amatlán'),
(1130, 20, '127', 'San Cristóbal Amoltepec'),
(1131, 20, '128', 'San Cristóbal Lachirioag'),
(1132, 20, '129', 'San Cristóbal Suchixtlahuaca'),
(1133, 20, '130', 'San Dionisio del Mar'),
(1134, 20, '131', 'San Dionisio Ocotepec'),
(1135, 20, '132', 'San Dionisio Ocotlán'),
(1136, 20, '133', 'San Esteban Atatlahuca'),
(1137, 20, '134', 'San Felipe Jalapa de Díaz'),
(1138, 20, '135', 'San Felipe Tejalápam'),
(1139, 20, '136', 'San Felipe Usila'),
(1140, 20, '137', 'San Francisco Cahuacuá'),
(1141, 20, '138', 'San Francisco Cajonos'),
(1142, 20, '139', 'San Francisco Chapulapa'),
(1143, 20, '140', 'San Francisco Chindúa'),
(1144, 20, '141', 'San Francisco del Mar'),
(1145, 20, '142', 'San Francisco Huehuetlán'),
(1146, 20, '143', 'San Francisco Ixhuatán'),
(1147, 20, '144', 'San Francisco Jaltepetongo'),
(1148, 20, '145', 'San Francisco Lachigoló'),
(1149, 20, '146', 'San Francisco Logueche'),
(1150, 20, '147', 'San Francisco Nuxaño'),
(1151, 20, '148', 'San Francisco Ozolotepec'),
(1152, 20, '149', 'San Francisco Sola'),
(1153, 20, '150', 'San Francisco Telixtlahuaca'),
(1154, 20, '151', 'San Francisco Teopan'),
(1155, 20, '152', 'San Francisco Tlapancingo'),
(1156, 20, '153', 'San Gabriel Mixtepec'),
(1157, 20, '154', 'San Ildefonso Amatlán'),
(1158, 20, '155', 'San Ildefonso Sola'),
(1159, 20, '156', 'San Ildefonso Villa Alta'),
(1160, 20, '157', 'San Jacinto Amilpas'),
(1161, 20, '158', 'San Jacinto Tlacotepec'),
(1162, 20, '159', 'San Jerónimo Coatlán'),
(1163, 20, '160', 'San Jerónimo Silacayoapilla'),
(1164, 20, '161', 'San Jerónimo Sosola'),
(1165, 20, '162', 'San Jerónimo Taviche'),
(1166, 20, '163', 'San Jerónimo Tecóatl'),
(1167, 20, '164', 'San Jorge Nuchita'),
(1168, 20, '165', 'San José Ayuquila'),
(1169, 20, '166', 'San José Chiltepec'),
(1170, 20, '167', 'San José del Peñasco'),
(1171, 20, '168', 'San José Estancia Grande'),
(1172, 20, '169', 'San José Independencia'),
(1173, 20, '170', 'San José Lachiguiri'),
(1174, 20, '171', 'San José Tenango'),
(1175, 20, '172', 'San Juan Achiutla'),
(1176, 20, '173', 'San Juan Atepec'),
(1177, 20, '174', 'Ánimas Trujano'),
(1178, 20, '175', 'San Juan Bautista Atatlahuca'),
(1179, 20, '176', 'San Juan Bautista Coixtlahuaca'),
(1180, 20, '177', 'San Juan Bautista Cuicatlán'),
(1181, 20, '178', 'San Juan Bautista Guelache'),
(1182, 20, '179', 'San Juan Bautista Jayacatlán'),
(1183, 20, '180', 'San Juan Bautista Lo de Soto'),
(1184, 20, '181', 'San Juan Bautista Suchitepec'),
(1185, 20, '182', 'San Juan Bautista Tlacoatzintepec'),
(1186, 20, '183', 'San Juan Bautista Tlachichilco'),
(1187, 20, '184', 'San Juan Bautista Tuxtepec'),
(1188, 20, '185', 'San Juan Cacahuatepec'),
(1189, 20, '186', 'San Juan Cieneguilla'),
(1190, 20, '187', 'San Juan Coatzóspam'),
(1191, 20, '188', 'San Juan Colorado'),
(1192, 20, '189', 'San Juan Comaltepec'),
(1193, 20, '190', 'San Juan Cotzocón'),
(1194, 20, '191', 'San Juan Chicomezúchil'),
(1195, 20, '192', 'San Juan Chilateca'),
(1196, 20, '193', 'San Juan del Estado'),
(1197, 20, '194', 'San Juan del Río'),
(1198, 20, '195', 'San Juan Diuxi'),
(1199, 20, '196', 'San Juan Evangelista Analco'),
(1200, 20, '197', 'San Juan Guelavía'),
(1201, 20, '198', 'San Juan Guichicovi'),
(1202, 20, '199', 'San Juan Ihualtepec'),
(1203, 20, '200', 'San Juan Juquila Mixes'),
(1204, 20, '201', 'San Juan Juquila Vijanos'),
(1205, 20, '202', 'San Juan Lachao'),
(1206, 20, '203', 'San Juan Lachigalla'),
(1207, 20, '204', 'San Juan Lajarcia'),
(1208, 20, '205', 'San Juan Lalana'),
(1209, 20, '206', 'San Juan de los Cués'),
(1210, 20, '207', 'San Juan Mazatlán'),
(1211, 20, '208', 'San Juan Mixtepec Dto 08'),
(1212, 20, '209', 'San Juan Mixtepec Dto 26'),
(1213, 20, '210', 'San Juan Ñumí'),
(1214, 20, '211', 'San Juan Ozolotepec'),
(1215, 20, '212', 'San Juan Petlapa'),
(1216, 20, '213', 'San Juan Quiahije'),
(1217, 20, '214', 'San Juan Quiotepec'),
(1218, 20, '215', 'San Juan Sayultepec'),
(1219, 20, '216', 'San Juan Tabaá'),
(1220, 20, '217', 'San Juan Tamazola'),
(1221, 20, '218', 'San Juan Teita'),
(1222, 20, '219', 'San Juan Teitipac'),
(1223, 20, '220', 'San Juan Tepeuxila'),
(1224, 20, '221', 'San Juan Teposcolula'),
(1225, 20, '222', 'San Juan Yaeé'),
(1226, 20, '223', 'San Juan Yatzona'),
(1227, 20, '224', 'San Juan Yucuita'),
(1228, 20, '225', 'San Lorenzo'),
(1229, 20, '226', 'San Lorenzo Albarradas'),
(1230, 20, '227', 'San Lorenzo Cacaotepec'),
(1231, 20, '228', 'San Lorenzo Cuaunecuiltitla'),
(1232, 20, '229', 'San Lorenzo Texmelúcan'),
(1233, 20, '230', 'San Lorenzo Victoria'),
(1234, 20, '231', 'San Lucas Camotlán'),
(1235, 20, '232', 'San Lucas Ojitlán'),
(1236, 20, '233', 'San Lucas Quiaviní'),
(1237, 20, '234', 'San Lucas Zoquiápam'),
(1238, 20, '235', 'San Luis Amatlán'),
(1239, 20, '236', 'San Marcial Ozolotepec'),
(1240, 20, '237', 'San Marcos Arteaga'),
(1241, 20, '238', 'San Martín de los Cansecos'),
(1242, 20, '239', 'San Martín Huamelúlpam'),
(1243, 20, '240', 'San Martín Itunyoso'),
(1244, 20, '241', 'San Martín Lachilá'),
(1245, 20, '242', 'San Martín Peras'),
(1246, 20, '243', 'San Martín Tilcajete'),
(1247, 20, '244', 'San Martín Toxpalan'),
(1248, 20, '245', 'San Martín Zacatepec'),
(1249, 20, '246', 'San Mateo Cajonos'),
(1250, 20, '247', 'Capulálpam de Méndez'),
(1251, 20, '248', 'San Mateo del Mar'),
(1252, 20, '249', 'San Mateo Yoloxochitlán'),
(1253, 20, '250', 'San Mateo Etlatongo'),
(1254, 20, '251', 'San Mateo Nejápam'),
(1255, 20, '252', 'San Mateo Peñasco'),
(1256, 20, '253', 'San Mateo Piñas'),
(1257, 20, '254', 'San Mateo Río Hondo'),
(1258, 20, '255', 'San Mateo Sindihui'),
(1259, 20, '256', 'San Mateo Tlapiltepec'),
(1260, 20, '257', 'San Melchor Betaza'),
(1261, 20, '258', 'San Miguel Achiutla'),
(1262, 20, '259', 'San Miguel Ahuehuetitlán'),
(1263, 20, '260', 'San Miguel Aloápam'),
(1264, 20, '261', 'San Miguel Amatitlán'),
(1265, 20, '262', 'San Miguel Amatlán'),
(1266, 20, '263', 'San Miguel Coatlán'),
(1267, 20, '264', 'San Miguel Chicahua'),
(1268, 20, '265', 'San Miguel Chimalapa'),
(1269, 20, '266', 'San Miguel del Puerto'),
(1270, 20, '267', 'San Miguel del Río'),
(1271, 20, '268', 'San Miguel Ejutla'),
(1272, 20, '269', 'San Miguel el Grande'),
(1273, 20, '270', 'San Miguel Huautla'),
(1274, 20, '271', 'San Miguel Mixtepec'),
(1275, 20, '272', 'San Miguel Panixtlahuaca'),
(1276, 20, '273', 'San Miguel Peras'),
(1277, 20, '274', 'San Miguel Piedras'),
(1278, 20, '275', 'San Miguel Quetzaltepec'),
(1279, 20, '276', 'San Miguel Santa Flor'),
(1280, 20, '277', 'Villa Sola de Vega'),
(1281, 20, '278', 'San Miguel Soyaltepec'),
(1282, 20, '279', 'San Miguel Suchixtepec'),
(1283, 20, '280', 'Villa Talea de Castro'),
(1284, 20, '281', 'San Miguel Tecomatlán'),
(1285, 20, '282', 'San Miguel Tenango'),
(1286, 20, '283', 'San Miguel Tequixtepec'),
(1287, 20, '284', 'San Miguel Tilquiápam'),
(1288, 20, '285', 'San Miguel Tlacamama'),
(1289, 20, '286', 'San Miguel Tlacotepec'),
(1290, 20, '287', 'San Miguel Tulancingo'),
(1291, 20, '288', 'San Miguel Yotao'),
(1292, 20, '289', 'San Nicolás'),
(1293, 20, '290', 'San Nicolás Hidalgo'),
(1294, 20, '291', 'San Pablo Coatlán'),
(1295, 20, '292', 'San Pablo Cuatro Venados'),
(1296, 20, '293', 'San Pablo Etla'),
(1297, 20, '294', 'San Pablo Huitzo'),
(1298, 20, '295', 'San Pablo Huixtepec'),
(1299, 20, '296', 'San Pablo Macuiltianguis'),
(1300, 20, '297', 'San Pablo Tijaltepec'),
(1301, 20, '298', 'San Pablo Villa de Mitla'),
(1302, 20, '299', 'San Pablo Yaganiza'),
(1303, 20, '300', 'San Pedro Amuzgos'),
(1304, 20, '301', 'San Pedro Apóstol'),
(1305, 20, '302', 'San Pedro Atoyac'),
(1306, 20, '303', 'San Pedro Cajonos'),
(1307, 20, '304', 'San Pedro Coxcaltepec Cántaros'),
(1308, 20, '305', 'San Pedro Comitancillo'),
(1309, 20, '306', 'San Pedro el Alto'),
(1310, 20, '307', 'San Pedro Huamelula'),
(1311, 20, '308', 'San Pedro Huilotepec'),
(1312, 20, '309', 'San Pedro Ixcatlán'),
(1313, 20, '310', 'San Pedro Ixtlahuaca'),
(1314, 20, '311', 'San Pedro Jaltepetongo'),
(1315, 20, '312', 'San Pedro Jicayán'),
(1316, 20, '313', 'San Pedro Jocotipac'),
(1317, 20, '314', 'San Pedro Juchatengo'),
(1318, 20, '315', 'San Pedro Mártir'),
(1319, 20, '316', 'San Pedro Mártir Quiechapa'),
(1320, 20, '317', 'San Pedro Mártir Yucuxaco'),
(1321, 20, '318', 'San Pedro Mixtepec Dto 22'),
(1322, 20, '319', 'San Pedro Mixtepec Dto 26'),
(1323, 20, '320', 'San Pedro Molinos'),
(1324, 20, '321', 'San Pedro Nopala'),
(1325, 20, '322', 'San Pedro Ocopetatillo'),
(1326, 20, '323', 'San Pedro Ocotepec'),
(1327, 20, '324', 'San Pedro Pochutla'),
(1328, 20, '325', 'San Pedro Quiatoni'),
(1329, 20, '326', 'San Pedro Sochiápam'),
(1330, 20, '327', 'San Pedro Tapanatepec'),
(1331, 20, '328', 'San Pedro Taviche'),
(1332, 20, '329', 'San Pedro Teozacoalco'),
(1333, 20, '330', 'San Pedro Teutila'),
(1334, 20, '331', 'San Pedro Tidaá'),
(1335, 20, '332', 'San Pedro Topiltepec'),
(1336, 20, '333', 'San Pedro Totolápam'),
(1337, 20, '334', 'Villa de Tututepec'),
(1338, 20, '335', 'San Pedro Yaneri'),
(1339, 20, '336', 'San Pedro Yólox'),
(1340, 20, '337', 'San Pedro y San Pablo Ayutla'),
(1341, 20, '338', 'Villa de Etla'),
(1342, 20, '339', 'San Pedro y San Pablo Teposcolula'),
(1343, 20, '340', 'San Pedro y San Pablo Tequixtepec'),
(1344, 20, '341', 'San Pedro Yucunama'),
(1345, 20, '342', 'San Raymundo Jalpan'),
(1346, 20, '343', 'San Sebastián Abasolo'),
(1347, 20, '344', 'San Sebastián Coatlán'),
(1348, 20, '345', 'San Sebastián Ixcapa'),
(1349, 20, '346', 'San Sebastián Nicananduta'),
(1350, 20, '347', 'San Sebastián Río Hondo'),
(1351, 20, '348', 'San Sebastián Tecomaxtlahuaca'),
(1352, 20, '349', 'San Sebastián Teitipac'),
(1353, 20, '350', 'San Sebastián Tutla'),
(1354, 20, '351', 'San Simón Almolongas'),
(1355, 20, '352', 'San Simón Zahuatlán'),
(1356, 20, '353', 'Santa Ana'),
(1357, 20, '354', 'Santa Ana Ateixtlahuaca'),
(1358, 20, '355', 'Santa Ana Cuauhtémoc'),
(1359, 20, '356', 'Santa Ana del Valle'),
(1360, 20, '357', 'Santa Ana Tavela'),
(1361, 20, '358', 'Santa Ana Tlapacoyan'),
(1362, 20, '359', 'Santa Ana Yareni'),
(1363, 20, '360', 'Santa Ana Zegache'),
(1364, 20, '361', 'Santa Catalina Quierí'),
(1365, 20, '362', 'Santa Catarina Cuixtla'),
(1366, 20, '363', 'Santa Catarina Ixtepeji'),
(1367, 20, '364', 'Santa Catarina Juquila'),
(1368, 20, '365', 'Santa Catarina Lachatao'),
(1369, 20, '366', 'Santa Catarina Loxicha'),
(1370, 20, '367', 'Santa Catarina Mechoacán'),
(1371, 20, '368', 'Santa Catarina Minas'),
(1372, 20, '369', 'Santa Catarina Quiané'),
(1373, 20, '370', 'Santa Catarina Tayata'),
(1374, 20, '371', 'Santa Catarina Ticuá'),
(1375, 20, '372', 'Santa Catarina Yosonotú'),
(1376, 20, '373', 'Santa Catarina Zapoquila'),
(1377, 20, '374', 'Santa Cruz Acatepec'),
(1378, 20, '375', 'Santa Cruz Amilpas'),
(1379, 20, '376', 'Santa Cruz de Bravo'),
(1380, 20, '377', 'Santa Cruz Itundujia'),
(1381, 20, '378', 'Santa Cruz Mixtepec'),
(1382, 20, '379', 'Santa Cruz Nundaco'),
(1383, 20, '380', 'Santa Cruz Papalutla'),
(1384, 20, '381', 'Santa Cruz Tacache de Mina'),
(1385, 20, '382', 'Santa Cruz Tacahua'),
(1386, 20, '383', 'Santa Cruz Tayata'),
(1387, 20, '384', 'Santa Cruz Xitla'),
(1388, 20, '385', 'Santa Cruz Xoxocotlán'),
(1389, 20, '386', 'Santa Cruz Zenzontepec'),
(1390, 20, '387', 'Santa Gertrudis'),
(1391, 20, '388', 'Santa Inés del Monte'),
(1392, 20, '389', 'Santa Inés Yatzeche'),
(1393, 20, '390', 'Santa Lucía del Camino'),
(1394, 20, '391', 'Santa Lucía Miahuatlán'),
(1395, 20, '392', 'Santa Lucía Monteverde'),
(1396, 20, '393', 'Santa Lucía Ocotlán'),
(1397, 20, '394', 'Santa María Alotepec'),
(1398, 20, '395', 'Santa María Apazco'),
(1399, 20, '396', 'Santa María la Asunción'),
(1400, 20, '397', 'Heroica Ciudad de Tlaxiaco'),
(1401, 20, '398', 'Ayoquezco de Aldama'),
(1402, 20, '399', 'Santa María Atzompa'),
(1403, 20, '400', 'Santa María Camotlán'),
(1404, 20, '401', 'Santa María Colotepec'),
(1405, 20, '402', 'Santa María Cortijo'),
(1406, 20, '403', 'Santa María Coyotepec'),
(1407, 20, '404', 'Santa María Chachoápam'),
(1408, 20, '405', 'Villa de Chilapa de Díaz'),
(1409, 20, '406', 'Santa María Chilchotla'),
(1410, 20, '407', 'Santa María Chimalapa'),
(1411, 20, '408', 'Santa María del Rosario'),
(1412, 20, '409', 'Santa María del Tule'),
(1413, 20, '410', 'Santa María Ecatepec'),
(1414, 20, '411', 'Santa María Guelacé'),
(1415, 20, '412', 'Santa María Guienagati'),
(1416, 20, '413', 'Santa María Huatulco'),
(1417, 20, '414', 'Santa María Huazolotitlán'),
(1418, 20, '415', 'Santa María Ipalapa'),
(1419, 20, '416', 'Santa María Ixcatlán'),
(1420, 20, '417', 'Santa María Jacatepec'),
(1421, 20, '418', 'Santa María Jalapa del Marqués'),
(1422, 20, '419', 'Santa María Jaltianguis'),
(1423, 20, '420', 'Santa María Lachixío'),
(1424, 20, '421', 'Santa María Mixtequilla'),
(1425, 20, '422', 'Santa María Nativitas'),
(1426, 20, '423', 'Santa María Nduayaco'),
(1427, 20, '424', 'Santa María Ozolotepec'),
(1428, 20, '425', 'Santa María Pápalo'),
(1429, 20, '426', 'Santa María Peñoles'),
(1430, 20, '427', 'Santa María Petapa'),
(1431, 20, '428', 'Santa María Quiegolani'),
(1432, 20, '429', 'Santa María Sola'),
(1433, 20, '430', 'Santa María Tataltepec'),
(1434, 20, '431', 'Santa María Tecomavaca'),
(1435, 20, '432', 'Santa María Temaxcalapa'),
(1436, 20, '433', 'Santa María Temaxcaltepec'),
(1437, 20, '434', 'Santa María Teopoxco'),
(1438, 20, '435', 'Santa María Tepantlali'),
(1439, 20, '436', 'Santa María Texcatitlán'),
(1440, 20, '437', 'Santa María Tlahuitoltepec'),
(1441, 20, '438', 'Santa María Tlalixtac'),
(1442, 20, '439', 'Santa María Tonameca'),
(1443, 20, '440', 'Santa María Totolapilla'),
(1444, 20, '441', 'Santa María Xadani'),
(1445, 20, '442', 'Santa María Yalina'),
(1446, 20, '443', 'Santa María Yavesía'),
(1447, 20, '444', 'Santa María Yolotepec'),
(1448, 20, '445', 'Santa María Yosoyúa'),
(1449, 20, '446', 'Santa María Yucuhiti'),
(1450, 20, '447', 'Santa María Zacatepec'),
(1451, 20, '448', 'Santa María Zaniza'),
(1452, 20, '449', 'Santa María Zoquitlán'),
(1453, 20, '450', 'Santiago Amoltepec'),
(1454, 20, '451', 'Santiago Apoala'),
(1455, 20, '452', 'Santiago Apóstol'),
(1456, 20, '453', 'Santiago Astata'),
(1457, 20, '454', 'Santiago Atitlán');
INSERT INTO `municipios` (`id_municipio`, `id_estado_fk`, `clave`, `municipio`) VALUES
(1458, 20, '455', 'Santiago Ayuquililla'),
(1459, 20, '456', 'Santiago Cacaloxtepec'),
(1460, 20, '457', 'Santiago Camotlán'),
(1461, 20, '458', 'Santiago Comaltepec'),
(1462, 20, '459', 'Santiago Chazumba'),
(1463, 20, '460', 'Santiago Choápam'),
(1464, 20, '461', 'Santiago del Río'),
(1465, 20, '462', 'Santiago Huajolotitlán'),
(1466, 20, '463', 'Santiago Huauclilla'),
(1467, 20, '464', 'Santiago Ihuitlán Plumas'),
(1468, 20, '465', 'Santiago Ixcuintepec'),
(1469, 20, '466', 'Santiago Ixtayutla'),
(1470, 20, '467', 'Santiago Jamiltepec'),
(1471, 20, '468', 'Santiago Jocotepec'),
(1472, 20, '469', 'Santiago Juxtlahuaca'),
(1473, 20, '470', 'Santiago Lachiguiri'),
(1474, 20, '471', 'Santiago Lalopa'),
(1475, 20, '472', 'Santiago Laollaga'),
(1476, 20, '473', 'Santiago Laxopa'),
(1477, 20, '474', 'Santiago Llano Grande'),
(1478, 20, '475', 'Santiago Matatlán'),
(1479, 20, '476', 'Santiago Miltepec'),
(1480, 20, '477', 'Santiago Minas'),
(1481, 20, '478', 'Santiago Nacaltepec'),
(1482, 20, '479', 'Santiago Nejapilla'),
(1483, 20, '480', 'Santiago Nundiche'),
(1484, 20, '481', 'Santiago Nuyoó'),
(1485, 20, '482', 'Santiago Pinotepa Nacional'),
(1486, 20, '483', 'Santiago Suchilquitongo'),
(1487, 20, '484', 'Santiago Tamazola'),
(1488, 20, '485', 'Santiago Tapextla'),
(1489, 20, '486', 'Villa Tejúpam de la Unión'),
(1490, 20, '487', 'Santiago Tenango'),
(1491, 20, '488', 'Santiago Tepetlapa'),
(1492, 20, '489', 'Santiago Tetepec'),
(1493, 20, '490', 'Santiago Texcalcingo'),
(1494, 20, '491', 'Santiago Textitlán'),
(1495, 20, '492', 'Santiago Tilantongo'),
(1496, 20, '493', 'Santiago Tillo'),
(1497, 20, '494', 'Santiago Tlazoyaltepec'),
(1498, 20, '495', 'Santiago Xanica'),
(1499, 20, '496', 'Santiago Xiacuí'),
(1500, 20, '497', 'Santiago Yaitepec'),
(1501, 20, '498', 'Santiago Yaveo'),
(1502, 20, '499', 'Santiago Yolomécatl'),
(1503, 20, '500', 'Santiago Yosondúa'),
(1504, 20, '501', 'Santiago Yucuyachi'),
(1505, 20, '502', 'Santiago Zacatepec'),
(1506, 20, '503', 'Santiago Zoochila'),
(1507, 20, '504', 'Nuevo Zoquiápam'),
(1508, 20, '505', 'Santo Domingo Ingenio'),
(1509, 20, '506', 'Santo Domingo Albarradas'),
(1510, 20, '507', 'Santo Domingo Armenta'),
(1511, 20, '508', 'Santo Domingo Chihuitán'),
(1512, 20, '509', 'Santo Domingo de Morelos'),
(1513, 20, '510', 'Santo Domingo Ixcatlán'),
(1514, 20, '511', 'Santo Domingo Nuxaá'),
(1515, 20, '512', 'Santo Domingo Ozolotepec'),
(1516, 20, '513', 'Santo Domingo Petapa'),
(1517, 20, '514', 'Santo Domingo Roayaga'),
(1518, 20, '515', 'Santo Domingo Tehuantepec'),
(1519, 20, '516', 'Santo Domingo Teojomulco'),
(1520, 20, '517', 'Santo Domingo Tepuxtepec'),
(1521, 20, '518', 'Santo Domingo Tlatayápam'),
(1522, 20, '519', 'Santo Domingo Tomaltepec'),
(1523, 20, '520', 'Santo Domingo Tonalá'),
(1524, 20, '521', 'Santo Domingo Tonaltepec'),
(1525, 20, '522', 'Santo Domingo Xagacía'),
(1526, 20, '523', 'Santo Domingo Yanhuitlán'),
(1527, 20, '524', 'Santo Domingo Yodohino'),
(1528, 20, '525', 'Santo Domingo Zanatepec'),
(1529, 20, '526', 'Santos Reyes Nopala'),
(1530, 20, '527', 'Santos Reyes Pápalo'),
(1531, 20, '528', 'Santos Reyes Tepejillo'),
(1532, 20, '529', 'Santos Reyes Yucuná'),
(1533, 20, '530', 'Santo Tomás Jalieza'),
(1534, 20, '531', 'Santo Tomás Mazaltepec'),
(1535, 20, '532', 'Santo Tomás Ocotepec'),
(1536, 20, '533', 'Santo Tomás Tamazulapan'),
(1537, 20, '534', 'San Vicente Coatlán'),
(1538, 20, '535', 'San Vicente Lachixío'),
(1539, 20, '536', 'San Vicente Nuñú'),
(1540, 20, '537', 'Silacayoápam'),
(1541, 20, '538', 'Sitio de Xitlapehua'),
(1542, 20, '539', 'Soledad Etla'),
(1543, 20, '540', 'Villa de Tamazulápam del Progreso'),
(1544, 20, '541', 'Tanetze de Zaragoza'),
(1545, 20, '542', 'Taniche'),
(1546, 20, '543', 'Tataltepec de Valdés'),
(1547, 20, '544', 'Teococuilco de Marcos Pérez'),
(1548, 20, '545', 'Teotitlán de Flores Magón'),
(1549, 20, '546', 'Teotitlán del Valle'),
(1550, 20, '547', 'Teotongo'),
(1551, 20, '548', 'Tepelmeme Villa de Morelos'),
(1552, 20, '549', 'Heroica Villa Tezoatlán de Segura y Luna, Cuna de '),
(1553, 20, '550', 'San Jerónimo Tlacochahuaya'),
(1554, 20, '551', 'Tlacolula de Matamoros'),
(1555, 20, '552', 'Tlacotepec Plumas'),
(1556, 20, '553', 'Tlalixtac de Cabrera'),
(1557, 20, '554', 'Totontepec Villa de Morelos'),
(1558, 20, '555', 'Trinidad Zaachila'),
(1559, 20, '556', 'La Trinidad Vista Hermosa'),
(1560, 20, '557', 'Unión Hidalgo'),
(1561, 20, '558', 'Valerio Trujano'),
(1562, 20, '559', 'San Juan Bautista Valle Nacional'),
(1563, 20, '560', 'Villa Díaz Ordaz'),
(1564, 20, '561', 'Yaxe'),
(1565, 20, '562', 'Magdalena Yodocono de Porfirio Díaz'),
(1566, 20, '563', 'Yogana'),
(1567, 20, '564', 'Yutanduchi de Guerrero'),
(1568, 20, '565', 'Villa de Zaachila'),
(1569, 20, '566', 'San Mateo Yucutindoo'),
(1570, 20, '567', 'Zapotitlán Lagunas'),
(1571, 20, '568', 'Zapotitlán Palmas'),
(1572, 20, '569', 'Santa Inés de Zaragoza'),
(1573, 20, '570', 'Zimatlán de Álvarez'),
(1574, 21, '001', 'Acajete'),
(1575, 21, '002', 'Acateno'),
(1576, 21, '003', 'Acatlán'),
(1577, 21, '004', 'Acatzingo'),
(1578, 21, '005', 'Acteopan'),
(1579, 21, '006', 'Ahuacatlán'),
(1580, 21, '007', 'Ahuatlán'),
(1581, 21, '008', 'Ahuazotepec'),
(1582, 21, '009', 'Ahuehuetitla'),
(1583, 21, '010', 'Ajalpan'),
(1584, 21, '011', 'Albino Zertuche'),
(1585, 21, '012', 'Aljojuca'),
(1586, 21, '013', 'Altepexi'),
(1587, 21, '014', 'Amixtlán'),
(1588, 21, '015', 'Amozoc'),
(1589, 21, '016', 'Aquixtla'),
(1590, 21, '017', 'Atempan'),
(1591, 21, '018', 'Atexcal'),
(1592, 21, '019', 'Atlixco'),
(1593, 21, '020', 'Atoyatempan'),
(1594, 21, '021', 'Atzala'),
(1595, 21, '022', 'Atzitzihuacán'),
(1596, 21, '023', 'Atzitzintla'),
(1597, 21, '024', 'Axutla'),
(1598, 21, '025', 'Ayotoxco de Guerrero'),
(1599, 21, '026', 'Calpan'),
(1600, 21, '027', 'Caltepec'),
(1601, 21, '028', 'Camocuautla'),
(1602, 21, '029', 'Caxhuacan'),
(1603, 21, '030', 'Coatepec'),
(1604, 21, '031', 'Coatzingo'),
(1605, 21, '032', 'Cohetzala'),
(1606, 21, '033', 'Cohuecan'),
(1607, 21, '034', 'Coronango'),
(1608, 21, '035', 'Coxcatlán'),
(1609, 21, '036', 'Coyomeapan'),
(1610, 21, '037', 'Coyotepec'),
(1611, 21, '038', 'Cuapiaxtla de Madero'),
(1612, 21, '039', 'Cuautempan'),
(1613, 21, '040', 'Cuautinchán'),
(1614, 21, '041', 'Cuautlancingo'),
(1615, 21, '042', 'Cuayuca de Andrade'),
(1616, 21, '043', 'Cuetzalan del Progreso'),
(1617, 21, '044', 'Cuyoaco'),
(1618, 21, '045', 'Chalchicomula de Sesma'),
(1619, 21, '046', 'Chapulco'),
(1620, 21, '047', 'Chiautla'),
(1621, 21, '048', 'Chiautzingo'),
(1622, 21, '049', 'Chiconcuautla'),
(1623, 21, '050', 'Chichiquila'),
(1624, 21, '051', 'Chietla'),
(1625, 21, '052', 'Chigmecatitlán'),
(1626, 21, '053', 'Chignahuapan'),
(1627, 21, '054', 'Chignautla'),
(1628, 21, '055', 'Chila'),
(1629, 21, '056', 'Chila de la Sal'),
(1630, 21, '057', 'Honey'),
(1631, 21, '058', 'Chilchotla'),
(1632, 21, '059', 'Chinantla'),
(1633, 21, '060', 'Domingo Arenas'),
(1634, 21, '061', 'Eloxochitlán'),
(1635, 21, '062', 'Epatlán'),
(1636, 21, '063', 'Esperanza'),
(1637, 21, '064', 'Francisco Z. Mena'),
(1638, 21, '065', 'General Felipe Ángeles'),
(1639, 21, '066', 'Guadalupe'),
(1640, 21, '067', 'Guadalupe Victoria'),
(1641, 21, '068', 'Hermenegildo Galeana'),
(1642, 21, '069', 'Huaquechula'),
(1643, 21, '070', 'Huatlatlauca'),
(1644, 21, '071', 'Huauchinango'),
(1645, 21, '072', 'Huehuetla'),
(1646, 21, '073', 'Huehuetlán el Chico'),
(1647, 21, '074', 'Huejotzingo'),
(1648, 21, '075', 'Hueyapan'),
(1649, 21, '076', 'Hueytamalco'),
(1650, 21, '077', 'Hueytlalpan'),
(1651, 21, '078', 'Huitzilan de Serdán'),
(1652, 21, '079', 'Huitziltepec'),
(1653, 21, '080', 'Atlequizayan'),
(1654, 21, '081', 'Ixcamilpa de Guerrero'),
(1655, 21, '082', 'Ixcaquixtla'),
(1656, 21, '083', 'Ixtacamaxtitlán'),
(1657, 21, '084', 'Ixtepec'),
(1658, 21, '085', 'Izúcar de Matamoros'),
(1659, 21, '086', 'Jalpan'),
(1660, 21, '087', 'Jolalpan'),
(1661, 21, '088', 'Jonotla'),
(1662, 21, '089', 'Jopala'),
(1663, 21, '090', 'Juan C. Bonilla'),
(1664, 21, '091', 'Juan Galindo'),
(1665, 21, '092', 'Juan N. Méndez'),
(1666, 21, '093', 'Lafragua'),
(1667, 21, '094', 'Libres'),
(1668, 21, '095', 'La Magdalena Tlatlauquitepec'),
(1669, 21, '096', 'Mazapiltepec de Juárez'),
(1670, 21, '097', 'Mixtla'),
(1671, 21, '098', 'Molcaxac'),
(1672, 21, '099', 'Cañada Morelos'),
(1673, 21, '100', 'Naupan'),
(1674, 21, '101', 'Nauzontla'),
(1675, 21, '102', 'Nealtican'),
(1676, 21, '103', 'Nicolás Bravo'),
(1677, 21, '104', 'Nopalucan'),
(1678, 21, '105', 'Ocotepec'),
(1679, 21, '106', 'Ocoyucan'),
(1680, 21, '107', 'Olintla'),
(1681, 21, '108', 'Oriental'),
(1682, 21, '109', 'Pahuatlán'),
(1683, 21, '110', 'Palmar de Bravo'),
(1684, 21, '111', 'Pantepec'),
(1685, 21, '112', 'Petlalcingo'),
(1686, 21, '113', 'Piaxtla'),
(1687, 21, '114', 'Puebla'),
(1688, 21, '115', 'Quecholac'),
(1689, 21, '116', 'Quimixtlán'),
(1690, 21, '117', 'Rafael Lara Grajales'),
(1691, 21, '118', 'Los Reyes de Juárez'),
(1692, 21, '119', 'San Andrés Cholula'),
(1693, 21, '120', 'San Antonio Cañada'),
(1694, 21, '121', 'San Diego la Mesa Tochimiltzingo'),
(1695, 21, '122', 'San Felipe Teotlalcingo'),
(1696, 21, '123', 'San Felipe Tepatlán'),
(1697, 21, '124', 'San Gabriel Chilac'),
(1698, 21, '125', 'San Gregorio Atzompa'),
(1699, 21, '126', 'San Jerónimo Tecuanipan'),
(1700, 21, '127', 'San Jerónimo Xayacatlán'),
(1701, 21, '128', 'San José Chiapa'),
(1702, 21, '129', 'San José Miahuatlán'),
(1703, 21, '130', 'San Juan Atenco'),
(1704, 21, '131', 'San Juan Atzompa'),
(1705, 21, '132', 'San Martín Texmelucan'),
(1706, 21, '133', 'San Martín Totoltepec'),
(1707, 21, '134', 'San Matías Tlalancaleca'),
(1708, 21, '135', 'San Miguel Ixitlán'),
(1709, 21, '136', 'San Miguel Xoxtla'),
(1710, 21, '137', 'San Nicolás Buenos Aires'),
(1711, 21, '138', 'San Nicolás de los Ranchos'),
(1712, 21, '139', 'San Pablo Anicano'),
(1713, 21, '140', 'San Pedro Cholula'),
(1714, 21, '141', 'San Pedro Yeloixtlahuaca'),
(1715, 21, '142', 'San Salvador el Seco'),
(1716, 21, '143', 'San Salvador el Verde'),
(1717, 21, '144', 'San Salvador Huixcolotla'),
(1718, 21, '145', 'San Sebastián Tlacotepec'),
(1719, 21, '146', 'Santa Catarina Tlaltempan'),
(1720, 21, '147', 'Santa Inés Ahuatempan'),
(1721, 21, '148', 'Santa Isabel Cholula'),
(1722, 21, '149', 'Santiago Miahuatlán'),
(1723, 21, '150', 'Huehuetlán el Grande'),
(1724, 21, '151', 'Santo Tomás Hueyotlipan'),
(1725, 21, '152', 'Soltepec'),
(1726, 21, '153', 'Tecali de Herrera'),
(1727, 21, '154', 'Tecamachalco'),
(1728, 21, '155', 'Tecomatlán'),
(1729, 21, '156', 'Tehuacán'),
(1730, 21, '157', 'Tehuitzingo'),
(1731, 21, '158', 'Tenampulco'),
(1732, 21, '159', 'Teopantlán'),
(1733, 21, '160', 'Teotlalco'),
(1734, 21, '161', 'Tepanco de López'),
(1735, 21, '162', 'Tepango de Rodríguez'),
(1736, 21, '163', 'Tepatlaxco de Hidalgo'),
(1737, 21, '164', 'Tepeaca'),
(1738, 21, '165', 'Tepemaxalco'),
(1739, 21, '166', 'Tepeojuma'),
(1740, 21, '167', 'Tepetzintla'),
(1741, 21, '168', 'Tepexco'),
(1742, 21, '169', 'Tepexi de Rodríguez'),
(1743, 21, '170', 'Tepeyahualco'),
(1744, 21, '171', 'Tepeyahualco de Cuauhtémoc'),
(1745, 21, '172', 'Tetela de Ocampo'),
(1746, 21, '173', 'Teteles de Avila Castillo'),
(1747, 21, '174', 'Teziutlán'),
(1748, 21, '175', 'Tianguismanalco'),
(1749, 21, '176', 'Tilapa'),
(1750, 21, '177', 'Tlacotepec de Benito Juárez'),
(1751, 21, '178', 'Tlacuilotepec'),
(1752, 21, '179', 'Tlachichuca'),
(1753, 21, '180', 'Tlahuapan'),
(1754, 21, '181', 'Tlaltenango'),
(1755, 21, '182', 'Tlanepantla'),
(1756, 21, '183', 'Tlaola'),
(1757, 21, '184', 'Tlapacoya'),
(1758, 21, '185', 'Tlapanalá'),
(1759, 21, '186', 'Tlatlauquitepec'),
(1760, 21, '187', 'Tlaxco'),
(1761, 21, '188', 'Tochimilco'),
(1762, 21, '189', 'Tochtepec'),
(1763, 21, '190', 'Totoltepec de Guerrero'),
(1764, 21, '191', 'Tulcingo'),
(1765, 21, '192', 'Tuzamapan de Galeana'),
(1766, 21, '193', 'Tzicatlacoyan'),
(1767, 21, '194', 'Venustiano Carranza'),
(1768, 21, '195', 'Vicente Guerrero'),
(1769, 21, '196', 'Xayacatlán de Bravo'),
(1770, 21, '197', 'Xicotepec'),
(1771, 21, '198', 'Xicotlán'),
(1772, 21, '199', 'Xiutetelco'),
(1773, 21, '200', 'Xochiapulco'),
(1774, 21, '201', 'Xochiltepec'),
(1775, 21, '202', 'Xochitlán de Vicente Suárez'),
(1776, 21, '203', 'Xochitlán Todos Santos'),
(1777, 21, '204', 'Yaonáhuac'),
(1778, 21, '205', 'Yehualtepec'),
(1779, 21, '206', 'Zacapala'),
(1780, 21, '207', 'Zacapoaxtla'),
(1781, 21, '208', 'Zacatlán'),
(1782, 21, '209', 'Zapotitlán'),
(1783, 21, '210', 'Zapotitlán de Méndez'),
(1784, 21, '211', 'Zaragoza'),
(1785, 21, '212', 'Zautla'),
(1786, 21, '213', 'Zihuateutla'),
(1787, 21, '214', 'Zinacatepec'),
(1788, 21, '215', 'Zongozotla'),
(1789, 21, '216', 'Zoquiapan'),
(1790, 21, '217', 'Zoquitlán'),
(1791, 22, '001', 'Amealco de Bonfil'),
(1792, 22, '002', 'Pinal de Amoles'),
(1793, 22, '003', 'Arroyo Seco'),
(1794, 22, '004', 'Cadereyta de Montes'),
(1795, 22, '005', 'Colón'),
(1796, 22, '006', 'Corregidora'),
(1797, 22, '007', 'Ezequiel Montes'),
(1798, 22, '008', 'Huimilpan'),
(1799, 22, '009', 'Jalpan de Serra'),
(1800, 22, '010', 'Landa de Matamoros'),
(1801, 22, '011', 'El Marqués'),
(1802, 22, '012', 'Pedro Escobedo'),
(1803, 22, '013', 'Peñamiller'),
(1804, 22, '014', 'Querétaro'),
(1805, 22, '015', 'San Joaquín'),
(1806, 22, '016', 'San Juan del Río'),
(1807, 22, '017', 'Tequisquiapan'),
(1808, 22, '018', 'Tolimán'),
(1809, 23, '001', 'Cozumel'),
(1810, 23, '002', 'Felipe Carrillo Puerto'),
(1811, 23, '003', 'Isla Mujeres'),
(1812, 23, '004', 'Othón P. Blanco'),
(1813, 23, '005', 'Benito Juárez'),
(1814, 23, '006', 'José María Morelos'),
(1815, 23, '007', 'Lázaro Cárdenas'),
(1816, 23, '008', 'Solidaridad'),
(1817, 23, '009', 'Tulum'),
(1818, 23, '010', 'Bacalar'),
(1819, 23, '011', 'Puerto Morelos'),
(1820, 24, '001', 'Ahualulco'),
(1821, 24, '002', 'Alaquines'),
(1822, 24, '003', 'Aquismón'),
(1823, 24, '004', 'Armadillo de los Infante'),
(1824, 24, '005', 'Cárdenas'),
(1825, 24, '006', 'Catorce'),
(1826, 24, '007', 'Cedral'),
(1827, 24, '008', 'Cerritos'),
(1828, 24, '009', 'Cerro de San Pedro'),
(1829, 24, '010', 'Ciudad del Maíz'),
(1830, 24, '011', 'Ciudad Fernández'),
(1831, 24, '012', 'Tancanhuitz'),
(1832, 24, '013', 'Ciudad Valles'),
(1833, 24, '014', 'Coxcatlán'),
(1834, 24, '015', 'Charcas'),
(1835, 24, '016', 'Ebano'),
(1836, 24, '017', 'Guadalcázar'),
(1837, 24, '018', 'Huehuetlán'),
(1838, 24, '019', 'Lagunillas'),
(1839, 24, '020', 'Matehuala'),
(1840, 24, '021', 'Mexquitic de Carmona'),
(1841, 24, '022', 'Moctezuma'),
(1842, 24, '023', 'Rayón'),
(1843, 24, '024', 'Rioverde'),
(1844, 24, '025', 'Salinas'),
(1845, 24, '026', 'San Antonio'),
(1846, 24, '027', 'San Ciro de Acosta'),
(1847, 24, '028', 'San Luis Potosí'),
(1848, 24, '029', 'San Martín Chalchicuautla'),
(1849, 24, '030', 'San Nicolás Tolentino'),
(1850, 24, '031', 'Santa Catarina'),
(1851, 24, '032', 'Santa María del Río'),
(1852, 24, '033', 'Santo Domingo'),
(1853, 24, '034', 'San Vicente Tancuayalab'),
(1854, 24, '035', 'Soledad de Graciano Sánchez'),
(1855, 24, '036', 'Tamasopo'),
(1856, 24, '037', 'Tamazunchale'),
(1857, 24, '038', 'Tampacán'),
(1858, 24, '039', 'Tampamolón Corona'),
(1859, 24, '040', 'Tamuín'),
(1860, 24, '041', 'Tanlajás'),
(1861, 24, '042', 'Tanquián de Escobedo'),
(1862, 24, '043', 'Tierra Nueva'),
(1863, 24, '044', 'Vanegas'),
(1864, 24, '045', 'Venado'),
(1865, 24, '046', 'Villa de Arriaga'),
(1866, 24, '047', 'Villa de Guadalupe'),
(1867, 24, '048', 'Villa de la Paz'),
(1868, 24, '049', 'Villa de Ramos'),
(1869, 24, '050', 'Villa de Reyes'),
(1870, 24, '051', 'Villa Hidalgo'),
(1871, 24, '052', 'Villa Juárez'),
(1872, 24, '053', 'Axtla de Terrazas'),
(1873, 24, '054', 'Xilitla'),
(1874, 24, '055', 'Zaragoza'),
(1875, 24, '056', 'Villa de Arista'),
(1876, 24, '057', 'Matlapa'),
(1877, 24, '058', 'El Naranjo'),
(1878, 25, '001', 'Ahome'),
(1879, 25, '002', 'Angostura'),
(1880, 25, '003', 'Badiraguato'),
(1881, 25, '004', 'Concordia'),
(1882, 25, '005', 'Cosalá'),
(1883, 25, '006', 'Culiacán'),
(1884, 25, '007', 'Choix'),
(1885, 25, '008', 'Elota'),
(1886, 25, '009', 'Escuinapa'),
(1887, 25, '010', 'El Fuerte'),
(1888, 25, '011', 'Guasave'),
(1889, 25, '012', 'Mazatlán'),
(1890, 25, '013', 'Mocorito'),
(1891, 25, '014', 'Rosario'),
(1892, 25, '015', 'Salvador Alvarado'),
(1893, 25, '016', 'San Ignacio'),
(1894, 25, '017', 'Sinaloa'),
(1895, 25, '018', 'Navolato'),
(1896, 26, '001', 'Aconchi'),
(1897, 26, '002', 'Agua Prieta'),
(1898, 26, '003', 'Alamos'),
(1899, 26, '004', 'Altar'),
(1900, 26, '005', 'Arivechi'),
(1901, 26, '006', 'Arizpe'),
(1902, 26, '007', 'Atil'),
(1903, 26, '008', 'Bacadéhuachi'),
(1904, 26, '009', 'Bacanora'),
(1905, 26, '010', 'Bacerac'),
(1906, 26, '011', 'Bacoachi'),
(1907, 26, '012', 'Bácum'),
(1908, 26, '013', 'Banámichi'),
(1909, 26, '014', 'Baviácora'),
(1910, 26, '015', 'Bavispe'),
(1911, 26, '016', 'Benjamín Hill'),
(1912, 26, '017', 'Caborca'),
(1913, 26, '018', 'Cajeme'),
(1914, 26, '019', 'Cananea'),
(1915, 26, '020', 'Carbó'),
(1916, 26, '021', 'La Colorada'),
(1917, 26, '022', 'Cucurpe'),
(1918, 26, '023', 'Cumpas'),
(1919, 26, '024', 'Divisaderos'),
(1920, 26, '025', 'Empalme'),
(1921, 26, '026', 'Etchojoa'),
(1922, 26, '027', 'Fronteras'),
(1923, 26, '028', 'Granados'),
(1924, 26, '029', 'Guaymas'),
(1925, 26, '030', 'Hermosillo'),
(1926, 26, '031', 'Huachinera'),
(1927, 26, '032', 'Huásabas'),
(1928, 26, '033', 'Huatabampo'),
(1929, 26, '034', 'Huépac'),
(1930, 26, '035', 'Imuris'),
(1931, 26, '036', 'Magdalena'),
(1932, 26, '037', 'Mazatán'),
(1933, 26, '038', 'Moctezuma'),
(1934, 26, '039', 'Naco'),
(1935, 26, '040', 'Nácori Chico'),
(1936, 26, '041', 'Nacozari de García'),
(1937, 26, '042', 'Navojoa'),
(1938, 26, '043', 'Nogales'),
(1939, 26, '044', 'Onavas'),
(1940, 26, '045', 'Opodepe'),
(1941, 26, '046', 'Oquitoa'),
(1942, 26, '047', 'Pitiquito'),
(1943, 26, '048', 'Puerto Peñasco'),
(1944, 26, '049', 'Quiriego'),
(1945, 26, '050', 'Rayón'),
(1946, 26, '051', 'Rosario'),
(1947, 26, '052', 'Sahuaripa'),
(1948, 26, '053', 'San Felipe de Jesús'),
(1949, 26, '054', 'San Javier'),
(1950, 26, '055', 'San Luis Río Colorado'),
(1951, 26, '056', 'San Miguel de Horcasitas'),
(1952, 26, '057', 'San Pedro de la Cueva'),
(1953, 26, '058', 'Santa Ana'),
(1954, 26, '059', 'Santa Cruz'),
(1955, 26, '060', 'Sáric'),
(1956, 26, '061', 'Soyopa'),
(1957, 26, '062', 'Suaqui Grande'),
(1958, 26, '063', 'Tepache'),
(1959, 26, '064', 'Trincheras'),
(1960, 26, '065', 'Tubutama'),
(1961, 26, '066', 'Ures'),
(1962, 26, '067', 'Villa Hidalgo'),
(1963, 26, '068', 'Villa Pesqueira'),
(1964, 26, '069', 'Yécora'),
(1965, 26, '070', 'General Plutarco Elías Calles'),
(1966, 26, '071', 'Benito Juárez'),
(1967, 26, '072', 'San Ignacio Río Muerto'),
(1968, 27, '001', 'Balancán'),
(1969, 27, '002', 'Cárdenas'),
(1970, 27, '003', 'Centla'),
(1971, 27, '004', 'Centro'),
(1972, 27, '005', 'Comalcalco'),
(1973, 27, '006', 'Cunduacán'),
(1974, 27, '007', 'Emiliano Zapata'),
(1975, 27, '008', 'Huimanguillo'),
(1976, 27, '009', 'Jalapa'),
(1977, 27, '010', 'Jalpa de Méndez'),
(1978, 27, '011', 'Jonuta'),
(1979, 27, '012', 'Macuspana'),
(1980, 27, '013', 'Nacajuca'),
(1981, 27, '014', 'Paraíso'),
(1982, 27, '015', 'Tacotalpa'),
(1983, 27, '016', 'Teapa'),
(1984, 27, '017', 'Tenosique'),
(1985, 28, '001', 'Abasolo'),
(1986, 28, '002', 'Aldama'),
(1987, 28, '003', 'Altamira'),
(1988, 28, '004', 'Antiguo Morelos'),
(1989, 28, '005', 'Burgos'),
(1990, 28, '006', 'Bustamante'),
(1991, 28, '007', 'Camargo'),
(1992, 28, '008', 'Casas'),
(1993, 28, '009', 'Ciudad Madero'),
(1994, 28, '010', 'Cruillas'),
(1995, 28, '011', 'Gómez Farías'),
(1996, 28, '012', 'González'),
(1997, 28, '013', 'Güémez'),
(1998, 28, '014', 'Guerrero'),
(1999, 28, '015', 'Gustavo Díaz Ordaz'),
(2000, 28, '016', 'Hidalgo'),
(2001, 28, '017', 'Jaumave'),
(2002, 28, '018', 'Jiménez'),
(2003, 28, '019', 'Llera'),
(2004, 28, '020', 'Mainero'),
(2005, 28, '021', 'El Mante'),
(2006, 28, '022', 'Matamoros'),
(2007, 28, '023', 'Méndez'),
(2008, 28, '024', 'Mier'),
(2009, 28, '025', 'Miguel Alemán'),
(2010, 28, '026', 'Miquihuana'),
(2011, 28, '027', 'Nuevo Laredo'),
(2012, 28, '028', 'Nuevo Morelos'),
(2013, 28, '029', 'Ocampo'),
(2014, 28, '030', 'Padilla'),
(2015, 28, '031', 'Palmillas'),
(2016, 28, '032', 'Reynosa'),
(2017, 28, '033', 'Río Bravo'),
(2018, 28, '034', 'San Carlos'),
(2019, 28, '035', 'San Fernando'),
(2020, 28, '036', 'San Nicolás'),
(2021, 28, '037', 'Soto la Marina'),
(2022, 28, '038', 'Tampico'),
(2023, 28, '039', 'Tula'),
(2024, 28, '040', 'Valle Hermoso'),
(2025, 28, '041', 'Victoria'),
(2026, 28, '042', 'Villagrán'),
(2027, 28, '043', 'Xicoténcatl'),
(2028, 29, '001', 'Amaxac de Guerrero'),
(2029, 29, '002', 'Apetatitlán de Antonio Carvajal'),
(2030, 29, '003', 'Atlangatepec'),
(2031, 29, '004', 'Atltzayanca'),
(2032, 29, '005', 'Apizaco'),
(2033, 29, '006', 'Calpulalpan'),
(2034, 29, '007', 'El Carmen Tequexquitla'),
(2035, 29, '008', 'Cuapiaxtla'),
(2036, 29, '009', 'Cuaxomulco'),
(2037, 29, '010', 'Chiautempan'),
(2038, 29, '011', 'Muñoz de Domingo Arenas'),
(2039, 29, '012', 'Españita'),
(2040, 29, '013', 'Huamantla'),
(2041, 29, '014', 'Hueyotlipan'),
(2042, 29, '015', 'Ixtacuixtla de Mariano Matamoros'),
(2043, 29, '016', 'Ixtenco'),
(2044, 29, '017', 'Mazatecochco de José María Morelos'),
(2045, 29, '018', 'Contla de Juan Cuamatzi'),
(2046, 29, '019', 'Tepetitla de Lardizábal'),
(2047, 29, '020', 'Sanctórum de Lázaro Cárdenas'),
(2048, 29, '021', 'Nanacamilpa de Mariano Arista'),
(2049, 29, '022', 'Acuamanala de Miguel Hidalgo'),
(2050, 29, '023', 'Natívitas'),
(2051, 29, '024', 'Panotla'),
(2052, 29, '025', 'San Pablo del Monte'),
(2053, 29, '026', 'Santa Cruz Tlaxcala'),
(2054, 29, '027', 'Tenancingo'),
(2055, 29, '028', 'Teolocholco'),
(2056, 29, '029', 'Tepeyanco'),
(2057, 29, '030', 'Terrenate'),
(2058, 29, '031', 'Tetla de la Solidaridad'),
(2059, 29, '032', 'Tetlatlahuca'),
(2060, 29, '033', 'Tlaxcala'),
(2061, 29, '034', 'Tlaxco'),
(2062, 29, '035', 'Tocatlán'),
(2063, 29, '036', 'Totolac'),
(2064, 29, '037', 'Ziltlaltépec de Trinidad Sánchez Santos'),
(2065, 29, '038', 'Tzompantepec'),
(2066, 29, '039', 'Xaloztoc'),
(2067, 29, '040', 'Xaltocan'),
(2068, 29, '041', 'Papalotla de Xicohténcatl'),
(2069, 29, '042', 'Xicohtzinco'),
(2070, 29, '043', 'Yauhquemehcan'),
(2071, 29, '044', 'Zacatelco'),
(2072, 29, '045', 'Benito Juárez'),
(2073, 29, '046', 'Emiliano Zapata'),
(2074, 29, '047', 'Lázaro Cárdenas'),
(2075, 29, '048', 'La Magdalena Tlaltelulco'),
(2076, 29, '049', 'San Damián Texóloc'),
(2077, 29, '050', 'San Francisco Tetlanohcan'),
(2078, 29, '051', 'San Jerónimo Zacualpan'),
(2079, 29, '052', 'San José Teacalco'),
(2080, 29, '053', 'San Juan Huactzinco'),
(2081, 29, '054', 'San Lorenzo Axocomanitla'),
(2082, 29, '055', 'San Lucas Tecopilco'),
(2083, 29, '056', 'Santa Ana Nopalucan'),
(2084, 29, '057', 'Santa Apolonia Teacalco'),
(2085, 29, '058', 'Santa Catarina Ayometla'),
(2086, 29, '059', 'Santa Cruz Quilehtla'),
(2087, 29, '060', 'Santa Isabel Xiloxoxtla'),
(2088, 30, '001', 'Acajete'),
(2089, 30, '002', 'Acatlán'),
(2090, 30, '003', 'Acayucan'),
(2091, 30, '004', 'Actopan'),
(2092, 30, '005', 'Acula'),
(2093, 30, '006', 'Acultzingo'),
(2094, 30, '007', 'Camarón de Tejeda'),
(2095, 30, '008', 'Alpatláhuac'),
(2096, 30, '009', 'Alto Lucero de Gutiérrez Barrios'),
(2097, 30, '010', 'Altotonga'),
(2098, 30, '011', 'Alvarado'),
(2099, 30, '012', 'Amatitlán'),
(2100, 30, '013', 'Naranjos Amatlán'),
(2101, 30, '014', 'Amatlán de los Reyes'),
(2102, 30, '015', 'Angel R. Cabada'),
(2103, 30, '016', 'La Antigua'),
(2104, 30, '017', 'Apazapan'),
(2105, 30, '018', 'Aquila'),
(2106, 30, '019', 'Astacinga'),
(2107, 30, '020', 'Atlahuilco'),
(2108, 30, '021', 'Atoyac'),
(2109, 30, '022', 'Atzacan'),
(2110, 30, '023', 'Atzalan'),
(2111, 30, '024', 'Tlaltetela'),
(2112, 30, '025', 'Ayahualulco'),
(2113, 30, '026', 'Banderilla'),
(2114, 30, '027', 'Benito Juárez'),
(2115, 30, '028', 'Boca del Río'),
(2116, 30, '029', 'Calcahualco'),
(2117, 30, '030', 'Camerino Z. Mendoza'),
(2118, 30, '031', 'Carrillo Puerto'),
(2119, 30, '032', 'Catemaco'),
(2120, 30, '033', 'Cazones de Herrera'),
(2121, 30, '034', 'Cerro Azul'),
(2122, 30, '035', 'Citlaltépetl'),
(2123, 30, '036', 'Coacoatzintla'),
(2124, 30, '037', 'Coahuitlán'),
(2125, 30, '038', 'Coatepec'),
(2126, 30, '039', 'Coatzacoalcos'),
(2127, 30, '040', 'Coatzintla'),
(2128, 30, '041', 'Coetzala'),
(2129, 30, '042', 'Colipa'),
(2130, 30, '043', 'Comapa'),
(2131, 30, '044', 'Córdoba'),
(2132, 30, '045', 'Cosamaloapan de Carpio'),
(2133, 30, '046', 'Cosautlán de Carvajal'),
(2134, 30, '047', 'Coscomatepec'),
(2135, 30, '048', 'Cosoleacaque'),
(2136, 30, '049', 'Cotaxtla'),
(2137, 30, '050', 'Coxquihui'),
(2138, 30, '051', 'Coyutla'),
(2139, 30, '052', 'Cuichapa'),
(2140, 30, '053', 'Cuitláhuac'),
(2141, 30, '054', 'Chacaltianguis'),
(2142, 30, '055', 'Chalma'),
(2143, 30, '056', 'Chiconamel'),
(2144, 30, '057', 'Chiconquiaco'),
(2145, 30, '058', 'Chicontepec'),
(2146, 30, '059', 'Chinameca'),
(2147, 30, '060', 'Chinampa de Gorostiza'),
(2148, 30, '061', 'Las Choapas'),
(2149, 30, '062', 'Chocamán'),
(2150, 30, '063', 'Chontla'),
(2151, 30, '064', 'Chumatlán'),
(2152, 30, '065', 'Emiliano Zapata'),
(2153, 30, '066', 'Espinal'),
(2154, 30, '067', 'Filomeno Mata'),
(2155, 30, '068', 'Fortín'),
(2156, 30, '069', 'Gutiérrez Zamora'),
(2157, 30, '070', 'Hidalgotitlán'),
(2158, 30, '071', 'Huatusco'),
(2159, 30, '072', 'Huayacocotla'),
(2160, 30, '073', 'Hueyapan de Ocampo'),
(2161, 30, '074', 'Huiloapan de Cuauhtémoc'),
(2162, 30, '075', 'Ignacio de la Llave'),
(2163, 30, '076', 'Ilamatlán'),
(2164, 30, '077', 'Isla'),
(2165, 30, '078', 'Ixcatepec'),
(2166, 30, '079', 'Ixhuacán de los Reyes'),
(2167, 30, '080', 'Ixhuatlán del Café'),
(2168, 30, '081', 'Ixhuatlancillo'),
(2169, 30, '082', 'Ixhuatlán del Sureste'),
(2170, 30, '083', 'Ixhuatlán de Madero'),
(2171, 30, '084', 'Ixmatlahuacan'),
(2172, 30, '085', 'Ixtaczoquitlán'),
(2173, 30, '086', 'Jalacingo'),
(2174, 30, '087', 'Xalapa'),
(2175, 30, '088', 'Jalcomulco'),
(2176, 30, '089', 'Jáltipan'),
(2177, 30, '090', 'Jamapa'),
(2178, 30, '091', 'Jesús Carranza'),
(2179, 30, '092', 'Xico'),
(2180, 30, '093', 'Jilotepec'),
(2181, 30, '094', 'Juan Rodríguez Clara'),
(2182, 30, '095', 'Juchique de Ferrer'),
(2183, 30, '096', 'Landero y Coss'),
(2184, 30, '097', 'Lerdo de Tejada'),
(2185, 30, '098', 'Magdalena'),
(2186, 30, '099', 'Maltrata'),
(2187, 30, '100', 'Manlio Fabio Altamirano'),
(2188, 30, '101', 'Mariano Escobedo'),
(2189, 30, '102', 'Martínez de la Torre'),
(2190, 30, '103', 'Mecatlán'),
(2191, 30, '104', 'Mecayapan'),
(2192, 30, '105', 'Medellín de Bravo'),
(2193, 30, '106', 'Miahuatlán'),
(2194, 30, '107', 'Las Minas'),
(2195, 30, '108', 'Minatitlán'),
(2196, 30, '109', 'Misantla'),
(2197, 30, '110', 'Mixtla de Altamirano'),
(2198, 30, '111', 'Moloacán'),
(2199, 30, '112', 'Naolinco'),
(2200, 30, '113', 'Naranjal'),
(2201, 30, '114', 'Nautla'),
(2202, 30, '115', 'Nogales'),
(2203, 30, '116', 'Oluta'),
(2204, 30, '117', 'Omealca'),
(2205, 30, '118', 'Orizaba'),
(2206, 30, '119', 'Otatitlán'),
(2207, 30, '120', 'Oteapan'),
(2208, 30, '121', 'Ozuluama de Mascareñas'),
(2209, 30, '122', 'Pajapan'),
(2210, 30, '123', 'Pánuco'),
(2211, 30, '124', 'Papantla'),
(2212, 30, '125', 'Paso del Macho'),
(2213, 30, '126', 'Paso de Ovejas'),
(2214, 30, '127', 'La Perla'),
(2215, 30, '128', 'Perote'),
(2216, 30, '129', 'Platón Sánchez'),
(2217, 30, '130', 'Playa Vicente'),
(2218, 30, '131', 'Poza Rica de Hidalgo'),
(2219, 30, '132', 'Las Vigas de Ramírez'),
(2220, 30, '133', 'Pueblo Viejo'),
(2221, 30, '134', 'Puente Nacional'),
(2222, 30, '135', 'Rafael Delgado'),
(2223, 30, '136', 'Rafael Lucio'),
(2224, 30, '137', 'Los Reyes'),
(2225, 30, '138', 'Río Blanco'),
(2226, 30, '139', 'Saltabarranca'),
(2227, 30, '140', 'San Andrés Tenejapan'),
(2228, 30, '141', 'San Andrés Tuxtla'),
(2229, 30, '142', 'San Juan Evangelista'),
(2230, 30, '143', 'Santiago Tuxtla'),
(2231, 30, '144', 'Sayula de Alemán'),
(2232, 30, '145', 'Soconusco'),
(2233, 30, '146', 'Sochiapa'),
(2234, 30, '147', 'Soledad Atzompa'),
(2235, 30, '148', 'Soledad de Doblado'),
(2236, 30, '149', 'Soteapan'),
(2237, 30, '150', 'Tamalín'),
(2238, 30, '151', 'Tamiahua'),
(2239, 30, '152', 'Tampico Alto'),
(2240, 30, '153', 'Tancoco'),
(2241, 30, '154', 'Tantima'),
(2242, 30, '155', 'Tantoyuca'),
(2243, 30, '156', 'Tatatila'),
(2244, 30, '157', 'Castillo de Teayo'),
(2245, 30, '158', 'Tecolutla'),
(2246, 30, '159', 'Tehuipango'),
(2247, 30, '160', 'Álamo Temapache'),
(2248, 30, '161', 'Tempoal'),
(2249, 30, '162', 'Tenampa'),
(2250, 30, '163', 'Tenochtitlán'),
(2251, 30, '164', 'Teocelo'),
(2252, 30, '165', 'Tepatlaxco'),
(2253, 30, '166', 'Tepetlán'),
(2254, 30, '167', 'Tepetzintla'),
(2255, 30, '168', 'Tequila'),
(2256, 30, '169', 'José Azueta'),
(2257, 30, '170', 'Texcatepec'),
(2258, 30, '171', 'Texhuacán'),
(2259, 30, '172', 'Texistepec'),
(2260, 30, '173', 'Tezonapa'),
(2261, 30, '174', 'Tierra Blanca'),
(2262, 30, '175', 'Tihuatlán'),
(2263, 30, '176', 'Tlacojalpan'),
(2264, 30, '177', 'Tlacolulan'),
(2265, 30, '178', 'Tlacotalpan'),
(2266, 30, '179', 'Tlacotepec de Mejía'),
(2267, 30, '180', 'Tlachichilco'),
(2268, 30, '181', 'Tlalixcoyan'),
(2269, 30, '182', 'Tlalnelhuayocan'),
(2270, 30, '183', 'Tlapacoyan'),
(2271, 30, '184', 'Tlaquilpa'),
(2272, 30, '185', 'Tlilapan'),
(2273, 30, '186', 'Tomatlán'),
(2274, 30, '187', 'Tonayán'),
(2275, 30, '188', 'Totutla'),
(2276, 30, '189', 'Tuxpan'),
(2277, 30, '190', 'Tuxtilla'),
(2278, 30, '191', 'Ursulo Galván'),
(2279, 30, '192', 'Vega de Alatorre'),
(2280, 30, '193', 'Veracruz'),
(2281, 30, '194', 'Villa Aldama'),
(2282, 30, '195', 'Xoxocotla'),
(2283, 30, '196', 'Yanga'),
(2284, 30, '197', 'Yecuatla'),
(2285, 30, '198', 'Zacualpan'),
(2286, 30, '199', 'Zaragoza'),
(2287, 30, '200', 'Zentla'),
(2288, 30, '201', 'Zongolica'),
(2289, 30, '202', 'Zontecomatlán de López y Fuentes'),
(2290, 30, '203', 'Zozocolco de Hidalgo'),
(2291, 30, '204', 'Agua Dulce'),
(2292, 30, '205', 'El Higo'),
(2293, 30, '206', 'Nanchital de Lázaro Cárdenas del Río'),
(2294, 30, '207', 'Tres Valles'),
(2295, 30, '208', 'Carlos A. Carrillo'),
(2296, 30, '209', 'Tatahuicapan de Juárez'),
(2297, 30, '210', 'Uxpanapa'),
(2298, 30, '211', 'San Rafael'),
(2299, 30, '212', 'Santiago Sochiapan'),
(2300, 31, '001', 'Abalá'),
(2301, 31, '002', 'Acanceh'),
(2302, 31, '003', 'Akil'),
(2303, 31, '004', 'Baca'),
(2304, 31, '005', 'Bokobá'),
(2305, 31, '006', 'Buctzotz'),
(2306, 31, '007', 'Cacalchén'),
(2307, 31, '008', 'Calotmul'),
(2308, 31, '009', 'Cansahcab'),
(2309, 31, '010', 'Cantamayec'),
(2310, 31, '011', 'Celestún'),
(2311, 31, '012', 'Cenotillo'),
(2312, 31, '013', 'Conkal'),
(2313, 31, '014', 'Cuncunul'),
(2314, 31, '015', 'Cuzamá'),
(2315, 31, '016', 'Chacsinkín'),
(2316, 31, '017', 'Chankom'),
(2317, 31, '018', 'Chapab'),
(2318, 31, '019', 'Chemax'),
(2319, 31, '020', 'Chicxulub Pueblo'),
(2320, 31, '021', 'Chichimilá'),
(2321, 31, '022', 'Chikindzonot'),
(2322, 31, '023', 'Chocholá'),
(2323, 31, '024', 'Chumayel'),
(2324, 31, '025', 'Dzán'),
(2325, 31, '026', 'Dzemul'),
(2326, 31, '027', 'Dzidzantún'),
(2327, 31, '028', 'Dzilam de Bravo'),
(2328, 31, '029', 'Dzilam González'),
(2329, 31, '030', 'Dzitás'),
(2330, 31, '031', 'Dzoncauich'),
(2331, 31, '032', 'Espita'),
(2332, 31, '033', 'Halachó'),
(2333, 31, '034', 'Hocabá'),
(2334, 31, '035', 'Hoctún'),
(2335, 31, '036', 'Homún'),
(2336, 31, '037', 'Huhí'),
(2337, 31, '038', 'Hunucmá'),
(2338, 31, '039', 'Ixil'),
(2339, 31, '040', 'Izamal'),
(2340, 31, '041', 'Kanasín'),
(2341, 31, '042', 'Kantunil'),
(2342, 31, '043', 'Kaua'),
(2343, 31, '044', 'Kinchil'),
(2344, 31, '045', 'Kopomá'),
(2345, 31, '046', 'Mama'),
(2346, 31, '047', 'Maní'),
(2347, 31, '048', 'Maxcanú'),
(2348, 31, '049', 'Mayapán'),
(2349, 31, '050', 'Mérida'),
(2350, 31, '051', 'Mocochá'),
(2351, 31, '052', 'Motul'),
(2352, 31, '053', 'Muna'),
(2353, 31, '054', 'Muxupip'),
(2354, 31, '055', 'Opichén'),
(2355, 31, '056', 'Oxkutzcab'),
(2356, 31, '057', 'Panabá'),
(2357, 31, '058', 'Peto'),
(2358, 31, '059', 'Progreso'),
(2359, 31, '060', 'Quintana Roo'),
(2360, 31, '061', 'Río Lagartos'),
(2361, 31, '062', 'Sacalum'),
(2362, 31, '063', 'Samahil'),
(2363, 31, '064', 'Sanahcat'),
(2364, 31, '065', 'San Felipe'),
(2365, 31, '066', 'Santa Elena'),
(2366, 31, '067', 'Seyé'),
(2367, 31, '068', 'Sinanché'),
(2368, 31, '069', 'Sotuta'),
(2369, 31, '070', 'Sucilá'),
(2370, 31, '071', 'Sudzal'),
(2371, 31, '072', 'Suma'),
(2372, 31, '073', 'Tahdziú'),
(2373, 31, '074', 'Tahmek'),
(2374, 31, '075', 'Teabo'),
(2375, 31, '076', 'Tecoh'),
(2376, 31, '077', 'Tekal de Venegas'),
(2377, 31, '078', 'Tekantó'),
(2378, 31, '079', 'Tekax'),
(2379, 31, '080', 'Tekit'),
(2380, 31, '081', 'Tekom'),
(2381, 31, '082', 'Telchac Pueblo'),
(2382, 31, '083', 'Telchac Puerto'),
(2383, 31, '084', 'Temax'),
(2384, 31, '085', 'Temozón'),
(2385, 31, '086', 'Tepakán'),
(2386, 31, '087', 'Tetiz'),
(2387, 31, '088', 'Teya'),
(2388, 31, '089', 'Ticul'),
(2389, 31, '090', 'Timucuy'),
(2390, 31, '091', 'Tinum'),
(2391, 31, '092', 'Tixcacalcupul'),
(2392, 31, '093', 'Tixkokob'),
(2393, 31, '094', 'Tixmehuac'),
(2394, 31, '095', 'Tixpéhual'),
(2395, 31, '096', 'Tizimín'),
(2396, 31, '097', 'Tunkás'),
(2397, 31, '098', 'Tzucacab'),
(2398, 31, '099', 'Uayma'),
(2399, 31, '100', 'Ucú'),
(2400, 31, '101', 'Umán'),
(2401, 31, '102', 'Valladolid'),
(2402, 31, '103', 'Xocchel'),
(2403, 31, '104', 'Yaxcabá'),
(2404, 31, '105', 'Yaxkukul'),
(2405, 31, '106', 'Yobaín'),
(2406, 32, '001', 'Apozol'),
(2407, 32, '002', 'Apulco'),
(2408, 32, '003', 'Atolinga'),
(2409, 32, '004', 'Benito Juárez'),
(2410, 32, '005', 'Calera'),
(2411, 32, '006', 'Cañitas de Felipe Pescador'),
(2412, 32, '007', 'Concepción del Oro'),
(2413, 32, '008', 'Cuauhtémoc'),
(2414, 32, '009', 'Chalchihuites'),
(2415, 32, '010', 'Fresnillo'),
(2416, 32, '011', 'Trinidad García de la Cadena'),
(2417, 32, '012', 'Genaro Codina'),
(2418, 32, '013', 'General Enrique Estrada'),
(2419, 32, '014', 'General Francisco R. Murguía'),
(2420, 32, '015', 'El Plateado de Joaquín Amaro'),
(2421, 32, '016', 'General Pánfilo Natera'),
(2422, 32, '017', 'Guadalupe'),
(2423, 32, '018', 'Huanusco'),
(2424, 32, '019', 'Jalpa'),
(2425, 32, '020', 'Jerez'),
(2426, 32, '021', 'Jiménez del Teul'),
(2427, 32, '022', 'Juan Aldama'),
(2428, 32, '023', 'Juchipila'),
(2429, 32, '024', 'Loreto'),
(2430, 32, '025', 'Luis Moya'),
(2431, 32, '026', 'Mazapil'),
(2432, 32, '027', 'Melchor Ocampo'),
(2433, 32, '028', 'Mezquital del Oro'),
(2434, 32, '029', 'Miguel Auza'),
(2435, 32, '030', 'Momax'),
(2436, 32, '031', 'Monte Escobedo'),
(2437, 32, '032', 'Morelos'),
(2438, 32, '033', 'Moyahua de Estrada'),
(2439, 32, '034', 'Nochistlán de Mejía'),
(2440, 32, '035', 'Noria de Ángeles'),
(2441, 32, '036', 'Ojocaliente'),
(2442, 32, '037', 'Pánuco'),
(2443, 32, '038', 'Pinos'),
(2444, 32, '039', 'Río Grande'),
(2445, 32, '040', 'Sain Alto'),
(2446, 32, '041', 'El Salvador'),
(2447, 32, '042', 'Sombrerete'),
(2448, 32, '043', 'Susticacán'),
(2449, 32, '044', 'Tabasco'),
(2450, 32, '045', 'Tepechitlán'),
(2451, 32, '046', 'Tepetongo'),
(2452, 32, '047', 'Teúl de González Ortega'),
(2453, 32, '048', 'Tlaltenango de Sánchez Román'),
(2454, 32, '049', 'Valparaíso'),
(2455, 32, '050', 'Vetagrande'),
(2456, 32, '051', 'Villa de Cos'),
(2457, 32, '052', 'Villa García'),
(2458, 32, '053', 'Villa González Ortega'),
(2459, 32, '054', 'Villa Hidalgo'),
(2460, 32, '055', 'Villanueva'),
(2461, 32, '056', 'Zacatecas'),
(2462, 32, '057', 'Trancoso'),
(2463, 32, '058', 'Santa María de la Paz'),
(2464, 17, '034', 'Xoxocotla'),
(2465, 17, '035', 'Coatetelco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` bigint(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `app` varchar(20) NOT NULL,
  `apm` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `app`, `apm`, `telefono`, `sexo`, `estatus`) VALUES
(1, 'Julio', 'Montemayor', 'Enriquez', '5587649832', 0, 1),
(2, 'Paola', 'Cortes', 'Ponciano', '5584321548', 1, 1),
(3, 'Monica', 'Pimentel', 'Rodriguez', '5574548415', 1, 1),
(4, 'Juan', 'Apolinar', 'Ledesma', '5625845620', 0, 1),
(10, 'Maria', 'Hernandez', 'Rivera', '5501576189', 1, 1),
(11, 'Jose', 'Garcia', 'Chavez', '5543600736', 0, 1),
(12, 'Juan', 'Martinez', 'Mendez', '5541398383', 0, 1),
(13, 'Luis', 'Lopez', 'Alvarez', '5545311431', 0, 1),
(14, 'Francisco', 'Gonzalez', 'Romero', '5586470148', 0, 1),
(15, 'Jesus', 'Perez', 'Castillo', '5518267360', 0, 1),
(16, 'Ana', 'Rodriguez', 'Moreno', '5566221544', 1, 1),
(17, 'Rosa', 'Sanchez', 'Ortiz', '5574518630', 1, 1),
(18, 'Jorge', 'Ramirez', 'Aguilar', '5521563737', 0, 1),
(19, 'Miguel', 'Cruz', 'Mendoza', '5535588498', 0, 1),
(20, 'Carlos', 'Flores', 'Ruiz', '5540619982', 0, 1),
(21, 'Juana', 'Gomez', 'Gutierrez', '5505405916', 1, 1),
(22, 'Martha', 'Morales', 'Diaz', '5536031959', 1, 1),
(23, 'Guadalupe', 'Vazquez', 'Torres', '5535673134', 1, 1),
(24, 'Pedro', 'Reyes', 'Jimenez', '5582184925', 0, 1),
(25, 'Manuel', 'Jimenez', 'Reyes', '5539420052', 0, 1),
(26, 'Victor', 'Torres', 'Vazquez', '5551380549', 0, 1),
(27, 'Antonio', 'Diaz', 'Morales', '5566866202', 0, 1),
(28, 'Alejandro', 'Gutierrez', 'Gomez', '5555262846', 0, 1),
(29, 'Margarita', 'Ruiz', 'Flores', '5598032120', 1, 1),
(30, 'Mario', 'Mendoza', 'Cruz', '5596409904', 0, 1),
(31, 'Roberto', 'Aguilar', 'Ramirez', '5509329995', 0, 1),
(32, 'Claudia', 'Ortiz', 'Sanchez', '5594393084', 1, 1),
(33, 'Laura', 'Moreno', 'Rodriguez', '5531507912', 1, 1),
(34, 'Ricardo', 'Castillo', 'Perez', '5555535338', 0, 1),
(35, 'Fernando', 'Romero', 'Gonzalez', '5529605436', 0, 1),
(36, 'Javier', 'Alvarez', 'Lopez', '5552191680', 0, 1),
(37, 'Sergio', 'Mendez', 'Martinez', '5508453040', 0, 1),
(38, 'Martin', 'Chavez', 'Garcia', '5538807314', 0, 1),
(39, 'Veronica', 'Rivera', 'Hernandez', '5552067667', 1, 1),
(20210517145526, 'Armando', 'Jaques', 'Alcalá', '5151121212', 0, 1),
(20210517185211, 'Lucia', 'Perez', 'Jimenez', '5587481564', 1, 1),
(20210528160010, 'Christian', 'Pioquinto', 'Hernandez', '5565241529', 0, 1),
(20210603052605, 'Cristina', 'Garduño', 'Romero', '556415615', 0, 1),
(20210603052638, 'Felipe', 'Calderon', 'Hinojosa', '156156156', 0, 1),
(20210603052822, 'Carmen', 'Gonzalez', 'Perez', '15615615', 1, 1),
(20210604141732, 'Alvaro', 'Mendoza', 'Perez', '5615615', 0, 1),
(20210604142033, 'Luisa', 'Echeverria', 'Calderon', '4561651561561', 1, 1),
(20210604142356, 'Maria', 'Hernandez', 'Romero', '5615615615', 1, 1),
(20210604143217, 'Abril', 'Busmante', 'Perez', '16515615615', 0, 1),
(20210609044700, 'Juan', 'Perez', 'Sanchez', '56156156', 0, 1),
(20210706223646, 'Fernando', 'Ledezma', 'Ramos', '55626262626', 0, 1),
(20210710050742, 'FRancisco', 'ROmo', 'Segundo', '5565241529', 0, 1),
(20211215032318, 'Agapito', 'Mendoza', 'Herrera', '5623568956', 0, 1),
(20211228031934, 'Marco', 'Solis', 'Balderas', '55235689', 0, 1),
(20211228130159, 'Peter', 'Parker', 'Sanchez', '1531561325', 0, 1),
(20211228193223, 'Manuel', 'Martinez', 'Hernandez', '5500000000', 0, 1),
(20211228193851, 'Camila', 'Segura', 'Segura', '4561512', 1, 1),
(20220103224547, 'Cuyo', 'Coyin', 'Canallin', '45641564165', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(10) NOT NULL,
  `id_persona_fk` bigint(20) NOT NULL,
  `id_depto_fk` int(5) NOT NULL,
  `no_trabajador` varchar(20) NOT NULL,
  `prefijo` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `key_hash` text NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `firma_digital` text NOT NULL,
  `firma_digital_img` text NOT NULL,
  `img_perfil` text NOT NULL COMMENT 'Foto de Perfil del Profesor',
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `id_persona_fk`, `id_depto_fk`, `no_trabajador`, `prefijo`, `email`, `pw`, `key_hash`, `fecha_registro`, `firma_digital`, `firma_digital_img`, `img_perfil`, `estatus`) VALUES
(1, 20210517145526, 5, '312260633', 'Lic', 'c@mail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'weerfewrrwe', '2021-05-18 13:58:22', 'ewrewweer', 'thhbyerereewdf', 'https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4', 1),
(2, 2, 6, '314206372', 'Dra', 'pao@hotmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'tgyhtyrgbwqw', '2021-05-19 13:58:22', 'ffgrvguhujuip', 'tuuvniusjkkjqa', '../resources/default-avatar.png', 1),
(3, 20210528160010, 1, '25252525', 'Lic.', 'christian@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'bgdfbd', '2021-05-31 00:00:00', 'vdfdbfdbdfb', 'bfdbfdbdf', 'https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4', 0),
(4, 20210603052605, 1, '45415615', 'Lic.', 'algo@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '00000000000', '0000-00-00 00:00:00', '00000000000', '0000000000000', '../resources/default-avatar.png', 1),
(5, 20210603052638, 2, '1515615', 'Lic.', 'xsnjcd@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '00000000000', '0000-00-00 00:00:00', '00000000000', '0000000000000', '../resources/default-avatar.png', 1),
(6, 20210603052822, 3, '16156156', 'Lic.', 'carmen@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '00000000000', '0000-00-00 00:00:00', '00000000000', '0000000000000', '../resources/default-avatar.png', 1),
(7, 20210604141732, 1, '56165156', 'Lic.', 'alvaro@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '00000000000', '0000-00-00 00:00:00', '00000000000', '0000000000000', '../resources/default-avatar.png', 1),
(8, 20210604142033, 2, '1651561', 'Lic.', 'luis@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '00000000000', '2021-06-04 14:20:33', '00000000000', '0000000000000', '../resources/default-avatar.png', 1),
(9, 20210604142356, 3, '561561651', 'Lic.', 'maria@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '00000000000', '2021-06-04 07:23:58', '00000000000', '0000000000000', '../resources/default-avatar.png', 1),
(10, 20210604143217, 5, '45615656156', 'Lic.', 'abril@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '00000000000', '2021-06-04 07:32:17', '00000000000', '0000000000000', 'https://avatars.githubusercontent.com/u/25911844?v=4', 0),
(11, 20210710050742, 2, '1561561', 'Lic.', 'cdso@gailc.com', '4a7d1ed414474e4033ac29ccb8653d9b', '00000000000', '2021-07-09 22:07:42', '00000000000', '0000000000000', '../resources/default-avatar.png', 1),
(12, 20211215032318, 4, '15615615', 'Lic.', 'algo@gmailcom', '4a7d1ed414474e4033ac29ccb8653d9b', 'b59c67bf196a4758191e42f76670ceba', '2021-12-15 03:23:18', 'NULL', 'NULL', '../resources/default-avatar.png', 1),
(13, 20211228031934, 7, '41565461123', 'Lic.', 'correosolis@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'b59c67bf196a4758191e42f76670ceba', '2021-12-28 03:19:34', 'NULL', 'NULL', 'https://avatars.githubusercontent.com/u/21067489?v=4', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_social`
--

CREATE TABLE `servicio_social` (
  `id_alumno_fk` int(10) NOT NULL,
  `clave_acceso` text NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_inicio_serv` date DEFAULT NULL,
  `fecha_termino_serv` date DEFAULT NULL,
  `notas` text NOT NULL,
  `permisos` tinyint(2) NOT NULL,
  `estatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio_social`
--

INSERT INTO `servicio_social` (`id_alumno_fk`, `clave_acceso`, `fecha_alta`, `fecha_inicio_serv`, `fecha_termino_serv`, `notas`, `permisos`, `estatus`) VALUES
(1, '1234', '2022-01-01 20:25:27', '2022-01-01', '2022-06-01', 'PRUEBA 1', 1, 0),
(2, '321', '2022-01-01 20:25:57', '2022-01-01', '2022-08-01', 'DOS', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id_tema` int(5) NOT NULL,
  `id_curso_fk` int(10) NOT NULL,
  `indice` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `resumen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id_tema`, `id_curso_fk`, `indice`, `nombre`, `resumen`) VALUES
(1, 19, '2.1', 'Nombre de tema', 'Resumen de tema'),
(2, 19, '1.1', 'Nombre de tema 2', 'Resumen de tema2'),
(4, 19, '1.2', 'Nombre Actualizado de Tema', 'Resumen Actualizado de Tema'),
(5, 19, '2.2', 'Nombre de tema 256', 'Resumen'),
(6, 1, '1.0', 'Html basico', 'Aprenderas etiquetas html'),
(7, 1, '1.1', 'Html intermedio', 'Aprenderas etiquetas maquetado'),
(8, 1, '2.0', 'css basico', 'Aprenderas estilos css'),
(9, 1, '3.0', 'css avanzado', 'Aprenderas estilos  avanzados css'),
(10, 12, '1.0', 'Introduccion', 'Se introduce a la informacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_procedencia`
--

CREATE TABLE `tipo_procedencia` (
  `id_tipo_procedencia` int(10) NOT NULL,
  `tipo_procedencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_procedencia`
--

INSERT INTO `tipo_procedencia` (`id_tipo_procedencia`, `tipo_procedencia`) VALUES
(-15, 'IPN Students'),
(-14, 'Comunidad IPN'),
(-13, 'GEEKS'),
(-12, 'EMOS'),
(-11, 'OTAKUS'),
(-10, 'COMUNIDAD EXTRAÑA'),
(-9, 'Trabajadores UNAM'),
(-8, 'COMUNIDAD empleados'),
(1, 'Comunidad FESC'),
(2, 'Comunidad UNAM'),
(3, 'Ex-Alumno FESC'),
(4, 'Ex-Alumno UNAM'),
(5, 'Externos de fuera'),
(6, 'Personal UNAM'),
(7, 'Comunidad Nueva'),
(8, 'TROYANOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidades`
--

CREATE TABLE `universidades` (
  `id_universidad` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `siglas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `universidades`
--

INSERT INTO `universidades` (`id_universidad`, `nombre`, `siglas`) VALUES
(-6, 'UNI MALA', 'vmfedj'),
(0, 'OTRO', 'OTRO'),
(2, 'UNIVERSIDAD NACIONAL AUTÓNOMA DE MEXICO', 'UNAM'),
(3, 'INSTITUTO POLITÉCNICO NACIONAL', 'IPN'),
(4, 'UNIVERSIDAD DEL VALLE DE MEXICO', 'UVM'),
(5, 'UNIVERSIDAD AUTONOMA METROPOLITANA', 'UAM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validacion_inscripcion`
--

CREATE TABLE `validacion_inscripcion` (
  `id_inscripcion_fk` bigint(20) NOT NULL,
  `id_profesor_admin_fk` int(10) NOT NULL,
  `fecha_validacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_pago` datetime NOT NULL,
  `monto_pago_realizado` decimal(10,2) NOT NULL,
  `descripcion` text NOT NULL,
  `notas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `validacion_inscripcion`
--

INSERT INTO `validacion_inscripcion` (`id_inscripcion_fk`, `id_profesor_admin_fk`, `fecha_validacion`, `fecha_pago`, `monto_pago_realizado`, `descripcion`, `notas`) VALUES
(1, 1, '2021-12-22 18:32:23', '2021-12-22 12:32:23', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(2, 1, '2021-12-22 18:32:23', '2021-12-22 12:32:23', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(3, 1, '2021-12-22 18:32:23', '2021-12-22 12:32:23', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(4, 1, '2021-12-22 18:32:23', '2021-12-22 12:32:23', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(5, 1, '2021-12-22 18:32:24', '2021-12-22 12:32:24', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(6, 1, '2021-12-22 18:32:24', '2021-12-22 12:32:24', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(7, 1, '2021-12-22 18:32:24', '2021-12-22 12:32:24', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(8, 1, '2021-12-22 18:32:24', '2021-12-22 12:32:24', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(9, 1, '2021-12-22 18:32:24', '2021-12-22 12:32:24', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(10, 1, '2021-12-22 18:32:24', '2021-12-22 12:32:24', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(11, 1, '2021-12-22 18:32:25', '2021-12-22 12:32:25', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(12, 1, '2021-12-22 18:32:25', '2021-12-22 12:32:25', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(13, 1, '2021-12-22 18:32:25', '2021-12-22 12:32:25', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(14, 1, '2021-12-22 18:32:26', '2021-12-22 12:32:26', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(15, 1, '2021-12-22 18:32:26', '2021-12-22 12:32:26', '3500.00', 'Pago de Node js', 'Notas de Node js'),
(123456789, 1, '2021-05-28 22:38:50', '2021-06-15 08:20:21', '100.00', '', 'Este pago se registro el dia 2021-05-28 17:38:50<br>Otra linea'),
(987654321, 1, '2021-05-28 22:49:40', '2021-05-27 07:17:15', '100.00', 'SOLO PAGO', 'Este pago se registro el dia 2021-05-28 17:49:40<br>'),
(516543418667, 2, '2021-12-23 06:00:00', '2021-12-23 00:00:00', '200.00', 'nhg', 'ng');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `id_asignacion_fk` (`id_asignacion_fk`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_profesor_admin_fk`),
  ADD KEY `id_profesor_admin_fk` (`id_profesor_admin_fk`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_municipio` (`id_municipio`),
  ADD KEY `id_universidad` (`id_universidad`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `tipo_procedencia` (`id_tipo_procedencia_fk`);

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`id_archivo`),
  ADD KEY `id_doc_sol_fk` (`id_doc_sol_fk`),
  ADD KEY `id_inscripcion_fk` (`id_inscripcion_fk`);

--
-- Indices de la tabla `asignacion_grupo`
--
ALTER TABLE `asignacion_grupo`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `id_grupo_fk` (`id_grupo_fk`),
  ADD KEY `id_profesor_fk` (`id_profesor_fk`);

--
-- Indices de la tabla `asignacion_procedencia`
--
ALTER TABLE `asignacion_procedencia`
  ADD PRIMARY KEY (`id_tipo_procedencia_fk`,`id_curso_fk`),
  ADD KEY `id_tipo_procedencia_fk` (`id_tipo_procedencia_fk`),
  ADD KEY `id_curso_fk` (`id_curso_fk`);

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id_aula`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `constancia_alumno`
--
ALTER TABLE `constancia_alumno`
  ADD PRIMARY KEY (`id_constancia_alumno`),
  ADD KEY `id_profesor_admin_firma_fk` (`id_profesor_admin_firma_fk`),
  ADD KEY `id_inscripcion_acta_fk` (`id_inscripcion_acta_fk`);

--
-- Indices de la tabla `constancia_profesor`
--
ALTER TABLE `constancia_profesor`
  ADD PRIMARY KEY (`id_constancia`),
  ADD KEY `id_admin_firma_fk` (`id_admin_firma_fk`),
  ADD KEY `folio_acta_fk` (`folio_acta_fk`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_profesor_admin_acredita` (`id_profesor_admin_acredita`),
  ADD KEY `id_profesor_autor` (`id_profesor_autor`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_depto`);

--
-- Indices de la tabla `docs_solicitados_curso`
--
ALTER TABLE `docs_solicitados_curso`
  ADD PRIMARY KEY (`id_doc_sol`),
  ADD KEY `id_documento_fk` (`id_documento_fk`),
  ADD KEY `id_curso_fk` (`id_curso_fk`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `id_curso_fk` (`id_curso_fk`);

--
-- Indices de la tabla `horario_clase_presencial`
--
ALTER TABLE `horario_clase_presencial`
  ADD PRIMARY KEY (`id_horario_pres`),
  ADD KEY `id_aula_fk` (`id_aula_fk`),
  ADD KEY `id_grupo_fk` (`id_grupo_fk`);

--
-- Indices de la tabla `horario_clase_virtual`
--
ALTER TABLE `horario_clase_virtual`
  ADD PRIMARY KEY (`id_horario_virtual`),
  ADD KEY `id_grupo_fk` (`id_grupo_fk`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_alumno_fk` (`id_alumno_fk`),
  ADD KEY `id_asignacion_fk` (`id_asignacion_fk`);

--
-- Indices de la tabla `inscripcion_acta`
--
ALTER TABLE `inscripcion_acta`
  ADD PRIMARY KEY (`id_inscripcion_acta`,`folio_acta_fk`),
  ADD KEY `id_inscripcion_acta` (`id_inscripcion_acta`),
  ADD KEY `folio_acta_fk` (`folio_acta_fk`);

--
-- Indices de la tabla `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id_curso_fk`),
  ADD KEY `id_key` (`id_curso_fk`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_estado_fk` (`id_estado_fk`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `id_persona_fk` (`id_persona_fk`),
  ADD KEY `id_depto_fk` (`id_depto_fk`);

--
-- Indices de la tabla `servicio_social`
--
ALTER TABLE `servicio_social`
  ADD PRIMARY KEY (`id_alumno_fk`),
  ADD KEY `id_alumno` (`id_alumno_fk`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id_tema`),
  ADD KEY `id_curso_fk` (`id_curso_fk`);

--
-- Indices de la tabla `tipo_procedencia`
--
ALTER TABLE `tipo_procedencia`
  ADD PRIMARY KEY (`id_tipo_procedencia`);

--
-- Indices de la tabla `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`id_universidad`);

--
-- Indices de la tabla `validacion_inscripcion`
--
ALTER TABLE `validacion_inscripcion`
  ADD PRIMARY KEY (`id_inscripcion_fk`),
  ADD KEY `id_inscripcion_fk` (`id_inscripcion_fk`,`id_profesor_admin_fk`),
  ADD KEY `id_profesor_admin_fk` (`id_profesor_admin_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `folio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `id_archivo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de la tabla `asignacion_grupo`
--
ALTER TABLE `asignacion_grupo`
  MODIFY `id_asignacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=765432468;

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id_aula` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `constancia_alumno`
--
ALTER TABLE `constancia_alumno`
  MODIFY `id_constancia_alumno` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `constancia_profesor`
--
ALTER TABLE `constancia_profesor`
  MODIFY `id_constancia` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_depto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `docs_solicitados_curso`
--
ALTER TABLE `docs_solicitados_curso`
  MODIFY `id_doc_sol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `horario_clase_presencial`
--
ALTER TABLE `horario_clase_presencial`
  MODIFY `id_horario_pres` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `horario_clase_virtual`
--
ALTER TABLE `horario_clase_virtual`
  MODIFY `id_horario_virtual` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2466;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id_tema` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_procedencia`
--
ALTER TABLE `tipo_procedencia`
  MODIFY `id_tipo_procedencia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `universidades`
--
ALTER TABLE `universidades`
  MODIFY `id_universidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta`
--
ALTER TABLE `acta`
  ADD CONSTRAINT `acta_ibfk_1` FOREIGN KEY (`id_asignacion_fk`) REFERENCES `asignacion_grupo` (`id_asignacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_profesor_admin_fk`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_universidad`) REFERENCES `universidades` (`id_universidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_4` FOREIGN KEY (`id_tipo_procedencia_fk`) REFERENCES `tipo_procedencia` (`id_tipo_procedencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `archivo_ibfk_1` FOREIGN KEY (`id_doc_sol_fk`) REFERENCES `docs_solicitados_curso` (`id_doc_sol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `archivo_ibfk_2` FOREIGN KEY (`id_inscripcion_fk`) REFERENCES `inscripcion` (`id_inscripcion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion_grupo`
--
ALTER TABLE `asignacion_grupo`
  ADD CONSTRAINT `asignacion_grupo_ibfk_1` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_grupo_ibfk_2` FOREIGN KEY (`id_profesor_fk`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion_procedencia`
--
ALTER TABLE `asignacion_procedencia`
  ADD CONSTRAINT `asignacion_procedencia_ibfk_1` FOREIGN KEY (`id_tipo_procedencia_fk`) REFERENCES `tipo_procedencia` (`id_tipo_procedencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_procedencia_ibfk_2` FOREIGN KEY (`id_curso_fk`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `constancia_alumno`
--
ALTER TABLE `constancia_alumno`
  ADD CONSTRAINT `constancia_alumno_ibfk_1` FOREIGN KEY (`id_inscripcion_acta_fk`) REFERENCES `inscripcion_acta` (`id_inscripcion_acta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constancia_alumno_ibfk_2` FOREIGN KEY (`id_profesor_admin_firma_fk`) REFERENCES `administrador` (`id_profesor_admin_fk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `constancia_profesor`
--
ALTER TABLE `constancia_profesor`
  ADD CONSTRAINT `constancia_profesor_ibfk_1` FOREIGN KEY (`folio_acta_fk`) REFERENCES `acta` (`folio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constancia_profesor_ibfk_2` FOREIGN KEY (`id_admin_firma_fk`) REFERENCES `administrador` (`id_profesor_admin_fk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_profesor_autor`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`id_profesor_admin_acredita`) REFERENCES `administrador` (`id_profesor_admin_fk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docs_solicitados_curso`
--
ALTER TABLE `docs_solicitados_curso`
  ADD CONSTRAINT `docs_solicitados_curso_ibfk_1` FOREIGN KEY (`id_documento_fk`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docs_solicitados_curso_ibfk_2` FOREIGN KEY (`id_curso_fk`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`id_curso_fk`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario_clase_presencial`
--
ALTER TABLE `horario_clase_presencial`
  ADD CONSTRAINT `horario_clase_presencial_ibfk_1` FOREIGN KEY (`id_aula_fk`) REFERENCES `aulas` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horario_clase_presencial_ibfk_2` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupo` (`id_grupo`);

--
-- Filtros para la tabla `horario_clase_virtual`
--
ALTER TABLE `horario_clase_virtual`
  ADD CONSTRAINT `horario_clase_virtual_ibfk_1` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupo` (`id_grupo`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`id_alumno_fk`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`id_asignacion_fk`) REFERENCES `asignacion_grupo` (`id_asignacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripcion_acta`
--
ALTER TABLE `inscripcion_acta`
  ADD CONSTRAINT `inscripcion_acta_ibfk_2` FOREIGN KEY (`folio_acta_fk`) REFERENCES `acta` (`folio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_acta_ibfk_3` FOREIGN KEY (`id_inscripcion_acta`) REFERENCES `inscripcion` (`id_inscripcion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `keywords`
--
ALTER TABLE `keywords`
  ADD CONSTRAINT `keywords_ibfk_1` FOREIGN KEY (`id_curso_fk`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`id_estado_fk`) REFERENCES `estados` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_2` FOREIGN KEY (`id_persona_fk`) REFERENCES `persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profesor_ibfk_3` FOREIGN KEY (`id_depto_fk`) REFERENCES `departamentos` (`id_depto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio_social`
--
ALTER TABLE `servicio_social`
  ADD CONSTRAINT `servicio_social_ibfk_1` FOREIGN KEY (`id_alumno_fk`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `temas_ibfk_1` FOREIGN KEY (`id_curso_fk`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `validacion_inscripcion`
--
ALTER TABLE `validacion_inscripcion`
  ADD CONSTRAINT `validacion_inscripcion_ibfk_1` FOREIGN KEY (`id_inscripcion_fk`) REFERENCES `inscripcion` (`id_inscripcion`),
  ADD CONSTRAINT `validacion_inscripcion_ibfk_2` FOREIGN KEY (`id_profesor_admin_fk`) REFERENCES `administrador` (`id_profesor_admin_fk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
