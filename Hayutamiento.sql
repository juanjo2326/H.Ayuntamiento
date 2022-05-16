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

<<<<<<< Updated upstream

=======
select * from rancho;
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('1', 'Ansihuacuaro', '1095');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('2', 'Arroyuelos', '258');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('3', 'Buenavista', '19');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('4', 'Buenavista(La Nopalera)', '15');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('5', 'Cerrito de la Gloria', '35');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('6', 'Colonia el Platanal', '424');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('7', 'Colonia Natalio Vázquez Pallarez(Norica)', '51');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('8', 'El Cgupadero', '16');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('9', 'El Colorado', '615');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('10', 'El cucuno', '33');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('11', 'El Guayabo', '148');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('12', 'El Jacal', '59');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('13', 'El Laberinto(La Jamacua)', '30');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('14', 'El Mezquite de Hernández', '113');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('15', 'El Mirador', '36');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('16', 'El Monte', '14');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('17', 'El Monte Calvario', '17');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('18', 'El Nuevo Vado Blanco(Tijuanita)', '112');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('19', 'El Paraíso(El Tarengo)', '21');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('20', 'El Tecuán', '94');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('21', 'El Viejo Rodeo', '150');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('22', 'Fraccionamiento Adolfo Lopez Mateos', '25');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('23', 'Guándaro', '1065');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('24', 'La Arena', '23');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('25', 'La Cuestita', '238');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('26', 'La Garza', '74');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('27', 'La Huerta', '28');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('28', 'La Jamacua', '15');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('29', 'La Laborcilla', '55');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('30', 'La Loma', '10');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('31', 'La Luz', '775');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('32', 'La Mesa ', '8');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('33', 'La Peña', '119');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('34', 'La Poma', '193');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('35', 'La Providencia', '12');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('36', 'Las Flores ', '17');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('37', 'Las Playas', '7');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('38', 'Llano Grande', '9');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('39', 'Los Alcatraces', '12');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('40', 'Los Álamos', '5');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('41', 'Los Fresnos', '202');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('42', 'Los Otates', '63');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('43', 'Nuevo Rodeo', '278');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('44', 'Palo Blanco', '36');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('45', 'Patambarillo', '578');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('46', 'Patámbaro', '363');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('47', 'Penjamillo de Degollador', '3378');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('48', 'Petazícuaro', '48');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('49', 'Rancho de García', '53');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('50', 'Rancho Seco', '16');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('51', 'San Antonio Carupo', '433');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('52', 'San Isidro', '185');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('53', 'San José de Rábago', '706');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('54', 'San Nicolás', '8');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('55', 'Santa Fe del Río', '1214');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('56', 'Tirimácuaro(Valenciana)', '1034');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('57', 'Vado Blanco', '140');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('58', 'Zerecuato', '193');
INSERT INTO `ayuntamiento`.`rancho` (`idranch`, `nombre`, `habitantes`) VALUES ('59', 'Ziquítaro', '1906');
>>>>>>> Stashed changes

-- -------------------------------------------------------------
-- tabla de datos para trabajadores ----------------------------
-- -------------------------------------------------------------
<<<<<<< Updated upstream

=======
drop table datos;
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
=======
select * from trabajadores;

INSERT INTO `ayuntamiento`.`trabajadores` (`id_trabajador`, `nombre`, `apellidoPa`, `apellidoMa`, `fecha_nacimiento`, `telefono`, `rfc`, `direccion`, `imagen`, `tipo`) 
             VALUES ('1', 'Juan Jose', 'Gallardo', 'Suarez', '1998-02-26', '3521429722', 'GASJ980226CF6', 'calledeportiva #86 tirimacuaro', '1', '1');
>>>>>>> Stashed changes


-- -------------------------------------------------------
-- tabla de datos de empresas ----------------------------
-- -------------------------------------------------------------
<<<<<<< Updated upstream


=======
drop table empresas;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
select * from empresas;
INSERT INTO `ayuntamiento`.`empresas` (`id`, `nombre`, `horario_entrada`, `horario_salida`, `requisitos`, `fecha_publi`, `telefono`, `vacante`, `direccion`,`imagen`, `estado`) 
VALUES ('1', 'arctitec', '8 am', '4 pm', 'arquitecto', '2022-03-30', '1352816029', '1','penjamillo', 'inge.jpg', '1');
INSERT INTO `ayuntamiento`.`empresas` (`id`, `nombre`, `horario_entrada`, `horario_salida`, `requisitos`, `fecha_publi`, `telefono`, `vacante`,`direccion`, `imagen`, `estado`) 
VALUES ('2', 'ventec', '8 am', '4 pm', 'ventas', '2022-03-30', '1352816039','1','penjamillo', 'ventas.jpg', '1');
>>>>>>> Stashed changes


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


