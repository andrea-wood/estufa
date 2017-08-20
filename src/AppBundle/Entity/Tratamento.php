<?php

namespace AppBundle\Entity;

/**
 * Tratamento
 */
class Tratamento
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
    private $days;

    /**
     * @var \DateTime
     */
    private $expiredAt;


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
     * @return Tratamento
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt =  (new \DateTime());

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
     * Set days
     *
     * @param integer $days
     *
     * @return Tratamento
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     *
     * @return Tratamento
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt =  (new \DateTime());

        return $this;
    }

    /**
     * Get expiredAt
     *
     * @return \DateTime
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
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
     * @return Tratamento
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
     * @var \AppBundle\Entity\Produto
     */
    private $produto;


    /**
     * Set produto
     *
     * @param \AppBundle\Entity\Produto $produto
     *
     * @return Tratamento
     */
    public function setProduto(\AppBundle\Entity\Produto $produto = null)
    {
        $this->produto = $produto;

        return $this;
    }

    /**
     * Get produto
     *
     * @return \AppBundle\Entity\Produto
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * @var string
     */
    private $produto_name;


    /**
     * Set produtoName
     *
     * @param string $produtoName
     *
     * @return Tratamento
     */
    public function setProdutoName($produtoName)
    {
        $this->produto_name = $produtoName;

        return $this;
    }

    /**
     * Get produtoName
     *
     * @return string
     */
    public function getProdutoName()
    {
        return $this->produto_name;
    }
}
