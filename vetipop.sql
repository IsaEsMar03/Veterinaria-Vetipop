
-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS `vetipop` DEFAULT CHARACTER SET utf8mb4;
USE `vetipop`;

-- Tabla cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30),
  `apellido` VARCHAR(30),
  `cedula` VARCHAR(15),
  `direccion` VARCHAR(50),
  `telefono` VARCHAR(15),
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla veterinario
CREATE TABLE IF NOT EXISTS `veterinario` (
  `id_veterinario` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45),
  `apellido` VARCHAR(45),
  `cedula` VARCHAR(45),
  `direccion` VARCHAR(100),
  `telefono` VARCHAR(15),
  PRIMARY KEY (`id_veterinario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla mascota
CREATE TABLE IF NOT EXISTS `mascota` (
  `id_mascota` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_mascota` VARCHAR(45),
  `edad` INT(11) NOT NULL,
  `fecha_nacimiento` DATE,
  `raza` VARCHAR(45),
  PRIMARY KEY (`id_mascota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla servicio
CREATE TABLE IF NOT EXISTS `servicio` (
  `id_servicio` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` VARCHAR(50),
  `descripcion` VARCHAR(1000),
  `valor_servicio` INT(11),
  `id_veterinario` INT(11) NOT NULL,
  PRIMARY KEY (`id_servicio`),
  INDEX (`id_veterinario`),
  CONSTRAINT `servicio_ibfk_1`
    FOREIGN KEY (`id_veterinario`) REFERENCES `veterinario` (`id_veterinario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla cita
CREATE TABLE IF NOT EXISTS `cita` (
  `id_cita` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_cita` DATE,
  `id_cliente` INT(11) NOT NULL,
  `id_veterinario` INT(11) NOT NULL,
  `id_mascota` INT(11) NOT NULL,
  `id_servicio` INT(11) NOT NULL,
  PRIMARY KEY (`id_cita`),
  INDEX (`id_cliente`),
  INDEX (`id_veterinario`),
  INDEX (`id_mascota`),
  INDEX (`id_servicio`),
  CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_veterinario`) REFERENCES `veterinario` (`id_veterinario`),
  CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id_mascota`),
  CONSTRAINT `cita_ibfk_4` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla cliente_mascota
CREATE TABLE IF NOT EXISTS `cliente_mascota` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` INT(11) NOT NULL,
  `id_mascota` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX (`id_cliente`),
  INDEX (`id_mascota`),
  CONSTRAINT `cliente_mascota_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `cliente_mascota_ibfk_2` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id_mascota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla historia_clinica
CREATE TABLE IF NOT EXISTS `historia_clinica` (
  `id_historia_clinica` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo_historia` INT(11) NOT NULL,
  `id_cita` INT(11) NOT NULL,
  PRIMARY KEY (`id_historia_clinica`),
  INDEX (`id_cita`),
  CONSTRAINT `historia_clinica_ibfk_1` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id_cita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla medicamento
CREATE TABLE IF NOT EXISTS `medicamento` (
  `id_medicamento` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_medicamento` VARCHAR(100),
  `descripcion` VARCHAR(1000),
  `categoria` VARCHAR(100),
  `proveedor` VARCHAR(50),
  `fecha_medicamento` DATE,
  `fecha_vencimiento` DATE,
  PRIMARY KEY (`id_medicamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla historial_citas
CREATE TABLE IF NOT EXISTS `historial_citas` (
  `id_historial_citas` INT(11) NOT NULL AUTO_INCREMENT,
  `valoracion` VARCHAR(500),
  `medicamento` INT(11) NOT NULL,
  `fecha` DATE,
  `id_historia_clinica` INT(11) NOT NULL,
  `id_medicamento` INT(11) NOT NULL,
  PRIMARY KEY (`id_historial_citas`),
  INDEX (`id_historia_clinica`),
  INDEX (`id_medicamento`),
  CONSTRAINT `historial_citas_ibfk_1` FOREIGN KEY (`id_historia_clinica`) REFERENCES `historia_clinica` (`id_historia_clinica`),
  CONSTRAINT `historial_citas_ibfk_2` FOREIGN KEY (`id_medicamento`) REFERENCES `medicamento` (`id_medicamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla horario
CREATE TABLE IF NOT EXISTS `horario` (
  `id_horario` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` DATE,
  `hora` TIME,
  `id_veterinario` INT(11) NOT NULL,
  PRIMARY KEY (`id_horario`),
  INDEX (`id_veterinario`),
  CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_veterinario`) REFERENCES `veterinario` (`id_veterinario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
