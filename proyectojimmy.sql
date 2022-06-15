-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 21:43:44
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectojimmy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseo`
--

CREATE TABLE `aseo` (
  `id` int(150) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `cantidad` int(200) NOT NULL,
  `precio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aseo`
--

INSERT INTO `aseo` (`id`, `nombre`, `img`, `cantidad`, `precio`) VALUES
(0, 'Clorox 530 ml', 0x6465636f6c5f636c6f726f782e706e67, 80, '1400'),
(0, 'Suavizante Suavitel', 0x646574657267656e74655f737561766974656c2e706e67, 100, '5190'),
(0, 'Esponja', 0x6573706f6e6a61732e706e67, 20, '5590'),
(0, 'Top Terra', 0x6a61626f6e5f746f7074657272612e706e67, 32, '19950'),
(0, 'Lavaplatos Salvo', 0x6a61626f6e2d6c69717569646f5f73616c766f2e706e67, 30, '6000'),
(0, 'Lavaloza Axion 450 Gr Limon', 0x6a61626f6e2d6c6f7a615f6469636f6178696f6e2e706e67, 47, '1300'),
(0, 'Detergente Fab Polvo', 0x6a61626f6e706f6c766f5f6661622e706e67, 70, '18500'),
(0, 'Limpia Pisos Fabuloso', 0x6c696d7069612d7069736f735f666162756c6f736f2e706e67, 120, '9200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseo_personal`
--

