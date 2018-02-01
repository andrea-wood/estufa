<?php

namespace AppBundle\Entity;

/**
 * Tanque
 */
class Tanque
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tanque
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nutrientes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nutrientes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add nutriente
     *
     * @param \AppBundle\Entity\TanquesNutrientes $nutriente
     *
     * @return Tanque
     */
    public function addNutriente(\AppBundle\Entity\TanquesNutrientes $nutriente)
    {
        $nutriente->setTanque($this);

        $this->nutrientes[] = $nutriente;

        return $this;
    }

    /**
     * Remove nutriente
     *
     * @param \AppBundle\Entity\TanquesNutrientes $nutriente
     */
    public function removeNutriente(\AppBundle\Entity\TanquesNutrientes $nutriente)
    {
        $this->nutrientes->removeElement($nutriente);
    }

    /**
     * Get nutrientes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNutrientes()
    {
        return $this->nutrientes;
    }
}
