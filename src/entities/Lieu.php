<?php
use Doctrine\ORM\Annotations as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="formation")
 **/
class Lieu
{
    /** @Id @Column(Type="integer") @GeneratedValue */
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="double") **/
    private $longitude;
    /** @Column(type="double") **/
    private $latitude;
     /**
     * One lieu has many formations. This is the inverse side.
     * @OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
    private $formations;
    /**
     * Many lieux have one user. This is the owning side.
     * @ManyToOne(targetEntity="User", inversedBy="lieux")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    public function __construct()
    {
        $this->formations = new ArrayCollection();
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