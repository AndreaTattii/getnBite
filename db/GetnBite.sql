/*Fattorino (CF, nome, cognome)
Consegna (id, orario_partenza, stato, orario_arrivo, costo, cfFattorino)
Recensione (id, testo, ora_pubblicazione, data_pubblicazione, punteggio, titolo, idUtente)
Utente (id, nome, cognome, email, pass)
Ordine (id, costo_totale, orario, orario_richiesto, idQuartiere, idUtente)
Quartiere (id, nome, provincia)
Evento (id, indirizzo, civ, tipo, num_partecipanti, orario, idUtente, idMenu)
Menu (id, nome, prezzo)
MenuContienePietanza (idMenu, idPietanza)
Carrello (id)
Pietanza (id, nome, descrizione, url_img, prezzo, tipo)
PietanzaAppartieneOrdine (idPietanza, idOrdine)
CarrelloContienePietanza (idCarrello, idPietanza)
Ingrediente (id, nome)
PietanzaContieneIngrediente (idPietanza, idIngrediente)
Allergene (id, nome)
IngredienteContieneAllergene (idIngrediente, idAllergene)
PietanzaContieneAllergene(idPietanza, idAllergene)*/
-------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------
/*da codificare in latin1_general_cs*/-----------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------
CREATE TABLE Fattorino (
	CF char(16) PRIMARY KEY,
	nome varchar(255) NOT NULL,
	cognome varchar(255) NOT NULL
);

CREATE TABLE Consegna(
	id int PRIMARY KEY AUTO_INCREMENT,
	orario_partenza TIME, 
	orario_arrivo TIME,
	stato varchar(255) NOT NULL,
	costo double(10,2),
	cfFattorino char(16),
    FOREIGN KEY (cfFattorino) REFERENCES Fattorino(CF)
);

CREATE TABLE Utente(
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(255) NOT NULL,
	cognome varchar(255) NOT NULL,
	email varchar(255) NOT NULL UNIQUE,
	pass varchar(255) NOT NULL
);

CREATE TABLE Recensione(
	id int PRIMARY KEY AUTO_INCREMENT,
	valutaConsegna int NOT NULL,
	data_pubblicazione TIMESTAMP,
	testo varchar(500) NOT NULL,
	titolo varchar(255) NOT NULL,
	punteggio tinyint NOT NULL,
	idUtente int,
    FOREIGN KEY (idUtente) REFERENCES Utente(id)
);

CREATE TABLE Quartiere(
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(255) NOT NULL,
	provincia varchar(255) NOT NULL 
);

CREATE TABLE Ordine(
	id int PRIMARY KEY AUTO_INCREMENT,
	costo_totale double(10,2) NOT NULL,
	orario_richiesto TIME NOT NULL,
	orario TIMESTAMP,
	idQuartiere int,
	idUtente int,
	FOREIGN KEY (idQuartiere) REFERENCES Quartiere(id),
	FOREIGN KEY (idUtente) REFERENCES Utente(id)
);

CREATE TABLE Menu(
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(255) NOT NULL UNIQUE,
	prezzo double(10,2) NOT NULL
);

CREATE TABLE Evento(
	id int PRIMARY KEY AUTO_INCREMENT,
	civ tinyint NOT NULL,
	indirizzo varchar(255) NOT NULL,
	tipo varchar(255) NOT NULL,
	num_partecipanti int NOT NULL,
	orario TIME NOT NULL,
	giorno DATE NOT NULL,
	idMenu int,
	idUtente int,
	FOREIGN KEY (idMenu) REFERENCES Menu(id),
	FOREIGN KEY (idUtente) REFERENCES Utente(id)
);

CREATE TABLE Carrello(
	id int PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE Pietanza(
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(255) NOT NULL UNIQUE,
	descrizione varchar(255),
	url_img varchar(255) NOT NULL,
	prezzo double(10,2) NOT NULL,
	tipo varchar(255) NOT NULL
);

CREATE TABLE Ingrediente(
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(255) NOT NULL UNIQUE
);

CREATE TABLE Allergene(
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(255) NOT NULL UNIQUE
);

CREATE TABLE MenuContienePietanza(
	idMenu int,
	idPietanza int,
	PRIMARY KEY (idMenu, idPietanza),
	FOREIGN KEY (idMenu) REFERENCES Menu(id),
	FOREIGN KEY (idPietanza) REFERENCES Pietanza(id)
);

CREATE TABLE PietanzaAppartieneOrdine(
	idPietanza int,
	idOrdine int,
	PRIMARY KEY (idPietanza, idOrdine),
	FOREIGN KEY (idOrdine) REFERENCES Ordine(id),
	FOREIGN KEY (idPietanza) REFERENCES Pietanza(id)
);

CREATE TABLE CarrelloContienePietanza(
	idPietanza int,
	idCarrello int,
	PRIMARY KEY (idPietanza, idCarrello),
	FOREIGN KEY (idCarrello) REFERENCES Carrello(id),
	FOREIGN KEY (idPietanza) REFERENCES Pietanza(id)
);

CREATE TABLE PietanzaContieneIngrediente(
	idPietanza int,
	idIngrediente int,
	PRIMARY KEY (idPietanza, idIngrediente),
	FOREIGN KEY (idPietanza) REFERENCES Pietanza(id),
	FOREIGN KEY (idIngrediente) REFERENCES Ingrediente(id)
);

CREATE TABLE IngredienteContieneAllergene(
	idIngrediente int,
	idAllergene int,
	PRIMARY KEY (idIngrediente, idAllergene),
	FOREIGN KEY (idAllergene) REFERENCES Allergene(id),
	FOREIGN KEY (idIngrediente) REFERENCES Ingrediente(id)
);

CREATE TABLE PietanzaContieneAllergene(
	idPietanza int,
	idAllergene int,
	PRIMARY KEY (idPietanza, idAllergene),
	FOREIGN KEY (idPietanza) REFERENCES Pietanza(id),
	FOREIGN KEY (idAllergene) REFERENCES Allergene(id)
);











