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

select * from usuario;


-- --------------------------------------------------------------
-- creacion de lugares ------------------------------------------
-- --------------------------------------------------------------
create table rancho(
idranch int(11)not null auto_increment,
nombre varchar (40)default null,
habitantes int (11)not null,
primary key (idranch));

select * from rancho;

-- -------------------------------------------------------------
-- tabla de datos para trabajadores ----------------------------
-- -------------------------------------------------------------
drop table datos;
create table datos(
iddatos int (11) not null auto_increment,
nombre varchar (40) not null,
apellidoPa varchar (20) not null,
apellidoMa varchar (20) not null,
fecha_nacimiento date not null, -- primero se coloca el año-mes-dia
telefono varchar (10)not null,
rfc varchar (13)not null,
direccion varchar (100) not null,
imagen varchar (40) not null,
primary key (iddatos));

select * from datos;

-- -------------------------------------------------------
-- tabla de datos de empresas ----------------------------
-- -------------------------------------------------------
drop table empresas;
create table empresas(
id_empresa int (11) not null auto_increment,
nombre varchar (40) not null,
horario_entrada time not null,
horario_salida time not null,
requisitos varchar (100) not null,
fecha_publi  date not null,
primary key(id_empresa)
);
select * from empresas;

-- ----------------------------------------------------
-- tabla pago pedrial----------------------------------
-- ----------------------------------------------------

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
primary key(id_pedrial));
select * from pago_pedrial;

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

-- consultas basicas para el personal
select * from personal; 
-- numero de telefono de las areas de la tabla personal
select telefono_area, area from personal;
-- consultar el personal de las areas de la tabla personal
select * from personal where area='Presidencia';
select * from personal where area='Planeacíon';
select * from personal where area='Casa De La Cultura ';
select * from personal where area='secretaria';
select * from personal where area='Sindicatura';
select * from personal where area='Tesoreria';
select * from personal where area='Predial';
select * from personal where area='Urbanismo y Obras Públicas';
select * from personal where area='Oficialía Mayor';
select * from personal where area='Direccion De Desarrollo Social';
select * from personal where area='Dirección De Desarrollo Agropecuario';
select * from personal where area='contraloría';
select * from personal where area='Sistemas de Desarrollo Integral Familiar(DIF)';
