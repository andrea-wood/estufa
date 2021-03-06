<?php

namespace AppBundle\Entity;

/**
 * TanquesNutrientes
 */
class TanquesNutrientes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return TanquesNutrientes
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = (new \DateTime());

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return TanquesNutrientes
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = (new \DateTime());

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @var integer
     */
    private $kg = 0;


    /**
     * Set kg
     *
     * @param integer $kg
     *
     * @return TanquesNutrientes
     */
    public function setKg($kg)
    {
        $this->kg = $kg;

        return $this;
    }

    /**
     * Get kg
     *
     * @return integer
     */
    public function getKg()
    {
        return $this->kg;
    }
    /**
     * @var \AppBundle\Entity\Tanque
     */
    private $tanque;

    /**
     * @var \AppBundle\Entity\Nutriente
     */
    private $nutriente;


    /**
     * Set tanque
     *
     * @param \AppBundle\Entity\Tanque $tanque
     *
     * @return TanquesNutrientes
     */
    public function setTanque(\AppBundle\Entity\Tanque $tanque = null)
    {
        $this->tanque = $tanque;

        return $this;
    }

    /**
     * Get tanque
     *
     * @return \AppBundle\Entity\Tanque
     */
    public function getTanque()
    {
        return $this->tanque;
    }

    /**
     * Set nutriente
     *
     * @param \AppBundle\Entity\Nutriente $nutriente
     *
     * @return TanquesNutrientes
     */
    public function setNutriente(\AppBundle\Entity\Nutriente $nutriente = null)
    {
        $this->nutriente = $nutriente;

        return $this;
    }

    /**
     * Get nutriente
     *
     * @return \AppBundle\Entity\Nutriente
     */
    public function getNutriente()
    {
        return $this->nutriente;
    }
}
