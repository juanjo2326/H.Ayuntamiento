
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

-- ----------------------------------------------------
-- tabla de obras--------------------------------------
-- ----------------------------------------------------
drop table obras;