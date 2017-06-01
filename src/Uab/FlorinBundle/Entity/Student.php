<?php

namespace Uab\FlorinBundle\Entity;

/**
 * Student
 */
class Student
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
    private $prenume;

    /**
     * @var \DateTime
     */
    private $dataNasterii;

    /**
     * @var string
     */
    private $specializare;

    private $universitate;


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
     * @return Student
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
     * Set prenume
     *
     * @param string $prenume
     *
     * @return Student
     */
    public function setPrenume($prenume)
    {
        $this->prenume = $prenume;

        return $this;
    }

    /**
     * Get prenume
     *
     * @return string
     */
    public function getPrenume()
    {
        return $this->prenume;
    }

    /**
     * Set dataNasterii
     *
     * @param \DateTime $dataNasterii
     *
     * @return Student
     */
    public function setDataNasterii($dataNasterii)
    {
        $this->dataNasterii = $dataNasterii;

        return $this;
    }

    /**
     * Get dataNasterii
     *
     * @return \DateTime
     */
    public function getDataNasterii()
    {
        return $this->dataNasterii;
    }

    /**
     * Set specializare
     *
     * @param string $specializare
     *
     * @return Student
     */
    public function setSpecializare($specializare)
    {
        $this->specializare = $specializare;

        return $this;
    }

    /**
     * Get specializare
     *
     * @return string
     */
    public function getSpecializare()
    {
        return $this->specializare;
    }

    /**
     * Set universitate
     *
     * @param \Uab\FlorinBundle\Entity\Universitate $universitate
     *
     * @return Student
     */
    public function setUniversitate(\Uab\FlorinBundle\Entity\Universitate $universitate = null)
    {
        $this->universitate = $universitate;

        return $this;
    }

    /**
     * Get universitate
     *
     * @return \Uab\FlorinBundle\Entity\Universitate
     */
    public function getUniversitate()
    {
        return $this->universitate;
    }
}
