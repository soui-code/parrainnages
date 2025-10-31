

CREATE DATABASE parrainage;
USE parrainage;

CREATE TABLE parrain (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(80) NOT NULL,
  email VARCHAR(80) NOT NULL,
  password TEXT NOT NULL,
  cle VARCHAR(80), -- lien d'invitation
  code_parrain VARCHAR(19),
  UNIQUE KEY email (email),
  UNIQUE KEY cle (cle)
) ENGINE=InnoDB;

CREATE TABLE filleul (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_parrain INT(11) NOT NULL,
  id_filleul INT(11) NOT NULL, 
  UNIQUE KEY unique_filleul (id_filleul), --
  FOREIGN KEY (id_parrain) REFERENCES parrain(id) ON DELETE CASCADE,
  FOREIGN KEY (id_filleul) REFERENCES parrain(id) ON DELETE CASCADE
) ENGINE=InnoDB;