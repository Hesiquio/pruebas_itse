-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2023 at 10:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_itse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app1_res_us`
--

CREATE TABLE `tbl_app1_res_us` (
  `app1_id` int NOT NULL,
  `us_id` int NOT NULL,
  `app1_avance` int NOT NULL DEFAULT '0',
  `app1_puntuacion` int NOT NULL DEFAULT '0',
  `app1_edad_mental` int DEFAULT NULL,
  `app1_res_fin` decimal(3,0) DEFAULT '0',
  `app1_nivel_txt` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `app1_fec_inicio` datetime NOT NULL,
  `app1_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_app1_res_us`
--

INSERT INTO `tbl_app1_res_us` (`app1_id`, `us_id`, `app1_avance`, `app1_puntuacion`, `app1_edad_mental`, `app1_res_fin`, `app1_nivel_txt`, `app1_fec_inicio`, `app1_status`) VALUES
(1, 2, 100, 9, 132, '75', 'TERMINO MEDIO', '2018-01-15 13:55:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app2_rangos`
--

CREATE TABLE `tbl_app2_rangos` (
  `ran_id` int NOT NULL,
  `us_id` int NOT NULL,
  `rangoa` int NOT NULL,
  `rangob` int NOT NULL,
  `rangoc` int NOT NULL,
  `rangoe` int NOT NULL,
  `rangof` int NOT NULL,
  `rangog` int NOT NULL,
  `rangoh` int NOT NULL,
  `rangoi` int NOT NULL,
  `rangol` int NOT NULL,
  `rangom` int NOT NULL,
  `rangon` int NOT NULL,
  `rangoo` int NOT NULL,
  `rangoq1` int NOT NULL,
  `rangoq2` int NOT NULL,
  `rangoq3` int NOT NULL,
  `rangoq4` int NOT NULL,
  `fec_term` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_app2_rangos`
--

INSERT INTO `tbl_app2_rangos` (`ran_id`, `us_id`, `rangoa`, `rangob`, `rangoc`, `rangoe`, `rangof`, `rangog`, `rangoh`, `rangoi`, `rangol`, `rangom`, `rangon`, `rangoo`, `rangoq1`, `rangoq2`, `rangoq3`, `rangoq4`, `fec_term`) VALUES
(1, 2, 8, 4, 12, 12, 13, 8, 12, 11, 7, 12, 11, 20, 5, 6, 10, 12, '2018-01-15 14:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app2_resultados`
--

CREATE TABLE `tbl_app2_resultados` (
  `res_id` int NOT NULL,
  `us_id` int NOT NULL,
  `3a` int NOT NULL,
  `4a` int NOT NULL,
  `5a` int NOT NULL,
  `6b` int NOT NULL,
  `7b` int NOT NULL,
  `8a` int NOT NULL,
  `9b` int NOT NULL,
  `10a` int NOT NULL,
  `11b` int NOT NULL,
  `12b` int NOT NULL,
  `13a` int NOT NULL,
  `14b` int NOT NULL,
  `15b` int NOT NULL,
  `16a` int NOT NULL,
  `17a` int NOT NULL,
  `18b` int NOT NULL,
  `19b` int NOT NULL,
  `20a` int NOT NULL,
  `21a` int NOT NULL,
  `22b` int NOT NULL,
  `23a` int NOT NULL,
  `24a` int NOT NULL,
  `25b` int NOT NULL,
  `26a` int NOT NULL,
  `27a` int NOT NULL,
  `28b` int NOT NULL,
  `29a` int NOT NULL,
  `30a` int NOT NULL,
  `31b` int NOT NULL,
  `32b` int NOT NULL,
  `33a` int NOT NULL,
  `34b` int NOT NULL,
  `35a` int NOT NULL,
  `36a` int NOT NULL,
  `37b` int NOT NULL,
  `39b` int NOT NULL,
  `40b` int NOT NULL,
  `41a` int NOT NULL,
  `42a` int NOT NULL,
  `43b` int NOT NULL,
  `44b` int NOT NULL,
  `45a` int NOT NULL,
  `46a` int NOT NULL,
  `47b` int NOT NULL,
  `48a` int NOT NULL,
  `49b` int NOT NULL,
  `50b` int NOT NULL,
  `51a` int NOT NULL,
  `52a` int NOT NULL,
  `53b` int NOT NULL,
  `54b` int NOT NULL,
  `55a` int NOT NULL,
  `56b` int NOT NULL,
  `57b` int NOT NULL,
  `58a` int NOT NULL,
  `59b` int NOT NULL,
  `60a` int NOT NULL,
  `61a` int NOT NULL,
  `62b` int NOT NULL,
  `63a` int NOT NULL,
  `64a` int NOT NULL,
  `65b` int NOT NULL,
  `66a` int NOT NULL,
  `67a` int NOT NULL,
  `68b` int NOT NULL,
  `69b` int NOT NULL,
  `70a` int NOT NULL,
  `71b` int NOT NULL,
  `72b` int NOT NULL,
  `73a` int NOT NULL,
  `74b` int NOT NULL,
  `75b` int NOT NULL,
  `76a` int NOT NULL,
  `77b` int NOT NULL,
  `78b` int NOT NULL,
  `79a` int NOT NULL,
  `80a` int NOT NULL,
  `81b` int NOT NULL,
  `82a` int NOT NULL,
  `83a` int NOT NULL,
  `84b` int NOT NULL,
  `85a` int NOT NULL,
  `86a` int NOT NULL,
  `87b` int NOT NULL,
  `88a` int NOT NULL,
  `89a` int NOT NULL,
  `90b` int NOT NULL,
  `91b` int NOT NULL,
  `92a` int NOT NULL,
  `93b` int NOT NULL,
  `94b` int NOT NULL,
  `95a` int NOT NULL,
  `96b` int NOT NULL,
  `97b` int NOT NULL,
  `98a` int NOT NULL,
  `99b` int NOT NULL,
  `100b` int NOT NULL,
  `101a` int NOT NULL,
  `102b` int NOT NULL,
  `103b` int NOT NULL,
  `104a` int NOT NULL,
  `105a` int NOT NULL,
  `106b` int NOT NULL,
  `107a` int NOT NULL,
  `108a` int NOT NULL,
  `109b` int NOT NULL,
  `110a` int NOT NULL,
  `111a` int NOT NULL,
  `112b` int NOT NULL,
  `113a` int NOT NULL,
  `114a` int NOT NULL,
  `115b` int NOT NULL,
  `116b` int NOT NULL,
  `117a` int NOT NULL,
  `118b` int NOT NULL,
  `119b` int NOT NULL,
  `120a` int NOT NULL,
  `121b` int NOT NULL,
  `122b` int NOT NULL,
  `123a` int NOT NULL,
  `124b` int NOT NULL,
  `125b` int NOT NULL,
  `126a` int NOT NULL,
  `127b` int NOT NULL,
  `128b` int NOT NULL,
  `129a` int NOT NULL,
  `130a` int NOT NULL,
  `131b` int NOT NULL,
  `132a` int NOT NULL,
  `133a` int NOT NULL,
  `134b` int NOT NULL,
  `135a` int NOT NULL,
  `136a` int NOT NULL,
  `137b` int NOT NULL,
  `138b` int NOT NULL,
  `139a` int NOT NULL,
  `140b` int NOT NULL,
  `141b` int NOT NULL,
  `142a` int NOT NULL,
  `143b` int NOT NULL,
  `144b` int NOT NULL,
  `145a` int NOT NULL,
  `146b` int NOT NULL,
  `147a` int NOT NULL,
  `148a` int NOT NULL,
  `149b` int NOT NULL,
  `150b` int NOT NULL,
  `151a` int NOT NULL,
  `152b` int NOT NULL,
  `153b` int NOT NULL,
  `154a` int NOT NULL,
  `156b` int NOT NULL,
  `157a` int NOT NULL,
  `158a` int NOT NULL,
  `159b` int NOT NULL,
  `160b` int NOT NULL,
  `161a` int NOT NULL,
  `162b` int NOT NULL,
  `163b` int NOT NULL,
  `164a` int NOT NULL,
  `165b` int NOT NULL,
  `166b` int NOT NULL,
  `167a` int NOT NULL,
  `168b` int NOT NULL,
  `169a` int NOT NULL,
  `170a` int NOT NULL,
  `171b` int NOT NULL,
  `172a` int NOT NULL,
  `173a` int NOT NULL,
  `174b` int NOT NULL,
  `175b` int NOT NULL,
  `176a` int NOT NULL,
  `177b` int NOT NULL,
  `178b` int NOT NULL,
  `179a` int NOT NULL,
  `181b` int NOT NULL,
  `182a` int NOT NULL,
  `183a` int NOT NULL,
  `184b` int NOT NULL,
  `185b` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_app2_resultados`
--

INSERT INTO `tbl_app2_resultados` (`res_id`, `us_id`, `3a`, `4a`, `5a`, `6b`, `7b`, `8a`, `9b`, `10a`, `11b`, `12b`, `13a`, `14b`, `15b`, `16a`, `17a`, `18b`, `19b`, `20a`, `21a`, `22b`, `23a`, `24a`, `25b`, `26a`, `27a`, `28b`, `29a`, `30a`, `31b`, `32b`, `33a`, `34b`, `35a`, `36a`, `37b`, `39b`, `40b`, `41a`, `42a`, `43b`, `44b`, `45a`, `46a`, `47b`, `48a`, `49b`, `50b`, `51a`, `52a`, `53b`, `54b`, `55a`, `56b`, `57b`, `58a`, `59b`, `60a`, `61a`, `62b`, `63a`, `64a`, `65b`, `66a`, `67a`, `68b`, `69b`, `70a`, `71b`, `72b`, `73a`, `74b`, `75b`, `76a`, `77b`, `78b`, `79a`, `80a`, `81b`, `82a`, `83a`, `84b`, `85a`, `86a`, `87b`, `88a`, `89a`, `90b`, `91b`, `92a`, `93b`, `94b`, `95a`, `96b`, `97b`, `98a`, `99b`, `100b`, `101a`, `102b`, `103b`, `104a`, `105a`, `106b`, `107a`, `108a`, `109b`, `110a`, `111a`, `112b`, `113a`, `114a`, `115b`, `116b`, `117a`, `118b`, `119b`, `120a`, `121b`, `122b`, `123a`, `124b`, `125b`, `126a`, `127b`, `128b`, `129a`, `130a`, `131b`, `132a`, `133a`, `134b`, `135a`, `136a`, `137b`, `138b`, `139a`, `140b`, `141b`, `142a`, `143b`, `144b`, `145a`, `146b`, `147a`, `148a`, `149b`, `150b`, `151a`, `152b`, `153b`, `154a`, `156b`, `157a`, `158a`, `159b`, `160b`, `161a`, `162b`, `163b`, `164a`, `165b`, `166b`, `167a`, `168b`, `169a`, `170a`, `171b`, `172a`, `173a`, `174b`, `175b`, `176a`, `177b`, `178b`, `179a`, `181b`, `182a`, `183a`, `184b`, `185b`) VALUES
(1, 2, 0, 2, 0, 0, 2, 0, 2, 2, 0, 2, 0, 0, 0, 0, 2, 2, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 2, 2, 0, 0, 1, 1, 2, 2, 0, 1, 2, 1, 0, 0, 2, 2, 2, 0, 0, 0, 0, 0, 2, 2, 0, 2, 0, 0, 1, 1, 0, 1, 1, 2, 0, 2, 2, 2, 0, 0, 2, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 2, 2, 2, 0, 0, 0, 2, 2, 0, 2, 0, 1, 2, 1, 1, 1, 1, 2, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 0, 2, 0, 0, 2, 0, 2, 2, 0, 2, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 2, 0, 0, 2, 2, 0, 0, 2, 0, 2, 0, 2, 0, 2, 2, 0, 2, 1, 1, 2, 1, 1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carreras`
--

CREATE TABLE `tbl_carreras` (
  `car_id` int NOT NULL,
  `car_nombre` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `car_tipo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `car_sigla` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `car_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_carreras`
--

INSERT INTO `tbl_carreras` (`car_id`, `car_nombre`, `car_tipo`, `car_sigla`, `car_status`) VALUES
(1, 'N/A', 'N/A', 'N/A', 1),
(2, 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'ING', 'I.S.C. (Sistemas)', 1),
(3, 'INGENIERIA EN INDUSTRIAS ALIMENTARIAS', 'ING', 'I.I.A. (Industrias)', 1),
(4, 'INGENIERIA EN ENERGIAS RENOVABLES', 'ING', 'I.E.R. (Energ&iacute;as)', 1),
(5, 'LICENCIATURA EN ADMINISTRACION', 'LIC', 'L.A. (Administraci&oacute;n)', 1),
(6, 'LICENCIATURA EN GASTRONOMIA', 'LIC', 'L.G. (Gastronom&iacute;a)', 1),
(7, 'LICENCIATURA EN TURISMO', 'LIC', 'L.T. (Turismo)', 1),
(8, 'INGENIERIA EN ANIMACION DIGITAL Y EFECTOS VISUALES', 'ING', 'I.AD.EF (ANIMACION DIGITAL)', 1),
(9, 'CONTADOR PUBLICO', 'LIC', 'C.P. (Contador Publico)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notificaciones`
--

CREATE TABLE `tbl_notificaciones` (
  `not_id` int NOT NULL,
  `us_id` int NOT NULL,
  `rol_id` int NOT NULL,
  `not_mensaje` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `not_timestamp` datetime NOT NULL,
  `not_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_preguntas_app3`
--

CREATE TABLE `tbl_preguntas_app3` (
  `pg_id` int NOT NULL,
  `pg_txt_preg` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `car_id` int NOT NULL,
  `pg_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_preguntas_app3`
--

INSERT INTO `tbl_preguntas_app3` (`pg_id`, `pg_txt_preg`, `car_id`, `pg_status`) VALUES
(1, '¿ERES HÁBIL EN LOS CURSOS DE NÚMEROS? ', 2, 1),
(2, '¿TE INTERESA SABER DE DÓNDE PROVIENEN LOS ALIMENTOS QUE CONSUMES? ', 3, 1),
(3, '¿TE INTERESA EL TRABAJO EN EL CAMPO Y LA NATURALEZA?', 4, 1),
(4, '¿TE GUSTA LLEVAR A CABO PLANES Y PROYECTOS?', 5, 1),
(5, '¿TE GUSTA IR DE COMPRAS Y ELEGIR LOS PRODUCTOS O INGREDIENTES QUE SE UTILIZARÁN PARA PREPARAR PLATOS DE COMIDA EN CASA?', 6, 1),
(6, '¿TE RESULTA SENCILLO APRENDER DIFERENTES IDIOMAS?', 7, 1),
(7, '¿CUÁNDO HAY QUE HACER ALGUNA PRESENTACIÓN DIGITAL PARA LA ESCUELA TE ESMERAS ELIGIENDO LAS TIPOGRAFÍAS, LOS COLORES, LOS FONDOS Y LAS IMÁGENES PARA QUE TODO COORDINE Y SE VEA CREATIVO?', 8, 1),
(8, '¿DISFRUTAS Y TIENES HABILIDAD PARA TRABAJAR CON NÚMEROS Y REGISTROS DE MANERA ORDENADA?', 9, 1),
(9, '¿TE SIENTES ATRAÍDO POR EL FUNCIONAMIENTO DE LAS COMPUTADORAS Y SUS DIFERENTES COMPONENTES?', 2, 1),
(10, '¿TE GUSTARÍA APRENDER CÓMO TRABAJA LA INDUSTRIA PESQUERA?', 3, 1),
(11, '¿TIENES HABILIDADES PARA LA FÍSICA?', 4, 1),
(12, '¿ES FÁCIL PARA TI PERSUADIR A LAS PERSONAS ACERCA DE TUS IDEAS?', 5, 1),
(13, 'CUANDO VAS A UN RESTAURANT, ¿TOMAS ALGUNOS MINUTOS PARA OBSERVAR LA DINÁMICA DEL TRABAJO DEL PERSONAL?', 6, 1),
(14, '¿TE GUSTA O GUSTARÍA CONOCER NUEVAS PERSONAS, PAÍSES Y LUGARES? ', 7, 1),
(15, '¿TE CONSIDERAS BUENO EN EL DIBUJO Y LA ILUSTRACIÓN?\r\n', 8, 1),
(16, '¿ERES RESPONSABLE, TOLERANTE Y DISFRUTAS DE INVESTIGAR Y HABLAR DE FINANZAS?', 9, 1),
(17, '¿TIENES INTERÉS POR CONOCER LOS DIFERENTES AVANCES TECNOLÓGICOS?', 2, 1),
(18, '¿TE INTERESARÍA LLEVAR UN CURSO ACERCA DE LOS ALIMENTOS Y SUS COMPONENTES?', 3, 1),
(19, '¿TE HAS INFORMADO SOBRE ALGUNAS FORMAS DE PRESERVAR EL AMBIENTE? ', 4, 1),
(20, '¿TE GUSTAN LAS VENTAS?', 5, 1),
(21, 'CUANDO VAS A UN SUPERMERCADO, ¿TE AGRADA OBSERVAR LOS ALIMENTOS PARA IDENTIFICAR SUS CARACTERÍSTICAS?', 6, 1),
(22, '¿TIENES INTERÉS POR CONOCER LOS FENÓMENOS QUE IMPACTAN SOBRE EL AMBIENTE Y EL DESARROLLO DEL TURISMO? ', 7, 1),
(23, '¿ERES HÁBIL PARA USAR HERRAMIENTAS DIGITALES O EQUIPOS MODERNOS?\r\n', 8, 1),
(24, '¿TE CONSIDERAS HÁBIL EN LAS MATEMÁTICAS, LA ESTADÍSTICA Y LOS NÚMEROS EN GENERAL?\r\n ', 9, 1),
(25, '¿CONSIDERAS QUE PUEDES APRENDER Y MANEJAR DIFERENTES PROGRAMAS DE CÓMPUTO? ', 2, 1),
(26, '¿TE GUSTA LA QUÍMICA? ', 3, 1),
(27, 'EN TU VIDA COTIDIANA, ¿CUIDAS EL AMBIENTE?', 4, 1),
(28, '¿TE AGRADA TRABAJAR EN EQUIPO? ', 5, 1),
(29, '¿VES CON FRECUENCIA PROGRAMAS DE COCINA?', 6, 1),
(30, '¿ERES CAPAZ DE TRABAJAR EN EQUIPO?', 7, 1),
(31, '¿CUÁNDO TOMAS UNA FOTO VERIFICAS CADA DETALLE DE ENFOQUE Y ESTÉTICA, INCLUSO LA EDITAS TÚ MISMO?\r\n', 8, 1),
(32, '¿TE PREOCUPAS POR CONTROL Y REGISTRO DE TUS GASTOS E INGRESOS A DETERMINADOS PERIODOS DE TIEMPO?', 9, 1),
(33, '¿CREES QUE SERÍAS COMPETENTE EN TAREAS DE PROGRAMACIÓN DE COMPUTADORAS, USANDO DIFERENTES LENGUAJES Y TÉCNICAS? ', 2, 1),
(34, '¿TE SUELES FIJAR CON DETALLE EN EL VALOR NUTRICIONAL DE LOS PRODUCTOS ANTES DE CONSUMIRLOS? ', 3, 1),
(35, '¿TE GUSTARÍA INVESTIGAR LAS CAUSAS Y CONSECUENCIAS DEL CALENTAMIENTO GLOBAL? ', 4, 1),
(36, '¿ERES BUENO PARA REALIZAR CON RAPIDEZ OPERACIONES NUMÉRICAS? ', 5, 1),
(37, 'CUANDO PRUEBAS ALGO, ¿TE PREGUNTAS QUÉ INGREDIENTES LLEVARÁ Y TRATAS DE IDENTIFICARLOS?', 6, 1),
(38, '¿TE INTERESA APRENDER SOBRE TEMAS RELACIONADOS A LA ADMINISTRACIÓN Y EL MANEJO DE RECURSOS DENTRO DE EMPRESAS TURÍSTICAS?', 7, 1),
(39, '¿TE CONSIDERAS UNA PERSONA CON MUCHA IMAGINACIÓN, CURIOSIDAD Y CREATIVA?', 8, 1),
(40, '¿TE GUSTA TENER EN ORDEN TU ECONOMÍA PERSONAL?\r\n ', 9, 1),
(41, '¿ERES BUENO TRABAJANDO CON PERSONAS DE DIFERENTES OPINIONES? ', 2, 1),
(42, '¿TE GUSTARÍA TRABAJAR EN UNA PLANTA DE ALIMENTOS?', 3, 1),
(43, '¿TE GUSTARÍA SABER MÁS DEL RECICLAJE? ', 4, 1),
(44, '¿TE INTERESARÍA TENER UN NEGOCIO PROPIO?', 5, 1),
(45, '¿TE HAS PASADO VARIAS VECES UN BUEN RATO COCINANDO ALGO Y EL TIEMPO SE TE PASÓ VOLANDO?', 6, 1),
(46, '¿ERES HÁBIL PARA DETECTAR Y DESCUBRIR LAS DEMANDAS Y NECESIDADES DE LAS PERSONAS?', 7, 1),
(47, '¿ERES HÁBIL PARA PLASMAR SUS IDEAS USANDO PROGRAMAS DE DISEÑOS, ASÍ COMO DIBUJANDO CON LÁPIZ Y PAPEL?\r\n', 8, 1),
(48, '¿TE PREOCUPAS POR PLANEAR TUS GATOS PARA CIERTOS PERIODOS DE TIEMPO?\r\n ', 9, 1),
(49, '¿ERES HÁBIL PARA IDENTIFICAR Y RESOLVER PROBLEMAS DE MANERA INMEDIATA Y OPORTUNA? ', 2, 1),
(50, '¿SABES O TE GUSTARÍA SABER MÁS SOBRE LAS VARIEDADES DE PAPA QUE TIENE EL PERÚ?', 3, 1),
(51, '¿TE GUSTARÍA VISITAR UNA PLANTA DE RESIDUOS QUÍMICOS?', 4, 1),
(52, '¿TE INTERESARÍA TRABAJAR COMO GERENTE EN UNA EMPRESA? ', 5, 1),
(53, '¿TE HAN DICHO QUE TIENES BUENA SAZÓN?', 6, 1),
(54, '¿ERES UNA PERSONA ANALÍTICA Y OBSERVADORA? ', 7, 1),
(55, '¿TIENES INTERÉS POR APRENDER SOBRE TEMAS RELACIONADOS CON LA COMPOSICIÓN VISUAL, LA ESTÉTICA, LA CREATIVIDAD Y EL MANEJO DE DIFERENTES HERRAMIENTAS Y SOFTWARES DE DISEÑO Y EFECTOS VISUALES? ', 8, 1),
(56, '¿TE APASIONA EL MUNDO DE LOS NEGOCIOS?  \r\n ', 9, 1),
(57, '¿TE INTERESARÍA LABORAR EN ÁREAS RELACIONADAS AL ANÁLISIS, DISEÑO, CONSTRUCCIÓN Y MANTENIMIENTO DE SISTEMAS DE INFORMACIÓN?', 2, 1),
(58, '¿HAS PENSADO EN LA GRAN VARIEDAD DE ALIMENTOS QUE TIENE EL PERÚ Y CÓMO SE PODRÍAN APROVECHAR? ', 3, 1),
(59, '¿TE GUSTA EL CURSO DE CIENCIAS, TECNOLOGÍA Y AMBIENTE? ', 4, 1),
(60, '¿CREES PODER LIDERAR Y CONDUCIR PROYECTOS O TRABAJOS EN EQUIPO? ', 5, 1),
(61, '¿ERES CAPAZ DE PERMANECER MÁS DE DOS HORAS COCINANDO HASTA QUE TERMINES EL PLATO QUE QUIERES PREPARAR?', 6, 1),
(62, '¿TE GUSTARÍA TRABAJAR EN AGENCIAS DE VIAJES U HOTELES? ', 7, 1),
(63, '¿CUÁNDO VES UNA PELÍCULA SUELES APRECIAR LOS DETALLES DE DISEÑO QUE FUERON UTILIZADOS?\r\n ', 8, 1),
(64, '¿CONSIDERAS IMPORTANTE ANALIZAR E INTERPRETAR LA INFORMACIÓN ANTES DE TOMAR UNA DECISIÓN?\r\n ', 9, 1),
(65, '¿TE SIENTES CAPAZ DE DIRIGIR EL TRABAJO DE DIFERENTES PERSONAS? ', 2, 1),
(66, '¿TE GUSTARÍA CONOCER UNA FÁBRICA DE ALIMENTOS PARA COMPRENDER CÓMO SE PROCESAN?', 3, 1),
(67, '¿PODRÍAS ARGUMENTAR A FAVOR DE POR QUÉ DEBEMOS CUIDAR EL AMBIENTE? ', 4, 1),
(68, '¿TE INTERESA ANALIZAR LAS SITUACIONES COMERCIALES DEL PAÍS?', 5, 1),
(69, '¿TE GUSTARÍA TENER TU PROPIO RESTAURANTE?', 6, 1),
(70, '¿CONSIDERAS QUE SERÍAS COMPETENTE EN EL DISEÑO Y PLANIFICACIÓN DE PROYECTOS RELACIONADOS AL ÁREA ADMINISTRATIVA Y HOTELERA? ', 7, 1),
(71, '¿TE GUSTA LA IDEA DE SER CAPAZ DE DAR VIDA A PERSONAJES, HISTORIAS, ESCENARIOS O CUALQUIER COSA QUE TE PUEDAS IMAGINAR, A TRAVÉS DE LA TECNOLOGÍA Y CREATIVIDAD? ', 8, 1),
(72, '¿CONSIDERAS IMPORTANTE CONTAR CON INFORMACIÓN SEGURA Y RELEVANTE PARA TOMAR UNA DECISIÓN?\r\n ', 9, 1),
(73, '¿SIENTES INCLINACIÓN POR APRENDER A PROGRAMAR DIFERENTES EQUIPOS DE CÓMPUTO?', 2, 1),
(74, '¿TE GUSTA TRABAJAR CON TECNOLOGÍA?', 3, 1),
(75, '¿TE GUSTARÍA CREAR UN PROYECTO DE EDUCACIÓN AMBIENTAL? ', 4, 1),
(76, '¿TE SIENTES CAPAZ DE MOTIVAR A LOS DEMÁS HACIA EL LOGRO DE SUS METAS? ', 5, 1),
(77, '¿ALGUNA VEZ COCINASTE Y VENDISTE EL PRODUCTO A ALGUIEN?', 6, 1),
(78, '¿TE GUSTARÍA VIAJAR PARA CONOCER OTRAS REALIDADES?', 7, 1),
(79, '¿TIENES UN GRAN GUSTO POR LA ANIMACIÓN, EFECTOS ESPECIALES, PELÍCULAS DE CIENCIA FICCIÓN, VIDEOJUEGOS, ETCÉTERA? ', 8, 1),
(80, '¿TE RESULTA INTERESANTE APRENDER SOBRE EL REGISTRO DE OPERACIONES QUE AFECTA FINANCIERA Y ECONÓMICA A UNA EMPRESA?\r\n ', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_res_pg_app3`
--

CREATE TABLE `tbl_res_pg_app3` (
  `app3_id` int NOT NULL,
  `us_id` int NOT NULL,
  `car_id` int NOT NULL,
  `p1` tinyint(1) NOT NULL DEFAULT '0',
  `p2` tinyint(1) NOT NULL DEFAULT '0',
  `p3` tinyint(1) NOT NULL DEFAULT '0',
  `p4` tinyint(1) NOT NULL DEFAULT '0',
  `p5` tinyint(1) NOT NULL DEFAULT '0',
  `p6` tinyint(1) NOT NULL DEFAULT '0',
  `p7` tinyint(1) NOT NULL DEFAULT '0',
  `p8` tinyint(1) NOT NULL DEFAULT '0',
  `p9` tinyint(1) NOT NULL DEFAULT '0',
  `p10` tinyint(1) NOT NULL DEFAULT '0',
  `resultado` int NOT NULL DEFAULT '0',
  `res_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_res_pg_app3`
--

INSERT INTO `tbl_res_pg_app3` (`app3_id`, `us_id`, `car_id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `resultado`, `res_status`) VALUES
(1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 1),
(2, 2, 3, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 9, 1),
(3, 2, 4, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 9, 1),
(4, 2, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 1),
(5, 2, 6, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 8, 1),
(6, 2, 7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `rol_id` int NOT NULL,
  `rol_nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rol_status` tinyint(1) NOT NULL,
  `rol_cv_txt` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`rol_id`, `rol_nombre`, `rol_status`, `rol_cv_txt`) VALUES
(1, 'ADMINISTRADOR', 1, 'ROOT2017'),
(2, 'INVITADO', 1, 'ITSE*2017'),
(3, 'ALUMNO', 1, 'ITSE2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie1_app1`
--

CREATE TABLE `tbl_serie1_app1` (
  `id_serie1_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s1_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p12` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p13` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p14` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p15` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_p16` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s1_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie1_app1`
--

INSERT INTO `tbl_serie1_app1` (`id_serie1_app1`, `us_id`, `s1_app1_p1`, `s1_app1_p2`, `s1_app1_p3`, `s1_app1_p4`, `s1_app1_p5`, `s1_app1_p6`, `s1_app1_p7`, `s1_app1_p8`, `s1_app1_p9`, `s1_app1_p10`, `s1_app1_p11`, `s1_app1_p12`, `s1_app1_p13`, `s1_app1_p14`, `s1_app1_p15`, `s1_app1_p16`, `s1_app1_res`, `s1_app1_status`) VALUES
(1, 1, 'b', 'a', 'b', 'a', 'b', 'd', 'c', 'a', 'c', 'c', 'c', 'b', 'b', 'c', 'a', 'c', '16', 1),
(2, 2, 'a', 'b', 'a', 'a', 'd', 'd', 'd', 'd', 'a', 'a', 'a', 'b', 'a', 'a', 'a', 'a', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie2_app1`
--

CREATE TABLE `tbl_serie2_app1` (
  `id_serie2_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s2_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s2_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie2_app1`
--

INSERT INTO `tbl_serie2_app1` (`id_serie2_app1`, `us_id`, `s2_app1_p1`, `s2_app1_p2`, `s2_app1_p3`, `s2_app1_p4`, `s2_app1_p5`, `s2_app1_p6`, `s2_app1_p7`, `s2_app1_p8`, `s2_app1_p9`, `s2_app1_p10`, `s2_app1_p11`, `s2_app1_res`, `s2_app1_status`) VALUES
(1, 1, 'c', 'a', 'b', 'c', 'c', 'b', 'c', 'c', 'b', 'a', 'b', '22', 1),
(2, 2, 'a', 'a', 'a', 'b', 'a', 'b', 'b', 'b', 'a', 'a', 'a', '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie3_app1`
--

CREATE TABLE `tbl_serie3_app1` (
  `id_serie3_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s3_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p12` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p13` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p14` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p15` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p16` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p17` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p18` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p19` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p20` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p21` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p22` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p23` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p24` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p25` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p26` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p27` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p28` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p29` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_p30` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s3_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie3_app1`
--

INSERT INTO `tbl_serie3_app1` (`id_serie3_app1`, `us_id`, `s3_app1_p1`, `s3_app1_p2`, `s3_app1_p3`, `s3_app1_p4`, `s3_app1_p5`, `s3_app1_p6`, `s3_app1_p7`, `s3_app1_p8`, `s3_app1_p9`, `s3_app1_p10`, `s3_app1_p11`, `s3_app1_p12`, `s3_app1_p13`, `s3_app1_p14`, `s3_app1_p15`, `s3_app1_p16`, `s3_app1_p17`, `s3_app1_p18`, `s3_app1_p19`, `s3_app1_p20`, `s3_app1_p21`, `s3_app1_p22`, `s3_app1_p23`, `s3_app1_p24`, `s3_app1_p25`, `s3_app1_p26`, `s3_app1_p27`, `s3_app1_p28`, `s3_app1_p29`, `s3_app1_p30`, `s3_app1_res`, `s3_app1_status`) VALUES
(1, 1, 'o', 'i', 'o', 'o', 'o', 'o', 'i', 'i', 'o', 'i', 'o', 'o', 'o', 'i', 'o', 'o', 'i', 'o', 'i', 'o', 'o', 'o', 'i', 'i', 'i', 'o', 'i', 'i', 'o', 'i', '30', 1),
(2, 2, 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'i', 'o', 'o', 'i', 'i', 'i', 'i', 'i', 'o', 'i', 'o', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'i', 'i', 'i', '-8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie4_app1`
--

CREATE TABLE `tbl_serie4_app1` (
  `id_serie4_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s4_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p12` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p13` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p14` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p15` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p16` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p17` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_p18` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s4_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie4_app1`
--

INSERT INTO `tbl_serie4_app1` (`id_serie4_app1`, `us_id`, `s4_app1_p1`, `s4_app1_p2`, `s4_app1_p3`, `s4_app1_p4`, `s4_app1_p5`, `s4_app1_p6`, `s4_app1_p7`, `s4_app1_p8`, `s4_app1_p9`, `s4_app1_p10`, `s4_app1_p11`, `s4_app1_p12`, `s4_app1_p13`, `s4_app1_p14`, `s4_app1_p15`, `s4_app1_p16`, `s4_app1_p17`, `s4_app1_p18`, `s4_app1_res`, `s4_app1_status`) VALUES
(1, 1, 'be', 'ac', 'cd', 'ac', 'be', 'ce', 'be', 'be', 'ab', 'ac', 'bc', 'ab', 'ce', 'ad', 'ab', 'be', 'ab', 'cd', '18', 1),
(2, 2, 'd', 'c', 'c', 'c', 'c', 'bc', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie5_app1`
--

CREATE TABLE `tbl_serie5_app1` (
  `id_serie5_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s5_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_p12` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s5_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie5_app1`
--

INSERT INTO `tbl_serie5_app1` (`id_serie5_app1`, `us_id`, `s5_app1_p1`, `s5_app1_p2`, `s5_app1_p3`, `s5_app1_p4`, `s5_app1_p5`, `s5_app1_p6`, `s5_app1_p7`, `s5_app1_p8`, `s5_app1_p9`, `s5_app1_p10`, `s5_app1_p11`, `s5_app1_p12`, `s5_app1_res`, `s5_app1_status`) VALUES
(1, 1, '20', '11', '50', '50', '12', '18', '500', '2', '28', '360', '2', '25', '24', 1),
(2, 2, 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie6_app1`
--

CREATE TABLE `tbl_serie6_app1` (
  `id_serie6_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s6_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p12` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p13` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p14` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p15` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p16` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p17` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p18` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p19` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_p20` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s6_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie6_app1`
--

INSERT INTO `tbl_serie6_app1` (`id_serie6_app1`, `us_id`, `s6_app1_p1`, `s6_app1_p2`, `s6_app1_p3`, `s6_app1_p4`, `s6_app1_p5`, `s6_app1_p6`, `s6_app1_p7`, `s6_app1_p8`, `s6_app1_p9`, `s6_app1_p10`, `s6_app1_p11`, `s6_app1_p12`, `s6_app1_p13`, `s6_app1_p14`, `s6_app1_p15`, `s6_app1_p16`, `s6_app1_p17`, `s6_app1_p18`, `s6_app1_p19`, `s6_app1_p20`, `s6_app1_res`, `s6_app1_status`) VALUES
(1, 1, 'si', 'no', 'no', 'si', 'si', 'no', 'no', 'no', 'si', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'si', 'no', 'si', 'si', '20', 1),
(2, 2, 'si', 'si', 'no', 'no', 'si', 'si', 'si', 'si', 'si', 'no', 'no', 'no', 'no', 'si', 'si', 'si', 'si', 'si', 'no', 'no', '-2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie7_app1`
--

CREATE TABLE `tbl_serie7_app1` (
  `id_serie7_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s7_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p12` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p13` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p14` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p15` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p16` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p17` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p18` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p19` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_p20` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s7_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie7_app1`
--

INSERT INTO `tbl_serie7_app1` (`id_serie7_app1`, `us_id`, `s7_app1_p1`, `s7_app1_p2`, `s7_app1_p3`, `s7_app1_p4`, `s7_app1_p5`, `s7_app1_p6`, `s7_app1_p7`, `s7_app1_p8`, `s7_app1_p9`, `s7_app1_p10`, `s7_app1_p11`, `s7_app1_p12`, `s7_app1_p13`, `s7_app1_p14`, `s7_app1_p15`, `s7_app1_p16`, `s7_app1_p17`, `s7_app1_p18`, `s7_app1_p19`, `s7_app1_p20`, `s7_app1_res`, `s7_app1_status`) VALUES
(1, 1, 'a', 'a', 'c', 'b', 'b', 'd', 'c', 'a', 'a', 'd', 'b', 'c', 'b', 'c', 'c', 'c', 'b', 'c', 'c', 'c', '20', 1),
(2, 2, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'b', 'b', 'b', 'a', 'a', 'd', 'a', 'b', 'a', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie8_app1`
--

CREATE TABLE `tbl_serie8_app1` (
  `id_serie8_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s8_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p12` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p13` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p14` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p15` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p16` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_p17` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s8_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie8_app1`
--

INSERT INTO `tbl_serie8_app1` (`id_serie8_app1`, `us_id`, `s8_app1_p1`, `s8_app1_p2`, `s8_app1_p3`, `s8_app1_p4`, `s8_app1_p5`, `s8_app1_p6`, `s8_app1_p7`, `s8_app1_p8`, `s8_app1_p9`, `s8_app1_p10`, `s8_app1_p11`, `s8_app1_p12`, `s8_app1_p13`, `s8_app1_p14`, `s8_app1_p15`, `s8_app1_p16`, `s8_app1_p17`, `s8_app1_res`, `s8_app1_status`) VALUES
(1, 1, 'v', 'f', 'v', 'v', 'v', 'f', 'f', 'v', 'v', 'f', 'f', 'f', 'v', 'v', 'v', 'v', 'f', '17', 1),
(2, 2, 'v', 'v', 'v', 'f', 'f', 'v', 'f', 'f', 'f', 'f', 'v', 'f', 'f', 'v', 'v', 'v', 'v', '-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie9_app1`
--

CREATE TABLE `tbl_serie9_app1` (
  `id_serie9_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s9_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p12` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p13` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p14` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p15` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p16` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p17` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_p18` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s9_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie9_app1`
--

INSERT INTO `tbl_serie9_app1` (`id_serie9_app1`, `us_id`, `s9_app1_p1`, `s9_app1_p2`, `s9_app1_p3`, `s9_app1_p4`, `s9_app1_p5`, `s9_app1_p6`, `s9_app1_p7`, `s9_app1_p8`, `s9_app1_p9`, `s9_app1_p10`, `s9_app1_p11`, `s9_app1_p12`, `s9_app1_p13`, `s9_app1_p14`, `s9_app1_p15`, `s9_app1_p16`, `s9_app1_p17`, `s9_app1_p18`, `s9_app1_res`, `s9_app1_status`) VALUES
(1, 1, 'd', 'e', 'c', 'a', 'c', 'd', 'e', 'a', 'd', 'c', 'e', 'e', 'a', 'e', 'e', 'a', 'd', 'e', '18', 1),
(2, 2, 'a', 'e', 'a', 'a', 'a', 'e', 'e', 'e', 'e', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serie10_app1`
--

CREATE TABLE `tbl_serie10_app1` (
  `id_serie10_app1` int NOT NULL,
  `us_id` int NOT NULL,
  `s10_app1_p1` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p2` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p3` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p4` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p5` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p6` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p7` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p8` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p9` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p10` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_p11` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_res` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `s10_app1_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_serie10_app1`
--

INSERT INTO `tbl_serie10_app1` (`id_serie10_app1`, `us_id`, `s10_app1_p1`, `s10_app1_p2`, `s10_app1_p3`, `s10_app1_p4`, `s10_app1_p5`, `s10_app1_p6`, `s10_app1_p7`, `s10_app1_p8`, `s10_app1_p9`, `s10_app1_p10`, `s10_app1_p11`, `s10_app1_res`, `s10_app1_status`) VALUES
(1, 1, '21', '3338', '64128', '22', '1313 1/4', '2021', '1/41/8', '85.394.3', '68', '3334', '25125', '22', 1),
(2, 2, 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessiones_temp`
--

CREATE TABLE `tbl_sessiones_temp` (
  `ses_id` int NOT NULL,
  `us_id` int NOT NULL,
  `ses_fecha` date NOT NULL,
  `ses_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `us_id` int NOT NULL,
  `us_nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `us_genero` varchar(2) COLLATE utf8mb4_spanish_ci NOT NULL,
  `us_alias` varchar(18) COLLATE utf8mb4_spanish_ci NOT NULL,
  `us_password` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `car_id` int NOT NULL,
  `rol_id` int NOT NULL,
  `us_fec_reg` datetime NOT NULL,
  `us_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`us_id`, `us_nombre`, `us_genero`, `us_alias`, `us_password`, `car_id`, `rol_id`, `us_fec_reg`, `us_status`) VALUES
(1, 'ROOT ADMIN', 'H', 'ROOT', '1f32aa4c9a1d2ea010adcf2348166a04', 1, 1, '2017-09-20 01:00:00', 1),
(2, 'NESTOR IVAN ROMERO TRUJILLO', 'H', 'ROTN940224', '1f32aa4c9a1d2ea010adcf2348166a04', 2, 3, '2018-01-13 12:53:25', 1),
(3, 'ABIMAEL MÉNDEZ ZACARÍAS', 'H', '220204022', 'b36c2d8053f192a132b8f33931836d20', 2, 3, '2023-06-16 15:50:28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_app1_res_us`
--
ALTER TABLE `tbl_app1_res_us`
  ADD PRIMARY KEY (`app1_id`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_app2_rangos`
--
ALTER TABLE `tbl_app2_rangos`
  ADD PRIMARY KEY (`ran_id`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_app2_resultados`
--
ALTER TABLE `tbl_app2_resultados`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_carreras`
--
ALTER TABLE `tbl_carreras`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tbl_notificaciones`
--
ALTER TABLE `tbl_notificaciones`
  ADD PRIMARY KEY (`not_id`),
  ADD KEY `us_id` (`us_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indexes for table `tbl_preguntas_app3`
--
ALTER TABLE `tbl_preguntas_app3`
  ADD PRIMARY KEY (`pg_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `tbl_res_pg_app3`
--
ALTER TABLE `tbl_res_pg_app3`
  ADD PRIMARY KEY (`app3_id`),
  ADD KEY `us_id` (`us_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indexes for table `tbl_serie1_app1`
--
ALTER TABLE `tbl_serie1_app1`
  ADD PRIMARY KEY (`id_serie1_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie2_app1`
--
ALTER TABLE `tbl_serie2_app1`
  ADD PRIMARY KEY (`id_serie2_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie3_app1`
--
ALTER TABLE `tbl_serie3_app1`
  ADD PRIMARY KEY (`id_serie3_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie4_app1`
--
ALTER TABLE `tbl_serie4_app1`
  ADD PRIMARY KEY (`id_serie4_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie5_app1`
--
ALTER TABLE `tbl_serie5_app1`
  ADD PRIMARY KEY (`id_serie5_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie6_app1`
--
ALTER TABLE `tbl_serie6_app1`
  ADD PRIMARY KEY (`id_serie6_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie7_app1`
--
ALTER TABLE `tbl_serie7_app1`
  ADD PRIMARY KEY (`id_serie7_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie8_app1`
--
ALTER TABLE `tbl_serie8_app1`
  ADD PRIMARY KEY (`id_serie8_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie9_app1`
--
ALTER TABLE `tbl_serie9_app1`
  ADD PRIMARY KEY (`id_serie9_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_serie10_app1`
--
ALTER TABLE `tbl_serie10_app1`
  ADD PRIMARY KEY (`id_serie10_app1`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_sessiones_temp`
--
ALTER TABLE `tbl_sessiones_temp`
  ADD PRIMARY KEY (`ses_id`),
  ADD KEY `us_id` (`us_id`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`us_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_app1_res_us`
--
ALTER TABLE `tbl_app1_res_us`
  MODIFY `app1_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_app2_rangos`
--
ALTER TABLE `tbl_app2_rangos`
  MODIFY `ran_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_app2_resultados`
--
ALTER TABLE `tbl_app2_resultados`
  MODIFY `res_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_carreras`
--
ALTER TABLE `tbl_carreras`
  MODIFY `car_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_notificaciones`
--
ALTER TABLE `tbl_notificaciones`
  MODIFY `not_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_preguntas_app3`
--
ALTER TABLE `tbl_preguntas_app3`
  MODIFY `pg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11195;

--
-- AUTO_INCREMENT for table `tbl_res_pg_app3`
--
ALTER TABLE `tbl_res_pg_app3`
  MODIFY `app3_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `rol_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_serie1_app1`
--
ALTER TABLE `tbl_serie1_app1`
  MODIFY `id_serie1_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie2_app1`
--
ALTER TABLE `tbl_serie2_app1`
  MODIFY `id_serie2_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie3_app1`
--
ALTER TABLE `tbl_serie3_app1`
  MODIFY `id_serie3_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie4_app1`
--
ALTER TABLE `tbl_serie4_app1`
  MODIFY `id_serie4_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie5_app1`
--
ALTER TABLE `tbl_serie5_app1`
  MODIFY `id_serie5_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie6_app1`
--
ALTER TABLE `tbl_serie6_app1`
  MODIFY `id_serie6_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie7_app1`
--
ALTER TABLE `tbl_serie7_app1`
  MODIFY `id_serie7_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie8_app1`
--
ALTER TABLE `tbl_serie8_app1`
  MODIFY `id_serie8_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie9_app1`
--
ALTER TABLE `tbl_serie9_app1`
  MODIFY `id_serie9_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_serie10_app1`
--
ALTER TABLE `tbl_serie10_app1`
  MODIFY `id_serie10_app1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sessiones_temp`
--
ALTER TABLE `tbl_sessiones_temp`
  MODIFY `ses_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `us_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_app1_res_us`
--
ALTER TABLE `tbl_app1_res_us`
  ADD CONSTRAINT `tbl_app1_res_us_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_app2_rangos`
--
ALTER TABLE `tbl_app2_rangos`
  ADD CONSTRAINT `tbl_app2_rangos_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_app2_resultados`
--
ALTER TABLE `tbl_app2_resultados`
  ADD CONSTRAINT `tbl_app2_resultados_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_notificaciones`
--
ALTER TABLE `tbl_notificaciones`
  ADD CONSTRAINT `tbl_notificaciones_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`),
  ADD CONSTRAINT `tbl_notificaciones_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `tbl_roles` (`rol_id`);

--
-- Constraints for table `tbl_preguntas_app3`
--
ALTER TABLE `tbl_preguntas_app3`
  ADD CONSTRAINT `tbl_preguntas_app3_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `tbl_carreras` (`car_id`);

--
-- Constraints for table `tbl_res_pg_app3`
--
ALTER TABLE `tbl_res_pg_app3`
  ADD CONSTRAINT `tbl_res_pg_app3_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`),
  ADD CONSTRAINT `tbl_res_pg_app3_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `tbl_carreras` (`car_id`);

--
-- Constraints for table `tbl_serie1_app1`
--
ALTER TABLE `tbl_serie1_app1`
  ADD CONSTRAINT `tbl_serie1_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie2_app1`
--
ALTER TABLE `tbl_serie2_app1`
  ADD CONSTRAINT `tbl_serie2_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie3_app1`
--
ALTER TABLE `tbl_serie3_app1`
  ADD CONSTRAINT `tbl_serie3_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie4_app1`
--
ALTER TABLE `tbl_serie4_app1`
  ADD CONSTRAINT `tbl_serie4_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie5_app1`
--
ALTER TABLE `tbl_serie5_app1`
  ADD CONSTRAINT `tbl_serie5_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie6_app1`
--
ALTER TABLE `tbl_serie6_app1`
  ADD CONSTRAINT `tbl_serie6_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie7_app1`
--
ALTER TABLE `tbl_serie7_app1`
  ADD CONSTRAINT `tbl_serie7_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie8_app1`
--
ALTER TABLE `tbl_serie8_app1`
  ADD CONSTRAINT `tbl_serie8_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie9_app1`
--
ALTER TABLE `tbl_serie9_app1`
  ADD CONSTRAINT `tbl_serie9_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_serie10_app1`
--
ALTER TABLE `tbl_serie10_app1`
  ADD CONSTRAINT `tbl_serie10_app1_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_sessiones_temp`
--
ALTER TABLE `tbl_sessiones_temp`
  ADD CONSTRAINT `tbl_sessiones_temp_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `tbl_usuarios` (`us_id`);

--
-- Constraints for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `tbl_carreras` (`car_id`),
  ADD CONSTRAINT `tbl_usuarios_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `tbl_roles` (`rol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
