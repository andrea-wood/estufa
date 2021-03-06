<?php

namespace AppBundle\Entity;

/**
 * Sementeira
 */
class Sementeira
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
     * @var integer
     */
    private $quantitade;

    /**
     * @var \AppBundle\Entity\Semente
     */
    private $type;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }
    
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
     * @return Sementeira
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

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
     * @return Sementeira
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

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
     * Set quantitade
     *
     * @param integer $quantitade
     *
     * @return Sementeira
     */
    public function setQuantitade($quantitade)
    {
        $this->quantitade = $quantitade;

        return $this;
    }

    /**
     * Get quantitade
     *
     * @return integer
     */
    public function getQuantitade()
    {
        return $this->quantitade;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\Semente $type
     *
     * @return Sementeira
     */
    public function setType(\AppBundle\Entity\Semente $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\Semente
     */
    public function getType()
    {
        return $this->type;
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
     * @return Sementeira
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
    /**
     * @var \DateTime
     */
    private $endedAt;


    /**
     * Set endedAt
     *
     * @param \DateTime $endedAt
     *
     * @return Sementeira
     */
    public function setEndedAt($endedAt)
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    /**
     * Get endedAt
     *
     * @return \DateTime
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }
}
