CREATE TABLE client(
	id_client int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT ,
	nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(150) unique,
    telephone VARCHAR(15),
    adresse text,
    date_naissance date
)

CREATE TABLE activite (
    id_activite int(11) not null PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(150),
    description text,
    prix decimal(10,2) not null,
    date_debut date,
    date_fin date,
    places_disponibles int(11) not null
)

CREATE TABLE reservation (
	id_reservation int(11) not null PRIMARY KEY  AUTO_INCREMENT,
	id_client int(11),
    id_activite int(11),
    date_reservation timestamp,
    status ENUM('En attente','Confirmee','Annulee') Not null,
    FOREIGN KEY(id_client) REFERENCES client(id_client),
    FOREIGN KEY(id_activite) REFERENCES activite(id_activite)
)

