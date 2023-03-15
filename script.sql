CREATE TABLE devise(
    idDevise INTEGER PRIMARY KEY,
    nom_devise VARCHAR(50) NOT NULL,
    iso VARCHAR(4) NOT NULL
);

CREATE TABLE entreprise(
    idEntreprise INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom_entreprise VARCHAR(40) NOT NULL UNIQUE,
    pwd VARCHAR(30) NOT NULL,
    logo VARCHAR(255) DEFAULT 'default-entreprise-logo',
    objet VARCHAR(100) NOT NULL,
    date_debut DATE NOT NULL,
    adresse VARCHAR(75) NOT NULL,
    nif VARCHAR(20) NOT NULL,
    stat VARCHAR(25) NOT NULL,
    rcs VARCHAR(25) NOT NULL,
    devise_tenue_compte INTEGER,
    FOREIGN KEY(devise_tenue_compte) REFERENCES devise(idDevise)
); 

CREATE TABLE devise_equivalence(
    idEquivalence INTEGER PRIMARY KEY AUTO_INCREMENT,
    idEntreprise INTEGER,
    idDevise INTEGER,
    taux_de_change DOUBLE PRECISION NOT NULL,
    FOREIGN KEY(idDevise) REFERENCES devise(idDevise),
    FOREIGN KEY(idEntreprise) REFERENCES entreprise(idEntreprise)
);



INSERT INTO devise VALUES(1,'Ariary Malgache','MGA'),(2,'Livre Sterling','GBP'),(3,'Dollar Américain','USD'),(4,'Euro','EUR');