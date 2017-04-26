<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bacterie
 *
 * @ORM\Table(name="bacterie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\bacterieRepository")
 */
class bacterie
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
    * Many Users have Many Groups.
    * @ORM\ManyToMany(targetEntity="test", inversedBy="bacteries")
    * @ORM\JoinTable(name="tests_bacteries")
    */
    private $tests;

    public function __construct() {
        $this->tests = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return bacterie
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
     * Add test
     *
     * @param \AppBundle\Entity\test $test
     *
     * @return bacterie
     */
    public function addTest(\AppBundle\Entity\test $test)
    {
        $this->tests[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \AppBundle\Entity\test $test
     */
    public function removeTest(\AppBundle\Entity\test $test)
    {
        $this->tests->removeElement($test);
    }

    /**
     * Get tests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTests()
    {
        return $this->tests;
    }
}
