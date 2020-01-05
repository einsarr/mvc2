<?php
class User
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $lieux;
    private $roles;

    public function __construct()
    {
        
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getLieux()
    {
        return $this->lieux;
    }
    public function getRoles()
    {
        return $this->roles;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;
    }
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    public function toString()
    {
        return "Id : ".$this->id." - Nom : ".$this->nom." - prenom : ".$this->email;
    }
}