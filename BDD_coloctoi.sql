DROP DATABASE IF EXISTS `coloctoi`;
CREATE DATABASE `coloctoi` CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `coloctoi`;


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

ALTER TABLE `question`
    ADD FOREIGN KEY FK_UTILISATEUR_QUESTION (`id_utilisateur`) REFERENCES membre (id) ON DELETE CASCADE ON UPDATE CASCADE;


INSERT INTO `membre` (`nom`, `prenom`, `mail`, `mdp`, `tel`)
VALUES ("User", "User", 'user.noLogIn@gmail.com', "0000000", "0000000000"),
       ("LeClement", "Alice", 'alice.leclem@gmail.com', "123", "0634510976"),
       ("Nike", "Alexandre", 'nikealex@gmail.com', "123", "0634510976"),
       ("Aquiro", "Florentin", 'aquiflor@gmail.com', "123", "0634510976"),
       ("Zire", "William", 'zirewilli@gmail.com', "123", "0634510976"),
       ("Niddy", "Joséphine", 'niddyjosé@gmail.com', "123", "0634510976"),
       ("Nakiu", "Muriel", 'nakiumumu@gmail.com', "123", "0634510976"),
       ("Loane", "Maude", 'loanemaude@gmail.com', "123", "0634510976"),
       ("Madri", "Chiara", 'madrichiara@gmail.com', "123", "0634510976"),
       ("Buitl", "Louise", 'buitllouise@gmail.com', "123", "0634510976");
INSERT INTO `appartement` (`id_proprietaire`, `heure_de_poste`, `jour_de_post`, `titre`, `ville`, `adresse`,
                           `code_postal`, `type_logement`, `superficie`, `nb_piece`, `nb_coloc_max`, `nb_coloc_rech`,
                           `meuble`, `loyer`, `charges`, `descritpion`, `classe_energetique`, `ges`)
VALUES ('1', '13:10:10', '2020-03-10', 'appartement neuf', 'Angers', '21 rue du cooo', '37420', 'appartement', '21',
        '2', '4', '1', 'true', '100', '10', 'azertyu', "a", "a");
