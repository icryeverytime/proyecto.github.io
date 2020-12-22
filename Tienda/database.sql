CREATE TABLE PRODUCTO(
	codpro int not null AUTO_INCREMENT,
	nompro varchar(50) null,
	catpro varchar(50) null,
	despro varchar(100) null,
	prepro numeric(6,2) null,
	estado int null,
	CONSTRAINT pk_producto
	PRIMARY KEY (codpro)
);

alter table PRODUCTO add rutimapro varchar(100) null;

INSERT INTO PRODUCTO (nompro,catpro,despro,prepro,estado,rutimapro)
VALUES ('Play station 5','Nueva Generación','Es hora de jugar con la nueva consola de sony.','14999.99',1,'ps5.jpg'),
('Xbox Series X', 'Nueva Generacion','Sueña y diviertete con la nueva consola de microsfot.','12999.99',1,'xbox.jpg'),
('Nintendo Switch','Nueva Generación','Deja la suerte al cielo con nintendo.','8999.99',1,'switch.jpg'),
('Nintendo 64','Antigua Generación','Enterate de N o no vengas de nuevo.','5509.99',1,'N64.jpg'),
('Sega Megadrive','Antigua Generación','Genesis hace lo que nintendo no puede.','6999.99',1,'SMD.jpg'),
('Nintendo NES','Antigua Generación','No hay consola como esta.','4999.99',1,'Nnes.jpg');


CREATE TABLE USUARIO(
	codusu int not null AUTO_INCREMENT,
	nomusu varchar(50) ,
	apeusu varchar(50) ,
	emausu varchar(50) not null,
	pasusu varchar(20) not null,
	estado int not null,
	CONSTRAINT pk_usuario
	PRIMARY KEY (codusu)
);

INSERT INTO USUARIO (nomusu,apeusu,emausu,pasusu,estado)
VALUES ('Usuario','Demo','correo@example.com','123456',1);

create table PEDIDO(
	codped int not null AUTO_INCREMENT,
	codusu int not null,
	codpro int not null,
	fecped datetime not null,
	estado int not null,
	dirusuped varchar(50) not null,
	telusuped varchar(12) not null,
	PRIMARY KEY (codped)
);