<?php

namespace Pep\Judo\JapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Belt
 *
 * @ORM\Table(name="belt")
 * @ORM\Entity(repositoryClass="Pep\Judo\JapBundle\Repository\BeltRepository")
 */
class Belt
{
    /**
     * @var int
     *
     * @ORM\Column(name="belt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="belt_name", type="string", length=15)
     */
    private $name;
    
    /**
     * 
     * @var string
     * 
     * * @ORM\Column(name="belt_color", type="string", length=15)
     */
    private $color;


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
     * @return Belt
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
     * Set color
     *
     * @param string $color
     *
     * @return Belt
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}
