<?php

class RaceDao extends AbstractDao
{

    public function __construct()
    {
        // call parent constructor (AbstractDAO)
        parent::__construct('races');
    }

    public function getRaces()
    {

    }

    public function getRaceById($id)
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

    public function addRace($race)
    {
        if(empty($data['name']) || empty($data['image']) || empty($data['pokemon_id'])) {
            return false;
        }

        $pokemon = $this->create(
            [
                'id'=> 0,
                'name'=> $data['name'],
                'image' => $data['image'],
                'pokemon_id'=> $data['pokemon_id'],
                'user_id' => $data['user_id']
            ]
        );

        if ($pokemon) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO {$this->table} (name, image, pokemon_id, user_id) VALUES (?, ?, ?, ?)"
                );
                $statement->execute([
                    htmlspecialchars($pokemon->__get('name')),
                    htmlspecialchars($pokemon->__get('image')),
                    htmlspecialchars($pokemon->__get('pokemon_id')),
                    htmlspecialchars($pokemon->__get('user'))
                ]);
                return true;
            } catch(PDOException $e) {
                print $e->getMessage();
                return false;
            }
        }
    }

    public function updateRace($race)
    {

    }

    public function deleteRace($id)
    {
        if(empty($data['id'])) {
            return false;
        }

        try {
            $statement = $this->connection->prepare("DELETE FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $data['id']
            ]);
        } catch(PDOException $e) {
            print $e->getMessage();
        }
    }

    function create($result)
    {
        return new Race(
            $result['id'],
            $result['name']
        );
    }
}