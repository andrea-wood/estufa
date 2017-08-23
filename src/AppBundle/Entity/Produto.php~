<?php

namespace AppBundle\Entity;

/**
 * Produto
 */
class Produto
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     *
     * @return Produto
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
     * @return Produto
     */
    public function addTratamento(\AppBundle\Entity\Tratamento $tratamento)
    {
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
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Produto
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
    private $days;


    /**
     * Set days
     *
     * @param integer $days
     *
     * @return Produto
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return integer
     */
    public function getDays()
    {
        return $this->days;
    }
}
