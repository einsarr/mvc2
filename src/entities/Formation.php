<?php
class Formation
{
    private $id;
    private $nom;
    private $date;
    private $duree;
    private $lieu;
    

    public function __construct($nom,$date,$duree,$lieu)
    {
        $this->nom = $nom;
        $this->date = $date;
        $this->duree=$duree;
        $this->lieu=$lieu;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getDuree()
    {
        return $this->duree;
    }
    public function getLieu()
    {
        return $this->lieu;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }
    public function toString()
    {
        return "Id : ".$this->id." - Nom : ".$this->nom." - Date : ".$this->duree." - Lieu : ".$this->lieu;
    }
}