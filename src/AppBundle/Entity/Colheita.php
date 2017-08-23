<?php

namespace AppBundle\Entity;

/**
 * Colheita
 */
class Colheita
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var int
     */
    private $kg;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Colheita
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
     * Set kg
     *
     * @param integer $kg
     *
     * @return Colheita
     */
    public function setKg($kg)
    {
        $this->kg = $kg;

        return $this;
    }

    /**
     * Get kg
     *
     * @return int
     */
    public function getKg()
    {
        return $this->kg;
    }
    /**
     * @var \AppBundle\Entity\Ciclo
     */
    private $ciclo;


    /**
     * Set ciclo
     *
     * @param \AppBundle\Entity\Ciclo $ciclo
     *
     * @return Colheita
     */
    public function setCiclo(\AppBundle\Entity\Ciclo $ciclo = null)
    {
        $this->ciclo = $ciclo;

        return $this;
    }

    /**
     * Get ciclo
     *
     * @return \AppBundle\Entity\Ciclo
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }
}
