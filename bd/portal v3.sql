-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2021 a las 04:52:26
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `Id_Asistencia` int(11) NOT NULL COMMENT 'AUTOINCREMENT',
  `Id_Alumno` int(11) DEFAULT NULL,
  `fecha_A` date DEFAULT NULL,
  `Estatus` varchar(50) DEFAULT NULL,
  `Id_Ususario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `Id_Carrera` int(11) NOT NULL,
  `NombreC` varchar(255) NOT NULL,
  `CodigoC` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `Id_Estado` int(11) NOT NULL,
  `NombreE` varchar(255) NOT NULL,
  `Id_Municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`Id_Estado`, `NombreE`, `Id_Municipio`) VALUES
(1, 'CIUDAD DE MÉXICO', 1),
(2, 'CIUDAD DE MÉXICO', 2),
(3, 'CIUDAD DE MÉXICO', 3),
(4, 'CIUDAD DE MÉXICO', 4),
(5, 'CIUDAD DE MÉXICO', 5),
(6, 'CIUDAD DE MÉXICO', 6),
(7, 'CIUDAD DE MÉXICO', 7),
(8, 'CIUDAD DE MÉXICO', 8),
(9, 'CIUDAD DE MÉXICO', 9),
(10, 'CIUDAD DE MÉXICO', 10),
(11, 'CIUDAD DE MÉXICO', 11),
(12, 'CIUDAD DE MÉXICO', 12),
(13, 'CIUDAD DE MÉXICO', 13),
(14, 'CIUDAD DE MÉXICO', 14),
(15, 'CIUDAD DE MÉXICO', 15),
(16, 'CIUDAD DE MÉXICO', 16),
(17, 'ESTADO DE MÉXICO', 17),
(18, 'ESTADO DE MÉXICO', 18),
(19, 'ESTADO DE MÉXICO', 19),
(20, 'ESTADO DE MÉXICO', 20),
(21, 'ESTADO DE MÉXICO', 21),
(22, 'ESTADO DE MÉXICO', 22),
(23, 'ESTADO DE MÉXICO', 23),
(24, 'ESTADO DE MÉXICO', 24),
(25, 'ESTADO DE MÉXICO', 25),
(26, 'ESTADO DE MÉXICO', 26),
(27, 'ESTADO DE MÉXICO', 27),
(28, 'ESTADO DE MÉXICO', 28),
(29, 'ESTADO DE MÉXICO', 29),
(30, 'ESTADO DE MÉXICO', 30),
(31, 'ESTADO DE MÉXICO', 31),
(32, 'ESTADO DE MÉXICO', 32),
(33, 'ESTADO DE MÉXICO', 33),
(34, 'ESTADO DE MÉXICO', 34),
(35, 'ESTADO DE MÉXICO', 35),
(36, 'ESTADO DE MÉXICO', 36),
(37, 'ESTADO DE MÉXICO', 37),
(38, 'ESTADO DE MÉXICO', 38),
(39, 'ESTADO DE MÉXICO', 39),
(40, 'ESTADO DE MÉXICO', 40),
(41, 'ESTADO DE MÉXICO', 41),
(42, 'ESTADO DE MÉXICO', 42),
(44, 'ESTADO DE MÉXICO', 43),
(45, 'ESTADO DE MÉXICO', 44),
(46, 'ESTADO DE MÉXICO', 45),
(47, 'ESTADO DE MÉXICO', 46),
(48, 'ESTADO DE MÉXICO', 47),
(49, 'ESTADO DE MÉXICO', 48),
(50, 'ESTADO DE MÉXICO', 49),
(51, 'ESTADO DE MÉXICO', 50),
(52, 'ESTADO DE MÉXICO\r\n', 51),
(53, 'ESTADO DE MÉXICO\r\n', 52),
(54, 'ESTADO DE MÉXICO\r\n', 53),
(55, 'ESTADO DE MÉXICO\r\n', 54),
(56, 'ESTADO DE MÉXICO\r\n', 55),
(57, 'ESTADO DE MÉXICO\r\n', 56),
(58, 'ESTADO DE MÉXICO\r\n', 57),
(59, 'ESTADO DE MÉXICO\r\n', 58),
(60, 'ESTADO DE MÉXICO\r\n', 59),
(61, 'ESTADO DE MÉXICO\r\n', 60),
(62, 'ESTADO DE MÉXICO\r\n', 61),
(63, 'ESTADO DE MÉXICO\r\n', 62),
(64, 'ESTADO DE MÉXICO\r\n', 63),
(65, 'ESTADO DE MÉXICO\r\n', 64),
(66, 'ESTADO DE MÉXICO\r\n', 65),
(67, 'ESTADO DE MÉXICO\r\n', 66),
(68, 'ESTADO DE MÉXICO\r\n', 67),
(69, 'ESTADO DE MÉXICO\r\n', 68),
(70, 'ESTADO DE MÉXICO\r\n', 69),
(71, 'ESTADO DE MÉXICO\r\n', 70),
(72, 'ESTADO DE MÉXICO\r\n', 71),
(73, 'ESTADO DE MÉXICO\r\n', 72),
(74, 'ESTADO DE MÉXICO\r\n', 73),
(75, 'ESTADO DE MÉXICO\r\n', 74),
(76, 'ESTADO DE MÉXICO\r\n', 75),
(107, 'ESTADO DE MÉXICO\r\n', 76),
(108, 'ESTADO DE MÉXICO\r\n', 77),
(109, 'ESTADO DE MÉXICO\r\n', 82),
(110, 'ESTADO DE MÉXICO\r\n', 81),
(111, 'ESTADO DE MÉXICO\r\n', 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `Id_Expediente` int(11) NOT NULL,
  `FechaRegistro` date NOT NULL,
  `Calle` varchar(55) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `NumInt` varchar(10) DEFAULT NULL,
  `Colonia` varchar(55) NOT NULL,
  `CP` varchar(5) NOT NULL,
  `Id_Estado` int(11) NOT NULL,
  `FechaNac` date NOT NULL,
  `TelefonoC` int(10) NOT NULL,
  `Curp` varchar(18) NOT NULL,
  `NSS` int(11) NOT NULL,
  `Id_Carrera` int(11) NOT NULL,
  `Id_Semestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `Id_Genero` int(11) NOT NULL,
  `NombreG` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`Id_Genero`, `NombreG`) VALUES
(1, 'Femenino'),
(2, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `Id_Municipio` int(11) NOT NULL,
  `NombreM` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`Id_Municipio`, `NombreM`) VALUES
(1, 'AZCAPOTZALCO'),
(2, 'COYOACÁN'),
(3, 'CUAJIMALPA DE MORELOS'),
(4, 'GUSTAVO A. MADERO'),
(5, 'IZTACALCO'),
(6, 'IZTAPALAPA'),
(7, 'LA MAGDALENA CONTRERAS'),
(8, 'MILPA ALTA'),
(9, 'ÁLVARO OBREGÓN'),
(10, 'TLÁHUAC'),
(11, ' TLALPAN'),
(12, 'XOCHIMILCO'),
(13, 'BENITO JUÁREZ'),
(14, 'CUAUHTÉMOC'),
(15, 'MIGUEL HIDALGO'),
(16, 'VENUSTIANO CARRANZA'),
(17, 'ACAMBAY DE RUÍZ CASTAÑEDA'),
(18, 'ACOLMAN'),
(19, 'ACULCO'),
(20, 'ALMOLOYA DE ALQUISIRAS'),
(21, 'ALMOLOYA DE JUÁREZ'),
(22, 'ALMOLOYA DEL RÍO'),
(23, 'AMANALCO'),
(24, 'AMATEPEC'),
(25, 'AMECAMECA'),
(26, 'APAXCO'),
(27, 'ATENCO'),
(28, 'ATIZAPÁN'),
(29, 'ATIZAPÁN DE ZARAGOZA'),
(30, 'ATLACOMULCO'),
(31, 'ATLAUTLA'),
(32, 'AXAPUSCO'),
(33, 'AYAPANGO'),
(34, 'CALIMAYA'),
(35, 'CAPULHUAC'),
(36, 'COACALCO DE BERRIOZÁBAL'),
(37, 'COATEPEC HARINAS'),
(38, 'COCOTITLÁN'),
(39, 'COYOTEPEC'),
(40, 'CUAUTITLÁN'),
(41, 'CHALCO'),
(42, 'CHAPA DE MOTA'),
(43, 'CHAPULTEPEC'),
(44, 'CHIAUTLA'),
(45, 'CHICOLOAPAN'),
(46, 'CHICONCUAC'),
(47, 'CHIMALHUACÁN'),
(48, 'DONATO GUERRA'),
(49, 'ECATEPEC DE MORELOS'),
(50, 'ECATZINGO'),
(51, 'HUEHUETOCA'),
(52, 'HUEYPOXTLA'),
(53, 'HUIXQUILUCAN'),
(54, 'ISIDRO FABELA'),
(55, 'IXTAPALUCA'),
(56, 'IXTAPAN DE LA SAL'),
(57, 'IXTAPAN DEL ORO'),
(58, 'IXTLAHUACA'),
(59, 'XALATLACO'),
(60, 'JALTENCO'),
(61, 'JILOTEPEC'),
(62, 'JILOTZINGO'),
(63, 'JIQUIPILCO'),
(64, 'JOCOTITLÁN'),
(65, 'JOQUICINGO'),
(66, 'JUCHITEPEC'),
(67, 'LERMA'),
(68, 'MALINALCO'),
(69, 'MELCHOR OCAMPO'),
(70, 'METEPEC'),
(71, 'MEXICALTZINGO'),
(72, 'MORELOS'),
(73, 'NAUCALPAN DE JUÁREZ'),
(74, 'NEZAHUALCÓYOTL'),
(75, 'NEXTLALPAN'),
(76, 'NICOLÁS ROMERO'),
(77, 'NOPALTEPEC'),
(78, 'OCOYOACAC'),
(79, 'OCUILAN'),
(80, 'EL ORO'),
(81, 'OTUMBA'),
(82, 'OTZOLOAPAN'),
(83, 'OTZOLOTEPEC'),
(84, 'OZUMBA'),
(85, 'PAPALOTLA'),
(86, 'LA PAZ'),
(87, 'POLOTITLÁN'),
(88, 'RAYÓN'),
(89, 'SAN ANTONIO LA ISLA'),
(90, 'SAN FELIPE DEL PROGRESO'),
(91, 'SAN MARTÍN DE LAS PIRÁMIDES'),
(92, 'SAN MATEO ATENCO'),
(93, 'SAN SIMÓN DE GUERRERO'),
(94, 'SANTO TOMÁS'),
(95, 'SOYANIQUILPAN DE JUÁREZ'),
(96, 'SULTEPEC'),
(97, 'TECÁMAC'),
(98, 'TEJUPILCO'),
(99, 'TEMAMATLA'),
(100, 'TEMASCALAPA'),
(101, 'TEMASCALCINGO'),
(102, 'TEMASCALTEPEC'),
(103, 'TEMOAYA'),
(104, 'TENANCINGO'),
(105, 'TENANGO DEL AIRE'),
(106, 'TENANGO DEL VALLE'),
(107, 'TEOLOYUCAN'),
(108, 'TEOTIHUACÁN'),
(109, 'TEPETLAOXTOC'),
(110, 'TEPETLIXPA'),
(111, 'TEPOTZOTLÁN'),
(112, 'TEQUIXQUIAC'),
(113, 'TEXCALTITLÁN'),
(114, 'TEXCALYACAC'),
(115, 'TEXCOCO'),
(116, 'TEZOYUCA'),
(117, 'TIANGUISTENCO'),
(118, 'TIMILPAN'),
(119, 'TLALMANALCO'),
(120, 'TLALNEPANTLA DE BAZ'),
(121, 'TLATLAYA'),
(122, 'TOLUCA'),
(123, 'TONATICO'),
(124, 'TULTEPEC'),
(125, 'TULTITLÁN'),
(126, 'VALLE DE BRAVO'),
(127, 'VILLA DE ALLENDE'),
(128, 'VILLA DEL CARBÓN'),
(129, 'VILLA GUERRERO'),
(130, 'VILLA VICTORIA'),
(131, 'XONACATLÁN'),
(132, 'ZACAZONAPAN'),
(133, 'ZACUALPAN'),
(134, 'ZINACANTEPEC'),
(135, 'ZUMPAHUACÁN'),
(136, 'ZUMPANGO'),
(137, 'CUAUTITLÁN IZCALLI'),
(138, 'VALLE DE CHALCO SOLIDARIDAD'),
(139, 'LUVIANOS'),
(140, 'SAN JOSÉ DEL RINCÓN'),
(141, 'TONANITLA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `Id_Semestre` int(11) NOT NULL,
  `NombreS` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`Id_Semestre`, `NombreS`) VALUES
(1, 'primero'),
(2, 'segundo'),
(3, 'tercero'),
(4, 'cuarto'),
(5, 'quinto'),
(6, 'sexto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposuser`
--

CREATE TABLE `tiposuser` (
  `Id_Tusuario` int(11) NOT NULL,
  `NombreT` varchar(55) NOT NULL,
  `Descripcion` text NOT NULL,
  `Nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposuser`
--

INSERT INTO `tiposuser` (`Id_Tusuario`, `NombreT`, `Descripcion`, `Nivel`) VALUES
(1, 'Administrativos', 'pueden editar, ver y agregar alumnos, sus expedientes y ver quien ya paso lista', 1),
(2, 'Profesores', 'pueden editar, ver y agregar alumnos y \r\n ver sus expedientes', 2),
(3, 'Alumnos', 'solo pueden visualizar sus expedientes y realizar el pase de lista', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuarios` int(11) NOT NULL,
  `Nombre` varchar(55) NOT NULL,
  `ApellidoP` varchar(55) NOT NULL,
  `ApellidoM` varchar(55) NOT NULL,
  `Id_Tusuario` int(11) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Id_Expediente` int(11) NOT NULL,
  `Password` varchar(55) NOT NULL,
  `UserName` varchar(55) NOT NULL,
  `Id_Genero` int(11) NOT NULL,
  `Online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuarios`, `Nombre`, `ApellidoP`, `ApellidoM`, `Id_Tusuario`, `Telefono`, `Email`, `Id_Expediente`, `Password`, `UserName`, `Id_Genero`, `Online`) VALUES
(1, 'Jose ', 'Martinez', 'Lopez', 3, 554125654, 'jose@gmail.com', 1, '123456', 'jose', 2, 0),
(2, 'francisco', 'sanches', 'Antonio', 1, 554758693, 'francisco@gmail.com', 2, '1234567', 'antonio', 2, 0),
(3, 'joselin', 'rivera', 'garcia', 2, 551425875, 'joselin@gmail.com', 3, '123456789', 'joselin', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`Id_Asistencia`),
  ADD UNIQUE KEY `Id_Alumno` (`Id_Alumno`),
  ADD UNIQUE KEY `Id_Ususario` (`Id_Ususario`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`Id_Carrera`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`Id_Estado`),
  ADD UNIQUE KEY `Id_Municipio` (`Id_Municipio`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`Id_Expediente`),
  ADD KEY `Id_Estado` (`Id_Estado`),
  ADD KEY `Id_Carrera` (`Id_Carrera`),
  ADD KEY `Id_Semestre` (`Id_Semestre`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`Id_Genero`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`Id_Municipio`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`Id_Semestre`);

--
-- Indices de la tabla `tiposuser`
--
ALTER TABLE `tiposuser`
  ADD PRIMARY KEY (`Id_Tusuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuarios`),
  ADD UNIQUE KEY `Id_Expediente` (`Id_Expediente`),
  ADD UNIQUE KEY `Id_Tusuario_2` (`Id_Tusuario`),
  ADD KEY `Id_Tusuario` (`Id_Tusuario`),
  ADD KEY `Id_Genero` (`Id_Genero`),
  ADD KEY `Id_Expediente_2` (`Id_Expediente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `Id_Carrera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `Id_Estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `Id_Expediente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `Id_Genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `Id_Municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `Id_Semestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tiposuser`
--
ALTER TABLE `tiposuser`
  MODIFY `Id_Tusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`Id_Ususario`) REFERENCES `usuarios` (`Id_Usuarios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`Id_Municipio`) REFERENCES `municipio` (`Id_Municipio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `expediente_ibfk_1` FOREIGN KEY (`Id_Semestre`) REFERENCES `semestre` (`Id_Semestre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expediente_ibfk_2` FOREIGN KEY (`Id_Estado`) REFERENCES `estado` (`Id_Estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expediente_ibfk_3` FOREIGN KEY (`Id_Carrera`) REFERENCES `carrera` (`Id_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Tusuario`) REFERENCES `tiposuser` (`Id_Tusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Id_Genero`) REFERENCES `genero` (`Id_Genero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
