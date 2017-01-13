<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mostonline
 *
 * @ORM\Table(name="mostonline")
 * @ORM\Entity
 */
class Mostonline
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $date = '2010-11-24 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="amount", type="boolean", nullable=false)
     */
    private $amount = '1';



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
     * Set amount
     *
     * @param boolean $amount
     *
     * @return Mostonline
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return boolean
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
