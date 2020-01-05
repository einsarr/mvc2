<?php
class Formation
{
    private $id;
    private $nom;
    private $users;
    

    public function __construct()
    {
       
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getUsers()
    {
        return $this->users;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setUsers($users)
    {
        $this->users = $users;
    }
   
    public function toString()
    {
        return "Id : ".$this->id." - Nom : ".$this->nom;
    }
}