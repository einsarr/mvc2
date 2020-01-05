<?php
class Lieu
{
    private $id;
    private $nom;
    private $longitude;
    private $latitude;
    private $formations;
    private $user;

    public function __construct()
    {
        
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getLongitude()
    {
        return $this->longitude;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function getFormations()
    {
        return $this->formations;
    }
    public function getUser()
    {
        return $this->user;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    public function setFormations($formations)
    {
        $this->formations = $formations;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function toString()
    {
        return "Id : ".$this->id." - Nom : ".$this->nom." - Longitude : ".$this->latitude;
    }
}