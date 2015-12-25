<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * IngresoPaciente.
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class IngresoPaciente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngreso", type="date")
     */
    private $fechaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="motivoIngreso", type="string", length=255)
     */
    private $motivoIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="procedimientoRealizado", type="string", length=255)
     */
    private $procedimientoRealizado;

    /**
     * @ORM\ManyToOne(targetEntity="Cie10",inversedBy="diagnosticos")
     * @ORM\JoinColumn(name="cie10_", referencedColumnName="id")
     */
    private $diagnosticoCie10;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico1", type="string", length=255,nullable=true)
     */
    private $diagnostico1;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico2", type="string", length=255,nullable=true)
     */
    private $diagnostico2;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico3", type="string", length=255,nullable=true)
     */
    private $diagnostico3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSalida", type="date",nullable=true)
     */
    private $fechaSalida;

    /**
     * @ORM\ManyToOne(targetEntity="Paciente",inversedBy="ingreso")
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id",onDelete="SET NULL")
     */
    private $paciente;

    /**
     * @Gedmo\Slug(fields={"motivoIngreso"},updatable=true)
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id",onDelete="SET NULL")
     */
    private $usuario;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="content_changed_by", type="string", nullable=true)
     * @Gedmo\Blameable(on="change", field={"fechaIngreso", "motivoIngreso","procedimientoRealizado","fechaSalida"})
     */
    private $contentChangedBy;
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaIngreso.
     *
     * @param \DateTime $fechaIngreso
     *
     * @return IngresoPaciente
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso.
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set motivoIngreso.
     *
     * @param string $motivoIngreso
     *
     * @return IngresoPaciente
     */
    public function setMotivoIngreso($motivoIngreso)
    {
        $this->motivoIngreso = $motivoIngreso;

        return $this;
    }

    /**
     * Get motivoIngreso.
     *
     * @return string
     */
    public function getMotivoIngreso()
    {
        return $this->motivoIngreso;
    }

    /**
     * Set procedimientoRealizado.
     *
     * @param string $procedimientoRealizado
     *
     * @return IngresoPaciente
     */
    public function setProcedimientoRealizado($procedimientoRealizado)
    {
        $this->procedimientoRealizado = $procedimientoRealizado;

        return $this;
    }

    /**
     * Get procedimientoRealizado.
     *
     * @return string
     */
    public function getProcedimientoRealizado()
    {
        return $this->procedimientoRealizado;
    }

    /**
     * Set diagnostico1.
     *
     * @param string $diagnostico1
     *
     * @return IngresoPaciente
     */
    public function setDiagnostico1($diagnostico1)
    {
        $this->diagnostico1 = $diagnostico1;

        return $this;
    }

    /**
     * Get diagnostico1.
     *
     * @return string
     */
    public function getDiagnostico1()
    {
        return $this->diagnostico1;
    }

    /**
     * Set diagnostico2.
     *
     * @param string $diagnostico2
     *
     * @return IngresoPaciente
     */
    public function setDiagnostico2($diagnostico2)
    {
        $this->diagnostico2 = $diagnostico2;

        return $this;
    }

    /**
     * Get diagnostico2.
     *
     * @return string
     */
    public function getDiagnostico2()
    {
        return $this->diagnostico2;
    }

    /**
     * Set diagnostico3.
     *
     * @param string $diagnostico3
     *
     * @return IngresoPaciente
     */
    public function setDiagnostico3($diagnostico3)
    {
        $this->diagnostico3 = $diagnostico3;

        return $this;
    }

    /**
     * Get diagnostico3.
     *
     * @return string
     */
    public function getDiagnostico3()
    {
        return $this->diagnostico3;
    }

    /**
     * Set fechaSalida.
     *
     * @param \DateTime $fechaSalida
     *
     * @return IngresoPaciente
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida.
     *
     * @return \DateTime
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return Curso
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set created.
     *
     * @param \DateTime $created
     *
     * @return IngresoPaciente
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Set updated.
     *
     * @param \DateTime $updated
     *
     * @return IngresoPaciente
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Set paciente.
     *
     * @param \AppBundle\Entity\Paciente $paciente
     *
     * @return IngresoPaciente
     */
    public function setPaciente(\AppBundle\Entity\Paciente $paciente = null)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente.
     *
     * @return \AppBundle\Entity\Paciente
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * Set usuario.
     *
     * @param \UserBundle\Entity\Usuario $usuario
     *
     * @return IngresoPaciente
     */
    public function setUsuario(\UserBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario.
     *
     * @return \UserBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set diagnosticoCie10.
     *
     * @param \AppBundle\Entity\Cie10 $diagnosticoCie10
     *
     * @return IngresoPaciente
     */
    public function setDiagnosticoCie10(\AppBundle\Entity\Cie10 $diagnosticoCie10 = null)
    {
        $this->diagnosticoCie10 = $diagnosticoCie10;

        return $this;
    }

    /**
     * Get diagnosticoCie10.
     *
     * @return \AppBundle\Entity\Cie10
     */
    public function getDiagnosticoCie10()
    {
        return $this->diagnosticoCie10;
    }

    /**
     * Set contentChangedBy.
     *
     * @param string $contentChangedBy
     *
     * @return IngresoPaciente
     */
    public function setContentChangedBy($contentChangedBy)
    {
        $this->contentChangedBy = $contentChangedBy;

        return $this;
    }

    /**
     * Get contentChangedBy.
     *
     * @return string
     */
    public function getContentChangedBy()
    {
        return $this->contentChangedBy;
    }

    public function __toString()
    {
        return date_format($this->fechaIngreso, 'd/m/Y');
    }
}
