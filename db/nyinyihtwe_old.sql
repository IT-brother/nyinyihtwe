-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 03:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyinyihtwe`
--

-- --------------------------------------------------------

--
-- Table structure for table `compositionkmst`
--

CREATE TABLE `compositionkmst` (
  `id` int(11) NOT NULL,
  `КодКМ` varchar(45) NOT NULL,
  `КодСтатСтруктуры` varchar(45) CHARACTER SET utf8 NOT NULL,
  `КодДинСтруктуры` varchar(45) CHARACTER SET utf8 NOT NULL,
  `КодСтруктурыУвязки` varchar(45) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compositionkmst`
--

INSERT INTO `compositionkmst` (`id`, `КодКМ`, `КодСтатСтруктуры`, `КодДинСтруктуры`, `КодСтруктурыУвязки`) VALUES
(1, 'КМ- ЦПЗ', 'ZPsPS.1-v', 'ZPsPS.3-v', 'ZPsPS.5-v'),
(2, 'КМ-Z8.11', 'Z8.11.1-c', 'Z8.11.3-c', 'Z8.11.5-c'),
(3, 'КМ-Z82', 'Z82.1-c', 'Z82.3-c', 'Z82.5-c'),
(4, 'КМ-Z7.12', 'Z7.12.1-c', 'Z7.12.3-c', 'Z7.12.5-c'),
(5, 'КМ-Z7.11', 'Z7.11.1-c', 'Z7.11.3-c', 'Z7.11.5-c'),
(6, 'КМ-Z71', 'Z71.1-c', 'Z71.3-c', 'Z71.5-c'),
(7, 'КМ-Z53', 'Z53.1-c', 'Z53.3-c', 'Z53.5-c'),
(8, 'КМ-Z51', 'Z51.1-c', 'Z51.3-c', 'Z51.5-c'),
(9, 'КМ-Z41', 'Z41.1-c', 'Z41.3-c', 'Z41.5-c');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idCustomer`, `Username`, `Password`, `Email`) VALUES
(1, 'nyi', 'nyi', 'snn90.mm@gmail.com'),
(2, 'Sawnyi', 'Sawnyi', 'sawnyinyi90@gmail.com'),
(3, 'Saw', 'Nyi', 'sawnyi@gmail.com'),
(4, 'Arakanthar', 'Nyi', 'arkhanthar@gmail.com'),
(5, 'Tunmin', 'Naingthar', 'tunnaing@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `elementdstr`
--

CREATE TABLE `elementdstr` (
  `idelementdstr` int(11) NOT NULL,
  `Кодструктуры` varchar(255) DEFAULT NULL,
  `КодПЗ1` varchar(255) DEFAULT NULL,
  `НаименованиеПЗ1` varchar(255) DEFAULT NULL,
  `Степеньформализации` varchar(255) DEFAULT NULL,
  `СтатусПЗ1` varchar(255) DEFAULT NULL,
  `СтруктурноеCвойствоПЗ1` varchar(255) DEFAULT NULL,
  `ПримечаниеПЗ1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `elementdstr`
--

INSERT INTO `elementdstr` (`idelementdstr`, `Кодструктуры`, `КодПЗ1`, `НаименованиеПЗ1`, `Степеньформализации`, `СтатусПЗ1`, `СтруктурноеCвойствоПЗ1`, `ПримечаниеПЗ1`) VALUES
(1, 'Z8.11.3-c', 'z8.11', 'Выбор NFO в зависимости от материала и вида термообработки', 'Стат', 'Э', '-', '-');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identification`
--

CREATE TABLE `identification` (
  `ididentification` int(11) NOT NULL,
  `Кодструктуры` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `CodePZ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `НаименованиеПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Степеньформализации` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `СтатусПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `СтруктурноеСвойствоПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ПримечаниеПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identification`
--

INSERT INTO `identification` (`ididentification`, `Кодструктуры`, `CodePZ1`, `НаименованиеПЗ1`, `Степеньформализации`, `СтатусПЗ1`, `СтруктурноеСвойствоПЗ1`, `ПримечаниеПЗ1`) VALUES
(1, 'ZPsPS.3-v', 'z41', 'Определение передаточного числа ', 'Стат', 'Э', '-', '-'),
(2, 'ZPsPS.3-v', 'z51', 'Выбор коэффициента, учитывающего распределение нагрузки по ширине венца ', 'Стат', 'Э', '-', '-'),
(3, 'ZPsPS.3-v', 'z53', 'Выбор вспомогательного коэффициента, зависящего от материала колёс', 'Стат', 'Э', '-', '-'),
(4, 'ZPsPS.3-v', 'z7_11', 'Определение параметра Yf1', 'Стат', 'Э', ']', 'параметр YF1'),
(5, 'ZPsPS.3-v', 'z7_12', 'Выбор допускаемого напряжения при изгибе, соответствующего базовому числу циклов перемены напряжения в зависимости от вида термообработки, материла и вида нагрузки', 'Стат', 'Э', '-', '-'),
(6, 'ZPsPS.3-v', 'z71', 'Выбор допускаемого контактного напряжения, соответствующего базовому числу циклов перемены напряжения в зависимости от вида термообработки, материла и вида нагрузки', 'Стат', 'Э', '-', '-'),
(7, 'ZPsPS.3-v', 'z8_11', 'Выбор NFO в зависимости от материала и вида термообработки', 'Стат', 'Э', '-', '-'),
(8, 'ZPsPS.3-v', 'z82', 'Выбор базового числа циклов перемены напряжения, соответствующее длительному пределу выносливости', 'Стат', 'Э', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kmtable`
--

