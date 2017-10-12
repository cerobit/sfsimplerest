<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preguntas
 *
 * @ORM\Table(name="preguntas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PreguntasRepository")
 */
class Preguntas
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
     * @var string
     *
     * @ORM\Column(name="pregunta", type="string", length=255)
     */
    private $pregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="respuestaUno", type="string", length=255)
     */
    private $respuestaUno;

    /**
     * @var string
     *
     * @ORM\Column(name="respuestaDos", type="string", length=255)
     */
    private $respuestaDos;

    /**
     * @var string
     *
     * @ORM\Column(name="respuestaTres", type="string", length=255)
     */
    private $respuestaTres;

    /**
     * @var string
     *
     * @ORM\Column(name="respuestaCuatro", type="string", length=255)
     */
    private $respuestaCuatro;


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
     * Set pregunta
     *
     * @param string $pregunta
     *
     * @return Preguntas
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return string
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set respuestaUno
     *
     * @param string $respuestaUno
     *
     * @return Preguntas
     */
    public function setRespuestaUno($respuestaUno)
    {
        $this->respuestaUno = $respuestaUno;

        return $this;
    }

    /**
     * Get respuestaUno
     *
     * @return string
     */
    public function getRespuestaUno()
    {
        return $this->respuestaUno;
    }

    /**
     * Set respuestaDos
     *
     * @param string $respuestaDos
     *
     * @return Preguntas
     */
    public function setRespuestaDos($respuestaDos)
    {
        $this->respuestaDos = $respuestaDos;

        return $this;
    }

    /**
     * Get respuestaDos
     *
     * @return string
     */
    public function getRespuestaDos()
    {
        return $this->respuestaDos;
    }

    /**
     * Set respuestaTres
     *
     * @param string $respuestaTres
     *
     * @return Preguntas
     */
    public function setRespuestaTres($respuestaTres)
    {
        $this->respuestaTres = $respuestaTres;

        return $this;
    }

    /**
     * Get respuestaTres
     *
     * @return string
     */
    public function getRespuestaTres()
    {
        return $this->respuestaTres;
    }

    /**
     * Set respuestaCuatro
     *
     * @param string $respuestaCuatro
     *
     * @return Preguntas
     */
    public function setRespuestaCuatro($respuestaCuatro)
    {
        $this->respuestaCuatro = $respuestaCuatro;

        return $this;
    }

    /**
     * Get respuestaCuatro
     *
     * @return string
     */
    public function getRespuestaCuatro()
    {
        return $this->respuestaCuatro;
    }
}

