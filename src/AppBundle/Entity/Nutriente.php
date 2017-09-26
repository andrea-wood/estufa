<?php

namespace AppBundle\Entity;

/**
 * Nutriente
 */
class Nutriente
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
     * @return Nutriente
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
    private $tanques;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tanques = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tanque
     *
     * @param \AppBundle\Entity\TanquesNutrientes $tanque
     *
     * @return Nutriente
     */
    public function addTanque(\AppBundle\Entity\TanquesNutrientes $tanque)
    {
        $tanque->setNutriente($this);
        
        $this->tanques[] = $tanque;

        return $this;
    }

    /**
     * Remove tanque
     *
     * @param \AppBundle\Entity\TanquesNutrientes $tanque
     */
    public function removeTanque(\AppBundle\Entity\TanquesNutrientes $tanque)
    {
        $this->tanques->removeElement($tanque);
    }

    /**
     * Get tanques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTanques()
    {
        return $this->tanques;
    }
}