select * from obras;
select * from pago_pedrial;
drop table pago_pedrial;
select * from empresas;
drop table empresas;
select * from trabajadores;
drop table datos;
select * from rancho;
select * from usuario;
select * from escuelas;
drop table escuelas;

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

-- consultar uno en especifico
select * from personal where nombre='nestor daniel';

-- datos del persona --
<<<<<<< Updated upstream
=======
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('1', 'Xochit Kareli', 'Del Rio', 'Carranza', '359524-2046', 'Presidencia');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('2', 'yesenia ', 'Ramírez', 'Duarte', 'Presidencia');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('3', 'Fernando', 'Montes De Oca', 'Ruiz', 'presidencia');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('4', 'Pedro Eduardo', 'Juárez', 'Aguiñiga', '359524-2042', 'Planeación');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('5', 'constitucion', 'Ávila', 'Valdovinos', 'Planeación');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('6', 'Rubén Alberto', 'Roa', 'Roa', 'planeacion');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('7', 'Diana Esmeralda', 'Vargas', 'Preciado', 'Planeación');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('8', 'José', 'Plascencia', 'Ramírez', 'Planeación');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('9', 'Ana Rosa', 'Quezada', 'Suarez', '359524-2024', 'Casa de la cultura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('10', 'Aura ', 'Uribe', 'Hernandez', 'casa de la cultura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('11', 'Cleofás', 'Campos', 'Mejía', 'Casa de la cultura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('12', 'Nayeli', 'Plascencia', 'Sánchez', 'Casa de la cultura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('13', 'Guillermo', 'Torres', 'Valencia', 'Casa de la cultura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('14', 'Manuel', 'Rodríguez', 'Arias', '359524-2048', 'Secretaria');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('15', 'Lizeth', 'Rivas', 'Gutiérrez', 'secretaria');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('16', 'Suleima Cristal', 'López', 'Orozco', 'Secretaria');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('17', 'Rafael', 'López', 'Orozco', 'Secretaria');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('18', 'Jaquelin', 'Cabrera', 'Camarena', '359524-2036', 'Sindicatura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('19', 'Leonardo', 'Cortez', 'Aguiñiga', 'sindicatura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('20', 'Alexis Gerardo', 'Duarte', 'García', 'sindicatura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('21', 'Julio', 'López', 'López', 'sindicatura');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('22', 'José Jesús', 'De León', 'Hernandez', '359524-2045', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('23', 'Maria Angélica', 'Báez', 'López', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('24', 'Hector', 'Cisneros', 'Jiménez', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('25', 'José Rolando', 'Ríos', 'Mora', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('26', 'María Del Carmen', 'García', 'Reyes', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('27', 'Jesús', 'Puga', 'Jaramillo', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('28', 'Andrea Jazmín', 'Estrada', 'Leyva', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('29', 'Efraín', 'Rivera', 'Piceno', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('30', 'Eduardo', 'López', 'Hernandez', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('31', 'José Luis', 'Rivera', 'Piceno', 'Tesorería');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('32', 'Juan José', 'López', 'Orozco', 'Tesoreria');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('33', 'Jesús', 'García', 'Reyes', '359524-2016', 'Predial');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('34', 'Viridiana', 'Ramírez', 'Espinoza', 'Predial');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('35', 'valentín', 'Duarte', 'Rivas', '359524-2055', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('36', 'Juan Luis', 'López', 'Hernandez', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('37', 'Tomas', 'Gonzales', 'Ramírez', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('38', 'José Uriel', 'Ortega', 'Quezada', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('39', 'Brenda lisbet', 'Govea', 'Tafolla', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('40', 'Rosa Isela', 'Valencia', 'Vargas', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('41', 'Rafael', 'Villalobos', 'Castillo', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('42', 'Rubén', 'López', 'Orozco', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('43', 'José Armando', 'Hernandez', 'Juárez', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('44', 'Horacio', 'Rodríguez', 'Ramírez', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('45', 'Roberto', 'Hernandez', 'Cabello', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('46', 'Luis Manuel', 'Arévalo', 'Menchaca', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('47', 'Daniel', 'García', 'Ríos', 'Urbanismo y obras Públicas');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('48', 'Diego Amir', 'Mejía', 'Ávila', '359524-2036', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `area`) VALUES ('49', 'Jesús', 'Molina', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('50', 'Tomas', 'González', 'Ramírez', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('51', 'Darío', 'Campos', 'Ramos', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('52', 'Esmeralda', 'Villalobos', 'Ariasa', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('53', 'Rigoberto', 'Piceno', 'Báez', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('54', 'Julio Cesar', 'Orozco', 'Magaña', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('55', 'Daniel ', 'Ávila', 'Ventura', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('56', 'Daniel', 'Orozco', 'Ávila', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('57', 'Luis Fernando', 'Murillo', 'Ramírez', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('58', 'Daniel', 'Benegas', 'Bernal', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('59', 'Esteban Gerardo', 'Rodríguez', 'Ávila', '', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('60', 'Alan Alexis', 'Ávila', 'Ávila', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('61', 'Gerardo', 'Báez', 'Vega', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('62', 'Salvador', 'Sepúlveda', 'Ramírez', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('63', 'Cesar Alejandro', 'López', 'Ramírez', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('64', 'Felipe', 'Martínez', 'Villalobos', 'Oficialía Mayor');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('65', 'German', 'Ávila', 'Ávila', '359524-2015', 'Dirección De Desarrollo Social');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('66', 'María De La Luz', 'Cervantes', 'Ceja', 'Dirección De Desarrollo Social');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('67', 'Fernanda Jocelyn', 'Vaca', 'Razo', 'Dirección De Desarrollo Social');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('68', 'Norma Patricia', 'Ramírez', 'Duarte', 'Dirección De Desarrollo Social');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('69', 'Luis', 'Montañez', 'Espinoza', 'Dirección De Desarrollo Social');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('70', 'Abigail', 'Ortega', 'Barajas', 'Dirección De Desarrollo Social');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('71', 'Ángel', 'Servín', 'Navarrete', 'D359524-2033', 'Dirección De Desarrolo Agropecuario');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('72', 'J. Refugio', 'Silva', 'Alvarado', 'Dirección De Desarrolo Agropecuario');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('73', 'San Juana', 'Reyes', 'Suarez', 'Dirección De Desarrolo Agropecuario');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('74', 'Elba Alicia', 'Herrera', 'Meza', 'Dirección De Desarrolo Agropecuario');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('75', 'Rosa Érica', 'Reyes', 'Montejano', 'Dirección De Desarrolo Agropecuario');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('76', 'Blanca Luz', 'Ascencio', 'Ojeda', 'Dirección De Desarrolo Agropecuario');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('77', 'Daysi Guadalupe', 'Castro', 'Orozco', 'Dirección De Desarrolo Agropecuario');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('78', 'Néstor Daniel', 'Orozco', 'Ávila', 'Dirección De Desarrolo Agropecuario');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('79', 'Mario Arturo', 'García', 'Suarez', '359524-2027', 'Contraloría');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('80', 'Blanca Karina', 'Escobedo', 'Gonzales', 'Contraloría');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('81', 'Jesús Francisco', 'Machuca', 'García', 'Contraloría');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('82', 'Esmeralda', 'Hernandez', 'Hernandez', 'Contraloría');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `telefono_area`, `area`) VALUES ('83', 'Cecilia', 'Del Rio', 'Carranza', '35924-2010', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('84', 'Cecilia', 'López', 'Cervantes', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('85', 'Luis', 'Arias', 'Hernandez', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('86', 'Carolina', 'López', 'Rios', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('87', 'Irene', 'Duarte', 'García', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('88', 'Blanca Esperanza', 'Corona', 'Espinoza', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('89', 'Cecilia', 'García', 'García', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('90', 'Andrea Johana', 'Ceja', 'Magallanes', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('91', 'Ayde Vanessa', 'Ibarra', 'Quezada', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('92', 'Juan', 'Ochoa', 'Olivares', 'Sistema de Desarrolo Integral Familiar(DIF)');
INSERT INTO `ayuntamiento`.`personal` (`id_personal`, `nombre`, `apellidoP`, `apeliidoM`, `area`) VALUES ('93', 'Daniela Yaneth', 'Gómez', 'Del Rio', 'Sistema de Desarrolo Integral Familiar(DIF)');
>>>>>>> Stashed changes

-- ----------------------------------------------------
-- tabla de obras--------------------------------------
-- ----------------------------------------------------
<<<<<<< Updated upstream
drop table obras;
=======
drop table obras;
create table obras(
id_obra int (11)not null auto_increment,
nombre varchar (40)not null,
fecha_inicio date not null,
fecha_final date,
lugar varchar (40) not null,
area varchar (60) not null,
descripcion varchar(100),
primary key (id_obra));

select * from obras;

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
drop table escuelas;
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
select * from escuelas;

>>>>>>> Stashed changes
