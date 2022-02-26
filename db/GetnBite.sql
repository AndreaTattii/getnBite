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
CREATE TABLE Ristoratore(
	id int PRIMARY KEY AUTO_INCREMENT,
	utente varchar(255),
	pass varchar(255)
);

INSERT INTO Ristoratore (utente, pass) VALUES 
    ('admin','a2242ead55c94c3deb7cf2340bfef9d5bcaca22dfe66e646745ee4371c633fc8');

/*
	nome utente: admin
	password:'pippo'
*/

/*riempimento tabella allergeni*/
INSERT INTO Allergene (nome) values('glutine');
INSERT INTO Allergene (nome) values('crostacei');
INSERT INTO Allergene (nome) values('uova');
INSERT INTO Allergene (nome) values('pesce');
INSERT INTO Allergene (nome) values('arachidi');
INSERT INTO Allergene (nome) values('soia');
INSERT INTO Allergene (nome) values('latte');
INSERT INTO Allergene (nome) values('frutta con guscio');
INSERT INTO Allergene (nome) values('sedano');
INSERT INTO Allergene (nome) values('senape'); 
INSERT INTO Allergene (nome) values('semi di sesamo');
INSERT INTO Allergene (nome) values('lupino');
INSERT INTO Allergene (nome) values('molluschi');


