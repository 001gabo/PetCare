-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2017 a las 00:10:46
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbpetcare`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_cita` (IN `fecha` DATE, IN `hora` TIME, IN `ID` INT)  NO SQL
UPDATE `cita` SET `Fecha` = fecha, `Hora` = hora WHERE `idCita` = ID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_producto` (IN `IDProducto` INT(11), IN `nombre` VARCHAR(100), IN `imagen` VARCHAR(8000), IN `descripcion` VARCHAR(200), IN `preciocompra` DECIMAL(10,2), IN `precioventa` DECIMAL(10,2), IN `stockactual` VARCHAR(45), IN `stockminimo` VARCHAR(45), IN `stockmax` VARCHAR(45), IN `fechaventimiento` DATE, IN `idcategoria` INT(11), IN `idproveedor` INT(11))  MODIFIES SQL DATA
update producto set producto.Nombre=nombre, producto.imagen=imagen, producto.Descripcion=descripcion, producto.PrecioCompra=preciocompra, producto.PrecioVenta=precioventa, producto.StockActual=stockactual, producto.StockMinimo=stockminimo, producto.StockMax=stockmax, producto.FechaVencimiento=fechavencimiento, producto.idCategoria=idcategoria, producto.idProveedor=idproveedor where producto.idProducto=IDProducto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_cita` (IN `ID` INT)  NO SQL
DELETE FROM `cita` WHERE `cita`.`idCita` = ID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_producto` (IN `IDProducto` INT(11))  MODIFIES SQL DATA
delete from producto WHERE producto.idProducto=IDProducto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_cita` (IN `fecha` DATE, IN `hora` TIME, IN `servicio` INT, IN `mascota` INT, IN `usuario` INT, IN `encargado` INT)  NO SQL
INSERT INTO `cita` ( `idCita`,`Fecha`, `Hora`, `idServicio`, `idMascota`, `idUsuario`, `idEncargado`) VALUES (NULL,fecha, hora, servicio, mascota, usuario, encargado)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_producto` (IN `nombre` VARCHAR(100), IN `imagen` VARCHAR(8000), IN `descripcion` VARCHAR(200), IN `preciocompra` DECIMAL(10,2), IN `precioventa` DECIMAL(10,2), IN `stockactual` VARCHAR(45), IN `stockminimo` VARCHAR(45), IN `stockmaximo` VARCHAR(45), IN `fechavencimiento` DATE, IN `idcategoria` INT(11), IN `idproveedor` INT(11))  MODIFIES SQL DATA
insert into producto (Nombre,imagen,Descripcion,PrecioCompra,PrecioVenta,StockActual,StockMinimo,StockMax,FechaVencimiento,idCategoria,idProveedor) values(nombre,imagen,descripcion,preciocompra,precioventa,stockactual,stockminimo,stockmaximo,fechavencimiento,idcategoria,idproveedor)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_categorias` ()  READS SQL DATA
select categoria.idCategoria,categoria.Nombre from categoria$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_citasprogramadasc` (IN `ID` INT)  NO SQL
SELECT *
FROM cita
INNER JOIN servicio 
ON cita.idServicio=servicio.idServicio
INNER JOIN mascota
ON cita.idMascota=mascota.idMascota
INNER JOIN usuario
ON cita.idEncargado=usuario.idUsuario
WHERE ID = cita.idUsuario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_citasprogramadase` (IN `ID` INT)  NO SQL
SELECT *
FROM cita
INNER JOIN servicio 
ON cita.idServicio=servicio.idServicio
INNER JOIN mascota
ON cita.idMascota=mascota.idMascota
INNER JOIN usuario
ON cita.idUsuario=usuario.idUsuario
WHERE ID = cita.idEncargado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_citasprogramadasr` ()  NO SQL
SELECT *
FROM cita
INNER JOIN servicio 
ON cita.idServicio=servicio.idServicio 
INNER JOIN usuario 
ON cita.idUsuario=usuario.idUsuario
INNER JOIN mascota 
ON cita.idMascota=mascota.idMascota$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_cita_individual` (IN `ID` INT)  NO SQL
SELECT * FROM cita WHERE ID = idCita$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_empleadoscita` ()  NO SQL
SELECT Nombres,idUsuario FROM usuario WHERE idRol = 2$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_mascota` (IN `ID` INT)  NO SQL
SELECT * FROM mascota WHERE id = idUsuario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_mascotaE` ()  NO SQL
SELECT * FROM mascota$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_nombremascota` (IN `ID` INT)  NO SQL
SELECT Nombre,idMascota FROM mascota WHERE ID = idUsuario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_productos` ()  READS SQL DATA
select * from producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_productos_individual` (IN `IDProducto` INT(11))  READS SQL DATA
select * from producto WHERE producto.idProducto=IDProducto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_proveedores` ()  READS SQL DATA
select proveedor.idProveedor,proveedor.NombreEmpresa from proveedor$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_serviciocitas` ()  NO SQL
SELECT * FROM servicio$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `Nombre`, `Descripcion`) VALUES
(1, 'Crema', 'Aplicación en la piel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `idServicio` int(11) DEFAULT NULL,
  `idMascota` int(11) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `idEncargado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `idDetalle` int(11) NOT NULL,
  `idFactura` int(11) DEFAULT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  `Cantidad` varchar(45) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Especie` varchar(100) DEFAULT NULL,
  `Raza` varchar(100) DEFAULT NULL,
  `Observaciones` varchar(250) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `Nombre`, `Especie`, `Raza`, `Observaciones`, `idUsuario`) VALUES
