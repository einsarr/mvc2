<?php
use Doctrine\ORM\Annotations as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="user")
 **/
class User
{
    /** @Id @Column(Type="integer") @GeneratedValue */
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $password;
    /**
     * One User has many lieux. This is the inverse side.
     * @OneToMany(targetEntity="Lieu", mappedBy="user")
     */
    private $lieux;
    /**
     * Many Users have Many Roles.
     * @ManyToMany(targetEntity="Roles", inversedBy="users")
     * @JoinTable(name="users_roles")
     */
    private $roles;

    public function __construct()
    {
        $this->lieux = new ArrayCollection();
        $this->roles = new ArrayCollection();
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