CREATE TABLE `aseo_personal` (
  `id` int(150) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `cantidad` int(100) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aseo_personal`
--

INSERT INTO `aseo_personal` (`id`, `nombre`, `img`, `cantidad`, `precio`) VALUES
(1, 'Acondicionador Pantene', 0x61636f6e646963696f6e61646f725f70616e74656e652e706e67, 145, 19800),
(2, 'Crema Corporal Nivea', 0x6372656d612d636f72706f72616c5f6e697665612e706e67, 32, 30376),
(3, 'Crema Dental Colgate', 0x6372656d612d64656e74616c5f636f6c676174652e706e67, 50, 8600),
(4, 'Desodorante Rexona', 0x6465736f646f72616e74655f7265786f6e612e706e67, 43, 12500),
(5, 'Cuchilla Afeitar Gillette', 0x70726573746f62617262615f67696c6c657474652e706e67, 43, 14500),
(6, 'Shampoo Head & Shoulders', 0x7368616d706f6f5f686561642673686f756c646572732e706e67, 67, 14000),
(7, 'Talco Cero', 0x74616c636f5f6365726f2e706e67, 38, 7000),
(8, 'Yodora', 0x796f646f72612e706e67, 52, 9500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(150) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `cantidad` int(100) NOT NULL,
  `precio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre`, `img`, `cantidad`, `precio`) VALUES
(1, 'Agua Emaya', 0x616775615f656d6179c3a12e706e67, 20, '350'),
(2, 'Boka', 0x626f6b612e706e67, 150, '500'),
(3, 'Cocacola', 0x636f6361636f6c612e706e67, 180, '3600'),
(4, 'Frutiño', 0x6672757469c3b16f2e706e67, 123, '500'),
(5, 'Gaseosa  Colasol', 0x6b6f6c61736f6c2e706e67, 30, '4500'),
(6, 'Panelada', 0x70616e656c6164612e706e67, 100, '1000'),
(7, 'Pony malta', 0x706f6e796d616c74612e706e67, 189, '2000'),
(8, 'Suntea', 0x73756e7465612e706e67, 56, '900');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carnicos`
--

CREATE TABLE `carnicos` (
  `id` int(150) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `cantidad` int(100) NOT NULL,
  `precio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carnicos`
--

INSERT INTO `carnicos` (`id`, `nombre`, `img`, `cantidad`, `precio`) VALUES
(3, 'Chorizo Porchi', 0x63686f72697a6f2e706e67, 60, '18300'),
(4, 'Longanizas Las brisas', 0x6c6f6e67616e697a61732e706e67, 60, '8200'),
(5, 'Salchichas Rancheras', 0x73616c6368695f72616e63686572612e706e67, 8, '3700'),
(7, 'Salchichon Cervecero', 0x73616c63686963686f6e5f63657276656365726f2e706e67, 20, '17900');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `golosinas`
--

CREATE TABLE `golosinas` (
  `id` int(150) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `cantidad` int(100) NOT NULL,
  `precio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `golosinas`
--

INSERT INTO `golosinas` (`id`, `nombre`, `img`, `cantidad`, `precio`) VALUES
(1, 'bonbonbum', 0x626f6e626f6e62756d2e706e67, 100, '300'),
(2, 'Cheetos', 0x63686565746f732e706e67, 100, '2000'),
(3, 'Chokis', 0x63686f6b69732e706e67, 100, '1500'),
(4, 'Detodito', 0x6465746f6469746f2e706e67, 100, '2200'),
(5, 'Fruticas', 0x66727574696361732e706e67, 100, '100'),
(6, 'Halls', 0x68616c6c732e706e67, 200, '1200'),
(7, 'Jet', 0x6a65742e706e67, 100, '600'),
(8, 'Manimoto', 0x6d616e696d6f746f2e706e67, 80, '1200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grano`
--

CREATE TABLE `grano` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `cantidad` int(100) NOT NULL,
  `precio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grano`
--

INSERT INTO `grano` (`id`, `nombre`, `img`, `cantidad`, `precio`) VALUES
(1, 'Almendras', 0x616c6d656e647261732e706e67, 60, '14900'),
(2, 'Arroz Diana', 0x6172726f7a5f6469616e612e706e67, 300, '18590'),
(3, 'Frijol Diana', 0x6672696a6f6c65735f6469616e612e706e67, 200, '5990'),
(4, 'Avena  en Hojuelas', 0x686f726a75656c61735f7175616b65722e706e67, 70, '2450'),
(5, 'Lentejas  Diana', 0x6c656e74656a61735f6469616e612e706e67, 200, '5300'),
(6, 'Maiz Pira', 0x6d61697a5f706972612e706e67, 80, '2400'),
(7, 'Maiz ', 0x6d61697a5f746965726e6f2e706e67, 50, '9300'),
(8, 'Garbanzos Diana', 0x67617262616e7a6f735f6469616e612e706e67, 200, '3890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lacteos`
--

CREATE TABLE `lacteos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `cantidad` int(150) NOT NULL,
  `precio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lacteos`
--

INSERT INTO `lacteos` (`id`, `nombre`, `img`, `cantidad`, `precio`) VALUES
(1, 'Leche Alqueria entera', 0x616c7175657269615f656e742d6372656d2e706e67, 50, '5390'),
(2, 'Arequipe Colanta', 0x61726571756970655f636f6c616e74612e706e67, 50, '6190'),
(3, 'Avena Alpina', 0x6176656e615f616c70696e612e706e67, 60, '5700'),
(4, 'Leche KLIM', 0x6e6573746c655f4b4c494d2e706e67, 40, '32800'),
(5, 'La Lechera', 0x6e6573746c655f6c65636865636f6e2e706e67, 10, '35500'),
(6, 'Queso Alpina', 0x717565736f5f616c70696e612e706e67, 20, '20900'),
(7, 'Mantequilla Rama', 0x72616d615f6d616e74657175696c6c612e706e67, 30, '8790'),
(8, 'Yogur Alpina', 0x796f677572745f616c70696e612e706e67, 35, '2800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `img` longblob NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `nombre`, `img`, `cantidad`, `precio`) VALUES
(1, 'Acetaminofen', 0x61636574616d656e746f732e706e67, 20, 2000),
(2, 'Aspirina 100Mg Tableta', 0x6173706972696e612e706e67, 35, 13600),
(3, 'Bonfiest Plus Caja', 0x626f6e66696573742e706e67, 22, 19250),
(4, 'Dolex ', 0x646f6c65782e706e67, 9, 22650),
(5, 'Lomotil', 0x6c6f6d6f74696c2e706e67, 4, 14100),
(6, 'Noxpirin Plus', 0x6e6f78706972696e2e706e67, 8, 10200),
(7, 'Sevedol Extra 250Mg', 0x73657665646f6c2e706e67, 17, 11500),
(8, 'Advil Max X10 Caps', 0x616476696c2e706e67, 18, 11800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombre`, `contraseña`) VALUES
(7777, 'lucas ', 'natis '),
(1109264815, 'francisco ', '0505 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aseo_personal`
--
ALTER TABLE `aseo_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carnicos`
--
ALTER TABLE `carnicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `golosinas`
--
ALTER TABLE `golosinas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grano`
--
ALTER TABLE `grano`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lacteos`
--
ALTER TABLE `lacteos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aseo_personal`
--
ALTER TABLE `aseo_personal`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `carnicos`
--
ALTER TABLE `carnicos`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `golosinas`
--
ALTER TABLE `golosinas`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `grano`
--
ALTER TABLE `grano`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `lacteos`
--
ALTER TABLE `lacteos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
