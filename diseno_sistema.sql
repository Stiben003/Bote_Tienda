-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 08:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diseno_sistema`
--

-- --------------------------------------------------------

--
-- Table structure for table `bitacora_mantenimiento`
--

CREATE TABLE `bitacora_mantenimiento` (
  `codbitacora` int(11) NOT NULL,
  `codmantenimiento` int(11) NOT NULL,
  `codequipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `codcliente` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefeno` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `experiencia` varchar(150) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

CREATE TABLE `equipos` (
  `codequipo` int(11) NOT NULL,
  `codtipo_equipo` int(11) NOT NULL,
  `codpropietario` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `codmantenimiento` int(11) NOT NULL,
  `codtipo_mant` int(11) NOT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `valor_mantenimiento` varchar(20) DEFAULT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `propietario`
--

CREATE TABLE `propietario` (
  `codpropietario` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefeno` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `experiencia` varchar(150) DEFAULT NULL,
  `estado` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `propietario`
--

INSERT INTO `propietario` (`codpropietario`, `nombre`, `direccion`, `telefeno`, `fecha_nacimiento`, `experiencia`, `estado`) VALUES
(1, 'Jose Tejada', 'La Vega, Villa Flores', '8098554242', '2018-07-17', 'Ninguna', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_equipo`
--

CREATE TABLE `tipo_equipo` (
  `codtipo_equipo` int(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_mantenimiento`
--

CREATE TABLE `tipo_mantenimiento` (
  `codtipo_mant` int(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tripulacion`
--

CREATE TABLE `tripulacion` (
  `codtribulacion` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `telefeno` varchar(20) DEFAULT NULL,
  `num_horas` varchar(20) DEFAULT NULL,
  `valor_hora` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `viajes`
--

CREATE TABLE `viajes` (
  `codviaje` int(11) NOT NULL,
  `valor_viaje` varchar(20) DEFAULT NULL,
  `ruta_viaje` varchar(20) DEFAULT NULL,
  `codcliente` int(11) NOT NULL,
  `codequipo` int(11) NOT NULL,
  `codtribulacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bitacora_mantenimiento`
--
ALTER TABLE `bitacora_mantenimiento`
  ADD PRIMARY KEY (`codbitacora`),
  ADD KEY `codequipo` (`codequipo`),
  ADD KEY `codmantenimiento` (`codmantenimiento`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codcliente`);

--
-- Indexes for table `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`codequipo`),
  ADD KEY `codpropietario` (`codpropietario`),
  ADD KEY `codtipo_equipo` (`codtipo_equipo`);

--
-- Indexes for table `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`codmantenimiento`),
  ADD KEY `codtipo_mant` (`codtipo_mant`);

--
-- Indexes for table `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`codpropietario`);

--
-- Indexes for table `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  ADD PRIMARY KEY (`codtipo_equipo`);

--
-- Indexes for table `tipo_mantenimiento`
--
ALTER TABLE `tipo_mantenimiento`
  ADD PRIMARY KEY (`codtipo_mant`);

--
-- Indexes for table `tripulacion`
--
ALTER TABLE `tripulacion`
  ADD PRIMARY KEY (`codtribulacion`);

--
-- Indexes for table `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`codviaje`),
  ADD KEY `codequipo` (`codequipo`),
  ADD KEY `codcliente` (`codcliente`),
  ADD KEY `codtribulacion` (`codtribulacion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codcliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipos`
--
ALTER TABLE `equipos`
  MODIFY `codequipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `codmantenimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propietario`
--
ALTER TABLE `propietario`
  MODIFY `codpropietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  MODIFY `codtipo_equipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_mantenimiento`
--
ALTER TABLE `tipo_mantenimiento`
  MODIFY `codtipo_mant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tripulacion`
--
ALTER TABLE `tripulacion`
  MODIFY `codtribulacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `viajes`
--
ALTER TABLE `viajes`
  MODIFY `codviaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bitacora_mantenimiento`
--
ALTER TABLE `bitacora_mantenimiento`
  ADD CONSTRAINT `bitacora_mantenimiento_ibfk_1` FOREIGN KEY (`codequipo`) REFERENCES `equipos` (`codequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bitacora_mantenimiento_ibfk_2` FOREIGN KEY (`codmantenimiento`) REFERENCES `mantenimiento` (`codmantenimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`codpropietario`) REFERENCES `propietario` (`codpropietario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `equipos_ibfk_2` FOREIGN KEY (`codtipo_equipo`) REFERENCES `tipo_equipo` (`codtipo_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `mantenimiento_ibfk_1` FOREIGN KEY (`codtipo_mant`) REFERENCES `tipo_mantenimiento` (`codtipo_mant`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `viajes`
--
ALTER TABLE `viajes`
  ADD CONSTRAINT `viajes_ibfk_1` FOREIGN KEY (`codequipo`) REFERENCES `equipos` (`codequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `viajes_ibfk_2` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `viajes_ibfk_3` FOREIGN KEY (`codtribulacion`) REFERENCES `tripulacion` (`codtribulacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
