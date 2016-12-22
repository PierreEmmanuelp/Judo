<?php

namespace Pep\Judo\JapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Figth
 *
 * @ORM\Table(name="figth")
 * @ORM\Entity(repositoryClass="Pep\Judo\JapBundle\Repository\FigthRepository")
 */
class Figth
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
     * @var Entity
     *
     * @ORM\OneToOne(targetEntity="Pool")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="fk_pool", referencedColumnName="pool_id")
     * })
     */
    private $pool;

    /**
     * @var Entity
     *
     * @ORM\OneToOne(targetEntity="Judoka")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="fk_judoka_white", referencedColumnName="judoka_id")
     * })
     */
    private $white;

     /**
     * @var Entity
     *
     * @ORM\OneToOne(targetEntity="Judoka")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="fk_judoka_red", referencedColumnName="judoka_id")
     * })
     */
    private $red;

    /**
     * @var int
     *
     * @ORM\Column(name="ippon_white", type="smallint")
     */
    private $ipponWhite;

    /**
     * @var int
     *
     * @ORM\Column(name="ippon_red", type="smallint")
     */
    private $ipponRed;

    /**
     * @var int
     *
     * @ORM\Column(name="waza_ari_white", type="smallint")
     */
    private $wazaAriWhite;
    
    /**
     * @var int
     *
     * @ORM\Column(name="waza_ari_red", type="smallint")
     */
    private $wazaAriRed;

    /**
     * @var int
     *
     * @ORM\Column(name="yuko_white", type="smallint")
     */
    private $yukoWhite;
    
    /**
     * @var int
     *
     * @ORM\Column(name="yuko_red", type="smallint")
     */
    private $yukoRed;
 
    
    /**
     * @var int
     *
     * @ORM\Column(name="hantei_white", type="smallint")
     */
    private $hanteiWhite;
    
    /**
     * @var int
     *
     * @ORM\Column(name="hantei_red", type="smallint")
     */
    private $hanteiRed;
    
    

    
    public function __construct()
    {
    	$this->ipponWhite = 0 ;
    	$this->ipponRed = 0 ;
    	$this->wazaAriWhite = 0 ;
    	$this->wazaArired = 0 ;
    	$this->yukoWhite = 0 ;
    	$this->yukoRed = 0 ;
    	$this->hanteiWhite = 0 ;
    	$this->hanteiRed = 0 ;
    }
    
    /**
     * Get winner
     *
     *  @return \Pep\Judo\JapBundle\Entity\Judoka
     */
    public function getWinner()
    {
    	$winner = null;
    	if($this->getScore($white) > $this->getScore($red)){
    		$winner = $white;
    	}
    	elseif($this->getScore($white) < $this->getScore($red)){
    		$winner = $red;
    	}
    	return $winner;
    }
    
   /**
    * Get score of the judoka
    * 
    * @param \Pep\Judo\JapBundle\Entity\Judoka $judoka
    */
    public function getScore(\Pep\Judo\JapBundle\Entity\Judoka $judoka){
    	$score = null;
    	 if ($judoka == $this->white)
    	 {
    	 	$score = $this->ipponWhite * 100000 + $this->wazaAriWhite * 1000 + $this->yukoWhite * 10 + $this->hanteiWhite;
    	 }
    	 elseif($judoka == $this->red){
    	 	$score = $this->ipponRed * 100000 + $this->wazaAriRed * 1000 + $this->yukoRed * 10 + $this->hanteiRed;
    	 }
    	 else{
    	 	throw $this->createNotFoundException('Unable to find entity.');
    	 }
    	 return $score;
    }


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
     * Set ipponWhite
     *
     * @param integer $ipponWhite
     *
     * @return Figth
     */
    public function setIpponWhite($ipponWhite)
    {
        $this->ipponWhite = $ipponWhite;

        return $this;
    }

    /**
     * Get ipponWhite
     *
     * @return integer
     */
    public function getIpponWhite()
    {
        return $this->ipponWhite;
    }

    /**
     * Set ipponRed
     *
     * @param integer $ipponRed
     *
     * @return Figth
     */
    public function setIpponRed($ipponRed)
    {
        $this->ipponRed = $ipponRed;

        return $this;
    }

    /**
     * Get ipponRed
     *
     * @return integer
     */
    public function getIpponRed()
    {
        return $this->ipponRed;
    }

    /**
     * Set wazaAriWhite
     *
     * @param integer $wazaAriWhite
     *
     * @return Figth
     */
    public function setWazaAriWhite($wazaAriWhite)
    {
        $this->wazaAriWhite = $wazaAriWhite;

        return $this;
    }

    /**
     * Get wazaAriWhite
     *
     * @return integer
     */
    public function getWazaAriWhite()
    {
        return $this->wazaAriWhite;
    }

    /**
     * Set wazaAriRed
     *
     * @param integer $wazaAriRed
     *
     * @return Figth
     */
    public function setWazaAriRed($wazaAriRed)
    {
        $this->wazaAriRed = $wazaAriRed;

        return $this;
    }

    /**
     * Get wazaAriRed
     *
     * @return integer
     */
    public function getWazaAriRed()
    {
        return $this->wazaAriRed;
    }

    /**
     * Set yukoWhite
     *
     * @param integer $yukoWhite
     *
     * @return Figth
     */
    public function setYukoWhite($yukoWhite)
    {
        $this->yukoWhite = $yukoWhite;

        return $this;
    }

    /**
     * Get yukoWhite
     *
     * @return integer
     */
    public function getYukoWhite()
    {
        return $this->yukoWhite;
    }

    /**
     * Set yukoRed
     *
     * @param integer $yukoRed
     *
     * @return Figth
     */
    public function setYukoRed($yukoRed)
    {
        $this->yukoRed = $yukoRed;

        return $this;
    }

    /**
     * Get yukoRed
     *
     * @return integer
     */
    public function getYukoRed()
    {
        return $this->yukoRed;
    }

    /**
     * Set hanteiWhite
     *
     * @param integer $hanteiWhite
     *
     * @return Figth
     */
    public function setHanteiWhite($hanteiWhite)
    {
        $this->hanteiWhite = $hanteiWhite;

        return $this;
    }

    /**
     * Get hanteiWhite
     *
     * @return integer
     */
    public function getHanteiWhite()
    {
        return $this->hanteiWhite;
    }

    /**
     * Set hanteiRed
     *
     * @param integer $hanteired
     *
     * @return Figth
     */
    public function setHanteiRed($hanteired)
    {
        $this->hanteired = $hanteired;

        return $this;
    }

    /**
     * Get hanteired
     *
     * @return integer
     */
    public function getHanteired()
    {
        return $this->hanteired;
    }

    /**
     * Set pool
     *
     * @param \Pep\Judo\JapBundle\Entity\Pool $pool
     *
     * @return Figth
     */
    public function setPool(\Pep\Judo\JapBundle\Entity\Pool $pool = null)
    {
        $this->pool = $pool;

        return $this;
    }

    /**
     * Get pool
     *
     * @return \Pep\Judo\JapBundle\Entity\Pool
     */
    public function getPool()
    {
        return $this->pool;
    }

    /**
     * Set white
     *
     * @param \Pep\Judo\JapBundle\Entity\Judoka $white
     *
     * @return Figth
     */
    public function setWhite(\Pep\Judo\JapBundle\Entity\Judoka $white = null)
    {
        $this->white = $white;

        return $this;
    }

    /**
     * Get white
     *
     * @return \Pep\Judo\JapBundle\Entity\Judoka
     */
    public function getWhite()
    {
        return $this->white;
    }

    /**
     * Set red
     *
     * @param \Pep\Judo\JapBundle\Entity\Judoka $red
     *
     * @return Figth
     */
    public function setRed(\Pep\Judo\JapBundle\Entity\Judoka $red = null)
    {
        $this->red = $red;

        return $this;
    }

    /**
     * Get red
     *
     * @return \Pep\Judo\JapBundle\Entity\Judoka
     */
    public function getRed()
    {
        return $this->red;
    }
}
