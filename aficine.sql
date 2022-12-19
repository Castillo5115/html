use aficine;

DROP TABLE if exists Pelicula_Directores;
DROP TABLE if exists Pelicula_Actores;
DROP TABLE if exists Pelicula;
DROP TABLE if exists Categoria;
DROP TABLE if exists Directores;
DROP TABLE if exists Actores;

CREATE TABLE Categoria(
	id varchar (6) not null,
    nombre varchar(500) not null,
    primary key(id)
);

CREATE TABLE Pelicula(
	id int not null auto_increment,
    titulo varchar(500) not null,
    duracionMin int not null,
    votos int default 0,
    id_categoria varchar(6) not null,
    descripcion varchar(10000)not null,
    año int not null,
    primary key (id),
    foreign key (id_categoria) references Categoria (id)
);

CREATE TABLE Actores(
	id int not null auto_increment,
    nombre varchar (500) not null,
    primary key (id)
);

CREATE TABLE Directores(
	id int not null auto_increment,
    nombre varchar(500),
	primary key(id)
);

CREATE TABLE Pelicula_Actores(
	id_Pelicula int not null,
    id_Actores int not null,
    foreign key (id_Pelicula) references Pelicula (id),
    foreign key (id_Actores) references Actores (id)
);

CREATE TABLE Pelicula_Directores(
	id_Pelicula int not null,
    id_Directores int not null,
    foreign key (id_Pelicula) references Pelicula (id),
    foreign key (id_Directores) references Directores (id)
);

INSERT into Categoria (id,nombre) values ("terror", "Terror"),
										("sci-fi", "Ciencia Ficcion");

INSERT INTO Pelicula (titulo, duracionMin, id_categoria, descripcion, año) VALUES ("IT", 135, "terror", "Cuenta la historia, en un juego de correspondencias con el pasado y el presente, de un grupo de siete amigos que son perseguidos por una entidad sobrenatural, al que llaman «IT», que es capaz de cambiar de forma y se alimenta principalmente del terror que produce en sus víctimas.", 2017), 
																("Scream", 112, "terror", "Un asesino en serie, con máscara y disfraz negro, siembra el pánico entre los adolescentes de un pueblo californiano. Paralelamente, la joven Sidney Prescott atraviesa un mal momento: se cumple un año desde que murió su madre.", 1996), 
																("Expediente Warren", 112, "terror", "Basada en hechos reales. Narra los encuentros sobrenaturales que vivió la familia Perron en su casa de Rhode Island a principios de los 70. Ed y Lorraine Warren, investigadores de renombre en el mundo de los fenómenos paranormales, acuden a la llamada de una familia aterrorizada por la presencia en su granja de un ser maligno.", 2013),
																("Smile", 115, "terror", "Tras presenciar un extraño y traumático incidente con un paciente, la doctora Rose Cotter (Sosie Bacon) comienza a experimentar sucesos aterradores que no puede explicar. A medida que un sobrecogedor terror se va apoderando de su vida, Rose se ve obligada a enfrentarse a su perturbador pasado para poder sobrevivir y escapar de su espeluznante nueva realidad.",2022),
																("Annabelle", 98, "terror", "John Form encuentra el regalo perfecto para Mia, su mujer embarazada: una preciosa muñeca 'vintage' llamada Annabelle. Una noche, una secta satánica les ataca brutalmente. Además, provocan que un ente maligno se apodere de Annabelle.",2014),
																("Rings", 102, "terror", "Una joven vive angustiada por su novio, investigador de una oscura subcultura que rodea una misteriosa cinta de vídeo de la que se dice que la muerte persigue a sus espectadores a los siete días de haberla visto, hasta que llega un punto en el que decide sacrificarse para salvarle. Pero al hacerlo, un descubrimiento le hiela la sangre: hay un trozo de metraje oculto que jamás se ha visto.", 2017),
																("Nosotros", 116, "terror", "'Nosotros' cuenta la historia de una familia acomodada que decide ir a pasar un fin de semana a la playa, a una casa cerca de Santa Cruz en la que la protagonista, Adelaide (Lupita Nyong'o) solía pasar los veranos. También fue allí donde vivió uno de sus momentos más traumáticos: mientras sus padres se despistaron entre las luces de la feria y sus problemas matrimoniales, la pequeña se coló en un laberinto de espejos donde se encontró cara a cara con su doppelganger, esto es, una niña exactamente igual a ella. Ese incidente la dejó tocada durante un tiempo, y ese miedo relacionado con su propia identidad vuelve a renacer al acercarse de nuevo a esa zona costera californiana. ", 2019),
																("IT Capitulo 2", 135, "terror", "El mal vuelve a hacer su aparición en Derry. En esta ocasión el director Andy Muschietti reúne al Club de los Perdedores para regresar a donde todo empezó ,en IT: Capítulo 2 representa la conclusión de la película de terror más taquillera de todos los tiempos.", 2019),
																("Viernes 13", 95, "terror", "De nuevo en Crystal Lake, en una reinvención de la película de terror Viernes 13. Buscando a su hermana desaparecida, Clay se dirige a los fantasmales bosques del legendario Crystal Lake, en donde se tropieza con los macabros restos de unas antiguas y desvencijadas casetas que yacen tras unos árboles cubiertos de musgo.", 1980),
                                                                ("El Resplandor", 146, "terror", "Jack Torrance es un hombre que se muda con su familia a un hotel aislado que debe cuidar, con la esperanza de salir del bloqueo creativo de su escritura. Mientras Jack no puede escapar del bloqueo, las visiones psíquicas de su hijo van en aumento.", 1980);

INSERT INTO Pelicula (titulo, duracionMin, id_categoria, descripcion, año) VALUE ("Ready Player One", 140, "sci-fi", "Año 2045. El adolescente Wade Watts es solo una de las millones de personas que se evaden del sombrío mundo real para sumergirse en un mundo utópico virtual donde todo es posible: OASIS. Wade participa en la búsqueda del tesoro que el creador de este mundo imaginario dejó oculto en su obra. No obstante, hay gente muy peligrosa compitiendo contra él.", 2018),
																("Jurassic Park", 127, "sci-fi", "El multimillonario John Hammond hace realidad su sueño de clonar dinosaurios del Jurásico y crear con ellos un parque temático en una isla. Antes de abrir el parque al público general, Hammond invita a una pareja de científicos y a un matemático para que comprueben la viabilidad del proyecto. Sin embargo, el sistema de seguridad falla y los dinosaurios se escapan.", 1993),
																("Regreso al futuro", 110, "sci-fi", "El adolescente Marty McFly es amigo de Doc, un científico que ha construido una máquina del tiempo. Cuando los dos prueban el artefacto, un error fortuito hace que Marty llegue a 1955, año en el que sus padres iban al instituto y todavía no se habían conocido. Después de impedir su primer encuentro, Marty deberá conseguir que se conozcan y se enamoren, de lo contrario su existencia no sería posible.", 1985);

INSERT INTO Directores (nombre) VALUE ("Andres Muschietti"),
("Wes Craven"),
("James Wan"),
("Parker Finn"),
("Jhon R. Leonettis"),
("Gore Verbinski"),
("Jordan Peele"),
("Sean S. Cunningham"),
("Stanley Kubrick"),
("Steven Spielberg"),
("Robert Zemeckis");



insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(1,1);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(2,2);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(3,3);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(4,4);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(5,5);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(6,6);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(7,7);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(8,1);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(9,8);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(10,9);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(11,10);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(12,11);
insert into Pelicula_Directores (id_Pelicula,id_Directores)VALUE(13,10);

select * from Pelicula_Directores;
