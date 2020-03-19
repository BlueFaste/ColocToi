# Caroline Fassot
# Pour créer la base de donnée, on drop celle existante et on la recréer
DROP DATABASE IF EXISTS `coloctoi`;
CREATE DATABASE `coloctoi` CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `coloctoi`;

# On créer les tables ensuite
CREATE TABLE `membre`
(
    `id`     int(11) unsigned NOT NULL auto_increment,
    `nom`    varchar(255)     NOT NULL,
    `prenom` varchar(255)     NOT NULL,
    `mail`   varchar(255)     NOT NULL,
    `mdp`    varchar(255)     NOT NULL,
    `tel`    int(11)          NOT NULL,
    PRIMARY KEY (`id`)
) AUTO_INCREMENT = 1
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_unicode_ci;


CREATE TABLE `appartement`
(
    `id`                 int(11) UNSIGNED      NOT NULL auto_increment,
    `id_proprietaire`    int(11) UNSIGNED      NOT NULL,
    `heure_de_poste`     char(10)              NOT NULL,
    `jour_de_post`       char(10)              NOT NULL,
    `titre`              varchar(255)          NOT NULL,
    `ville`              varchar(255)          NOT NULL,
    `adresse`            varchar(255)          NOT NULL,
    `code_postal`        char(5)               NOT NULL,
    `type_logement`      varchar(255)          NOT NULL,
    `superficie`         smallint(5)           NOT NULL,
    `nb_piece`           smallint(11) UNSIGNED NOT NULL,
    `nb_coloc_max`       smallint(11) UNSIGNED NOT NULL,
    `nb_coloc_rech`      smallint(11) UNSIGNED NOT NULL,
    `meuble`             char(5)               NOT NULL,
    `loyer`              smallint(11)          NOT NULL,
    `charges`            smallint(11)          NOT NULL,
    `descritpion`        varchar(255)          NOT NULL,
    `classe_energetique` char(1)               NOT NULL,
    `ges`                char(1)               NOT NULL,
    `img1`               varchar(255),
    `img2`               varchar(255),
    `img3`               varchar(255),
    `img4`               varchar(255),
    PRIMARY KEY (`id`)
) AUTO_INCREMENT = 1
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_unicode_ci;

# On créer une clé étrangeaire reliant l'appartement à son propriétaire
ALTER TABLE `appartement`
    ADD FOREIGN KEY FK_PROPRIETAIRE_APPARTEMENT (`id_proprietaire`) REFERENCES membre (id) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE `question`
(
    `id`             int(11) unsigned NOT NULL auto_increment,
    `id_utilisateur` int(11) UNSIGNED NOT NULL,
    `nom`            varchar(255)     NOT NULL,
    `prenom`         varchar(255)     NOT NULL,
    `mail`           varchar(255)     NOT NULL,
    `sujet`          varchar(255)     NOT NULL,
    `message`        varchar(255)     NOT NULL,
    PRIMARY KEY (`id`)
) AUTO_INCREMENT = 1
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_unicode_ci;

# On créer une clé étrangeaire reliant la question à son utilisateur
ALTER TABLE `question`
    ADD FOREIGN KEY FK_UTILISATEUR_QUESTION (`id_utilisateur`) REFERENCES membre (id) ON DELETE CASCADE ON UPDATE CASCADE;

# On insert des valeurs par défaut pour avoir une BDD un peu remplite pour des tests
INSERT INTO `membre` (`nom`, `prenom`, `mail`, `mdp`, `tel`)
VALUES ('User', 'User', 'user.noLogIn@gmail.com', '0000000', '0000000000'),
       ('LeClement', 'Alice', 'alice.leclem@gmail.com', '123', '0634510976'),
       ('Nike', 'Alexandre', 'nikealex@gmail.com', '123', '0634510976'),
       ('Aquiro', 'Florentin', 'aquiflor@gmail.com', '123', '0634510976'),
       ('Zire', 'William', 'zirewilli@gmail.com', '123', '0634510976'),
       ('Niddy', 'Joséphine', 'niddyjosé@gmail.com', '123', '0634510976'),
       ('Nakiu', 'Muriel', 'nakiumumu@gmail.com', '123', '0634510976'),
       ('Loane', 'Maude', 'loanemaude@gmail.com', '123', '0634510976'),
       ('Madri', 'Chiara', 'madrichiara@gmail.com', '123', '0634510976'),
       ('Buitl', 'Louise', 'buitllouise@gmail.com', '123', '0634510976');

# On n'ajout pas d'image c'est volontaire, appartement fictif
INSERT INTO `appartement` (`id_proprietaire`, `heure_de_poste`, `jour_de_post`, `titre`, `ville`, `adresse`,
                           `code_postal`, `type_logement`, `superficie`, `nb_piece`, `nb_coloc_max`, `nb_coloc_rech`,
                           `meuble`, `loyer`, `charges`, `descritpion`, `classe_energetique`, `ges`)
VALUES ('2', '13:10', '2020-03-10', 'Appartement T1 centre Angers', 'Angers', '21 boulevard Foch', '49000',
        'appartement', '25', '2', '2', '1', 'true', '250', '25',
        'Appartement situé au plein cœur d\'Angers proche des commerce de proximité et arret de bus à la sortie de l\'immeuble',
        'D', 'F'),
       ('5', '13:10', '2020-02-26', 'Maison dans quartier calme', 'Orléans', '11 allée des lilas', '45100',
        'maison', '50', '4', '3', '2', 'true', '300', '50',
        'Maison calme. Proche des facultés de sciences, d\'agrocultures, avec jardin.', 'B', 'C'),
       ('8', '15:05', '2020-02-26', 'Appartement T1 centre ', 'Lyon', 'Centreville', '69000',
        'appartement', '30', '3', '2', '1', 'true', '550', '50',
        'Appartement au centre ville. Arrêt de bus à 5 minutes à pieds. ', 'B', 'B'),
       ('7', '14:54', '2019-11-26', 'Appartement T1 centre ', 'Angers', 'Centreville', '49000',
        'appartement', '35', '3', '2', '1', 'false', '350', '35',
        'Appartement situé à Bellebeille, près des écoles.', 'A', 'C'),
       ('4', '08:56', '2019-09-13', 'Appartement T1 ', 'Nice', 'rue Pierre Brossolette', '06000',
        'appartement', '35', '3', '2', '1', 'false', '350', '35',
        'Résidence Belle Province rue Pierre Brossolette, à proximité des transports en commun (tramway) et des commerces',
        'A', 'C'),
       ('7', '14:54', '2019-11-26', 'Appartement T1 ', 'Angers', '12 allée des lilas', '49000',
        'appartement', '30', '3', '2', '1', 'false', '350', '35',
        'Dans quartier calme résidentiel. Type 1 meublé récent (2014). Duplex d''environ 30 m² habitables ', 'A', 'C');