/*riempimento tabella ingredienti*/
INSERT INTO Ingrediente (nome) values('spahettti');
INSERT INTO Ingrediente (nome) values('guanciale');
INSERT INTO Ingrediente (nome) values('uova');
INSERT INTO Ingrediente (nome) values('pecorino');
INSERT INTO Ingrediente (nome) values('tuorlo');
INSERT INTO Ingrediente (nome) values('albume');
INSERT INTO Ingrediente (nome) values('pepe nero');
INSERT INTO Ingrediente (nome) values('cipolla');
INSERT INTO Ingrediente (nome) values('peperoncino');
INSERT INTO Ingrediente (nome) values('strutto');
INSERT INTO Ingrediente (nome) values('pasta');
INSERT INTO Ingrediente (nome) values('pomodoro');
INSERT INTO Ingrediente (nome) values('basilico');
INSERT INTO Ingrediente (nome) values('trofie');
INSERT INTO Ingrediente (nome) values('pesto');
INSERT INTO Ingrediente (nome) values('vongole');
INSERT INTO Ingrediente (nome) values('scampi');
INSERT INTO Ingrediente (nome) values('prezzemolo');
INSERT INTO Ingrediente (nome) values('cozze');
INSERT INTO Ingrediente (nome) values('aglio');
INSERT INTO Ingrediente (nome) values('bietole');
INSERT INTO Ingrediente (nome) values('ricotta');
INSERT INTO Ingrediente (nome) values('vino bianco');
INSERT INTO Ingrediente (nome) values('finocchio');
INSERT INTO Ingrediente (nome) values('finocchio barbe');
INSERT INTO Ingrediente (nome) values('noce');
INSERT INTO Ingrediente (nome) values('noce gherigli');
INSERT INTO Ingrediente (nome) values('parmiggiano');
INSERT INTO Ingrediente (nome) values('maggiorana');
INSERT INTO Ingrediente (nome) values('latte');
INSERT INTO Ingrediente (nome) values('sale');
INSERT INTO Ingrediente (nome) values('salmone');
INSERT INTO Ingrediente (nome) values('salmiocarpio');
INSERT INTO Ingrediente (nome) values('rapanelli');
INSERT INTO Ingrediente (nome) values('erba cipollina');
INSERT INTO Ingrediente (nome) values('panna');
INSERT INTO Ingrediente (nome) values('aceto');
INSERT INTO Ingrediente (nome) values('aceto di mela');
INSERT INTO Ingrediente (nome) values('aceto di vino');
INSERT INTO Ingrediente (nome) values('aneto');
INSERT INTO Ingrediente (nome) values('petto di tacchino');
INSERT INTO Ingrediente (nome) values('tacchino');
INSERT INTO Ingrediente (nome) values('melanzana');
INSERT INTO Ingrediente (nome) values('mozzarella');;
INSERT INTO Ingrediente (nome) values('mozzarella di bufala');
INSERT INTO Ingrediente (nome) values('funghi');
INSERT INTO Ingrediente (nome) values('funghi porcini');
INSERT INTO Ingrediente (nome) values('funghi champignon');
INSERT INTO Ingrediente (nome) values('crema');
INSERT INTO Ingrediente (nome) values('olio agliato');
INSERT INTO Ingrediente (nome) values('olio tartufato');
INSERT INTO Ingrediente (nome) values('succo di limone');
INSERT INTO Ingrediente (nome) values('cinghiale');
INSERT INTO Ingrediente (nome) values('filetto di cinghiale');
INSERT INTO Ingrediente (nome) values('frutti di bosco');
INSERT INTO Ingrediente (nome) values('patate');
INSERT INTO Ingrediente (nome) values('vino rosso');
INSERT INTO Ingrediente (nome) values('burro');
INSERT INTO Ingrediente (nome) values('salvia');
INSERT INTO Ingrediente (nome) values('rosmarino');
INSERT INTO Ingrediente (nome) values('salsiccia');
INSERT INTO Ingrediente (nome) values('pomodori');
INSERT INTO Ingrediente (nome) values('insalta');
INSERT INTO Ingrediente (nome) values('rucola');
INSERT INTO Ingrediente (nome) values('baguette');
INSERT INTO Ingrediente (nome) values('peperoni');
INSERT INTO Ingrediente (nome) values('pomodori ramati');
INSERT INTO Ingrediente (nome) values('sale Maldon');
INSERT INTO Ingrediente (nome) values('olio evo');
INSERT INTO Ingrediente (nome) values('ginocchia di manzo');
INSERT INTO Ingrediente (nome) values('ossa di manzo');
INSERT INTO Ingrediente (nome) values('controfiletto di manzo irlandese');
INSERT INTO Ingrediente (nome) values('ostriche');
INSERT INTO Ingrediente (nome) values('limone');
INSERT INTO Ingrediente (nome) values('menta fresca');
INSERT INTO Ingrediente (nome) values('mix pepe');
INSERT INTO Ingrediente (nome) values('pomodoro cuor di bue');
INSERT INTO Ingrediente (nome) values('cipolla rossa Tropea');
INSERT INTO Ingrediente (nome) values('fresella integrale');
INSERT INTO Ingrediente (nome) values('buccia di limone');
INSERT INTO Ingrediente (nome) values('insalata');
INSERT INTO Ingrediente (nome) values('polpo');
INSERT INTO Ingrediente (nome) values('calamari');
INSERT INTO Ingrediente (nome) values('acciughe');
INSERT INTO Ingrediente (nome) values('acciughe sottolio');
INSERT INTO Ingrediente (nome) values('nocciole tostate');
INSERT INTO Ingrediente (nome) values('zucchero');
INSERT INTO Ingrediente (nome) values('mandorle tostate');
INSERT INTO Ingrediente (nome) values('panna fresca');
INSERT INTO Ingrediente (nome) values('gelatina');
INSERT INTO Ingrediente (nome) values('cioccolato');
INSERT INTO Ingrediente (nome) values('cioccolato bianco');
INSERT INTO Ingrediente (nome) values('pralinato');
INSERT INTO Ingrediente (nome) values('cioccolato fondente');
INSERT INTO Ingrediente (nome) values('miele');
INSERT INTO Ingrediente (nome) values('farina');
INSERT INTO Ingrediente (nome) values('farina di mandorle');
INSERT INTO Ingrediente (nome) values('cacao');
INSERT INTO Ingrediente (nome) values('acqua');
INSERT INTO Ingrediente (nome) values('pere');
INSERT INTO Ingrediente (nome) values('grano cotto');
INSERT INTO Ingrediente (nome) values('latte intero');
INSERT INTO Ingrediente (nome) values('ricotta vaccina');
INSERT INTO Ingrediente (nome) values('scorza di limone');
INSERT INTO Ingrediente (nome) values('vanillina');
INSERT INTO Ingrediente (nome) values('cannella');
INSERT INTO Ingrediente (nome) values('savoiardi');
INSERT INTO Ingrediente (nome) values('gocce di cioccolato');
INSERT INTO Ingrediente (nome) values('arancia');
INSERT INTO Ingrediente (nome) values('rhum');
INSERT INTO Ingrediente (nome) values('estratto di vaniglia');
INSERT INTO Ingrediente (nome) values('cacao amaro');
INSERT INTO Ingrediente (nome) values('panna da montare');
INSERT INTO Ingrediente (nome) values('panna fresca liquida');
INSERT INTO Ingrediente (nome) values('baccello di vaniglia');
INSERT INTO Ingrediente (nome) values('zucchero a velo');
INSERT INTO Ingrediente (nome) values('fiocchi di sale');
INSERT INTO Ingrediente (nome) values('noci pecan');
INSERT INTO Ingrediente (nome) values('pistacchi');
INSERT INTO Ingrediente (nome) values('zucchero semolato');
INSERT INTO Ingrediente (nome) values('fragole');
INSERT INTO Ingrediente (nome) values('gelatina alimentare');
INSERT INTO Ingrediente (nome) values('mango');
INSERT INTO Ingrediente (nome) values('soia');
INSERT INTO Ingrediente (nome) values('banana');
INSERT INTO Ingrediente (nome) values('mela');
INSERT INTO Ingrediente (nome) values('anas');
INSERT INTO Ingrediente (nome) values('tonno');
INSERT INTO Ingrediente (nome) values('wurstel');
INSERT INTO Ingrediente (nome) values('zafferano');
INSERT INTO Ingrediente (nome) values('macinato');
INSERT INTO Ingrediente (nome) values('svizzera');
INSERT INTO Ingrediente (nome) values('ketchup');
INSERT INTO Ingrediente (nome) values('patatine');
INSERT INTO Ingrediente (nome) values('maionese');
INSERT INTO Ingrediente (nome) values('senape');
INSERT INTO Ingrediente (nome) values('salsa tonnata');
INSERT INTO Ingrediente (nome) values('salsa cocktail');
INSERT INTO Ingrediente (nome) values('burrata');
INSERT INTO Ingrediente (nome) values('pistacchio');
INSERT INTO Ingrediente (nome) values('grogonzola');
INSERT INTO Ingrediente (nome) values('fontina');
INSERT INTO Ingrediente (nome) values('prosciutto');
INSERT INTO Ingrediente (nome) values('origano');
INSERT INTO Ingrediente (nome) values('salame');
INSERT INTO Ingrediente (nome) values('salame piccante');
INSERT INTO Ingrediente (nome) values('carciofi');
INSERT INTO Ingrediente (nome) values('friarelli');
INSERT INTO Ingrediente (nome) values('cime di rapa');
INSERT INTO Ingrediente (nome) values('stracchino');
INSERT INTO Ingrediente (nome) values('prosciutto crudo');
INSERT INTO Ingrediente (nome) values('prosciutto cotto');
INSERT INTO Ingrediente (nome) values('speck');
INSERT INTO Ingrediente (nome) values('olive');
INSERT INTO Ingrediente (nome) values('capperi');
INSERT INTO Ingrediente (nome) values('brie');
INSERT INTO Ingrediente (nome) values('zucchine');
INSERT INTO Ingrediente (nome) values('salmone affumicato');
INSERT INTO Ingrediente (nome) values('nduja');
INSERT INTO Ingrediente (nome) values('passata');
INSERT INTO Ingrediente (nome) values('polpa');







