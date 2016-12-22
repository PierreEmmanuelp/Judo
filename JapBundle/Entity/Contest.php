<?php

namespace Pep\Judo\JapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pep\Judo\JapBundle\Entity\Gymnasium;

/**
 * Contest
 *
 * @ORM\Table(name="contest")
 * @ORM\Entity(repositoryClass="Pep\Judo\JapBundle\Repository\ContestRepository")
 */
class Contest
{
    /**
     * @var int
     *
     * @ORM\Column(name="contest_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contest_date", type="date")
     */
    private $date;

    /**
     * @var Entity
     *
     * @ORM\OneToOne(targetEntity="Gymnasium")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="fk_gymnasium", referencedColumnName="gymnasium_id")
     * })
     */
    private $gymnasium;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Contest
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set gymnasium
     *
     * @param string $gymnasium
     *
     * @return Contest
     */
    public function setGymnasium($gymnasium)
    {
        $this->gymnasium = $gymnasium;

        return $this;
    }

    /**
     * Get gymnasium
     *
     * @return string
     */
    public function getGymnasium()
    {
        return $this->gymnasium;
    }
}
