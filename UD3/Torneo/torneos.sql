
use Torneos;

drop table if exists T_Partidos;
drop table if exists T_Torneos;
drop table if exists T_Jugadores;
drop table if exists T_Usuarios;

create table T_Torneos(
	id int auto_increment,
    nombreTorneo varchar(255),
    fecha date,
    cantidadJugadores int,
    estado varchar(255),
    campeon varchar(255),
    primary key (id)
);

create table T_Jugadores(
	id int auto_increment,
    nombre varchar(255),
    partidosJugados int,
    partidosGanados int,
    porcentajeVictorias int,
    torneosJugados int,
    torneosGanados int,
    primary key(id)
	
);

create table T_Partidos(
	idTorneo int,
	ronda varchar(255),
    idJugador1 int,
    idJugador2 int,
    ganadorPartido varchar(255),
    foreign key (idTorneo) references T_Torneos(id),
    foreign key (idJugador1) references T_Jugadores(id),
    foreign key (idJugador2) references T_Jugadores(id)
);

create table T_Usuarios(
	id int auto_increment,
    usuario varchar(255),
    passwd varchar(255),
    tipoUsuario varchar(255),
    primary key(id)    
);

insert into T_Torneos (nombreTorneo, fecha, cantidadJugadores, estado, campeon) value ('Torneo Ping Pong Mallorca 2023', '2023-02-03', 8, 'Finalizado', 'Daniel Okolo');
insert into T_Torneos (nombreTorneo, fecha, cantidadJugadores, estado, campeon) value ('Torneo Ping Pong IES Son Ferrer 2GS', '2022-12-22', 8, 'Finalizado', 'Carlos Acedo');
insert into T_Torneos (nombreTorneo, fecha, cantidadJugadores, estado ,campeon) value ('Torneo Ping Pong Federacion Europea', '2012-01-27', 8, 'Finalizado', 'Raul Brocal'),
																						('Torneo Ping Pong Calviá', '2020-05-12', 8, 'Finalizado', 'Raul Brocal');
                                                                                        
insert into T_Torneos (nombreTorneo, fecha) value ('Torneo de Prueba', '2023-02-03');

insert into T_Jugadores (nombre, partidosJugados, partidosGanados, porcentajeVictorias, torneosJugados, torneosGanados) value ('Adrian Castillo', 3, 3, 100, 1, 1);
insert into T_Jugadores (nombre, partidosJugados, partidosGanados, porcentajeVictorias, torneosJugados, torneosGanados) value ('Daniel Okolo', 3, 3, 100, 1, 1);
insert into T_Jugadores (nombre, partidosJugados, partidosGanados, porcentajeVictorias, torneosJugados, torneosGanados) value ('Carlos Acedo', 16, 11, 68, 4, 3);
insert into T_Jugadores (nombre, partidosJugados, partidosGanados, porcentajeVictorias, torneosJugados, torneosGanados) value ('Sergio Serrrano', 3, 3, 100, 1, 1);
insert into T_Jugadores (nombre, partidosJugados, partidosGanados, porcentajeVictorias, torneosJugados, torneosGanados) value ('Raul Brocal', 16, 10, 67, 4, 2),
																															('Fernando Buendia', 2, 1, 50, 1, 0),
                                                                                                                            ('Yeray Rus', 10, 5, 50, 5, 0),
																															('Adrian Guinot', 3,3,100,1,1);



select * from T_Torneos;
select * from T_Jugadores;
select * from T_Partidos;
select * from T_Usuarios;