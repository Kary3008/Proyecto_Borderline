-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2021 a las 17:59:59
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Id_Alumno` int(11) NOT NULL,
  `Nombre_A` varchar(50) NOT NULL,
  `ApellidoP_A` varchar(50) NOT NULL,
  `ApellidoM_A` varchar(50) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Correo_U` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Id_Tusuario` int(11) NOT NULL,
  `Id_Genero` int(2) NOT NULL,
  `Id_Grupo` int(11) NOT NULL,
  `Id_Carrera` int(11) NOT NULL,
  `Id_Plantel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Id_Alumno`, `Nombre_A`, `ApellidoP_A`, `ApellidoM_A`, `Fecha_Nac`, `Usuario`, `Correo_U`, `Password`, `img`, `Estado`, `Id_Tusuario`, `Id_Genero`, `Id_Grupo`, `Id_Carrera`, `Id_Plantel`) VALUES
(1, 'Fernanda', 'Osorio', 'Vega', '2003-12-01', 'Fer30', 'ferov@gmail.com', '123456', 'perfil.png', 'Activo', 1, 2, 1, 3, 1),
(2, 'Omar', 'Leyva', 'Navarro', '2004-12-16', 'Omar25', 'omarleyva@gmail.com', '678900', 'perfil.png', 'Activo', 2, 1, 2, 3, 12),
(3, 'Alonso', 'Villalpando', 'Camarena', '2003-12-06', 'AlonVillal', 'camarenalonso@outlook.com', '323232', 'perfil.png', 'Activo', 3, 1, 3, 2, 10),
(4, 'Sara', 'García', 'Velazquez', '2005-12-19', 'SarahG', 'saragarcia@gmail.com', '654321', 'perfil.png', 'Activo', 1, 2, 4, 4, 4),
(5, 'Sofía', 'Fernández', 'López', '2004-12-28', 'Sofi234', 'lopezsofia@outlook.com', '9876', 'perfil.png', 'Activo', 2, 2, 5, 1, 14),
(6, 'Diana', 'Vega', 'Velazquez', '2005-12-30', 'Dianavega', 'vegavelazquez@outlook.com', '1234', 'perfil.png', 'Activo', 3, 2, 6, 1, 18),
(7, 'Jose Miguel', 'García', 'Rivera', '2005-12-12', 'JosDice', 'miguelriv@hotmail.com', '5054', 'perfil.png', 'Activo', 1, 1, 7, 3, 5),
(8, 'Natalia', 'Palacios', 'Flores', '2005-12-11', 'NatyD5', 'natpalacios@gmail.com', '101010', 'perfil.png', 'Activo', 1, 2, 8, 3, 9),
(9, 'Bryan', 'Villareal', 'Perez', '2003-12-19', 'BryMouque', 'brianperez@hotmail.com', '34567', 'perfil.png', 'Activo', 2, 1, 9, 2, 16),
(10, 'Alfredo', 'Pacheco', 'Leyva', '2003-12-31', 'Freddy01', 'leyvafr@outlook.com', '99898', 'perfil.png', 'Activo', 3, 1, 10, 4, 20),
(11, 'Alexa', 'Vazquez', 'Flores', '2004-12-05', 'AleF', 'alexa25@hotmail.com', '87654', 'perfil.png', 'Activo', 1, 2, 11, 1, 11),
(12, 'Frida', 'Martínez', 'Sanchez', '2003-12-24', 'Frida18', 'sanchezfri31@gmail.com', '678900', 'perfil.png', 'Activo', 2, 2, 12, 1, 7),
(13, 'Angelica', 'Mendoza', 'Fuentes', '2003-12-07', 'Angie05', 'angiemend3@outlook.com', '10987', 'perfil.png', 'Activo', 3, 2, 13, 3, 3),
(14, 'Daniel', 'Gómez', 'Villareal', '2020-12-01', 'DanGV', 'villadani34@gmail.com', '456789', 'perfil.png', 'Activo', 3, 1, 14, 3, 13),
(15, 'Diego', 'Villalpando', 'Camarena', '2020-12-02', 'DiR18', 'villaldiego@gmail.com', '87653', 'perfil.png', 'Activo', 1, 1, 15, 2, 15),
(16, 'Vanessa', 'Barrera', 'Monroy', '2020-12-14', 'VaneM9', 'monroym9@outlook.com', '88088', 'perfil.png', 'Activo', 2, 2, 16, 4, 17),
(17, 'Roberto', 'Mejía', 'Pérez', '2020-12-18', 'Roby_Mejia', 'robymp24@hotmail.com', '545454', 'perfil.png', 'Activo', 3, 1, 17, 1, 19),
(18, 'Danielle', 'Arciniegas', 'Franco', '2020-12-13', 'DaniArc', 'danielle97@hotmail.com', '5432', 'perfil.png', 'Activo', 1, 2, 18, 1, 6),
(19, 'Isabella', 'Castillo', 'Andrade', '2020-12-09', 'BellaCastillo', 'isac58@outlook.com', '789789', 'perfil.png', 'Activo', 2, 2, 19, 3, 2),
(20, 'María Gabriela', 'De Faría', 'Chacón', '2020-12-03', 'Mari_Faria16', 'faria28@gmail.com', '123123', 'perfil.png', 'Activo', 2, 2, 20, 3, 8),
(21, 'Mireya', 'López', 'Vazquez', '2020-12-16', 'mire189', 'mire45@gmail.com', 'hola123', 'perfil.png', 'Activo', 3, 2, 13, 2, 11),
(22, 'Jorge', 'Blanco', 'Vazquez', '2020-12-23', 'jorge', 'jorge@gmail.com', '123456', 'perfil.png', 'Activo', 1, 1, 9, 4, 8),
(23, 'Jose Luis', 'Chavez ', 'Gomez', '2020-12-25', 'Chavez', 'joseluis@gmail.com', 'chavezluis', 'perfil.png', 'Activo', 1, 1, 17, 1, 3),
(24, 'Ana', 'Martínez', 'Vazquez', '2021-01-21', 'ana05', 'ana@gmail.com', '12345', 'perfil.png', 'Activo', 3, 2, 13, 1, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `Id_Carrera` int(11) NOT NULL,
  `Nombre_Carrera` varchar(50) NOT NULL,
  `Codigo_C` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`Id_Carrera`, `Nombre_Carrera`, `Codigo_C`) VALUES
(1, 'Informatica', 'INFO08'),
(2, 'Contabilidad', 'CONT08'),
(3, 'Alimentos y Bebidas', 'ALBE08'),
(4, 'Hospitalidad Turistica', 'HOSP08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `Id_Genero` int(2) NOT NULL,
  `Nombre_G` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`Id_Genero`, `Nombre_G`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `Id_Grupo` int(11) NOT NULL,
  `Grupo` int(50) NOT NULL,
  `Id_Carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`Id_Grupo`, `Grupo`, `Id_Carrera`) VALUES
