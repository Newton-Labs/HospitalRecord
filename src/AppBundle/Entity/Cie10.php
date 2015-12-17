<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cie10
 *
 * @ORM\Table(name="cie10")
 * @ORM\Entity
 */
class Cie10
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="enfermedad", type="string", length=254, nullable=false)
     */
    private $enfermedad;



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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Cie10
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set enfermedad
     *
     * @param string $enfermedad
     *
     * @return Cie10
     */
    public function setEnfermedad($enfermedad)
    {
        $this->enfermedad = $enfermedad;

        return $this;
    }

    /**
     * Get enfermedad
     *
     * @return string
     */
    public function getEnfermedad()
    {
        return $this->enfermedad;
    }

    /**
     * @return string Mostrar enfermedad
     */
    public function __toString()
    {
        return $this->enfermedad;
    }

}
