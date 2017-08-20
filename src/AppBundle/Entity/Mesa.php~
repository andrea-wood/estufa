<?php

namespace AppBundle\Entity;

/**
 * Mesa
 */
class Mesa
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
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $qrcode;


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
     * @return Mesa
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
     * Set type
     *
     * @param string $type
     *
     * @return Mesa
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
     * Set qrcode
     *
     * @param string $qrcode
     *
     * @return Mesa
     */
    public function setQrcode($qrcode)
    {
        $this->qrcode = $qrcode;

        return $this;
    }

    /**
     * Get qrcode
     *
     * @return string
     */
    public function getQrcode()
    {
        return $this->qrcode;
    }
    /**
     * @var string
     */
    private $status;


    /**
     * Set status
     *
     * @param string $status
     *
     * @return Mesa
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ciclos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ciclos = new \Doctrine\Common\Collections\ArrayCollection();
         $this->past_ciclos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ciclo
     *
     * @param \AppBundle\Entity\Ciclo $ciclo
     *
     * @return Mesa
     */
    public function addCiclo(\AppBundle\Entity\Ciclo $ciclo)
    {
        $ciclo->setMesa($this); 

        $this->ciclos[] = $ciclo;

        return $this;
    }

    /**
     * Remove ciclo
     *
     * @param \AppBundle\Entity\Ciclo $ciclo
     */
    public function removeCiclo(\AppBundle\Entity\Ciclo $ciclo)
    {
        $this->ciclos->removeElement($ciclo);
    }

    /**
     * Get ciclos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCiclos()
    {
        return $this->ciclos;
    }

    public function addPastCiclo(\AppBundle\Entity\Ciclo $ciclo)
    {

        $this->past_ciclos[] = $ciclo;

        return $this;
    }

    public function getPastCiclos()
    {
        return $this->past_ciclos;
    }

    protected $ciclo;

    public function getCiclo()
    {
        return $this->ciclo;
    }

    public function setCiclo(\AppBundle\Entity\Ciclo $ciclo = null)
    {
        $ciclo->setMesa($this);

        $this->ciclo = $ciclo;

        return $this;
    }
}