CREATE TABLE `kmtable` (
  `idkmtable` int(11) NOT NULL,
  `КодКМ` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `РодКМ` varchar(45) DEFAULT NULL,
  `ВидКМс` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kmtable`
--

INSERT INTO `kmtable` (`idkmtable`, `КодКМ`, `РодКМ`, `ВидКМс`) VALUES
(1, 'КМ_ ЦПЗ', '1', 'v'),
(2, 'КМ-Z8.11', '1', 'c'),
(3, 'КМ-Z82', '1', 'c'),
(4, 'КМ-Z7.12', '1', 'c'),
(5, 'КМ-Z7.11', '1', 'c'),
(6, 'КМ-Z71', '1', 'c'),
(7, 'КМ-Z53', '1', 'c'),
(8, 'КМ-Z51', '1', 'c'),
(9, 'КМ-Z41', '1', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `linkingstructure`
--

CREATE TABLE `linkingstructure` (
  `idlinkingstructure` int(11) NOT NULL,
  `Кодструктуры` varchar(45) DEFAULT NULL,
  `КодПЗ1` varchar(45) DEFAULT NULL,
  `СтруктурноеСвойствоПЗ1` varchar(45) DEFAULT NULL,
  `КодПК` varchar(45) DEFAULT NULL,
  `РольПК` varchar(45) DEFAULT NULL,
  `СтруктурноеСвойствоПК` varchar(45) DEFAULT NULL,
  `ОбъемноеСвойствоПК` varchar(45) DEFAULT NULL,
  `ОсобаярольПК` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `linkingstructure`
--

INSERT INTO `linkingstructure` (`idlinkingstructure`, `Кодструктуры`, `КодПЗ1`, `СтруктурноеСвойствоПЗ1`, `КодПК`, `РольПК`, `СтруктурноеСвойствоПК`, `ОбъемноеСвойствоПК`, `ОсобаярольПК`) VALUES
(1, 'Z8.11.5-с  ', 'Z8.11', '-', 'R3.1', 'А-у', 'Е', 'моно', '-'),
(2, 'Z8.11.5-с  ', 'Z8.11', '-', 'R1.2', 'А-у', 'К1', 'моно', '-'),
(3, 'Z8.11.5-с  ', 'Z8.11', '-', 'R4.2', 'А', 'К1', 'моно', '-'),
(4, 'Z8.11.5-с  ', 'Z8.11', '-', 'R6.1', 'А', 'К1', 'моно', '-'),
(5, 'Z8.11.5-с  ', 'Z8.11', '-', 'R6.5', 'Ф', 'К1', 'моно', '-'),
(6, 'Z8.11.5-с  ', 'Z8.11', '-', 'R1.3', 'А-у', 'К2', 'моно', '-'),
(7, 'Z8.11.5-с  ', 'Z8.11', '-', 'R8.1', 'А', 'К2', 'моно', '-');

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
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2020_10_12_000000_create_users_table', 1),
(20, '2022_01_31_145636_create_project_names_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modelzadachi`
--

CREATE TABLE `modelzadachi` (
  `КодПрЗ` varchar(45) NOT NULL,
  `КодКМ` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modelzadachi`
--

INSERT INTO `modelzadachi` (`КодПрЗ`, `КодКМ`) VALUES
('ЦПсПЗ', 'КМ- ЦПЗ'),
('ЦПсПЗ', 'КМ-Z8.11'),
('ЦПсПЗ', 'КМ-Z82'),
('ЦПсПЗ', 'КМ-Z7.12'),
('ЦПсПЗ', 'КМ-Z7.11'),
('ЦПсПЗ', 'КМ-Z71'),
('ЦПсПЗ', 'КМ-Z53'),
('ЦПсПЗ', 'КМ-Z51'),
('ЦПсПЗ', 'КМ-Z41');

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
-- Table structure for table `project_names`
--

CREATE TABLE `project_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_names`
--

INSERT INTO `project_names` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'hello world!', 1, '2022-01-31 08:36:56', '2022-01-31 08:36:56'),
(2, 'HELLO WORLD!', 1, '2022-01-31 08:37:13', '2022-01-31 08:37:13'),
(3, 'how are you today?', 1, '2022-01-31 08:41:44', '2022-01-31 08:41:44'),
(4, 'HELLO WORLD!', 1, '2022-01-31 08:43:21', '2022-01-31 08:43:21'),
(5, 'HELLO WORLD!', 1, '2022-01-31 08:44:34', '2022-01-31 08:44:34'),
(6, 'how are you today?', 1, '2022-01-31 08:55:01', '2022-01-31 08:55:01'),
(7, 'My project', 1, '2022-01-31 09:21:04', '2022-01-31 09:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `idstructure` int(11) NOT NULL,
  `КодСтруктуры` varchar(45) DEFAULT NULL,
  `ТипСтруктуры` varchar(45) DEFAULT NULL,
  `РодСтруктуры` varchar(45) DEFAULT NULL,
  `ВидСтруктуры` varchar(45) DEFAULT NULL,
  `КоличествоЭлструктуры` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`idstructure`, `КодСтруктуры`, `ТипСтруктуры`, `РодСтруктуры`, `ВидСтруктуры`, `КоличествоЭлструктуры`) VALUES
(1, 'ZPsPS.1-v', 'стат', '1', 'v', '60'),
(2, 'ZPsPS.3-v', 'дин', '1', 'v', '58'),
(3, 'ZPsPS.5-v', 'увязки', '1', 'v', '274'),
(4, 'Z8.11.1-c', 'стат', '1', 'c', '7'),
(5, 'Z8.11.3-c', 'дин', '1', 'c', '1'),
(6, 'Z8.11.5-c', 'увязки', '1', 'c', '7'),
(7, 'Z82.1-с  ', 'стат', '1', 'c', '8'),
(8, 'Z82.3-c', 'дин', '1', 'c', '1'),
(9, 'Z82.5-с', 'увязки', '1', 'c', '8'),
(10, 'Z7.12.1-с  ', 'стат', '1', 'c', '3'),
(11, 'Z7.12.3-с  ', 'дин', '1', 'c', '1'),
(12, 'Z7.12.5-с  ', 'увязки', '1', 'c', '3'),
(13, 'Z7.11.1-с  ', 'стат', '1', 'c', '6'),
(14, 'Z7.11.3-с  ', 'дин', '1', 'c', '1'),
(15, 'Z7.11.5-с  ', 'увязки', '1', 'c', '6'),
(16, 'Z71.1-с  ', 'стат', '1', 'c', '9'),
(17, 'Z71.3-с  ', 'дин', '1', 'c', '1'),
(18, 'Z71.5-с  ', 'увязки', '1', 'c', '9'),
(19, 'Z53.1-с  ', 'стат', '1', 'c', '5'),
(20, 'Z53.3-с  ', 'дин', '1', 'c', '1'),
(21, 'Z53.5-с  ', 'увязки', '1', 'c', '5'),
(22, 'Z51.1-с  ', 'стат', '1', 'c', '8'),
(23, 'Z51.3-с  ', 'дин', '1', 'c', '1'),
(24, 'Z51.5-с  ', 'увязки', '1', 'c', '8'),
(25, 'Z41.1-с  ', 'стат', '1', 'c', '1'),
(26, 'Z41.3-с  ', 'дин', '1', 'c', '3'),
(27, 'Z41.5-с  ', 'увязки', '1', 'c', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subjecttask`
--

CREATE TABLE `subjecttask` (
  `idsubjecttask` int(11) NOT NULL,
  `КодПрЗ` varchar(45) DEFAULT NULL,
  `НаименованиеПрЗ` varchar(255) DEFAULT NULL,
  `КоличествоСтатКМвПрЗ` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjecttask`
--

INSERT INTO `subjecttask` (`idsubjecttask`, `КодПрЗ`, `НаименованиеПрЗ`, `КоличествоСтатКМвПрЗ`) VALUES
(1, 'ЦПсПЗ', 'Проектировочный расчет цилиндрических передач с прямыми зубьями', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tablef1`
--

CREATE TABLE `tablef1` (
  `idtablef1` int(11) NOT NULL,
  `Кодструктуры` varchar(255) CHARACTER SET utf8 NOT NULL,
  `КодПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `НаименованиеПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `КлассПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ТипПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `СтатусПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ОценкаПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ПримечаниекПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablef1`
--

INSERT INTO `tablef1` (`idtablef1`, `Кодструктуры`, `КодПК`, `НаименованиеПК`, `КлассПК`, `ТипПК`, `СтатусПК`, `ОценкаПК`, `ПримечаниекПК`) VALUES
(1, 'ZPsPS_1_v', 'P1.1', 'процесс функциониро-вания передачи', 'P', 'T', 'P', '-', '-'),
(2, 'ZPsPS_1_v', 'Z1.1', 'задача функциониро-вания передачи', 'Z', 'T', 'P', '-', '-'),
(3, 'ZPsPS_1_v', 'K1.7', 'средство-устройство', 'K', 'T', 'P', '-', '-'),
(4, 'ZPsPS_1_v', 'O7.1', 'узел (виртуальный)', 'O', 'NT', 'P', '-', '-'),
(5, 'ZPsPS_1_v', 'O7.2', 'сборочная единица', 'O', 'NT', 'P', '-', '-'),
(6, 'ZPsPS_1_v', 'O7.4', 'деталь', 'O', 'T', 'P', '-', '-'),
(7, 'ZPsPS_1_v', 'R1.1', 'код узла', 'R', 'T', 'P', '-', '-'),
(8, 'ZPsPS_1_v', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(9, 'ZPsPS_1_v', 'R3.2', 'массив модулей стандартных', 'R', 'T', 'P', '-', '-'),
(10, 'ZPsPS_1_v', 'R1.2', 'код СЕ', 'R', 'T', 'P', '-', '-'),
(11, 'ZPsPS_1_v', 'R2.1', 'наименование передачи', 'R', 'T', 'P', '-', '-'),
(12, 'ZPsPS_1_v', 'R3.3', 'тип передачи', 'R', 'T', 'P', '-', '-'),
(13, 'ZPsPS_1_v', 'R3.4', 'вид зубьев', 'R', 'T', 'P', '-', '-'),
(14, 'ZPsPS_1_v', 'R3.5', 'передаточное число', 'R', 'T', 'P', '-', '-'),
(15, 'ZPsPS_1_v', 'R3.6', 'модуль расчетный', 'R', 'T', 'P', '-', '-'),
(16, 'ZPsPS_1_v', 'R3.7', 'модуль стандартный', 'R', 'T', 'P', '-', NULL),
(17, 'ZPsPS_1_v', 'R3.8', 'вид зацепления', 'R', 'T', 'P', '-', NULL),
(18, 'ZPsPS_1_v', 'R3.9', 'расположение шестерни относительно опор', 'R', 'T', 'P', '-', NULL),
(19, 'ZPsPS_1_v', 'R3.10', 'коэффициент, учитывающий форму зуба', 'R', 'T', 'P', '-', NULL),
(20, 'ZPsPS_1_v', 'R3.11', 'коэффициент для расчета модуля', 'R', 'T', 'P', '-', NULL),
(21, 'ZPsPS_1_v', 'R3.14', 'коэффициент осевого перекрытия', 'R', 'T', 'P', '-', NULL),
(22, 'ZPsPS_1_v', 'R3.15', 'число зубьев принятое', 'R', 'T', 'P', '-', NULL),
(23, 'ZPsPS_1_v', 'R4.1', 'вид нагрузки', 'R', 'T', 'P', '-', NULL),
(24, 'ZPsPS_1_v', 'R4.2', 'тип нагрузки', 'R', 'T', 'P', '-', NULL),
(25, 'ZPsPS_1_v', 'R5.1', 'межосевое расстояние', 'R', 'T', 'P', '-', NULL),
(26, 'ZPsPS_1_v', 'R5.2', 'отношение ширины венца к межосевому расстоянию', 'R', 'T', 'P', '-', NULL),
(27, 'ZPsPS_1_v', 'R5.3', 'коэффициент, учитывающий распределение нагрузки по ширине венца при  контакте', 'R', 'T', 'P', '-', NULL),
(28, 'ZPsPS_1_v', 'R5.4', 'коэффициент, учитывающий распределение нагрузки по ширине венца при изгибе', 'R', 'T', 'P', '-', NULL),
(29, 'ZPsPS_1_v', 'R5.5', 'вспомогательный коэффициент, учитывающий материал колес', 'R', 'T', 'P', '-', NULL),
(30, 'ZPsPS_1_v', 'R5.10', 'полное число часов работы передачи за срок службы', 'R', 'T', 'P', '-', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tablef1c`
--

CREATE TABLE `tablef1c` (
  `idtablef1c` int(11) NOT NULL,
  `Кодструктуры` varchar(255) DEFAULT NULL,
  `КодПК` varchar(255) DEFAULT NULL,
  `НаименованиеПК` varchar(255) DEFAULT NULL,
  `КлассПК` varchar(255) DEFAULT NULL,
  `ТипПК` varchar(255) DEFAULT NULL,
  `СтатусПК` varchar(255) DEFAULT NULL,
  `ОценкаПК` varchar(255) DEFAULT NULL,
  `ПримечаниекПК` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablef1c`
--

INSERT INTO `tablef1c` (`idtablef1c`, `Кодструктуры`, `КодПК`, `НаименованиеПК`, `КлассПК`, `ТипПК`, `СтатусПК`, `ОценкаПК`, `ПримечаниекПК`) VALUES
(1, 'Z8.11.1-с  ', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(2, 'Z8.11.1-с  ', 'R1.2', 'код СЕ', 'R', 'T', 'P', '-', '-'),
(3, 'Z8.11.1-с  ', 'R4.2', 'тип нагрузки', 'R', 'T', 'P', '-', '-'),
(4, 'Z8.11.1-с  ', 'R6.1', 'полное число часов работы передачи за срок службы', 'R', 'T', 'P', '-', '-'),
(5, 'Z8.11.1-с  ', 'R6.5', 'эквивалентное число циклов перемены напряжения при изгибе', 'R', 'T', 'P', '-', '-'),
(6, 'Z8.11.1-с  ', 'R1.3', 'код детали', 'R', 'T', 'P', '-', '-'),
(7, 'Z8.11.1-с  ', 'R8.1', 'частота вращения', 'R', 'T', 'P', '-', '-'),
(8, 'Z82.1-с  ', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(9, 'Z82.1-с  ', 'R1.2', 'код СЕ', 'R', 'T', 'P', '-', '-'),
(10, 'Z82.1-с  ', 'R6.2', 'базовое число циклов перемены напряжения при контакте', 'R', 'T', 'P', '-', '-'),
(11, 'Z82.1-с  ', 'R1.3', 'код детали', 'R', 'T', 'P', '-', '-'),
(12, 'Z82.1-с  ', 'R7.1', 'твердость поверхности зубьев', 'R', 'T', 'P', '-', '-'),
(13, 'Z82.1-с  ', 'R7.2', 'материал', 'R', 'T', 'P', '-', '-'),
(14, 'Z82.1-с  ', 'R7.3', 'марка материала', 'R', 'T', 'P', '-', '-'),
(15, 'Z82.1-с  ', 'R7.4', 'вид термообработки', 'R', 'T', 'P', '-', '-'),
(16, 'Z7.12.1-с ', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(17, 'Z7.12.1-с ', 'R1.3', 'код детали', 'R', 'T', 'P', '-', '-'),
(18, 'Z7.12.1-с ', 'R9.3', 'допускаемое  напряже-ние при расчете на изгибную выносливость, соответствующее  базовому числу циклов перемены напряжения', 'R', 'T', 'P', '-', '-'),
(19, 'Z7.11.1-с', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(20, 'Z7.11.1-с', 'R1.2', 'код СЕ', 'R', 'T', 'P', '-', '-'),
(21, 'Z7.11.1-с', 'R5.10', 'коэффициент смещения', 'R', 'T', 'P', '-', '-'),
(22, 'Z7.11.1-с', 'R3.10', 'коэффициент, учитывающий форму зуба', 'R', 'T', 'P', '-', '-'),
(23, 'Z7.11.1-с', 'R1.3', 'код детали', 'R', 'T', 'P', '-', '-'),
(24, 'Z7.11.1-с', 'R3.13', 'эквивалентное число зубьев', 'R', 'T', 'P', '-', '-'),
(25, 'Z71.1-с  ', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(26, 'Z71.1-с  ', 'R1.2', 'код СЕ', 'R', 'T', 'P', '-', '-'),
(27, 'Z71.1-с  ', 'R4.1', 'вид нагрузки', 'R', 'T', 'P', '-', '-'),
(28, 'Z71.1-с  ', 'R1.3', 'код детали', 'R', 'T', 'P', '-', '-'),
(29, 'Z71.1-с  ', 'R7.1', 'твердость поверхности зубьев', 'R', 'T', 'P', '-', '-'),
(30, 'Z71.1-с  ', 'R7.2', 'материал', 'R', 'T', 'P', '-', '-'),
(31, 'Z71.1-с  ', 'R7.3', 'марка материала', 'R', 'T', 'P', '-', '-'),
(32, 'Z71.1-с  ', 'R7.4', 'вид термообработки', 'R', 'T', 'P', '-', '-'),
(33, 'Z71.1-с  ', 'R9.1', 'допускаемое контактное напряжение, соответствующее  базовому числу циклов перемены напряжения', 'R', 'T', 'P', '-', '-'),
(34, 'Z53.1-с ', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(35, 'Z53.1-с ', 'R1.2', 'код СЕ', 'R', 'T', 'P', '-', '-'),
(36, 'Z53.1-с ', 'R3.4', 'вид зубьев', 'R', 'T', 'P', '-', '-'),
(37, 'Z53.1-с ', 'R7.5', 'сочетание материалов колес', 'R', 'T', 'P', '-', '-'),
(38, 'Z53.1-с ', 'R5.5', 'вспомогательный коэффициент, учитывающий материал колес', 'R', 'T', 'P', '-', '-'),
(39, 'Z51.1-с ', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(40, 'Z51.1-с ', 'R1.2', 'код СЕ', 'R', 'T', 'P', '-', '-'),
(41, 'Z51.1-с ', 'R3.9', 'расположение шестерни относительно опор', 'R', 'T', 'P', '-', '-'),
(42, 'Z51.1-с ', 'R5.3', 'коэффициент, учитывающий распределение нагрузки по ширине венца при  контакте', 'R', 'T', 'P', '-', '-'),
(43, 'Z51.1-с ', 'R7.6', 'жесткость конструкции', 'R', 'T', 'P', '-', '-'),
(44, 'Z51.1-с ', 'R1.3', 'код детали', 'R', 'T', 'P', '-', '-'),
(45, 'Z51.1-с ', 'R5.9', 'относительная ширина венца', 'R', 'T', 'P', '-', '-'),
(46, 'Z51.1-с ', 'R7.1', 'твердость поверхности зубьев', 'R', 'T', 'P', '-', '-'),
(47, 'Z41.1-с ', 'R3.1', 'количество передач', 'R', 'T', 'P', '-', '-'),
(48, 'Z41.1-с ', 'R1.2', 'код СЕ', 'R', 'T', 'P', '-', '-'),
(49, 'Z41.1-с ', 'R3.5', 'передаточное число', 'R', 'T', 'P', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tablef2`
--

CREATE TABLE `tablef2` (
  `idtablef2` int(11) NOT NULL,
  `Кодструктуры` varchar(45) DEFAULT NULL,
  `КлассСвязиПК` varchar(45) DEFAULT NULL,
  `КодПК_1` varchar(45) DEFAULT NULL,
  `КодПК_2` varchar(45) DEFAULT NULL,
  `КодПК_3` varchar(255) DEFAULT NULL,
  `НаименованиеСвязиПК` varchar(255) DEFAULT NULL,
  `ТипСвязиПК` varchar(45) DEFAULT NULL,
  `ОценкаСвязиПК` varchar(45) DEFAULT NULL,
  `КодСвязиПК` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablef2`
--

INSERT INTO `tablef2` (`idtablef2`, `Кодструктуры`, `КлассСвязиПК`, `КодПК_1`, `КодПК_2`, `КодПК_3`, `НаименованиеСвязиПК`, `ТипСвязиПК`, `ОценкаСвязиПК`, `КодСвязиПК`) VALUES
(1, 'ZPsPS.1-v', 'P0', '-', 'P1.1', 'P1.1', 'Упорядочивание пр. функционирования передачи', 'У', '99', '-P1.1P1.1'),
(2, 'ZPsPS.1-v', 'PZ', 'P1.1', 'Z1.1', '-', 'Состав пр. функционирования передачи', 'С', '99', 'P1.1Z1.1-'),
(3, 'ZPsPS.1-v', 'Z0', '-', 'Z1.1', 'Z1.1', 'Упорядочивание задачи функционирования передачи', 'У', '99', '-Z1.1Z1.1'),
(4, 'ZPsPS.1-v', 'ZK', 'Z1.1', 'K1.7', '-', 'Состав задачи функционирования передачи', 'С', '1', 'Z1.1K1.7'),
(5, 'ZPsPS.1-v', 'KZ', 'Z1.1', 'K1.7', '-', 'Компоновка задачи функционирования передачи', 'К', '1', 'Z1.1K1.7-'),
(6, 'ZPsPS.1-v', 'K0', '-', 'K1.7', 'K1.7', 'Упорядочивание комп. «средство-устройство»', 'У', '99', '-К1.7K1.7'),
(7, 'ZPsPS.1-v', 'KO', '-', 'K1.7', 'O7.1', 'Состав компонента «средство-устройство»', 'С', '99', 'K1.7O7.1-'),
(8, 'ZPsPS.1-v', 'KO', '-', 'K1.7', 'O7.2', 'Состав компонента «средство-устройство»', 'С', '99', 'K1.7O7.2-'),
(9, 'ZPsPS.1-v', 'KO', '-', 'K1.7', 'O7.4', 'Состав компонента «средство-устройство»', 'С', '99', 'K1.7O7.4-'),
(10, 'ZPsPS.1-v', 'OK', 'K1.7', 'O7.1', 'O7.2', 'Компоновка компонента «средство-устройство»', 'К', '99', 'K1.7O7.1O7.2'),
(11, 'ZPsPS.1-v', 'OK', 'K1.7', 'O7.2', 'O7.4', 'Компоновка компонента «средство-устройство»', 'К', '99', 'K1.7O7.2O7.4'),
(12, 'ZPsPS.1-v', 'O0', '-', 'O7.1', 'O7.1', 'Упорядочивание узла', 'У', '99', '-O7.1O7.1'),
(13, 'ZPsPS.1-v', 'O0', '-', 'O7.2', 'O7.2', 'Упорядочивание CЕ', 'У', '99', '-O7.2O7.2'),
(14, 'ZPsPS.1-v', 'O0', '-', 'O7.4', 'O7.4', 'Упорядочивание Д', 'У', '99', '-O7.4O7.4'),
(15, 'ZPsPS.1-v', 'OR', 'O7.1', 'R1.1', '-', 'Состав Узла', 'С', '1', 'O7.1R1.1-'),
(16, 'ZPsPS.1-v', 'OR', 'O7.1', 'R3.1', '-', 'Состав Узла', 'С', '1', 'O7.1R3.1-'),
(17, 'ZPsPS.1-v', 'OR', 'O7.1', 'R3.2', '-', 'Состав Узла', 'С', '1', 'O7.1R3.2-'),
(18, 'ZPsPS.1-v', 'OR', 'O7.2', 'R1.2', '-', 'Состав СЕ', 'С', '1', 'O7.2R1.2-'),
(19, 'ZPsPS.1-v', 'OR', 'O7.2', 'R2.1', '-', 'Состав СЕ', 'С', '1', 'O7.2R2.1-'),
(20, 'ZPsPS.1-v', 'OR', 'O7.2', 'R3.3', '-', 'Состав СЕ', 'С', '1', 'O7.2R3.3-');

-- --------------------------------------------------------

--
-- Table structure for table `tablef2c`
--

CREATE TABLE `tablef2c` (
  `idtablef2c` int(11) NOT NULL,
  `Кодструктуры` varchar(45) DEFAULT NULL,
  `КлассСвязиПК` varchar(45) DEFAULT NULL,
  `КодПК_1` varchar(45) DEFAULT NULL,
  `КодПК_2` varchar(45) DEFAULT NULL,
  `КодПК_3` varchar(45) DEFAULT NULL,
  `НаименованиеСвязиПК` varchar(245) DEFAULT NULL,
  `ТипСвязиПК` varchar(45) DEFAULT NULL,
  `ОценкаСвязиПК` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tablef3c`
--

CREATE TABLE `tablef3c` (
  `idtablef3c` int(11) NOT NULL,
  `Кодструктуры` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `КодПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `НаименованиеПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Степеньформализации` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `СтатусПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `СтруктурноеCвойствоПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ПримечаниеПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablef3c`
--

INSERT INTO `tablef3c` (`idtablef3c`, `Кодструктуры`, `КодПЗ1`, `НаименованиеПЗ1`, `Степеньформализации`, `СтатусПЗ1`, `СтруктурноеCвойствоПЗ1`, `ПримечаниеПЗ1`) VALUES
(1, 'Z8.11.3_с  ', 'z8.11', 'Выбор NFO в зависимости от материала и вида термообработки', 'Стат', 'Э', '-', '-'),
(2, 'Z82.3_с  ', 'z82', 'Выбор базового числа циклов перемены напряжения, соответствующее длительному пределу выносливости', 'Стат', 'Э', '-', '-'),
(3, 'Z7.12.3_с  ', 'z7.12', 'Выбор допускаемого напряжения при изгибе, соответствующего базовому числу циклов перемены напряжения в зависимости от вида термообработки, материла и вида нагрузки', 'Стат', 'Э', '-', '-'),
(4, 'Z7.11.3_с  ', 'z7.11', 'Определение параметра Yf1', 'Стат', 'Э', ']', 'параметр YF1'),
(5, 'Z71.3_с  ', 'z71', 'Выбор допускаемого контактного напряжения, соответствующего базовому числу циклов перемены напряжения в зависимости от вида термообработки, материла и вида нагрузки', 'Стат', 'Э', '-', '-'),
(6, 'Z53.3_с  ', 'z53', 'Выбор вспомогательного коэффициента, зависящего от материала колёс', 'Стат', 'Э', '-', '-'),
(7, 'Z51.3_с  ', 'z51', 'Выбор коэффициента, учитывающего распределение нагрузки по ширине венца ', 'Стат', 'Э', '-', '-'),
(8, 'Z41.3_с  ', 'z41', 'Определение передаточного числа ', 'Стат', 'Э', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tablef4`
--

CREATE TABLE `tablef4` (
  `idtablef4` int(11) NOT NULL,
  `Кодструктуры` varchar(45) DEFAULT NULL,
  `КодПЗ1_1` varchar(45) DEFAULT NULL,
  `КодПЗ1_2` varchar(45) DEFAULT NULL,
  `КодПЗ1_3` varchar(45) DEFAULT NULL,
  `ОценкаСвязиПЗ1` varchar(45) DEFAULT NULL,
  `ТипСвязиПЗ1` varchar(45) DEFAULT NULL,
  `КодСвязиПЗ1` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablef4`
--

INSERT INTO `tablef4` (`idtablef4`, `Кодструктуры`, `КодПЗ1_1`, `КодПЗ1_2`, `КодПЗ1_3`, `ОценкаСвязиПЗ1`, `ТипСвязиПЗ1`, `КодСвязиПЗ1`) VALUES
(1, 'ZPsPS.3-v', 'z11', 'z21', '-', 'Цикл', 'К', 'z11z21-'),
(2, 'ZPsPS.3-v', 'z21', 'z31', 'z32', 'Посл', 'К', 'z21z31z32'),
(3, 'ZPsPS.3-v', 'z21', 'z32', 'z33', 'Посл', 'К', 'z21z32z33'),
(4, 'ZPsPS.3-v', 'z32', 'z41', 'z42', 'Посл', 'К', 'z32z41z42'),
(5, 'ZPsPS.3-v', 'z32', 'z42', 'z43', 'Посл', 'К', 'z32z42z43'),
(6, 'ZPsPS.3-v', 'z32', 'z43', 'z44', 'Посл', 'К', 'z32z43z44'),
(7, 'ZPsPS.3-v', 'z33', 'z45', 'z46', 'Пркл', 'К', 'z33z45z46'),
(8, 'ZPsPS.3-v', 'z42', 'z51', 'z52', 'Посл', 'К', 'z42z51z52'),
(9, 'ZPsPS.3-v', 'z42', 'z52', 'z53', 'Посл', 'К', 'z42z52z53'),
(10, 'ZPsPS.3-v', 'z42', 'z53', 'z54', 'Посл', 'К', 'z42z53z54');

-- --------------------------------------------------------

--
-- Table structure for table `tablef4c`
--

CREATE TABLE `tablef4c` (
  `idtablef4` int(11) NOT NULL,
  `Кодструктуры` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `КодПЗ1_1` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `КодПЗ1_2` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `КодПЗ1_3` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `ОценкаСвязиПЗ1` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `ТипСвязиПЗ1` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `КодСвязиПЗ1` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablef4c`
--

INSERT INTO `tablef4c` (`idtablef4`, `Кодструктуры`, `КодПЗ1_1`, `КодПЗ1_2`, `КодПЗ1_3`, `ОценкаСвязиПЗ1`, `ТипСвязиПЗ1`, `КодСвязиПЗ1`) VALUES
(1, 'Z8.11.3-с  ', 'z7.13', 'z8.10 ', 'z8.11', 'Посл ', 'К ', 'z7.13z8.10z8.11'),
(2, 'Z8.11.3-с', 'z7.13', 'z8.11', 'z8.12', 'Посл ', 'К ', 'z7.13z8.11z8.12'),
(3, 'Z8.11.3-с', 'z7.13', 'z8.11', '-', '1', 'C ', 'z7.13z8.11-');

-- --------------------------------------------------------

--
-- Table structure for table `tablef6`
--

CREATE TABLE `tablef6` (
  `idtablef6` int(11) NOT NULL,
  `Кодструктуры` varchar(255) CHARACTER SET utf8 NOT NULL,
  `КодПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `СтруктурноеСвойствоПЗ1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `КодПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `РольПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `СтруктурноеСвойствоПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ОбъемноеСвойствоПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ОсобаяРольПК` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablef6`
--

INSERT INTO `tablef6` (`idtablef6`, `Кодструктуры`, `КодПЗ1`, `СтруктурноеСвойствоПЗ1`, `КодПК`, `РольПК`, `СтруктурноеСвойствоПК`, `ОбъемноеСвойствоПК`, `ОсобаяРольПК`) VALUES
(1, 'ZPsPS.5-v', 'Z11', '{', 'R3.2', '-', '-', '-', 'ФЦ'),
(2, 'ZPsPS.5-v', 'Z21', '!', 'R3.1', '-', '-', '-', 'СЦ'),
(3, 'ZPsPS.5-v', 'Z21', '[', 'R3.2', '-', '-', '-', 'ФП'),
(4, 'ZPsPS.5-v', 'Z21', '$', 'R3.7', '-', '-', '-', 'ФИ'),
(5, 'ZPsPS.5-v', 'Z31', '-', 'R3.1', 'А-у', 'Е', 'моно', '-'),
(6, 'ZPsPS.5-v', 'Z31', '-', 'R1.2', 'Ф', 'Е', 'моно', '-'),
(7, 'ZPsPS.5-v', 'Z32', '-', 'R3.1', 'А-у', 'Е', 'моно', '-'),
(8, 'ZPsPS.5-v', 'Z32', '[', 'R3.7', '-', '-', '-', 'ФП'),
(9, 'ZPsPS.5-v', 'Z41', '-', 'R3.1', 'А-у', 'Е', 'моно', '-'),
(10, 'ZPsPS.5-v', 'Z41', '-', 'R1.2', 'А-у', 'К', 'моно', '-'),
(11, 'ZPsPS.5-v', 'Z41', '-', 'R3.5', 'Ф', 'К', 'моно', '-'),
(12, 'ZPsPS.5-v', 'Z42', '-', 'R3.1', 'А-у', 'Е', 'моно', '-'),
(13, 'ZPsPS.5-v', 'Z42', '[', 'R5.1', '-', '-', '-', 'ФП'),
(14, 'ZPsPS.5-v', 'Z51', '-', 'R3.1', 'А-у', 'Е', 'моно', '-'),
(15, 'ZPsPS.5-v', 'Z51', '-', 'R1.2', 'А-у', 'К1', 'моно', '-'),
(16, 'ZPsPS.5-v', 'Z51', '-', 'R3.9', 'А', 'К1', 'моно', '-'),
(17, 'ZPsPS.5-v', 'Z51', '-', 'R5.3', 'Ф', 'К1', 'моно', '-'),
(18, 'ZPsPS.5-v', 'Z51', '-', 'R7.6', 'А', 'К1', 'моно', '-'),
(19, 'ZPsPS.5-v', 'Z51', '-', 'R1.3', 'А-у', 'К2', 'моно', '-'),
(20, 'ZPsPS.5-v', 'Z51', '-', 'R5.9', 'А', 'К2', 'моно', '-'),
(21, 'ZPsPS.5-v', 'Z51', '-', 'R7.1', 'А', 'К2', 'моно', '-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `password`, `address`, `created_at`, `updated_at`) VALUES
(1, 'admin', '+74834383', 'admin', '$2y$10$1eM1BjJaILPevEZENzt4i.R48w4k.x2tDG.0DOomatzkBZS2q1YTC', NULL, '2022-01-30 06:40:29', '2022-01-30 06:40:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compositionkmst`
--
ALTER TABLE `compositionkmst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`);

--
-- Indexes for table `elementdstr`
--
ALTER TABLE `elementdstr`
  ADD PRIMARY KEY (`idelementdstr`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`ididentification`);

--
-- Indexes for table `kmtable`
--
ALTER TABLE `kmtable`
  ADD PRIMARY KEY (`idkmtable`,`КодКМ`),
  ADD KEY `КодСтатСтруктуры_idx` (`КодКМ`);

--
-- Indexes for table `linkingstructure`
--
ALTER TABLE `linkingstructure`
  ADD PRIMARY KEY (`idlinkingstructure`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `project_names`
--
ALTER TABLE `project_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_names_user_id_foreign` (`user_id`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`idstructure`);

--
-- Indexes for table `subjecttask`
--
ALTER TABLE `subjecttask`
  ADD PRIMARY KEY (`idsubjecttask`);

--
-- Indexes for table `tablef1`
--
ALTER TABLE `tablef1`
  ADD PRIMARY KEY (`idtablef1`);

--
-- Indexes for table `tablef1c`
--
ALTER TABLE `tablef1c`
  ADD PRIMARY KEY (`idtablef1c`);

--
-- Indexes for table `tablef2`
--
ALTER TABLE `tablef2`
  ADD PRIMARY KEY (`idtablef2`);

--
-- Indexes for table `tablef2c`
--
ALTER TABLE `tablef2c`
  ADD PRIMARY KEY (`idtablef2c`);

--
-- Indexes for table `tablef3c`
--
ALTER TABLE `tablef3c`
  ADD PRIMARY KEY (`idtablef3c`);

--
-- Indexes for table `tablef4`
--
ALTER TABLE `tablef4`
  ADD PRIMARY KEY (`idtablef4`);

--
-- Indexes for table `tablef4c`
--
ALTER TABLE `tablef4c`
  ADD PRIMARY KEY (`idtablef4`);

--
-- Indexes for table `tablef6`
--
ALTER TABLE `tablef6`
  ADD PRIMARY KEY (`idtablef6`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compositionkmst`
--
ALTER TABLE `compositionkmst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kmtable`
--
ALTER TABLE `kmtable`
  MODIFY `idkmtable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `project_names`
--
ALTER TABLE `project_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tablef4c`
--
ALTER TABLE `tablef4c`
  MODIFY `idtablef4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_names`
--
ALTER TABLE `project_names`
  ADD CONSTRAINT `project_names_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
