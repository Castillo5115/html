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

INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUES ("IT", 135, "terror"), 
																("Scream", 112, "terror"), 
																("Expediente Warren", 112, "terror"),
																("Smile", 115, "terror"),
																("Annabelle", 98, "terror"),
																("Rings", 102, "terror"),
																("Nosotros", 116, "terror"),
																("IT Capitulo 2", 135, "terror"),
																("Viernes 13", 95, "terror"),
                                                                ("El Resplandor", 146, "terror");

INSERT INTO Pelicula (titulo, duracionMin, id_categoria) VALUE ("Ready Player One", 140, "sci-fi"),
																("Jurassic Park", 127, "sci-fi"),
																("Regreso al futuro", 110, "sci-fi");

select * from Pelicula;
select * from Categoria;