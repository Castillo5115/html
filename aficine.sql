use aficine;

CREATE TABLE Pelicula(
	id int not null auto_increment,
    titulo varchar(500) not null,
    duracionMin int not null,
    votos int default 0,
    id_categoria varchar(6) not null,
    primary key (id),
    foreign key (id_categoria) references Categoria (id)
);

DROP TABLE Pelicula;

CREATE TABLE Categoria(
	id varchar (6) not null,
    nombre varchar(500) not null,
    primary key(id)
);

DROP TABLE Categoria;

INSERT into Categoria (id,nombre) values ("terror", "Terror");
INSERT into Categoria (id,nombre) values ("sci-fi", "Ciencia Ficcion");

INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("IT", 135, "terror");
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("Scream", 112, "terror");
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("Expediente Warren", 112, "terror");	
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("Smile", 115, "terror");
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("Annabelle", 98, "terror");
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("Rings", 102, "terror");
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("Nosotros", 116, "terror");
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("IT Capitulo 2", 135, "terror");
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("Viernes 13", 95, "terror");
INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("El Resplandor", 146, "terror");

select * from Pelicula;
select * from Categoria;