(7, 'Canelo', 'Perro', 'Aguacatero', 'Perro valiente, nunca se enferma', 2),
(8, 'Mincho', 'Gato', 'Angora', 'Gato saludable', 9),
(10, 'marvin', 'perro', 'Doberman', 'Esta Excelente', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `imagen` varchar(8000) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `PrecioCompra` decimal(10,2) DEFAULT NULL,
  `PrecioVenta` decimal(10,2) DEFAULT NULL,
  `StockActual` varchar(45) DEFAULT NULL,
  `StockMinimo` varchar(45) DEFAULT NULL,
  `StockMax` varchar(45) DEFAULT NULL,
  `FechaVencimiento` date DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idProveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `Nombre`, `imagen`, `Descripcion`, `PrecioCompra`, `PrecioVenta`, `StockActual`, `StockMinimo`, `StockMax`, `FechaVencimiento`, `idCategoria`, `idProveedor`) VALUES
(2, 'Aspirina 50mg', './images/bote.jpg', 'Aspirina para animales', '12.00', '15.00', '50', '5', '50', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `NombreEmpresa` varchar(150) DEFAULT NULL,
  `NombreContacto` varchar(100) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Correo` varchar(150) DEFAULT NULL,
  `PaginaWeb` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `NombreEmpresa`, `NombreContacto`, `Direccion`, `Telefono`, `Correo`, `PaginaWeb`) VALUES
(1, ' Stanvet', 'Javier Rodriguez', 'Av. El Cerron Grande #233', '22785886', 'ventas@stavet.com', 'www.stanvet.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRoles` int(11) NOT NULL,
  `RolTipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRoles`, `RolTipo`) VALUES
(1, 'cliente'),
(2, 'empleado'),
(3, 'root');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `Nombre_Servicio` varchar(100) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `Nombre_Servicio`, `Precio`) VALUES
(1, 'Corte de Pelo', '5.00'),
(2, 'Consulta General', '5.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Nombres` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Nom_ Usuario` varchar(100) DEFAULT NULL,
  `usuarioClave` varchar(50) DEFAULT NULL,
  `Direccion` varchar(250) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `idRol` int(11) DEFAULT NULL,
  `usuarioCorreo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombres`, `Apellidos`, `Nom_ Usuario`, `usuarioClave`, `Direccion`, `Telefono`, `idUsuario`, `idRol`, `usuarioCorreo`) VALUES
('Biron', 'Ayala ', 'biron', '25d55ad283aa400af464c76d713c07ad', 'San Salvador', '22222222', 2, 1, 'cliente@gmail.com'),
('Jose Manuel', 'Ayala', 'ayala', '25d55ad283aa400af464c76d713c07ad', 'San Salvador', '22222222', 9, 1, 'cliente1@gmail.com'),
('Marvin', 'Rosa', 'marosa', '25d55ad283aa400af464c76d713c07ad', 'Soyapango', '2225875', 27, 3, 'admin@gmail.com'),
('Juan', 'Ventura', NULL, '25d55ad283aa400af464c76d713c07ad', NULL, NULL, 28, 2, 'jventura@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `idVeterinario` int(11) NOT NULL,
  `Nombres` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Especialidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `FK_cita_2` (`idMascota`),
  ADD KEY `FK_cita_3` (`idServicio`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`idDetalle`),
  ADD KEY `FK_detalle_1` (`IdProducto`),
  ADD KEY `FK_detalle_2` (`idFactura`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `FK_factura_1` (`idUsuario`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `FK_producto_1` (`idProveedor`),
  ADD KEY `FK_producto_2` (`idCategoria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRoles`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `FK_usuario_2` (`idRol`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`idVeterinario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRoles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `idVeterinario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `FK_cita_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `FK_cita_2` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`),
  ADD CONSTRAINT `FK_cita_3` FOREIGN KEY (`idServicio`) REFERENCES `servicio` (`idServicio`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `FK_detalle_1` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`idProducto`),
  ADD CONSTRAINT `FK_detalle_2` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`idFactura`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_factura_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_producto_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`),
  ADD CONSTRAINT `FK_producto_2` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_2` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRoles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
