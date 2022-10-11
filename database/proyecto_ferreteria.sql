-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2022 a las 07:05:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_ferreteria`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarProducto` (IN `id_producto` INT)  NO SQL
BEGIN
	SELECT * FROM producto WHERE pro_id = id_producto;
END$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `TotalProductos` () RETURNS FLOAT BEGIN RETURN (SELECT SUM((p.pro_precio_unidad*p.pro_cantidad)-(dv.det_ven_precio*dv.det_ven_cantidad))
                      FROM producto AS p INNER JOIN detalle_venta AS dv ON dv.producto_id=p.pro_id);
	END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `adm_id` int(11) NOT NULL,
  `tipo_documento_id` int(11) NOT NULL,
  `adm_nombre` varchar(50) NOT NULL,
  `adm_apellido` varchar(50) NOT NULL,
  `adm_celular` int(10) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `adm_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`adm_id`, `tipo_documento_id`, `adm_nombre`, `adm_apellido`, `adm_celular`, `usuario_id`, `adm_estado`) VALUES
(1, 2, 'nombre01', 'apellido01', 7, 7, 0),
(2, 2, 'nombre02', 'apellido02', 8, 8, 1),
(3, 2, 'nombre03', 'apellido03', 9, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(50) NOT NULL,
  `cat_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nombre`, `cat_estado`) VALUES
(1, 'Adhesivos', 1),
(2, 'Maderas y Herrajes', 1),
(3, 'Plomería y tubería ', 1),
(4, 'Electricidad, Cables y Alambre', 1),
(5, 'Escaleras, trabajo en alturas', 1),
(6, 'Protección Personal (EPP) y Señalización', 0),
(7, 'Tejas, Cielo Raso, Drywall', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `tipo_documento_id` int(11) NOT NULL,
  `cli_nombre` varchar(50) NOT NULL,
  `cli_apellido` varchar(50) NOT NULL,
  `cli_celular` int(10) NOT NULL,
  `cli_direccion` varchar(30) NOT NULL,
  `cli_estado` tinyint(1) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cli_id`, `tipo_documento_id`, `cli_nombre`, `cli_apellido`, `cli_celular`, `cli_direccion`, `cli_estado`, `usuario_id`) VALUES
(1, 1, 'nombre01', 'apellido01', 1, '1', 1, 1),
(2, 2, 'nombre02', 'apellido02', 2, '2', 1, 2),
(3, 2, 'nombre03', 'apellido03', 3, '3', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `det_ven_id` int(11) NOT NULL,
  `det_ven_cantidad` int(11) NOT NULL,
  `det_ven_precio` double NOT NULL,
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`det_ven_id`, `det_ven_cantidad`, `det_ven_precio`, `venta_id`, `producto_id`) VALUES
(1, 10, 0, 1, 1),
(2, 1, 0, 1, 7),
(3, 10, 0, 1, 5),
(4, 2, 0, 1, 6),
(5, 2, 0, 2, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `pro_id` int(11) NOT NULL,
  `pro_nombre` varchar(50) NOT NULL,
  `pro_cantidad` int(11) NOT NULL,
  `pro_imagen` varchar(5000) NOT NULL,
  `pro_precio_unidad` double NOT NULL,
  `pro_peso` varchar(10) DEFAULT NULL,
  `pro_medidas` varchar(50) DEFAULT NULL,
  `pro_fecha_caducidad` date DEFAULT NULL,
  `pro_caracteristicas` varchar(1000) DEFAULT NULL,
  `pro_estado` tinyint(1) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`pro_id`, `pro_nombre`, `pro_cantidad`, `pro_imagen`, `pro_precio_unidad`, `pro_peso`, `pro_medidas`, `pro_fecha_caducidad`, `pro_caracteristicas`, `pro_estado`, `categoria_id`) VALUES
(1, 'Sikaflex 221 Blanco', 100, '', 48456, '300 ml', NULL, '2026-07-16', 'Sikaflex®-221 es un adhesivo de poliuretano, monocomponente multipropósito de alta calidad que no escurre. Cura por exposición a la humedad atmosférica para formar un elastómero durable. Está aprobado por la normas tipos ASTM C920 estadounidenses y Especificaciones Federales TT-S-00230C.', 1, 1),
(2, 'Abrazadera ', 1000, '', 480, NULL, '1/4 ', NULL, 'Acero Al Carbon Titan', 1, 2),
(5, 'Codo Reducido', 1000, '', 1533, NULL, '3/4 x 1/2', NULL, 'Galvanizado Stanprof', 1, 3),
(6, 'Interruptor Sencillo', 500, '', 6651, NULL, NULL, NULL, 'Gálica 2 Blanca', 1, 4),
(7, 'Escalera Aluminio Tijera 3 Peldaños', 50, '', 250519, NULL, '1.22 Mts', NULL, 'Bstl-4 Tipo Iii 90kg (Verde) Escalumex', 0, 5),
(8, 'Guante Carnaza Manga Corta', 50, '', 6303, NULL, NULL, NULL, 'Protección en la muñeca\r\nResistencia a la abrasión\r\nColor: Gris\r\nRefuerzo en Vaqueta, palma y dedos\r\nMaterial: Carnaza y vaqueta\r\nManga: Corta\r\nLongitud: 9,5”\r\nCalibre: 0.9 mm', 1, 6),
(9, 'Soporte Del Bajante Redondo', 1000, '', 2839, NULL, NULL, NULL, '2006053 Durman', 1, 7),
(16, 'Tonillo', 1000, '../img/productos/tornillo.jpg', 100, '1', '1', '0000-00-00', '', 1, 2),
(17, 'Martillo', 200, '../img/productos/Martillo.jpg', 15000, '', '', '0000-00-00', 'Martillo', 1, 3);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `productos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `productos` (
`pro_nombre` varchar(50)
,`pro_cantidad` int(11)
,`pro_precio_unidad` double
,`pro_peso` varchar(10)
,`pro_medidas` varchar(50)
,`pro_fecha_caducidad` date
,`pro_caracteristicas` varchar(1000)
,`pro_estado` tinyint(1)
,`cat_nombre` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `tip_doc_id` int(11) NOT NULL,
  `tip_doc_nombre` varchar(30) NOT NULL,
  `tip_doc_siglas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`tip_doc_id`, `tip_doc_nombre`, `tip_doc_siglas`) VALUES
