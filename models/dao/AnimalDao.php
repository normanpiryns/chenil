<?php

class AnimalDao extends AbstractDao
{

    public function __construct()
    {
        // call parent constructor (AbstractDAO)
        parent::__construct('animals');
    }

    // fetch all animals
    public function getAnimals()
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table}");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $this->createAll($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    /**
     * Retourne les données de la table animal,
     * sans tenir compte des relations avec les autres tables
     * @param $id
     * @return Animal
     */
    public function getAnimalById($id)
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $id
            ]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $this->create($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    /**
     * Récupère un animal avec les données complet.
     * C'est à dire en tenant compte de ses jointures avec les autres tables
     * @param $id
     * @return Animal
     */
    public function getAnimalByIdFullData($id)
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $id
            ]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $this->deepCreate($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }



    /**
     * Récupère la personne à qui appartient l'animal
     * @param $id
     * @return Animal
     */
    public function getUserByAnimalId($id)
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $id
            ]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $this->create($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    // create animal

    /**
     * Enregistre un animal dans la DB
     * @param $animal
     * @return bool
     */
    public function store($data)
    {
        // todo on ne doit enregistrer l'animal que pour une personne
        $data['fk_person'] = '1';

        if (empty($data['name']) ||
            empty($data['chip']) ||
            empty($data['sex']) ||
            (empty($data['sterilized']) && $data['sterilized'] != "0") || // empty return false if "0" so we need to verifiy this
            empty($data['birthDate']) ||
            empty($data['fk_person']) ||
            empty($data['fk_race'])) {

            return false;
        }

        $animal = $this->create(
            [
                'id' => 0,
                'name' => $data['name'],
                'chip' => $data['chip'],
                'sex' => $data['sex'],
                'sterilized' => $data['sterilized'],
                'birthDate' => $data['birthDate'],
                'fk_person' => $data['fk_person'],
                'fk_race' => $data['fk_race']
            ]
        );

        if ($animal) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO {$this->table} (name, chip, sex, sterilized, birthDate, fk_person, fk_race) VALUES (?, ?, ?, ?, ?, ?, ?)"
                );
                $statement->execute([
                    htmlspecialchars($animal->__get('name')),
                    htmlspecialchars($animal->__get('chip')),
                    htmlspecialchars($animal->__get('sex')),
                    htmlspecialchars($animal->__get('sterilized')),
                    htmlspecialchars($animal->__get('birthDate')),
                    htmlspecialchars($animal->__get('person')->id),
                    htmlspecialchars($animal->__get('race')->id)
                ]);
                return true;
            } catch (PDOException $e) {
                print $e->getMessage();
                return false;
            }
        }
    }

    public function updateAnimal($id, $data)
    {
        if (empty($id)) {
            return false;
        }

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET chip = ?, name = ?, sex = ?, sterilized = ?, birthDate = ?, fk_race = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['chip']),
                htmlspecialchars($data['name']),
                htmlspecialchars($data['sex']),
                htmlspecialchars($data['sterilized']),
                htmlspecialchars($data['birthDate']),
                htmlspecialchars($data['fk_race']),
                htmlspecialchars($id)
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function deleteAnimal($id)
    {
        if (empty($id)) {
            return false;
        }

        try {
            $statement = $this->connection->prepare("DELETE FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $id
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    // Instantiate a list of animals
    function createAll($results)
    {
        $productList = array();
        foreach ($results as $result) {
            array_push($productList, $this->create($result));
        }
        return $productList;
    }

    // Instantiate a animals
    function create($result)
    {
        $person = new Person($result['fk_person'], null, null, null, null, null);
        $race = new Race($result['fk_race'], null);

        return new Animal(
            $result['id'],
            $result['name'],
            $result['chip'],
            $result['sex'],
            $result['sterilized'],
            $result['birthDate'],
            $person,
            $race
        );
    }

    /**
     * @param $result
     * @return Animal comprend le propriétaire de l'animal
     */
    public function deepCreate($result)
    {
        // get owner
        $ownerId = $result['fk_person']; // owner id
        $personDao = new PersonDao();
        $person = $personDao->getPersonById($ownerId); // get animal owner

        // get race
        $raceId = $result['fk_race']; // race id
        $raceDao = new RaceDao();
        $race = $raceDao->getRaceById($raceId); // get animal race

        // get stays
//        $raceId = $result['fk_race']; // race id
//        $stayDao = new StayDao();
//        $stay = $stayDao->($raceId); // get animal race

        return new Animal(
            $result['id'],
            $result['name'],
            $result['chip'],
            $result['sex'],
            $result['sterilized'],
            $result['birthDate'],
            $person,
            $race
        );
    }

}