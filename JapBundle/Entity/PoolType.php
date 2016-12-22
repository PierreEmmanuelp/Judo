<?php

namespace Pep\Judo\JapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolType
 *
 * @ORM\Table(name="pooltype")
 * @ORM\Entity(repositoryClass="Pep\Judo\JapBundle\Repository\PoolTypeRepository")
 */
class PoolType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pooltype_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pooltype_name", type="string", length=40)
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
     * @return PoolType
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
}
