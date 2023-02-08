drop database if exists DireccionesIP;
create database DireccionesIP;
use DireccionesIP;

drop table if exists direcciones_ip;
drop table if exists direcciones_ip_bloqueadas;

create table direcciones_ip(
	id int auto_increment,
    ip varchar(35),
    primary key (id)
);

create table direcciones_ip_bloqueadas(
	id int auto_increment primary key,
    ip varchar(15)
);

insert into direcciones_ip (ip) value ("11000000.10101000.00000100.00001101");

select * from direcciones_ip;