(1, 101, 3),
(2, 102, 3),
(3, 103, 2),
(4, 104, 4),
(5, 105, 1),
(6, 106, 1),
(7, 201, 3),
(8, 202, 3),
(9, 203, 2),
(10, 204, 4),
(11, 205, 1),
(12, 206, 1),
(13, 301, 3),
(14, 302, 3),
(15, 303, 2),
(16, 304, 4),
(17, 305, 1),
(18, 306, 1),
(19, 401, 3),
(20, 402, 3),
(21, 403, 2),
(22, 404, 4),
(23, 405, 1),
(24, 406, 1),
(25, 501, 3),
(26, 502, 3),
(27, 503, 2),
(28, 504, 4),
(29, 505, 1),
(30, 506, 1),
(31, 601, 3),
(32, 602, 3),
(33, 603, 2),
(34, 604, 4),
(35, 605, 1),
(36, 606, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantel`
--

CREATE TABLE `plantel` (
  `Id_Plantel` int(11) NOT NULL,
  `Nombre_Plantel` varchar(50) NOT NULL,
  `Codigo_Plantel` int(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plantel`
--

INSERT INTO `plantel` (`Id_Plantel`, `Nombre_Plantel`, `Codigo_Plantel`, `Direccion`) VALUES
(1, 'Naucalpan I', 187, 'Naucalpan de Juárez'),
(2, 'Naucalpan II', 188, 'Naucalpan de Juárez'),
(3, 'Huixquilucan', 181, 'Huixquilucan'),
(4, 'Atizapan I', 183, 'Atizapán de Zaragoza'),
(5, 'Atizapan II', 190, 'Atizapán de Zaragoza'),
(6, 'Ecatepec I', 191, 'Ecatepec de Morelos'),
(7, 'Ecatepec II', 192, 'Ecatapec de Morelos'),
(8, 'Ecatepec III', 193, 'Ecatepec de Morelos'),
(9, 'Tlalnepantla I', 174, 'Tlalnepantla de Baz'),
(10, 'Tlalnepantla II', 175, 'Tlalnepantla de Baz'),
(11, 'Tlalnepantla III', 176, 'Tlalnepantla de Baz'),
(12, 'Tultitlán', 178, 'Tultitlán'),
(13, 'Toluca', 180, 'Toluca de Lerdo'),
(14, 'Valle de Aragón', 165, 'Ecatepec de Morelos'),
(15, 'Cuatitlán', 189, 'Cuatitlán'),
(16, 'Chimalhuacán', 179, 'Chimalhuacán'),
(17, 'El Oro', 163, 'El Oro'),
(18, 'Nicolas Romero', 164, 'Nicolás Romero'),
(19, 'Chalco', 199, 'Chalco'),
(20, 'Coacalco', 166, 'Coacalco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `Id_Tusuario` int(11) NOT NULL,
  `Tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`Id_Tusuario`, `Tipo`) VALUES
(1, 'Administrativos'),
(2, 'Docentes'),
(3, 'Alumnos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Id_Alumno`),
  ADD KEY `Id_Tusuario` (`Id_Tusuario`),
  ADD KEY `Id_Genero` (`Id_Genero`),
  ADD KEY `Id_Grupo` (`Id_Grupo`),
  ADD KEY `Id_Carrera` (`Id_Carrera`),
  ADD KEY `Id_Plantel` (`Id_Plantel`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`Id_Carrera`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`Id_Genero`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`Id_Grupo`),
  ADD KEY `Id_Carrera` (`Id_Carrera`);

--
-- Indices de la tabla `plantel`
--
ALTER TABLE `plantel`
  ADD PRIMARY KEY (`Id_Plantel`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`Id_Tusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `Id_Alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `Id_Carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `Id_Grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `plantel`
--
ALTER TABLE `plantel`
  MODIFY `Id_Plantel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`Id_Tusuario`) REFERENCES `tipousuario` (`Id_Tusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`Id_Plantel`) REFERENCES `plantel` (`Id_Plantel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`Id_Grupo`) REFERENCES `grupos` (`Id_Grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_4` FOREIGN KEY (`Id_Carrera`) REFERENCES `carrera` (`Id_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_5` FOREIGN KEY (`Id_Genero`) REFERENCES `genero` (`Id_Genero`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`Id_Carrera`) REFERENCES `carrera` (`Id_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
