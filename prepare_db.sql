-- TO create the DB
CREATE DATABASE IF NOT EXISTS revforme;
USE revforme;
-- To create All the DB Tables
CREATE TABLE IF NOT EXISTS cliente (
    id_client INT(11) NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    telephone VARCHAR(15) NOT NULL,
    adresse TEXT NOT NULL,
    date_naissance DATE NOT NULL,
    PRIMARY KEY (id_client)
);

CREATE TABLE IF NOT EXISTS activite (
    id_activite INT(11) NOT NULL AUTO_INCREMENT,
    titre VARCHAR(150) NOT NULL,
    description VARCHAR(100),
    destination VARCHAR(200) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    places_disponible INT(11),
    PRIMARY KEY (id_activite)
);

CREATE TABLE IF NOT EXISTS reservation (
    id_reservation INT(11) NOT NULL AUTO_INCREMENT,
    id_client INT(11) NOT NULL,
    id_activite INT(11) NOT NULL,
    date_reservation TIMESTAMP NOT NULL,
    status ENUM('En attente', 'Confirmée', 'Annulée') NOT NULL,
    PRIMARY KEY (id_reservation),
    FOREIGN KEY (id_client) REFERENCES cliente(id_client) ON DELETE CASCADE,
    FOREIGN KEY (id_activite) REFERENCES activite(id_activite)ON DELETE CASCADE
);

-- to Join the Tables and show reservations
SELECT * FROM `reservation`  INNER JOIN cliente on reservation.id_client = cliente.id_client INNER JOIN activite on reservation.id_activite = activite.id_activite;

-- To insert a new activity 
INSERT INTO `activite`(`titre`,`description`,`destination`,`prix`,`date_debut`,`date_fin`,`places_disponible`) VALUES('$titre','$description','$destination','$prix','$date_debut','$date_fin','$places_disponible');

--To insert new client 
INSERT INTO `cliente`(`nom`,`prenom`,`email`,`telephone`,`adresse`,`date_naissance`) VALUES('$nom','$prenom','$email','$telephone','$adresse','$ddn')

-- to make a reservation for a client 

INSERT INTO `reservation`(`id_client`,`id_activite`,`date_reservation`,`status`) VALUES('$IdClient','$ActivityId',NOW(),'$status');

-- TO delete a reservation 

DELETE FROM `reservation` WHERE `id_reservation` = '$id';

-- to edit actityt sttaus

UPDATE reservation set status = '$value' where id_reservation = '$key';

-- to show all the client 

SELECT * FROM `cliente`;

-- to show all the acticity 

SELECT * FROM `activite`;

-- to rename table 

RENAME TABLE `revforme`.`client` TO `revforme`.`cliente`;

-- to update a row in activite 

UPDATE `activite` SET `titre` = 'oussama' WHERE `activite`.`id_activite` = 9;

-- to edit a column 

ALTER TABLE `activite` CHANGE `prix` `price` DECIMAL(10,2) NOT NULL;


