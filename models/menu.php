<?php

class Menu
{
    private ? int $id = null;

   
    public function __construct(private string $name, private string $discription, private string $pictureUrl,private string $vegetarian )
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

   
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    
    public function getName(): string
    {
        return $this->name;
    }

   
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDiscription(): string
    {
        return $this->discription;
    }

   
    public function setDiscription(string $discription): void
    {
        $this->discription = $discription;
    }
    
    public function getPictureUrl(): string
    {
        return $this->pictureUrl;
    }

   
    public function setPictureUrl(string $pictureUrl): void
    {
        $this->pictureUrl = $pictureUrl;
    }
    
    public function getVegetarian(): string
    {
        return $this->vegetarian;
    }

   
    public function setVegetarian(string $pictureAlt): void
    {
        $this->pictureAlt= $vegetarian;
    }
    
}
