<?php

namespace AppBundle\Entity;

/**
 * Ciclo
 */
class Ciclo
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
     * @var string
     */
    private $type;

    /**
     * @var boolean
     */
    private $isActive = 1;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tratamentos;

    /**
     * @var \AppBundle\Entity\Mesa
     */
    private $mesa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tratamentos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Ciclo
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
     * @return Ciclo
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
     * Set type
     *
     * @param string $type
     *
     * @return Ciclo
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Ciclo
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add tratamento
     *
     * @param \AppBundle\Entity\Tratamento $tratamento
     *
     * @return Ciclo
     */
    public function addTratamento(\AppBundle\Entity\Tratamento $tratamento)
    {
        $tratamento->setCiclo($this);
        
        $this->tratamentos[] = $tratamento;

        return $this;
    }

    /**
     * Remove tratamento
     *
     * @param \AppBundle\Entity\Tratamento $tratamento
     */
    public function removeTratamento(\AppBundle\Entity\Tratamento $tratamento)
    {
        $this->tratamentos->removeElement($tratamento);
    }

    /**
     * Get tratamentos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTratamentos()
    {
        return $this->tratamentos;
    }

    /**
     * Set mesa
     *
     * @param \AppBundle\Entity\Mesa $mesa
     *
     * @return Ciclo
     */
    public function setMesa(\AppBundle\Entity\Mesa $mesa = null)
    {
        $this->mesa = $mesa;

        return $this;
    }

    /**
     * Get mesa
     *
     * @return \AppBundle\Entity\Mesa
     */
    public function getMesa()
    {
        return $this->mesa;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $colheitas;


    /**
     * Add colheita
     *
     * @param \AppBundle\Entity\Colheita $colheita
     *
     * @return Ciclo
     */
    public function addColheita(\AppBundle\Entity\Colheita $colheita)
    {
        $colheita->setCiclo($this);
        
        $this->colheitas[] = $colheita;

        return $this;
    }

    /**
     * Remove colheita
     *
     * @param \AppBundle\Entity\Colheita $colheita
     */
    public function removeColheita(\AppBundle\Entity\Colheita $colheita)
    {
        $this->colheitas->removeElement($colheita);
    }

    /**
     * Get colheitas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColheitas()
    {
        return $this->colheitas;
    }
    /**
     * @var \DateTime
     */
    private $endedAt = null;


    /**
     * Set endedAt
     *
     * @param \DateTime $endedAt
     *
     * @return Ciclo
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
    /**
     * @var boolean
     */
    private $isEnded = 0;


    /**
     * Set isEnded
     *
     * @param boolean $isEnded
     *
     * @return Ciclo
     */
    public function setIsEnded($isEnded)
    {
        $this->isEnded = $isEnded;

        return $this;
    }

    /**
     * Get isEnded
     *
     * @return boolean
     */
    public function getIsEnded()
    {
        return $this->isEnded;
    }

    public function setInitialEndedAt()
    {
        $this->endedAt = (new \DateTime());

        return $this;
    }

    
    /**
     * @var \AppBundle\Entity\Sementeira
     */
    private $sementeira;


    /**
     * Set sementeira
     *
     * @param \AppBundle\Entity\Sementeira $sementeira
     *
     * @return Ciclo
     */
    public function setSementeira(\AppBundle\Entity\Sementeira $sementeira = null)
    {
        $sementeira->setCiclo($this);
        
        $this->sementeira = $sementeira;

        return $this;
    }

    /**
     * Get sementeira
     *
     * @return \AppBundle\Entity\Sementeira
     */
    public function getSementeira()
    {
        return $this->sementeira;
    }
}
