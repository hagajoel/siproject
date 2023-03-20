CREATE TABLE devise(
    idDevise INTEGER PRIMARY KEY,
    nom_devise VARCHAR(50) NOT NULL,
    iso VARCHAR(4) NOT NULL
);

CREATE TABLE entreprise(
    idEntreprise INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom_entreprise VARCHAR(40) NOT NULL UNIQUE,
    pwd VARCHAR(30) NOT NULL,
    capital DOUBLE PRECISION NOT NULL,
    logo VARCHAR(255) DEFAULT 'default-entreprise-logo.png',
    objet TEXT NOT NULL,
    date_debut DATE NOT NULL,
    adresse VARCHAR(75) NOT NULL,
    nif VARCHAR(20) NOT NULL,
    stat VARCHAR(25) NOT NULL,
    rcs VARCHAR(25) NOT NULL,
    devise_tenue_compte INTEGER,
    FOREIGN KEY(devise_tenue_compte) REFERENCES devise(idDevise)
); 


-- INSERT INTO entreprise VALUES(null, 'DIMPEX', 'individuel', 0, null, 'Production d\'articles industriels et la vente de marchandises auprès de ces clients locaux et étrangers','2023/01/01','ENCEINTE ITU ANDOHARANOFOTSY BP 1960 Antananarivo 101','00000','00000','00000',1);

CREATE TABLE devise_equivalence(
    idEquivalence INTEGER PRIMARY KEY AUTO_INCREMENT,
    idEntreprise INTEGER,
    idDevise INTEGER,
    taux_de_change DOUBLE PRECISION NOT NULL,
    FOREIGN KEY(idDevise) REFERENCES devise(idDevise),
    FOREIGN KEY(idEntreprise) REFERENCES entreprise(idEntreprise)
);

INSERT INTO devise VALUES(1,'Ariary Malgache','MGA'),(2,'Livre Sterling','GBP'),(3,'Dollar Américain','USD'),(4,'Euro','EUR');

CREATE TABLE pcg(
    idPcg SERIAL PRIMARY KEY,
    idEntreprise INTEGER,
    compte VARCHAR(5) NOT NULL,
    intitule VARCHAR(75) NOT NULL,
    FOREIGN KEY(idEntreprise) REFERENCES entreprise(idEntreprise)
);

CREATE TABLE tiers(
    idTiers SERIAL PRIMARY KEY,
    idEntreprise INTEGER,
    types VARCHAR(2) NOT NULL,
    numero VARCHAR(30) NOT NULL,
    FOREIGN KEY(idEntreprise) REFERENCES entreprise(idEntreprise)
);