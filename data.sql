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

insert into persons (firstName, lastName, birthDate, email, telephone) values ('Susi', 'Toupe', '1974-11-15', 'stoupe0@symantec.com', '6685851293');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('Eveline', 'Joyner', '1970-08-31', 'ejoyner1@cloudflare.com', '7861614104');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('Eba', 'Penquet', '1996-07-01', 'epenquet2@walmart.com', '7779636737');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('Justina', 'Dearth', '1987-10-21', 'jdearth3@hc360.com', '5481337107');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('Venus', 'Tolwood', '1982-04-09', 'vtolwood4@w3.org', '2896359988');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('Napoleon', 'Jencey', '1984-01-31', 'njencey5@csmonitor.com', '5625961927');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('Kain', 'Wrist', '1976-09-09', 'kwrist6@mayoclinic.com', '5729661592');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('Vernor', 'Titchen', '1979-06-21', 'vtitchen7@moonfruit.com', '2342462343');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('Carlen', 'Bratton', '1998-12-12', 'cbratton8@zimbio.com', '7919696106');
insert into persons (firstName, lastName, birthDate, email, telephone) values ('April', 'Le Noire', '1991-11-08', 'alenoire9@boston.com', '1604641535');


-- Animals

insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Tabbie', '2ae9faa6-e20d-43cb-9bc1-c7cb95c3d5f7', 'M', false, '2021-03-30', 5, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Pierson', 'd7ae7e2c-1c87-48eb-8abc-3f07dd9ae5db', 'M', true, '2020-06-07', 2, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Brand', 'd2a4a665-e256-413d-8838-71d1575b7339', 'M', true, '2021-02-12', 7, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Rafael', '880c0310-b06d-46fe-85c9-4f8142e05524', 'M', true, '2021-03-12', 5, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Carny', 'd5023369-4daa-42b5-8139-384fcead59ca', 'M', false, '2020-12-12', 4, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Olga', '50390c92-c47d-48e9-929f-6a144b17a68f', 'F', false, '2020-11-01', 7, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Georgeanna', 'e6fd34e3-e7cd-45a8-8b0f-887a860719aa', 'F', false, '2020-10-09', 1, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Donalt', '3a111cbc-4115-4731-aee0-326f463ad28c', 'M', true, '2021-04-19', 1, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Pernell', 'eef78c17-6fcc-481b-8b74-c58ecf9dfb40', 'M', false, '2020-07-09', 2, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Dagny', 'f480d3be-84a8-495e-ac30-a1eb814cf67c', 'M', false, '2020-12-09', 7, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Elia', 'e263905e-d535-45c6-b2f4-ec319ac79355', 'M', false, '2020-11-01', 6, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Wilfred', '00e2b74f-04d9-488d-8ac5-bf00e24abe96', 'M', false, '2021-03-22', 9, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Sawyer', 'acde6f6a-040d-495d-9760-5fb42a5ea227', 'M', true, '2021-02-19', 8, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Jocelyne', '747804bf-c4b0-4bdc-908b-772381012665', 'F', false, '2021-03-13', 7, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Jory', '1e408425-114e-4e76-a8e0-c8d84a2882da', 'M', false, '2020-05-27', 10, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Dorolice', '34f596b2-8dad-41f4-bffc-42c02b34e7af', 'F', true, '2020-06-09', 5, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Rubi', '1c85dad6-e667-42a3-a64e-a70bf6fa74f7', 'F', true, '2020-06-05', 4, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Roxanne', 'ff970d0e-10b6-43f8-9182-72e6df113d1c', 'F', false, '2020-07-10', 4, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Auberta', '34a211fd-7ddb-4dea-a2e6-db52a7739597', 'F', true, '2020-07-04', 8, 1);
insert into animals (name, chip, sex, sterilized, birthDate, fk_person, fk_race) values ('Casey', '24f3f0d9-9690-4f78-9591-49490636c5e8', 'F', false, '2020-07-10', 5, 1);
