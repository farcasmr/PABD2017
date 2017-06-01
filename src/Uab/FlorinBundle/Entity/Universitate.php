<?php

namespace Uab\FlorinBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Universitate
 */
class Universitate
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nume;

    /**
     * @var string
     */
    private $localitate;

    private $studenti;

    public function __construct()
    {
        $this->studenti = new ArrayCollection();
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
     * Set nume
     *
     * @param string $nume
     *
     * @return Universitate
     */
    public function setNume($nume)
    {
        $this->nume = $nume;

        return $this;
    }

    /**
     * Get nume
     *
     * @return string
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * Set localitate
     *
     * @param string $localitate
     *
     * @return Universitate
     */
    public function setLocalitate($localitate)
    {
        $this->localitate = $localitate;

        return $this;
    }

    /**
     * Get localitate
     *
     * @return string
     */
    public function getLocalitate()
    {
        return $this->localitate;
    }

    /**
     * Add studenti
     *
     * @param \Uab\FlorinBundle\Entity\Student $studenti
     *
     * @return Universitate
     */
    public function addStudenti(\Uab\FlorinBundle\Entity\Student $studenti)
    {
        $this->studenti[] = $studenti;

        return $this;
    }

    /**
     * Remove studenti
     *
     * @param \Uab\FlorinBundle\Entity\Student $studenti
     */
    public function removeStudenti(\Uab\FlorinBundle\Entity\Student $studenti)
    {
        $this->studenti->removeElement($studenti);
    }

    /**
     * Get studenti
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudenti()
    {
        return $this->studenti;
    }
}
