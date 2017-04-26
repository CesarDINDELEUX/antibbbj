<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\equipeRepository")
 */
class equipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
    * Many Groups have Many Users.
    * @ORM\ManyToMany(targetEntity="user", mappedBy="equipes")
    */
    private $users;
    
    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
    * Many Users have Many Groups.
    * @ORM\ManyToMany(targetEntity="etude", inversedBy="etudes")
    * @ORM\JoinTable(name="etudes_equipes")
    */
    private $etudes;

    public function __construct_etu() {
        $this->etudes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return equipe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\user $user
     *
     * @return equipe
     */
    public function addUser(\AppBundle\Entity\user $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\user $user
     */
    public function removeUser(\AppBundle\Entity\user $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add etude
     *
     * @param \AppBundle\Entity\etude $etude
     *
     * @return equipe
     */
    public function addEtude(\AppBundle\Entity\etude $etude)
    {
        $this->etudes[] = $etude;

        return $this;
    }

    /**
     * Remove etude
     *
     * @param \AppBundle\Entity\etude $etude
     */
    public function removeEtude(\AppBundle\Entity\etude $etude)
    {
        $this->etudes->removeElement($etude);
    }

    /**
     * Get etudes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudes()
    {
        return $this->etudes;
    }
}