(1, 'Tarjeta de identidad', 'TI'),
(2, 'Cedula de Ciudadanía ', 'CC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tip_usu_id` int(11) NOT NULL,
  `tip_usu_nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`tip_usu_id`, `tip_usu_nombre`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_foto` varchar(5000) NOT NULL,
  `usu_email` varchar(50) NOT NULL,
  `usu_contrasena` varchar(30) NOT NULL,
  `tipo_usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_foto`, `usu_email`, `usu_contrasena`, `tipo_usuario_id`) VALUES
(1, '', 'usu01@gmail.com', 'usu01', 2),
(2, '', 'usu02@gmail.com', 'usu02', 2),
(3, '', 'usu03@gmail.com', 'usu03', 2),
(4, '', 'usu04@gmail.com', 'usu04', 3),
(5, '', 'usu05@gmail.com', 'usu05', 3),
(6, '', 'usu06@gmail.com', 'usu06', 3),
(7, '', 'usu07@gmail.com', 'usu07', 1),
(8, '', 'usu08@gmail.com', 'usu08', 1),
(9, '', 'usu09@gmail.com', 'usu09', 1),
(10, '', 'brandon@gmail.com', '12345', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `ven_id` int(11) NOT NULL,
  `tipo_documento_id` int(11) NOT NULL,
  `ven_nombre` varchar(50) NOT NULL,
  `ven_apellido` varchar(50) NOT NULL,
  `ven_celular` int(10) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `vend_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`ven_id`, `tipo_documento_id`, `ven_nombre`, `ven_apellido`, `ven_celular`, `usuario_id`, `vend_estado`) VALUES
(1, 2, 'nombre01', 'apellido01', 4, 4, 1),
(2, 2, 'nombre02', 'apellido02', 5, 5, 0),
(3, 2, 'nombre03', 'apellido03', 6, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ven_id` int(11) NOT NULL,
  `ven_fecha` date NOT NULL,
  `ven_monto` double NOT NULL,
  `ven_estado` varchar(30) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `vendedor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`ven_id`, `ven_fecha`, `ven_monto`, `ven_estado`, `id_cliente`, `vendedor_id`) VALUES
(1, '2022-08-02', 0, '', 1, 1),
(2, '2022-07-13', 0, '', 2, 2);

-- --------------------------------------------------------

--
-- Estructura para la vista `productos`
--
DROP TABLE IF EXISTS `productos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productos`  AS  select `p`.`pro_nombre` AS `pro_nombre`,`p`.`pro_cantidad` AS `pro_cantidad`,`p`.`pro_precio_unidad` AS `pro_precio_unidad`,`p`.`pro_peso` AS `pro_peso`,`p`.`pro_medidas` AS `pro_medidas`,`p`.`pro_fecha_caducidad` AS `pro_fecha_caducidad`,`p`.`pro_caracteristicas` AS `pro_caracteristicas`,`p`.`pro_estado` AS `pro_estado`,`ca`.`cat_nombre` AS `cat_nombre` from (`producto` `p` join `categoria` `ca` on((`p`.`categoria_id` = `ca`.`cat_id`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`adm_id`),
  ADD KEY `adm_tipo_documento_id` (`tipo_documento_id`),
  ADD KEY `adm_usuario_id` (`usuario_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`),
  ADD KEY `cli_tipo_documento_id` (`tipo_documento_id`),
  ADD KEY `cli_usuario_id` (`usuario_id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`det_ven_id`),
  ADD KEY `det_ven_venta_id` (`venta_id`),
  ADD KEY `det_ven_producto_id` (`producto_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_categoria_id` (`categoria_id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`tip_doc_id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tip_usu_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD UNIQUE KEY `usu_email` (`usu_email`),
  ADD UNIQUE KEY `usu_contrasena` (`usu_contrasena`),
  ADD KEY `tipo_usuario_id` (`tipo_usuario_id`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `vend_tipo_documento_id` (`tipo_documento_id`),
  ADD KEY `vend_usuario_id` (`usuario_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `ven_vendedor_id` (`vendedor_id`),
  ADD KEY `ven_cliente_id` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `det_ven_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `tip_doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `tip_usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `adm_tipo_documento_id` FOREIGN KEY (`tipo_documento_id`) REFERENCES `tipo_documento` (`tip_doc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adm_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cli_tipo_documento_id` FOREIGN KEY (`tipo_documento_id`) REFERENCES `tipo_documento` (`tip_doc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cli_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `det_ven_producto_id` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `det_ven_venta_id` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `pro_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `tipo_usuario_id` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`tip_usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vend_tipo_documento_id` FOREIGN KEY (`tipo_documento_id`) REFERENCES `tipo_documento` (`tip_doc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vend_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `ven_cliente_id` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`cli_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ven_vendedor_id` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedor` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
