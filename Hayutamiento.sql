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





-- -------------------------------------------------------------
-- tabla de datos para trabajadores ----------------------------
-- -------------------------------------------------------------

create table trabajadores (
id_trabajador int (11) not null auto_increment,
nombre varchar (40) not null,
apellidoPa varchar (20) not null,
apellidoMa varchar (20) not null,
fecha_nacimiento date not null, -- primero se coloca el año-mes-dia
telefono varchar (10)not null,
rfc varchar (13)not null,
direccion varchar (100) not null,
imagen varchar (40) not null,
tipo smallint(2)not null,
primary key (id_trabajador));







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
drop table pago_pedrial;
create table pago_pedrial(
id_pedrial int (11) not null auto_increment,
tipo_comprovante varchar (10) not null,
folio varchar (10) not null,
fecha date not null,
pago smallint(2) not null,
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
clave smallint (6) not null,
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



-- consultar uno en especifico









