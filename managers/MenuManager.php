<?php

class MenuManager extends AbstractManager
{
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM dishes');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $dishes = [];

        foreach($result as $item)
        {
            $dishe = new Dishe($item["name"], $item["description"], $item["picture_url"], $item["vegetarian"]);
            $dishe->setId($item["id"]);
            $dishes[] = $dishe;
        }
        return $dishes;
    }

    public function findOne(int $id) : ? Dishe
    {
        $query = $this->db->prepare('SELECT * FROM dishes WHERE id=:id');

        $parameters = [
            "id" => $id
        ];

        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $dishe = new Dishe($result["name"], $result["description"], $result["picture_url"],$item["vegetarian"]);
            $dishe->setId($result["id"]);
            return $dishe;


        }
        return null;
    }
}