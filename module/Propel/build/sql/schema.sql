
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- canalcomunicacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `canalcomunicacion`;

CREATE TABLE `canalcomunicacion`
(
    `idcanalcomunicacion` INTEGER NOT NULL AUTO_INCREMENT,
    `canalcomunicacion_nombre` VARCHAR(255) NOT NULL,
    `canalcomunicacion_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idcanalcomunicacion`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cancelacionventaclinica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cancelacionventaclinica`;

CREATE TABLE `cancelacionventaclinica`
(
    `idcancelacionventaclinica` INTEGER NOT NULL AUTO_INCREMENT,
    `idclinica` INTEGER NOT NULL,
    `cancelacionventaclinica_cantidad` INTEGER NOT NULL,
    PRIMARY KEY (`idcancelacionventaclinica`),
    INDEX `idclinica` (`idclinica`),
    CONSTRAINT `idclinica_cancelacionventaclinica`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- clinica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `clinica`;

CREATE TABLE `clinica`
(
    `idclinica` INTEGER NOT NULL AUTO_INCREMENT,
    `clinica_nombre` VARCHAR(45) NOT NULL,
    `clinica_direccion` VARCHAR(45) NOT NULL,
    `clinica_registropatronal` VARCHAR(45) NOT NULL,
    `clinica_telefono` VARCHAR(45),
    PRIMARY KEY (`idclinica`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- clinicaempleado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `clinicaempleado`;

CREATE TABLE `clinicaempleado`
(
    `idclinicaempleados` INTEGER NOT NULL AUTO_INCREMENT,
    `idclinica` INTEGER NOT NULL,
    `idempleado` INTEGER NOT NULL,
    PRIMARY KEY (`idclinicaempleados`),
    INDEX `idclinica` (`idclinica`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idclinica_clinicaempleado`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleado_clinicaempleado`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- compra
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `compra`;

CREATE TABLE `compra`
(
    `idcompra` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `idproveedor` INTEGER NOT NULL,
    `compra_creadaen` DATETIME NOT NULL,
    `compra_fecha` DATE NOT NULL,
    `compra_importe` DECIMAL(10,2) NOT NULL,
    `compra_status` enum('pagada','no pagada') NOT NULL,
    `compra_pagaren` DATE NOT NULL,
    `compra_comprobante` TEXT,
    `compra_folio` VARCHAR(45),
    PRIMARY KEY (`idcompra`),
    INDEX `idoproveedor` (`idproveedor`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idempleado_compra`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproveedor_compra`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- compradetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `compradetalle`;

CREATE TABLE `compradetalle`
(
    `idcompradetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idcompra` INTEGER NOT NULL,
    `idproductoclinica` INTEGER,
    `idinsumoclinica` INTEGER,
    `compradetalle_cantidad` DECIMAL(10,2) NOT NULL,
    `compradetalle_costounitario` DECIMAL(10,2) NOT NULL,
    `compradetalle_subtotal` DECIMAL(10,2),
    PRIMARY KEY (`idcompradetalle`),
    INDEX `idcompra` (`idcompra`),
    INDEX `idproductoclinica` (`idproductoclinica`),
    INDEX `idinsumoclinica` (`idinsumoclinica`),
    CONSTRAINT `idcompra_compradetalle`
        FOREIGN KEY (`idcompra`)
        REFERENCES `compra` (`idcompra`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idinsumoclinica_compradetalle`
        FOREIGN KEY (`idinsumoclinica`)
        REFERENCES `insumoclinica` (`idinsumoclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductoclinica_compradetalle`
        FOREIGN KEY (`idproductoclinica`)
        REFERENCES `productoclinica` (`idproductoclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- concepto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `concepto`;

CREATE TABLE `concepto`
(
    `idconcepto` INTEGER NOT NULL,
    `concepto_nombre` VARCHAR(255) NOT NULL,
    `concepto_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idconcepto`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conceptoincidencia
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conceptoincidencia`;

CREATE TABLE `conceptoincidencia`
(
    `idconceptoincidencia` INTEGER NOT NULL,
    `conceptoincidencia_nombre` VARCHAR(255) NOT NULL,
    `conceptoincidencia_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idconceptoincidencia`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- configuracion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `configuracion`;

CREATE TABLE `configuracion`
(
    `idconfiguracion` INTEGER NOT NULL AUTO_INCREMENT,
    `configuracion_nombre` VARCHAR(45),
    `configuracion_valor` VARCHAR(45),
    `configuracion_valor2` VARCHAR(45),
    PRIMARY KEY (`idconfiguracion`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- egresoclinica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `egresoclinica`;

CREATE TABLE `egresoclinica`
(
    `idegresoclinica` INTEGER NOT NULL AUTO_INCREMENT,
    `idclinica` INTEGER NOT NULL,
    `idempleado` INTEGER NOT NULL,
    `idconcepto` INTEGER NOT NULL,
    `egresoclinica_fecha` DATETIME NOT NULL,
    `egresoclinica_fechaegreso` DATE NOT NULL,
    `egresoclinica_cantidad` DECIMAL(10,2) NOT NULL,
    `egresoclinica_iva` DECIMAL(10,2) NOT NULL,
    `egresoclinica_comprobante` TEXT,
    `egresoclinica_nota` TEXT,
    PRIMARY KEY (`idegresoclinica`),
    INDEX `idclinica` (`idclinica`),
    INDEX `idempleado` (`idempleado`),
    INDEX `idconcepto` (`idconcepto`),
    CONSTRAINT `idclinica_egresoclinica`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idconcepto_egresoclinica`
        FOREIGN KEY (`idconcepto`)
        REFERENCES `concepto` (`idconcepto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleado_egresoclinica`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado`
(
    `idempleado` INTEGER NOT NULL AUTO_INCREMENT,
    `empleado_registradoen` DATETIME NOT NULL,
    `empleado_nombre` VARCHAR(255) NOT NULL,
    `empleado_nss` VARCHAR(45),
    `empleado_rfc` VARCHAR(45),
    `empleado_calle` VARCHAR(45),
    `empleado_numero` VARCHAR(45),
    `empleado_colonia` VARCHAR(45),
    `empleado_codigopostal` VARCHAR(45),
    `empleado_ciudad` VARCHAR(45),
    `empleado_sexo` enum('Hombre','Mujer'),
    `empleado_fechanacimiento` DATE,
    `empleado_telefono` VARCHAR(45),
    `empleado_celular` VARCHAR(45),
    `empleado_comprobantedomiclio` TEXT,
    `empleado_comprobanteidentificacion` TEXT,
    `empleado_sueldo` DECIMAL(10,2),
    `empleado_foto` TEXT,
    `empleado_tipocomisionproducto` enum('porcentaje','cantidad'),
    `empleado_cantidadcomisionproducto` DECIMAL(10,2),
    `empleado_tipocomisionservicio` enum('porcentaje','cantidad'),
    `empleado_cantidadcomisionservicio` DECIMAL(10,2),
    PRIMARY KEY (`idempleado`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleadoacceso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleadoacceso`;

CREATE TABLE `empleadoacceso`
(
    `idempleadoacceso` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `idrol` INTEGER NOT NULL,
    `empleadoacceso_username` VARCHAR(45) NOT NULL,
    `empleadoacceso_password` VARCHAR(45) NOT NULL,
    `empleadoacceso_ensesion` TINYINT(1) DEFAULT 0 NOT NULL,
    PRIMARY KEY (`idempleadoacceso`),
    INDEX `idempleado` (`idempleado`),
    INDEX `idrol` (`idrol`),
    CONSTRAINT `idempleado_empleadoacceso`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idrol_empleadoacceso`
        FOREIGN KEY (`idrol`)
        REFERENCES `rol` (`idrol`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleadocomision
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleadocomision`;

CREATE TABLE `empleadocomision`
(
    `idempleadocomision` INTEGER NOT NULL AUTO_INCREMENT,
    `idempledo` INTEGER NOT NULL,
    `idvisitadetalle` INTEGER NOT NULL,
    `empleadocomision_fecha` DATETIME NOT NULL,
    `empleadocomision_comision` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idempleadocomision`),
    INDEX `idempleado` (`idempledo`),
    INDEX `idvisitadetalle` (`idvisitadetalle`),
    CONSTRAINT `idempleado_empleadocomision`
        FOREIGN KEY (`idempledo`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idvisitadetalle_empleadocomision`
        FOREIGN KEY (`idvisitadetalle`)
        REFERENCES `visitadetalle` (`idvisitadetalle`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleadohorario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleadohorario`;

CREATE TABLE `empleadohorario`
(
    `idempleadohorario` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `empleadohorario_entrada` TIME NOT NULL,
    `empleadohorario_salida` TIME NOT NULL,
    `empleadohorario_dia` enum('lunes','martes','miercoles','jueves','viernes','sabado','domingo') NOT NULL,
    PRIMARY KEY (`idempleadohorario`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idempleado_empleadohorario`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleadoreceso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleadoreceso`;

CREATE TABLE `empleadoreceso`
(
    `idempleadoreceso` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `idclinica` INTEGER NOT NULL,
    `empleadoreceso_fecha` DATE NOT NULL,
    `empleadoreceso_inicio` DATETIME NOT NULL,
    `empleadoreceso_fin` DATETIME,
    PRIMARY KEY (`idempleadoreceso`),
    INDEX `idclinica_empleadoreceso` (`idclinica`),
    INDEX `idempleado_empleadoreceso` (`idempleado`),
    CONSTRAINT `idclinica_empleadoreceso`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleado_empleadoreceso`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleadoreporte
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleadoreporte`;

CREATE TABLE `empleadoreporte`
(
    `idempleadoreporte` INTEGER NOT NULL AUTO_INCREMENT,
    `idclinica` INTEGER NOT NULL,
    `idempleado` INTEGER NOT NULL,
    `idempleadoreportado` INTEGER NOT NULL,
    `idconceptoincidencia` INTEGER NOT NULL,
    `empleadoreporte_fechacreacion` DATETIME NOT NULL,
    `empleadoreporte_comentario` TEXT NOT NULL,
    `empleadoreporte_fechasuceso` DATE NOT NULL,
    PRIMARY KEY (`idempleadoreporte`),
    INDEX `idclinica` (`idclinica`),
    INDEX `idempleado` (`idempleado`),
    INDEX `idempleadoreportado` (`idempleadoreportado`),
    INDEX `idconceptoincidencia` (`idconceptoincidencia`),
    CONSTRAINT `idclinica_empleadoreporte`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idconceptoincidencia_empleadoreporte`
        FOREIGN KEY (`idconceptoincidencia`)
        REFERENCES `conceptoincidencia` (`idconceptoincidencia`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleado_empleadoreporte`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleadoreportado_empleadoreporte`
        FOREIGN KEY (`idempleadoreportado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- encargadoclinica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `encargadoclinica`;

CREATE TABLE `encargadoclinica`
(
    `idencargadoclinica` INTEGER NOT NULL AUTO_INCREMENT,
    `idclinica` INTEGER NOT NULL,
    `idempleado` INTEGER NOT NULL,
    PRIMARY KEY (`idencargadoclinica`),
    INDEX `idclinica` (`idclinica`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idclinica_encargadoclinica`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleado_encargadoclinica`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- faltante
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `faltante`;

CREATE TABLE `faltante`
(
    `idfaltante` INTEGER NOT NULL AUTO_INCREMENT,
    `idclinica` INTEGER NOT NULL,
    `idempleadogenerador` INTEGER NOT NULL,
    `idempleadodeudor` INTEGER NOT NULL,
    `faltante_creadaen` DATETIME,
    `faltante_fecha` DATE NOT NULL,
    `faltante_hora` TIME NOT NULL,
    `faltante_cantidad` DECIMAL(10,2),
    `faltante_comentario` TEXT,
    PRIMARY KEY (`idfaltante`),
    INDEX `idempleadogenerador` (`idempleadogenerador`),
    INDEX `idempleadodeudor` (`idempleadodeudor`),
    CONSTRAINT `idempleadodeudor_faltante`
        FOREIGN KEY (`idempleadodeudor`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleadogenerador_faltante`
        FOREIGN KEY (`idempleadogenerador`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- grupo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo`
(
    `idgrupo` INTEGER NOT NULL AUTO_INCREMENT,
    `grupo_nombre` VARCHAR(255) NOT NULL,
    `grupo_descripcion` VARCHAR(45),
    `grupo_creadoen` DATETIME,
    PRIMARY KEY (`idgrupo`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- grupopaciente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `grupopaciente`;

CREATE TABLE `grupopaciente`
(
    `idgrupopaciente` INTEGER NOT NULL AUTO_INCREMENT,
    `idgrupo` INTEGER NOT NULL,
    `idpaciente` INTEGER NOT NULL,
    PRIMARY KEY (`idgrupopaciente`),
    INDEX `idgrupo` (`idgrupo`),
    INDEX `idpaciente` (`idpaciente`),
    CONSTRAINT `idgrupo_grupopaciente`
        FOREIGN KEY (`idgrupo`)
        REFERENCES `grupo` (`idgrupo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaciente_grupopaciente`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- grupopersonal
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `grupopersonal`;

CREATE TABLE `grupopersonal`
(
    `idgrupopersonal` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `idpacienteagregado` INTEGER NOT NULL,
    PRIMARY KEY (`idgrupopersonal`),
    INDEX `idpaciente` (`idpaciente`),
    INDEX `idpacienteagregado` (`idpacienteagregado`),
    CONSTRAINT `idpaciente_grupopersonal`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpacienteagregado_grupopersonal`
        FOREIGN KEY (`idpacienteagregado`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- insumo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `insumo`;

CREATE TABLE `insumo`
(
    `idinsumo` INTEGER NOT NULL AUTO_INCREMENT,
    `insumo_nombre` VARCHAR(255) NOT NULL,
    `insumo_descripcion` TEXT,
    `insumo_costo` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idinsumo`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- insumoclinica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `insumoclinica`;

CREATE TABLE `insumoclinica`
(
    `idinsumoclinica` INTEGER NOT NULL AUTO_INCREMENT,
    `idinsumo` INTEGER NOT NULL,
    `idclinica` INTEGER NOT NULL,
    `insumoclinica_existencia` DECIMAL(10,2) NOT NULL,
    `insumoclinica_minimo` DECIMAL(10,2),
    `insumoclinica_maximo` DECIMAL(10,2),
    `insumoclinica_reorden` DECIMAL(10,2),
    PRIMARY KEY (`idinsumoclinica`),
    INDEX `idinsumo` (`idinsumo`),
    INDEX `idclinica` (`idclinica`),
    CONSTRAINT `idclinica_insumoclinica`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idinsumo_insumoclinica`
        FOREIGN KEY (`idinsumo`)
        REFERENCES `insumo` (`idinsumo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- paciente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `paciente`;

CREATE TABLE `paciente`
(
    `idpaciente` INTEGER NOT NULL AUTO_INCREMENT,
    `idclinica` INTEGER,
    `paciente_nombre` VARCHAR(255) NOT NULL,
    `paciente_celular` VARCHAR(45) NOT NULL,
    `paciente_telefono` VARCHAR(45),
    `paciente_calle` VARCHAR(100),
    `paciente_numero` VARCHAR(45),
    `paciente_colonia` VARCHAR(100),
    `paciente_codigopostal` VARCHAR(5),
    `paciente_ciudad` VARCHAR(100),
    `paciente_estado` VARCHAR(45),
    `paciente_sexo` enum('Hombre','Mujer'),
    `paciente_fechanacimiento` DATE,
    `idempleado` VARCHAR(45),
    PRIMARY KEY (`idpaciente`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- pacienteseguimiento
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `pacienteseguimiento`;

CREATE TABLE `pacienteseguimiento`
(
    `idpacienteseguimiento` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `idcanalcomunicacion` INTEGER NOT NULL,
    `pacienteseguimiento_fechacreacion` DATETIME NOT NULL,
    `pacienteseguimiento_comentario` TEXT NOT NULL,
    `pacienteseguimiento_fecha` DATE NOT NULL,
    PRIMARY KEY (`idpacienteseguimiento`),
    INDEX `idpaciente` (`idpaciente`),
    CONSTRAINT `idpaciente_pacienteseguimiento`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- producto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto`
(
    `idproducto` INTEGER NOT NULL AUTO_INCREMENT,
    `producto_nombre` VARCHAR(45) NOT NULL,
    `producto_descripcion` VARCHAR(45) NOT NULL,
    `producto_costo` VARCHAR(45) NOT NULL,
    `producto_precio` VARCHAR(45) NOT NULL,
    `producto_generaingreso` TINYINT(1) NOT NULL,
    `producto_generacomision` TINYINT(1) NOT NULL,
    `producto_tipocomision` enum('cantidad','porcentaje'),
    `producto_comision` DECIMAL(10,2),
    `producto_fotografia` TEXT,
    PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- productoclinica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `productoclinica`;

CREATE TABLE `productoclinica`
(
    `idproductoclinica` INTEGER NOT NULL AUTO_INCREMENT,
    `idproducto` INTEGER NOT NULL,
    `idclinica` INTEGER NOT NULL,
    `productoclinica_existencia` DECIMAL(10,2) NOT NULL,
    `productoclinica_minimo` DECIMAL(10,2) NOT NULL,
    `productoclinica_maximo` DECIMAL(10,2) NOT NULL,
    `productoclinica_reorden` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idproductoclinica`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idclnica` (`idclinica`),
    CONSTRAINT `idclinica_productoclinica`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_productoclinica`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedor`;

CREATE TABLE `proveedor`
(
    `idproveedor` INTEGER NOT NULL AUTO_INCREMENT,
    `proveedor_nombre` VARCHAR(255),
    `proveedor_rfc` VARCHAR(45),
    `proveedor_telefono` VARCHAR(255),
    `proveedor_celular` VARCHAR(45),
    `proveedor_contacto` VARCHAR(45),
    `proveedor_direccion` VARCHAR(255),
    `proveedor_codigopostal` VARCHAR(45),
    `proveedor_ciudad` VARCHAR(255),
    `proveedor_estado` VARCHAR(45),
    `proveedor_email` VARCHAR(45),
    PRIMARY KEY (`idproveedor`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- recurso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `recurso`;

CREATE TABLE `recurso`
(
    `idrecurso` INTEGER NOT NULL AUTO_INCREMENT,
    `recurso_nombre` VARCHAR(45) NOT NULL,
    `recurso_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idrecurso`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- rol
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol`
(
    `idrol` INTEGER NOT NULL AUTO_INCREMENT,
    `rol_nombre` VARCHAR(255) NOT NULL,
    `rol_descripcion` TEXT,
    PRIMARY KEY (`idrol`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- rolrecurso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `rolrecurso`;

CREATE TABLE `rolrecurso`
(
    `idrolrecurso` INTEGER NOT NULL AUTO_INCREMENT,
    `idrol` INTEGER NOT NULL,
    `idrecurso` INTEGER NOT NULL,
    PRIMARY KEY (`idrolrecurso`),
    INDEX `idrol` (`idrol`),
    INDEX `idrecurso` (`idrecurso`),
    CONSTRAINT `idrecurso_rolrecurso`
        FOREIGN KEY (`idrecurso`)
        REFERENCES `recurso` (`idrecurso`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idrol_rolrecurso`
        FOREIGN KEY (`idrol`)
        REFERENCES `rol` (`idrol`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- servicio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio`
(
    `idservicio` INTEGER NOT NULL AUTO_INCREMENT,
    `servicio_nombre` VARCHAR(255) NOT NULL,
    `servicio_descripcion` TEXT NOT NULL,
    `servicio_generaingreso` TINYINT(1) NOT NULL,
    `servicio_generacomision` TINYINT(1) NOT NULL,
    `servicio_tipocomision` enum('porcentaje','cantidad'),
    `servicio_comision` DECIMAL(10,2),
    PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- servicioclinica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `servicioclinica`;

CREATE TABLE `servicioclinica`
(
    `idservicioclinica` INTEGER NOT NULL AUTO_INCREMENT,
    `idservicio` INTEGER NOT NULL,
    `idclinica` INTEGER NOT NULL,
    `servicioclinica_precio` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idservicioclinica`),
    INDEX `idservicio` (`idservicio`),
    INDEX `idclinica` (`idclinica`),
    CONSTRAINT `idclinica_servicioclinica`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_servicioclinica`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- servicioinsumo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `servicioinsumo`;

CREATE TABLE `servicioinsumo`
(
    `idservicioinsumo` INTEGER NOT NULL AUTO_INCREMENT,
    `idservicio` INTEGER NOT NULL,
    `idinsumo` INTEGER NOT NULL,
    `servicioinsumo_cantidad` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idservicioinsumo`),
    INDEX `idservicio` (`idservicio`),
    INDEX `idinsumo` (`idinsumo`),
    CONSTRAINT `idinsumo_servicioinsumo`
        FOREIGN KEY (`idinsumo`)
        REFERENCES `insumo` (`idinsumo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_servicioinsumo`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- transferencia
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `transferencia`;

CREATE TABLE `transferencia`
(
    `idtransferencia` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `idempleadoreceptor` INTEGER,
    `idclinicaremitente` INTEGER NOT NULL,
    `idclinicadestinataria` INTEGER NOT NULL,
    `transferencia_creadaen` DATETIME NOT NULL,
    `transferencia_estatus` enum('enviada','aceptada','rechazada','cancelada') NOT NULL,
    `transferencia_fechamovimiento` DATE NOT NULL,
    `transferencia_comprobante` TEXT,
    `transferencia_nota` TEXT,
    PRIMARY KEY (`idtransferencia`),
    INDEX `idclinicaremitente` (`idclinicaremitente`),
    INDEX `idclinicadestinataria` (`idclinicadestinataria`),
    INDEX `idempleado` (`idempleado`),
    INDEX `idempleadoreceptor` (`idempleadoreceptor`),
    CONSTRAINT `idclinicadestinataria_transferencia`
        FOREIGN KEY (`idclinicadestinataria`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idclinicaremitente_transferencia`
        FOREIGN KEY (`idclinicaremitente`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleado_transferencia`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleadoreceptor_transferencia`
        FOREIGN KEY (`idempleadoreceptor`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- transferenciadetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `transferenciadetalle`;

CREATE TABLE `transferenciadetalle`
(
    `idtransferenciadetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idtransferencia` INTEGER NOT NULL,
    `idproductoclinica` INTEGER,
    `idinsumoclinica` INTEGER,
    `transferenciadetalle_cantidad` DECIMAL(10,2),
    PRIMARY KEY (`idtransferenciadetalle`),
    INDEX `idtransferencia` (`idtransferencia`),
    INDEX `idproductoclinica` (`idproductoclinica`),
    INDEX `idinsumoclinica` (`idinsumoclinica`),
    CONSTRAINT `idinsumoclinica_transferenciadetalle`
        FOREIGN KEY (`idinsumoclinica`)
        REFERENCES `insumoclinica` (`idinsumoclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductoclinica_transferenciadetalle`
        FOREIGN KEY (`idproductoclinica`)
        REFERENCES `productoclinica` (`idproductoclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idtransferencia_transferenciadetalle`
        FOREIGN KEY (`idtransferencia`)
        REFERENCES `transferencia` (`idtransferencia`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- visita
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `visita`;

CREATE TABLE `visita`
(
    `idvisita` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `idempleadocreador` INTEGER NOT NULL,
    `idpaciente` INTEGER NOT NULL,
    `idclinica` INTEGER NOT NULL,
    `visita_tipo` enum('consulta','servicio') NOT NULL,
    `visita_creadaen` DATETIME NOT NULL,
    `visita_fecha` VARCHAR(45) NOT NULL,
    `visita_hora` VARCHAR(45) NOT NULL,
    `visita_status` enum('por confirmar','confimada','cancelo','no se presento','reprogramda','en servicio','terminado') NOT NULL,
    `visita_estatuspago` enum('pagada','no pagada'),
    `visita_total` DECIMAL(10,2),
    `visita_metodopago` enum('efectivo','tarjeta'),
    `visita_pagoreferencia` TEXT,
    PRIMARY KEY (`idvisita`),
    INDEX `idempleadocreador` (`idempleadocreador`),
    INDEX `idempleado` (`idempleado`),
    INDEX `idpaciente` (`idpaciente`),
    INDEX `idclinica` (`idclinica`),
    CONSTRAINT `idclinica_visita`
        FOREIGN KEY (`idclinica`)
        REFERENCES `clinica` (`idclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleado_visita`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleadocreador_visita`
        FOREIGN KEY (`idempleadocreador`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaciente_visita`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- visitadetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `visitadetalle`;

CREATE TABLE `visitadetalle`
(
    `idvisitadetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idvisita` INTEGER NOT NULL,
    `idproductoclinica` INTEGER,
    `idservicioclinica` INTEGER,
    `visitadetalle_cargo` enum('producto','servicio') NOT NULL,
    `visitadetalle_preciounitario` DECIMAL(10,2) NOT NULL,
    `visitadetalle_cantidad` DECIMAL(10,2) NOT NULL,
    `visitadetalle_subtotal` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idvisitadetalle`),
    INDEX `idproductoclinica` (`idproductoclinica`),
    INDEX `idservicioclinica` (`idservicioclinica`),
    INDEX `idvisita` (`idvisita`),
    CONSTRAINT `idproductoclinica_visitadetalle`
        FOREIGN KEY (`idproductoclinica`)
        REFERENCES `productoclinica` (`idproductoclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicioclinica_visitadetalle`
        FOREIGN KEY (`idservicioclinica`)
        REFERENCES `servicioclinica` (`idservicioclinica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idvisita_visitadetalle`
        FOREIGN KEY (`idvisita`)
        REFERENCES `visita` (`idvisita`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
