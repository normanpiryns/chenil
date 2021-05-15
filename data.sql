-- Vaccines

INSERT INTO vaccines(name, description) VALUES ("Maladie de Carré", "A faire à 4 et 7 ans. Lorem ipsum dolor sit amet, constes?");
INSERT INTO vaccines(name, description) VALUES ("Parvovirose ", "A faire à 4 et 7 ans. Lorem ipsum dolor sit amet, consecte");
INSERT INTO vaccines(name, description) VALUES ("Leptospirose ictérigène", "A faire à 2, 3, 4, 5, 7 et 8 ans. Lorem ipsum duo voluptas voluptates?");
INSERT INTO vaccines(name, description) VALUES ("Hépatite contagieuse", "A faire à 4 et 7 ans. Lorem ipsum dolor sit amet, uptates?");
INSERT INTO vaccines(name, description) VALUES ("Toux des chenils", "A faire à 2, 3, 4, 5, 6, 7 et 8 ans. Lorem ipsum doloroluptas voluptates?");
INSERT INTO vaccines(name, description) VALUES ("Rage", "Tous les 3 ans pour les pays de l''Union européenne. Lorem ipsum duo voluptas voluptates?");


-- Species

INSERT INTO species(name) VALUES ("Canidée");


-- Races

INSERT INTO races(name, fk_species) VALUES ("Border Collie", 1);
INSERT INTO races(name, fk_species) VALUES ("Bouledogue français", 1);
INSERT INTO races(name, fk_species) VALUES ("Chihuaha", 1);
INSERT INTO races(name, fk_species) VALUES ("Dobermann", 1);
INSERT INTO races(name, fk_species) VALUES ("Bouvier bernois", 1);
INSERT INTO races(name, fk_species) VALUES ("Bull terrier", 1);
INSERT INTO races(name, fk_species) VALUES ("Saint-bernard", 1);
INSERT INTO races(name, fk_species) VALUES ("Jack Russell", 1);
INSERT INTO races(name, fk_species) VALUES ("Dalmatien", 1);
INSERT INTO races(name, fk_species) VALUES ("Lévrier", 1);


-- Persons

INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Susi', 'Toupe', '1974-11-15', 'stoupe0@symantec.com', '6685851293');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Eveline', 'Joyner', '1970-08-31', 'ejoyner1@cloudflare.com', '7861614104');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Eba', 'Penquet', '1996-07-01', 'epenquet2@walmart.com', '7779636737');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Justina', 'Dearth', '1987-10-21', 'jdearth3@hc360.com', '5481337107');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Venus', 'Tolwood', '1982-04-09', 'vtolwood4@w3.org', '2896359988');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Napoleon', 'Jencey', '1984-01-31', 'njencey5@csmonitor.com', '5625961927');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Kain', 'Wrist', '1976-09-09', 'kwrist6@mayoclinic.com', '5729661592');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Vernor', 'Titchen', '1979-06-21', 'vtitchen7@moonfruit.com', '2342462343');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('Carlen', 'Bratton', '1998-12-12', 'cbratton8@zimbio.com', '7919696106');
INSERT INTO persons (firstName, lastName, birthDate, email, telephone) VALUES ('April', 'Le Noire', '1991-11-08', 'alenoire9@boston.com', '1604641535');


-- Animals

INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Tabbie', '2ae9faa6-e20df7', 'M', false, '2021-03-30', 5, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Pierson', 'd7ae7e2c-1c85db', 'M', true, '2020-06-07', 2, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Brand', 'd2a4a665-e256-9', 'M', true, '2021-02-12', 7, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Rafael', '880c0310-b06d24', 'M', true, '2021-03-12', 5, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Carny', 'd5023369-4daa-a', 'M', false, '2020-12-12', 4, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Olga', '50390c92-c47d-4', 'F', false, '2020-11-01', 7, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Georgeanna', 'e6fd34e3-0719aa', 'F', false, '2020-10-09', 1, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Donalt', '3a111cbc-41158c', 'M', true, '2021-04-19', 1, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Pernell', 'eef78c17-6fcb40', 'M', false, '2020-07-09', 2, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Dagny', 'f480d3be-84a8-c', 'M', false, '2020-12-09', 7, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Elia', 'e263905e-d535-4', 'M', false, '2020-11-01', 6, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Wilfred', '00e2b74f-04de96', 'M', false, '2021-03-22', 9, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Sawyer', 'acde6f6a-040d27', 'M', true, '2021-02-19', 8, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Jocelyne', '747804bf-c42665', 'F', false, '2021-03-13', 7, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Jory', '1e408425-114e-4', 'M', false, '2020-05-27', 10, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Dorolice', '34f596b2-8de7af', 'F', true, '2020-06-09', 5, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Rubi', '1c85dad6-e667-4', 'F', true, '2020-06-05', 4, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Roxanne', 'ff970d0e-10bd1c', 'F', false, '2020-07-10', 4, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Auberta', '34a211fd-7dd597', 'F', true, '2020-07-04', 8, 1);
INSERT INTO animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES ('Casey', '24f3f0d9-9690-8', 'F', false, '2020-07-10', 5, 1);


-- Stays

