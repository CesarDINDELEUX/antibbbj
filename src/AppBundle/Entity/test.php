<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\testRepository")
 */
class test
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_etude", type="date")
     */
    private $dateTest;


    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="antibioplus", mappedBy="test")
     */
    private $antibioplus;
    
    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="antibiotique", mappedBy="test")
     */
    private $antibiotique;
    
    /**
    * Many Groups have Many Users.
    * @ORM\ManyToMany(targetEntity="bacterie", mappedBy="tests")
    */
    private $bacteries;
    
    public function __construct() {
        $this->bacteries = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return test
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
     * Set dateEtude
     *
     * @param \DateTime $dateTest
     *
     * @return test
     */
    public function setDateTest($dateTest)
    {
        $this->dateTest = $dateTest;

        return $this;
    }

    /**
     * Get dateTest
     *
     * @return \DateTime
     */
    public function getDateTest()
    {
        return $this->dateTest;
    }

    /**
     * Add bactery
     *
     * @param \AppBundle\Entity\bacterie $bactery
     *
     * @return test
     */
    public function addBactery(\AppBundle\Entity\bacterie $bactery)
    {
        $this->bacteries[] = $bactery;

        return $this;
    }

    /**
     * Remove bactery
     *
     * @param \AppBundle\Entity\bacterie $bactery
     */
    public function removeBactery(\AppBundle\Entity\bacterie $bactery)
    {
        $this->bacteries->removeElement($bactery);
    }

    /**
     * Get bacteries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBacteries()
    {
        return $this->bacteries;
    }

    /**
     * Set antibioplus
     *
     * @param \AppBundle\Entity\antibioplus $antibioplus
     *
     * @return test
     */
    public function setAntibioplus(\AppBundle\Entity\antibioplus $antibioplus = null)
    {
        $this->antibioplus = $antibioplus;

        return $this;
    }

    /**
     * Get antibioplus
     *
     * @return \AppBundle\Entity\antibioplus
     */
    public function getAntibioplus()
    {
        return $this->antibioplus;
    }

    /**
     * Set antibiotique
     *
     * @param \AppBundle\Entity\antibiotique $antibiotique
     *
     * @return test
     */
    public function setAntibiotique(\AppBundle\Entity\antibiotique $antibiotique = null)
    {
        $this->antibiotique = $antibiotique;

        return $this;
    }

    /**
     * Get antibiotique
     *
     * @return \AppBundle\Entity\antibiotique
     */
    public function getAntibiotique()
    {
        return $this->antibiotique;
    }
}
