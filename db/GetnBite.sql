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
	nome varchar(255) NOT NULL UNIQUE,
	allergene varchar(255)
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


/*riempimento tabella ingredienti*/
INSERT INTO Ingrediente (nome, allergene) values('spahetti','glutine');
INSERT INTO Ingrediente (nome, allergene) values('guanciale',NULL);
INSERT INTO Ingrediente (nome, allergene) values('uova','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pecorino','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('tuorlo','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('albume','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pepe nero');
INSERT INTO Ingrediente (nome, allergene) values('cipolla');
INSERT INTO Ingrediente (nome, allergene) values('peperoncino');
INSERT INTO Ingrediente (nome, allergene) values('strutto');
INSERT INTO Ingrediente (nome, allergene) values('pasta','glutine');
INSERT INTO Ingrediente (nome, allergene) values('pomodoro');
INSERT INTO Ingrediente (nome, allergene) values('basilico');
INSERT INTO Ingrediente (nome, allergene) values('trofie','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pesto');
INSERT INTO Ingrediente (nome, allergene) values('vongole','molluschi e derivati');
INSERT INTO Ingrediente (nome, allergene) values('scampi','crostacei e derivati');
INSERT INTO Ingrediente (nome, allergene) values('prezzemolo');
INSERT INTO Ingrediente (nome, allergene) values('cozze','molluschi e derivati');
INSERT INTO Ingrediente (nome, allergene) values('aglio');
INSERT INTO Ingrediente (nome, allergene) values('bietole');
INSERT INTO Ingrediente (nome, allergene) values('ricotta','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('vino bianco');
INSERT INTO Ingrediente (nome, allergene) values('finocchio');
INSERT INTO Ingrediente (nome, allergene) values('finocchio barbe');
INSERT INTO Ingrediente (nome, allergene) values('noce','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('noce gherigli','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('parmigiano','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('maggiorana');
INSERT INTO Ingrediente (nome, allergene) values('latte','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('sale');
INSERT INTO Ingrediente (nome, allergene) values('salmone','pesce e derivati');
INSERT INTO Ingrediente (nome, allergene) values('salmiocarpio','pesce e derivati');
INSERT INTO Ingrediente (nome, allergene) values('rapanelli');
INSERT INTO Ingrediente (nome, allergene) values('erba cipollina');
INSERT INTO Ingrediente (nome, allergene) values('panna','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('aceto');
INSERT INTO Ingrediente (nome, allergene) values('aceto di mela');
INSERT INTO Ingrediente (nome, allergene) values('aceto di vino');
INSERT INTO Ingrediente (nome, allergene) values('aneto');
INSERT INTO Ingrediente (nome, allergene) values('petto di tacchino');
INSERT INTO Ingrediente (nome, allergene) values('tacchino');
INSERT INTO Ingrediente (nome, allergene) values('melanzana');
INSERT INTO Ingrediente (nome, allergene) values('mozzarella','latte e derivati');;
INSERT INTO Ingrediente (nome, allergene) values('mozzarella di bufala','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('funghi');
INSERT INTO Ingrediente (nome, allergene) values('funghi porcini');
INSERT INTO Ingrediente (nome, allergene) values('funghi champignon');
INSERT INTO Ingrediente (nome, allergene) values('crema','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('olio agliato');
INSERT INTO Ingrediente (nome, allergene) values('olio tartufato');
INSERT INTO Ingrediente (nome, allergene) values('succo di limone');
INSERT INTO Ingrediente (nome, allergene) values('cinghiale');
INSERT INTO Ingrediente (nome, allergene) values('filetto di cinghiale');
INSERT INTO Ingrediente (nome, allergene) values('frutti di bosco');
INSERT INTO Ingrediente (nome, allergene) values('patate');
INSERT INTO Ingrediente (nome, allergene) values('vino rosso');
INSERT INTO Ingrediente (nome, allergene) values('burro','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('salvia');
INSERT INTO Ingrediente (nome, allergene) values('rosmarino');
INSERT INTO Ingrediente (nome, allergene) values('salsiccia');
INSERT INTO Ingrediente (nome, allergene) values('pomodori');
INSERT INTO Ingrediente (nome, allergene) values('insalata');
INSERT INTO Ingrediente (nome, allergene) values('rucola');
INSERT INTO Ingrediente (nome, allergene) values('baguette','glutine');
INSERT INTO Ingrediente (nome, allergene) values('peperoni');
INSERT INTO Ingrediente (nome, allergene) values('pomodori ramati');
INSERT INTO Ingrediente (nome, allergene) values('sale Maldon');
INSERT INTO Ingrediente (nome, allergene) values('olio evo');
INSERT INTO Ingrediente (nome, allergene) values('ginocchia di manzo');
INSERT INTO Ingrediente (nome, allergene) values('ossa di manzo');
INSERT INTO Ingrediente (nome, allergene) values('controfiletto di manzo irlandese');
INSERT INTO Ingrediente (nome, allergene) values('ostriche','molluschi e derivati');
INSERT INTO Ingrediente (nome, allergene) values('limone');
INSERT INTO Ingrediente (nome, allergene) values('menta fresca');
INSERT INTO Ingrediente (nome, allergene) values('mix pepe');
INSERT INTO Ingrediente (nome, allergene) values('pomodoro cuor di bue');
INSERT INTO Ingrediente (nome, allergene) values('cipolla rossa Tropea');
INSERT INTO Ingrediente (nome, allergene) values('fresella integrale');
INSERT INTO Ingrediente (nome, allergene) values('buccia di limone');
INSERT INTO Ingrediente (nome, allergene) values('insalata');
INSERT INTO Ingrediente (nome, allergene) values('polpo');
INSERT INTO Ingrediente (nome, allergene) values('calamari');
INSERT INTO Ingrediente (nome, allergene) values('acciughe');
INSERT INTO Ingrediente (nome, allergene) values('acciughe sottolio','anidride solforosa e solfiti');
INSERT INTO Ingrediente (nome, allergene) values('nocciole tostate');
INSERT INTO Ingrediente (nome, allergene) values('zucchero');
INSERT INTO Ingrediente (nome, allergene) values('mandorle tostate','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('panna fresca','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('gelatina');
INSERT INTO Ingrediente (nome, allergene) values('cioccolato');
INSERT INTO Ingrediente (nome, allergene) values('cioccolato bianco','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pralinato');
INSERT INTO Ingrediente (nome, allergene) values('cioccolato fondente');
INSERT INTO Ingrediente (nome, allergene) values('miele');
INSERT INTO Ingrediente (nome, allergene) values('farina','glutine');
INSERT INTO Ingrediente (nome, allergene) values('farina di mandorle','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('cacao');
INSERT INTO Ingrediente (nome, allergene) values('acqua');
INSERT INTO Ingrediente (nome, allergene) values('pere');
INSERT INTO Ingrediente (nome, allergene) values('grano cotto','glutine');
INSERT INTO Ingrediente (nome, allergene) values('latte intero','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('ricotta vaccina','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('scorza di limone');
INSERT INTO Ingrediente (nome, allergene) values('vanillina');
INSERT INTO Ingrediente (nome, allergene) values('cannella');
INSERT INTO Ingrediente (nome, allergene) values('savoiardi','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('gocce di cioccolato');
INSERT INTO Ingrediente (nome, allergene) values('arancia');
INSERT INTO Ingrediente (nome, allergene) values('rhum');
INSERT INTO Ingrediente (nome, allergene) values('estratto di vaniglia');
INSERT INTO Ingrediente (nome, allergene) values('cacao amaro');
INSERT INTO Ingrediente (nome, allergene) values('panna da montare','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('panna fresca liquida','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('baccello di vaniglia');
INSERT INTO Ingrediente (nome, allergene) values('zucchero a velo');
INSERT INTO Ingrediente (nome, allergene) values('fiocchi di sale');
INSERT INTO Ingrediente (nome, allergene) values('noci pecan','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pistacchi','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('zucchero semolato');
INSERT INTO Ingrediente (nome, allergene) values('fragole');
INSERT INTO Ingrediente (nome, allergene) values('gelatina alimentare');
INSERT INTO Ingrediente (nome, allergene) values('mango');
INSERT INTO Ingrediente (nome, allergene) values('soia');
INSERT INTO Ingrediente (nome, allergene) values('banana');
INSERT INTO Ingrediente (nome, allergene) values('mela');
INSERT INTO Ingrediente (nome, allergene) values('ananas');
INSERT INTO Ingrediente (nome, allergene) values('tonno','pesce e derivati');
INSERT INTO Ingrediente (nome, allergene) values('wurstel');
INSERT INTO Ingrediente (nome, allergene) values('zafferano');
INSERT INTO Ingrediente (nome, allergene) values('macinato');
INSERT INTO Ingrediente (nome, allergene) values('svizzera');
INSERT INTO Ingrediente (nome, allergene) values('ketchup');
INSERT INTO Ingrediente (nome, allergene) values('patatine');
INSERT INTO Ingrediente (nome, allergene) values('maionese');
INSERT INTO Ingrediente (nome, allergene) values('senape','senape e derivati');
INSERT INTO Ingrediente (nome, allergene) values('salsa tonnata','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('salsa cocktail','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('burrata','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pistacchio');
INSERT INTO Ingrediente (nome, allergene) values('gorgonzola','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('fontina','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('prosciutto');
INSERT INTO Ingrediente (nome, allergene) values('origano');
INSERT INTO Ingrediente (nome, allergene) values('salame');
INSERT INTO Ingrediente (nome, allergene) values('salame piccante');
INSERT INTO Ingrediente (nome, allergene) values('carciofi');
INSERT INTO Ingrediente (nome, allergene) values('friarelli');
INSERT INTO Ingrediente (nome, allergene) values('cime di rapa');
INSERT INTO Ingrediente (nome, allergene) values('stracchino','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('prosciutto crudo');
INSERT INTO Ingrediente (nome, allergene) values('prosciutto cotto');
INSERT INTO Ingrediente (nome, allergene) values('speck');
INSERT INTO Ingrediente (nome, allergene) values('olive');
INSERT INTO Ingrediente (nome, allergene) values('capperi');
INSERT INTO Ingrediente (nome, allergene) values('brie','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('zucchine');
INSERT INTO Ingrediente (nome, allergene) values('salmone affumicato','pesce e derivati');
INSERT INTO Ingrediente (nome, allergene) values('nduja');
INSERT INTO Ingrediente (nome, allergene) values('passata');
INSERT INTO Ingrediente (nome, allergene) values('polpa');







