DROP DATABASE IF EXISTS `coloctoi`;
CREATE DATABASE `coloctoi` CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `coloctoi`;


CREATE TABLE `membre` (
 `id` int(11) unsigned NOT NULL auto_increment,
 `nom` varchar(255) NOT NULL,
 `prenom` varchar(255) NOT NULL,
 `mail` varchar(255) NOT NULL,
 `mdp` varchar(255) NOT NULL,
 `tel` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) AUTO_INCREMENT=1 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `appartement` (
 `id` int(11) UNSIGNED NOT NULL auto_increment,
 `id_proprietaire` int(11) UNSIGNED NOT NULL,
 `nom` varchar(255) NOT NULL,
 `heure_de_poste` time NOT NULL,
 `jour_de_post` date NOT NULL,
 `adresse` varchar(255) NOT NULL,
 `code_postal` int(5) NOT NULL,
 `ville` varchar(255) NOT NULL,
 `logement` varchar(255) NOT NULL,
 `type_de_bien` varchar(255) NOT NULL,
 `descritpion` varchar(255),
 `prix` varchar(255) NOT NULL,
 `surface` varchar(255) NOT NULL,
 `meuble` varchar(255) NOT NULL,
 `classe_energetique` varchar(255),
 `ges` varchar(255),
 `charges` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) AUTO_INCREMENT=1 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `appartement` ADD FOREIGN KEY FK_PROPRIETAIRE_APPARTEMENT (`id_proprietaire`) REFERENCES membre(id) ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `membre` (`nom`,`prenom`,`mail`,`mdp`,`tel`) VALUES ("LeClement", "Alice",'alice.leclem@gmail.com',"123","0634510976"), ("Besson", "Bruno",'brunobesson@gmail.com',"123","0634510976"), ("Nike", "Alexandre",'nikealex@gmail.com',"123","0634510976"), ("Aquiro", "Florentin",'aquiflor@gmail.com',"123","0634510976"), ("Zire", "William",'zirewilli@gmail.com',"123","0634510976"), ("Niddy", "Joséphine",'niddyjosé@gmail.com',"123","0634510976"), ("Nakiu", "Muriel",'nakiumumu@gmail.com',"123","0634510976"), ("Loane", "Maude",'loanemaude@gmail.com',"123","0634510976"), ("Madri", "Chiara",'madrichiara@gmail.com',"123","0634510976"), ("Buitl", "Louise",'buitllouise@gmail.com',"123","0634510976");
INSERT INTO `appartement` (`id_proprietaire`, `nom`, `heure_de_poste`, `jour_de_post`, `adresse`,`code_postal`, `ville`, `logement`, `type_de_bien`, `descritpion`, `prix`, `surface`, `meuble`, `classe_energetique`, `ges`, `charges`) VALUES ('1', 'appartement neuf', '13:10:10', '2020-03-10', '21 rue du cooo', '37420', 'Angers', 'appartement', 't1', 'jeipo', '23', '25', 'oui', 'e', 'e', '10');
