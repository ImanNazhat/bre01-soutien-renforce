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
            $dish = new Menu($item["name"], $item["description"], $item["picture_url"], $item["vegetarian"]);
            $dish->setId($item["id"]);
            $dishes[] = $dish;
        }
        return $dishes;
    }

     public function findOne(int $id) : ?Menu // il faut mettre la nom de ma classe models
    {
        $query = $this->db->prepare('SELECT * FROM dishes WHERE id=:id');

         $parameters = [
            "id" => $id
        ];

        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $dish = new Menu($result["name"], $result["description"], $result["picture_url"],$result["vegetarian"]);
            $dish->setId($result["id"]);
            return $dish;


        }
        return null;
    }
    public function findVegetarian() : array
    {
        $query = $this->db->prepare('SELECT * FROM dishes WHERE vegetarian=:oui');
        $query->execute(array('oui' => "oui"));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $vegetarians = [];
        
        foreach($result as $item)
        {
            $dish = new Menu($item["name"], $item["description"], $item["picture_url"],$item["vegetarian"]);
            $dish->setId($item["id"]);
            $vegetarians[] = $item;
        }
        return $vegetarians;
       
    }
}