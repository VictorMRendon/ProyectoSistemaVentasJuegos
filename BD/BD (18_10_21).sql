-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2021 a las 21:49:05
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtiendajuegos`
--
CREATE DATABASE IF NOT EXISTS `bdtiendajuegos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdtiendajuegos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` char(1) NOT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Direccion` varchar(120) DEFAULT NULL,
  `TipoCliente` varchar(10) DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `idEmpleado` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` char(1) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Direccion` varchar(120) NOT NULL,
  `NivelAcceso` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `Nombre`, `Apellidos`, `FechaNacimiento`, `Sexo`, `Telefono`, `Direccion`, `NivelAcceso`) VALUES
(1, 'Victor Manuel', 'Rendon Garcia', '2001-01-05', 'M', '8672606190', 'Palmera 555', 2),
(2, 'Rene Alexis', 'Salinas de los Santos', '2000-05-25', 'M', '8674445566', 'Colosio 69', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE `factura` (
  `idFactura` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `NombreEmpleado` varchar(120) DEFAULT NULL,
  `Fecha` datetime DEFAULT current_timestamp(),
  `CodigoBarras` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Titulo` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `ImporteTotal` double NOT NULL,
  `Pago` double DEFAULT NULL,
  `IVA` double NOT NULL,
  `Cambio` double NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infocliente`
--

DROP TABLE IF EXISTS `infocliente`;
CREATE TABLE `infocliente` (
  `idInfoCliente` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoempleados`
--

DROP TABLE IF EXISTS `infoempleados`;
CREATE TABLE `infoempleados` (
  `idInfoEmpleado` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoproducto`
--

DROP TABLE IF EXISTS `infoproducto`;
CREATE TABLE `infoproducto` (
  `idInfoProducto` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `CodigoBarras` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `Desarrolladora` varchar(45) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Presentacion` varchar(25) NOT NULL,
  `Plataforma` varchar(30) NOT NULL,
  `Precio` double NOT NULL
) ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CodigoBarras`, `Titulo`, `FechaPublicacion`, `Desarrolladora`, `Stock`, `Presentacion`, `Plataforma`, `Precio`) VALUES
(1000, 'Star Wars Jedi: Fallen Order', '2019-11-10', 'Respawn Entertainment', 1, 'DIGITAL', 'Play Station 5', 660);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_empleadousuario`
--

DROP TABLE IF EXISTS `rel_empleadousuario`;
CREATE TABLE `rel_empleadousuario` (
  `idRel_EmpleadoUsuario` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Contrasena` varchar(45) NOT NULL,
  `NivelAcceso` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Email`, `Contrasena`, `NivelAcceso`) VALUES
(1, 'Administrador', 'admi', 'admi1234', 1),
(2, 'Victor Rendon', 'admiV', 'admiV1234', 2),
(3, 'Rene Salinas', 'admiR', 'admiR1234', 2),
(4, 'Manuel Garcia', 'gerenteM', 'gerenteM1234', 3),
(5, 'Alexis Santos', 'gerenteA', 'gerenteA1234', 3),
(6, 'Victor Santos', 'cajeroV', 'cajeroV1234', 4),
(7, 'Rene Rendon', 'cajeroR', 'cajeroR1234', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`);

--
-- Indices de la tabla `infocliente`
--
ALTER TABLE `infocliente`
  ADD PRIMARY KEY (`idInfoCliente`),
  ADD KEY `Fk_InfoClientes` (`idCliente`),
  ADD KEY `Fk_InfoFacturaCliente` (`idFactura`);

--
-- Indices de la tabla `infoempleados`
--
ALTER TABLE `infoempleados`
  ADD PRIMARY KEY (`idInfoEmpleado`),
  ADD KEY `Fk_InfoEmpleados` (`idEmpleado`),
  ADD KEY `Fk_InfoFactura` (`idFactura`);

--
-- Indices de la tabla `infoproducto`
--
ALTER TABLE `infoproducto`
  ADD PRIMARY KEY (`idInfoProducto`),
  ADD KEY `Fk_InfoProductos` (`idProducto`),
  ADD KEY `Fk_InfoFacturaProducto` (`idFactura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`CodigoBarras`);

--
-- Indices de la tabla `rel_empleadousuario`
--
ALTER TABLE `rel_empleadousuario`
  ADD PRIMARY KEY (`idRel_EmpleadoUsuario`),
  ADD KEY `Fk_Usuarios` (`idUsuario`),
  ADD KEY `Fk_Empleados` (`idEmpleado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infocliente`
--
ALTER TABLE `infocliente`
  MODIFY `idInfoCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infoempleados`
--
ALTER TABLE `infoempleados`
  MODIFY `idInfoEmpleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infoproducto`
--
ALTER TABLE `infoproducto`
  MODIFY `idInfoProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `infocliente`
--
ALTER TABLE `infocliente`
  ADD CONSTRAINT `Fk_InfoClientes` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `Fk_InfoFacturaCliente` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`idFactura`);

--
-- Filtros para la tabla `infoempleados`
--
ALTER TABLE `infoempleados`
  ADD CONSTRAINT `Fk_InfoEmpleados` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`),
  ADD CONSTRAINT `Fk_InfoFactura` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`idFactura`);

--
-- Filtros para la tabla `infoproducto`
--
ALTER TABLE `infoproducto`
  ADD CONSTRAINT `Fk_InfoFacturaProducto` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`idFactura`),
  ADD CONSTRAINT `Fk_InfoProductos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`CodigoBarras`);

--
-- Filtros para la tabla `rel_empleadousuario`
--
ALTER TABLE `rel_empleadousuario`
  ADD CONSTRAINT `Fk_Empleados` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`),
  ADD CONSTRAINT `Fk_Usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
