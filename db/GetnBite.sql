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
PietanzaContieneIngrediente (idPietanza, idIngrediente)*/
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
	id int PRIMARY KEY AUTO_INCREMENT,
	id_Utente int,
	FOREIGN KEY(id_Utente) REFERENCES Utente(id)
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
	nome varchar(255) PRIMARY KEY,
	allergene varchar(255)
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
	nomeIngrediente varchar(255),
	PRIMARY KEY (idPietanza, nomeIngrediente),
	FOREIGN KEY (idPietanza) REFERENCES Pietanza(id),
	FOREIGN KEY (nomeIngrediente) REFERENCES Ingrediente(nome)
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
INSERT INTO Ingrediente (nome, allergene) values('pepe nero',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cipolla',NULL);
INSERT INTO Ingrediente (nome, allergene) values('peperoncino',NULL);
INSERT INTO Ingrediente (nome, allergene) values('strutto',NULL);
INSERT INTO Ingrediente (nome, allergene) values('pasta','glutine');
INSERT INTO Ingrediente (nome, allergene) values('pomodoro',NULL);
INSERT INTO Ingrediente (nome, allergene) values('basilico',NULL);
INSERT INTO Ingrediente (nome, allergene) values('trofie','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pesto',NULL);
INSERT INTO Ingrediente (nome, allergene) values('vongole','molluschi e derivati');
INSERT INTO Ingrediente (nome, allergene) values('scampi','crostacei e derivati');
INSERT INTO Ingrediente (nome, allergene) values('prezzemolo',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cozze','molluschi e derivati');
INSERT INTO Ingrediente (nome, allergene) values('aglio',NULL);
INSERT INTO Ingrediente (nome, allergene) values('bietole',NULL);
INSERT INTO Ingrediente (nome, allergene) values('ricotta','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('vino bianco',NULL);
INSERT INTO Ingrediente (nome, allergene) values('finocchio',NULL);
INSERT INTO Ingrediente (nome, allergene) values('finocchio barbe',NULL);
INSERT INTO Ingrediente (nome, allergene) values('noce','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('noce gherigli','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('parmigiano','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('maggiorana',NULL);
INSERT INTO Ingrediente (nome, allergene) values('latte','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('sale',NULL);
INSERT INTO Ingrediente (nome, allergene) values('salmone','pesce e derivati');
INSERT INTO Ingrediente (nome, allergene) values('salmiocarpio','pesce e derivati');
INSERT INTO Ingrediente (nome, allergene) values('rapanelli',NULL);
INSERT INTO Ingrediente (nome, allergene) values('erba cipollina',NULL);
INSERT INTO Ingrediente (nome, allergene) values('panna','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('aceto',NULL);
INSERT INTO Ingrediente (nome, allergene) values('aceto di mela',NULL);
INSERT INTO Ingrediente (nome, allergene) values('aceto di vino',NULL);
INSERT INTO Ingrediente (nome, allergene) values('aneto',NULL);
INSERT INTO Ingrediente (nome, allergene) values('petto di tacchino',NULL);
INSERT INTO Ingrediente (nome, allergene) values('tacchino',NULL);
INSERT INTO Ingrediente (nome, allergene) values('melanzana',NULL);
INSERT INTO Ingrediente (nome, allergene) values('mozzarella','latte e derivati');;
INSERT INTO Ingrediente (nome, allergene) values('mozzarella di bufala','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('funghi',NULL);
INSERT INTO Ingrediente (nome, allergene) values('funghi porcini',NULL);
INSERT INTO Ingrediente (nome, allergene) values('funghi champignon',NULL);
INSERT INTO Ingrediente (nome, allergene) values('crema','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('olio agliato',NULL);
INSERT INTO Ingrediente (nome, allergene) values('olio tartufato',NULL);
INSERT INTO Ingrediente (nome, allergene) values('succo di limone',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cinghiale',NULL);
INSERT INTO Ingrediente (nome, allergene) values('filetto di cinghiale',NULL);
INSERT INTO Ingrediente (nome, allergene) values('frutti di bosco',NULL);
INSERT INTO Ingrediente (nome, allergene) values('patate',NULL);
INSERT INTO Ingrediente (nome, allergene) values('vino rosso',NULL);
INSERT INTO Ingrediente (nome, allergene) values('burro','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('salvia',NULL);
INSERT INTO Ingrediente (nome, allergene) values('rosmarino',NULL);
INSERT INTO Ingrediente (nome, allergene) values('salsiccia',NULL);
INSERT INTO Ingrediente (nome, allergene) values('pomodori',NULL);
INSERT INTO Ingrediente (nome, allergene) values('insalata',NULL);
INSERT INTO Ingrediente (nome, allergene) values('rucola',NULL);
INSERT INTO Ingrediente (nome, allergene) values('baguette','glutine');
INSERT INTO Ingrediente (nome, allergene) values('peperoni',NULL);
INSERT INTO Ingrediente (nome, allergene) values('pomodori ramati',NULL);
INSERT INTO Ingrediente (nome, allergene) values('sale Maldon',NULL);
INSERT INTO Ingrediente (nome, allergene) values('olio evo',NULL);
INSERT INTO Ingrediente (nome, allergene) values('ginocchia di manzo',NULL);
INSERT INTO Ingrediente (nome, allergene) values('ossa di manzo',NULL);
INSERT INTO Ingrediente (nome, allergene) values('controfiletto di manzo irlandese',NULL);
INSERT INTO Ingrediente (nome, allergene) values('ostriche','molluschi e derivati');
INSERT INTO Ingrediente (nome, allergene) values('limone',NULL);
INSERT INTO Ingrediente (nome, allergene) values('menta fresca',NULL);
INSERT INTO Ingrediente (nome, allergene) values('mix pepe',NULL);
INSERT INTO Ingrediente (nome, allergene) values('pomodoro cuor di bue',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cipolla rossa Tropea',NULL);
INSERT INTO Ingrediente (nome, allergene) values('fresella integrale',NULL);
INSERT INTO Ingrediente (nome, allergene) values('buccia di limone',NULL);
INSERT INTO Ingrediente (nome, allergene) values('polpo',NULL);
INSERT INTO Ingrediente (nome, allergene) values('calamari',NULL);
INSERT INTO Ingrediente (nome, allergene) values('acciughe',NULL);
INSERT INTO Ingrediente (nome, allergene) values('acciughe sottolio','anidride solforosa e solfiti');
INSERT INTO Ingrediente (nome, allergene) values('nocciole tostate','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('zucchero',NULL);
INSERT INTO Ingrediente (nome, allergene) values('mandorle tostate','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('panna fresca','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('gelatina',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cioccolato',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cioccolato bianco','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pralinato',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cioccolato fondente',NULL);
INSERT INTO Ingrediente (nome, allergene) values('miele',NULL);
INSERT INTO Ingrediente (nome, allergene) values('farina','glutine');
INSERT INTO Ingrediente (nome, allergene) values('farina di mandorle','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('cacao',NULL);
INSERT INTO Ingrediente (nome, allergene) values('acqua',NULL);
INSERT INTO Ingrediente (nome, allergene) values('pere',NULL);
INSERT INTO Ingrediente (nome, allergene) values('grano cotto','glutine');
INSERT INTO Ingrediente (nome, allergene) values('latte intero','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('ricotta vaccina','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('scorza di limone',NULL);
INSERT INTO Ingrediente (nome, allergene) values('vanillina',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cannella',NULL);
INSERT INTO Ingrediente (nome, allergene) values('savoiardi','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('gocce di cioccolato',NULL);
INSERT INTO Ingrediente (nome, allergene) values('arancia',NULL);
INSERT INTO Ingrediente (nome, allergene) values('rhum',NULL);
INSERT INTO Ingrediente (nome, allergene) values('estratto di vaniglia',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cacao amaro',NULL);
INSERT INTO Ingrediente (nome, allergene) values('panna da montare','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('panna fresca liquida','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('baccello di vaniglia',NULL);
INSERT INTO Ingrediente (nome, allergene) values('zucchero a velo',NULL);
INSERT INTO Ingrediente (nome, allergene) values('fiocchi di sale',NULL);
INSERT INTO Ingrediente (nome, allergene) values('noci pecan','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pistacchi','frutta a guscio e derivati');
INSERT INTO Ingrediente (nome, allergene) values('zucchero semolato',NULL);
INSERT INTO Ingrediente (nome, allergene) values('fragole',NULL);
INSERT INTO Ingrediente (nome, allergene) values('gelatina alimentare',NULL);
INSERT INTO Ingrediente (nome, allergene) values('mango',NULL);
INSERT INTO Ingrediente (nome, allergene) values('soia',NULL);
INSERT INTO Ingrediente (nome, allergene) values('banana',NULL);
INSERT INTO Ingrediente (nome, allergene) values('mela',NULL);
INSERT INTO Ingrediente (nome, allergene) values('ananas',NULL);
INSERT INTO Ingrediente (nome, allergene) values('tonno','pesce e derivati');
INSERT INTO Ingrediente (nome, allergene) values('wurstel',NULL);
INSERT INTO Ingrediente (nome, allergene) values('zafferano',NULL);
INSERT INTO Ingrediente (nome, allergene) values('macinato',NULL);
INSERT INTO Ingrediente (nome, allergene) values('svizzera',NULL);
INSERT INTO Ingrediente (nome, allergene) values('ketchup',NULL);
INSERT INTO Ingrediente (nome, allergene) values('patatine',NULL);
INSERT INTO Ingrediente (nome, allergene) values('maionese',NULL);
INSERT INTO Ingrediente (nome, allergene) values('senape','senape e derivati');
INSERT INTO Ingrediente (nome, allergene) values('salsa tonnata','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('salsa cocktail','uova e derivati');
INSERT INTO Ingrediente (nome, allergene) values('burrata','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('pistacchio',NULL);
INSERT INTO Ingrediente (nome, allergene) values('gorgonzola','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('fontina','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('prosciutto',NULL);
INSERT INTO Ingrediente (nome, allergene) values('origano',NULL);
INSERT INTO Ingrediente (nome, allergene) values('salame',NULL);
INSERT INTO Ingrediente (nome, allergene) values('salame piccante',NULL);
INSERT INTO Ingrediente (nome, allergene) values('carciofi',NULL);
INSERT INTO Ingrediente (nome, allergene) values('friarelli',NULL);
INSERT INTO Ingrediente (nome, allergene) values('cime di rapa',NULL);
INSERT INTO Ingrediente (nome, allergene) values('stracchino','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('prosciutto crudo',NULL);
INSERT INTO Ingrediente (nome, allergene) values('prosciutto cotto',NULL);
INSERT INTO Ingrediente (nome, allergene) values('speck',NULL);
INSERT INTO Ingrediente (nome, allergene) values('olive',NULL);
INSERT INTO Ingrediente (nome, allergene) values('capperi',NULL);
INSERT INTO Ingrediente (nome, allergene) values('brie','latte e derivati');
INSERT INTO Ingrediente (nome, allergene) values('zucchine',NULL);
INSERT INTO Ingrediente (nome, allergene) values('salmone affumicato','pesce e derivati');
INSERT INTO Ingrediente (nome, allergene) values('nduja',NULL);
INSERT INTO Ingrediente (nome, allergene) values('passata',NULL);
INSERT INTO Ingrediente (nome, allergene) values('polpa',NULL);







