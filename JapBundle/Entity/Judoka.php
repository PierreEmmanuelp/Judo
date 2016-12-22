<?php

namespace Pep\Judo\JapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Judoka
 *
 * @ORM\Table(name="judoka")
 * @ORM\Entity(repositoryClass="Pep\Judo\JapBundle\Repository\JudokaRepository")
 */
class Judoka
{
    /**
     * @var int
     *
     * @ORM\Column(name="judoka_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="judoka_name", type="string", length=40)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="judoka_forename", type="string", length=40)
     */
    private $forename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="judoka_dateBirth", type="date")
     */
    private $dateBirth;

    /**
     * @var float
     *
     * @ORM\Column(name="judoka_weight", type="float")
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="judoka_belt", type="string", length=255)
     */
    private $belt;


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
     * @return Judoka
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
     * Set forename
     *
     * @param string $forename
     *
     * @return Judoka
     */
    public function setForename($forename)
    {
        $this->forename = $forename;

        return $this;
    }

    /**
     * Get forename
     *
     * @return string
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * Set dateBirth
     *
     * @param \DateTime $dateBirth
     *
     * @return Judoka
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * Get dateBirth
     *
     * @return \DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return Judoka
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set belt
     *
     * @param string $belt
     *
     * @return Judoka
     */
    public function setBelt($belt)
    {
        $this->belt = $belt;

        return $this;
    }

    /**
     * Get belt
     *
     * @return string
     */
    public function getBelt()
    {
        return $this->belt;
    }
}
