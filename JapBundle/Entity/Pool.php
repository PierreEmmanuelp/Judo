<?php

namespace Pep\Judo\JapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pool
 *
 * @ORM\Table(name="pool")
 * @ORM\Entity(repositoryClass="Pep\Judo\JapBundle\Repository\PoolRepository")
 */
class Pool
{
    /**
     * @var int
     *
     * @ORM\Column(name="pool_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Entity
     *
     * @ORM\OneToOne(targetEntity="PoolType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="fk_pool_type", referencedColumnName="pooltype_id")
     * })
     */
	private $poolType;
	
	/**
	 * @var Entity
	 *
	 * @ORM\OneToOne(targetEntity="Contest")
	   @ORM\JoinColumns({
     * @ORM\JoinColumn(name="fk_contest", referencedColumnName="contest_id")
     * })
	 */
	private $contest;
    
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
     * Set poolType
     *
     * @param \Pep\Judo\JapBundle\Entity\PoolType $poolType
     *
     * @return Pool
     */
    public function setPoolType(\Pep\Judo\JapBundle\Entity\PoolType $poolType = null)
    {
        $this->poolType = $poolType;

        return $this;
    }

    /**
     * Get poolType
     *
     * @return \Pep\Judo\JapBundle\Entity\PoolType
     */
    public function getPoolType()
    {
        return $this->poolType;
    }

    /**
     * Set contest
     *
     * @param \Pep\Judo\JapBundle\Entity\Contest $contest
     *
     * @return Pool
     */
    public function setContest(\Pep\Judo\JapBundle\Entity\Contest $contest = null)
    {
        $this->contest = $contest;

        return $this;
    }

    /**
     * Get contest
     *
     * @return \Pep\Judo\JapBundle\Entity\Contest
     */
    public function getContest()
    {
        return $this->contest;
    }
}
