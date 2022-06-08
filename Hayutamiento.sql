create database ayuntamiento;
use ayuntamiento;


-- -------------------------------------------------
-- creacion de usuarios ----------------------------
-- -------------------------------------------------

create table usuario(
idusu int(11) not null auto_increment,
nombre varchar(40) default null,
apellidoPa varchar(20) default null,
apellidoMa varchar(20) default null,
usuario varchar(40) default null,
password varchar(40) default null,
telefono varchar(10) not null,
correo varchar (30) not null,
tipo smallint (2) not null,
primary key (idusu));



-- --------------------------------------------------------------
-- creacion de lugares ------------------------------------------
-- --------------------------------------------------------------
create table rancho(
idranch int(11)not null auto_increment,
nombre varchar (40)default null,
habitantes int (11)not null,
primary key (idranch));

-- -------------------------------------------------------
-- tabla de datos de empresas ----------------------------
-- -------------------------------------------------------------

create table empresas(
id int (11) not null auto_increment,
nombre varchar (40) not null,
horario_entrada varchar (10) not null,
horario_salida varchar (10)  not null,
requisitos varchar (100) not null,
fecha_publi  date not null,
telefono varchar (10)not null,
vacante int (11) not null,
direccion varchar (100) not null,
imagen varchar(40) not null,
estado char(1) not null,
primary key(id)
);





-- ----------------------------------------------------
-- tabla pago pedrial----------------------------------
-- ----------------------------------------------------
create table pago_pedrial(
id_pedrial int (11) not null auto_increment,
tipo_comprovante varchar (10) not null,
folio varchar (10) not null,
fecha date not null,
pago varchar(40) not null,
forma_pago varchar (25) not null,
contribuyente varchar (40) not null,
cuenta_pedrial varchar (20) not null,
valor_catastral varchar (10) not null,
tasa varchar (9) not null,
clave_catastral varchar (40) not null,
concepto varchar (30) not null,
domicilio varchar (45) not null,
ubicacion_predio varchar (100) not null,
periodo_pago varchar (40) not null,
clave varchar (10) not null,
descripcion varchar(50) not null,
importe varchar(8) not null,
telefono varchar (10) not null,
primary key(id_pedrial));



-- ----------------------------------------------------
-- tabla personal--------------------------------------
-- ----------------------------------------------------

create table personal(
id_personal int (11) not null auto_increment,
nombre varchar (40)not null,
apellidoP varchar (20) not null,
apeliidoM varchar (20) not null,
telefono_area varchar (10),
area varchar (60) not null,
primary key(id_personal));

-- ----------------------------------------------------
-- tabla de obras--------------------------------
-- ----------------------------------------------------

drop table obras;
create table obras(
id_obra int (11)not null auto_increment,
nombre varchar (40)not null,
fecha_inicio date not null,
fecha_final date,
lugar varchar (40) not null,
area varchar (60) not null,
descripcion varchar(100),
imagen varchar(40),
primary key (id_obra));


-- ----------------------------------------------------
-- tabla de estudiantes--------------------------------
-- ----------------------------------------------------

create table estudiantes(
id_estudiante int (11) not null auto_increment,
nombre varchar (40) not null,
apellidoPa varchar (20) not null,
apellidoMa varchar (20) not null,
fecha_nacimiento date not null,
universidad varchar (40) not null,
telefono varchar (10) not null,
correo varchar (30) not null,
rancho varchar (40) not null,
primary key (id_estudiante));

-- ----------------------------------------------------
-- tabla de escuelas--------------------------------
-- ----------------------------------------------------
create table escuelas(
id int (11) not null auto_increment,
nombre varchar (45) not null,
direccion varchar (45)not null,
telefono varchar (10)not null,
direcctor varchar (40)not null,
clave varchar (20),
horarios varchar(10)not null,
tipo varchar (45) not null,
comentarios varchar (100),
imagen1 varchar(40) not null,
imagen2 varchar(40),
imagen3 varchar(40),
carrera1 varchar (20),
carrera2 varchar (20),
carrera3 varchar (20),
carrera4 varchar (20),
primary key(id));


INSERT INTO `ayuntamiento`.`escuelas` (`id`, `nombre`, `direccion`, `telefono`, `direcctor`, `clave`, `horarios`, `tipo`, `comentarios`, `imagen1`) VALUES ('2', 'Jose Maria Morelos y Pavon', 'ave Jardin #68 Penjamillo Michoacan', '3595240409', 'Alejandra Sanchez Gutierres ', '10npk11380', '8 am a 6 pm', 'Escuela primaria ', 'Escuela primaria URB.F FED. para niños ', 'jose.jpg');
INSERT INTO `ayuntamiento`.`escuelas` (`id`, `nombre`, `direccion`, `telefono`, `direcctor`, `clave`, `horarios`, `tipo`, `comentarios`, `imagen1`) VALUES ('3', 'Jardin Morelos', 'ave 5 de mayo #340 Penjamillo Michoacan', '3595240100', 'Margarita Negrete Lopez', '14309jm0965', '9 am a 11 am', 'Jardin de Niños', 'Es un jardin de niños ', 'jardin.jpg');
INSERT INTO `ayuntamiento`.`escuelas` (`id`, `nombre`, `direccion`, `telefono`, `direcctor`, `clave`, `horarios`, `tipo`, `comentarios`, `imagen1`) VALUES ('4', 'Justo Sierra', 'av Morelos PTe. #160 Penjamillo Michoacan', '3595240981', 'Jose Roberto Aguiñiga Valadez', '16DPR2768L', '8 am a 6 pm', 'Escuela primaria', 'Escuela primaria URB. FED. para niños', 'justo.jpg');
INSERT INTO `ayuntamiento`.`escuelas` (`id`, `nombre`, `direccion`, `telefono`, `direcctor`, `clave`, `horarios`, `tipo`, `comentarios`, `imagen1`) VALUES ('5', 'CAM penjamillo', 'av Los Encinos #38 Penjamillo Michoacan ', '3595241268', 'Guadalupe Orozco Avila', '16250capm08', '9 am a 12 pm', 'Escuela para niños Especiales', 'Es una escuela para niños con problemas', 'cam.jpg');
INSERT INTO `ayuntamiento`.`escuelas` (`id`, `nombre`, `direccion`, `telefono`, `direcctor`, `clave`, `horarios`, `tipo`, `comentarios`, `imagen1`) VALUES ('6', 'CECyTE', 'av Petazicuaro #244 Penjamillo Michoacan', '3595244032', 'Jose Espinoza Arevalo', '16ETCOOO1G', '7 am a 5 pm', 'Preparatoria', 'Preparatoria para adolecentes con mentalidad de sobre salir', 'cecytem.jpg');
INSERT INTO `ayuntamiento`.`escuelas` (`id`, `nombre`, `direccion`, `telefono`, `direcctor`, `clave`, `horarios`, `tipo`, `comentarios`, `imagen1`) VALUES ('7', 'Secundaria Tecnica', 'av Michoacan Zinaparo-Villa morelos #180', '3592460963', 'Jose Antonio Mendez Rios', '1053CNTE091', '7 am a 3 pm', 'Secundaria', 'Secundaria Tecnica con diferentes modulos', 'est63.jpg');







