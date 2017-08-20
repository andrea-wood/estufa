<?php

namespace AppBundle\Entity;

/**
 * Ciclo
 */
class Ciclo
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
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $type;


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
     * @return Ciclo
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tratamentos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tratamentos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @var \AppBundle\Entity\Mesa
     */
    private $mesa;


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
     * @var boolean
     */
    private $isActive = 1;


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
}
