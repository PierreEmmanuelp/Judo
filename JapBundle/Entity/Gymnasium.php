<?php

namespace Pep\Judo\JapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gymnasium
 *
 * @ORM\Table(name="gymnasium")
 * @ORM\Entity(repositoryClass="Pep\Judo\JapBundle\Repository\GymnasiumRepository")
 */
class Gymnasium
{
    /**
     * @var int
     *
     * @ORM\Column(name="gymnasium_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="gymnasium_name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="gymnasium_address", type="string", length=40)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="gymnasium_postalCode", type="string", length=5)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="gymnasium_city", type="string", length=50)
     */
    private $city;


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
     * @return Gymnasium
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
     * Set address
     *
     * @param string $address
     *
     * @return Gymnasium
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Gymnasium
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Gymnasium
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
}
