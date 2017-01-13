<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guests
 *
 * @ORM\Table(name="guests", uniqueConstraints={@ORM\UniqueConstraint(name="IP", columns={"ip"})})
 * @ORM\Entity
 */
class Guests
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=39, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="decimal", precision=20, scale=0, nullable=false)
     */
    private $time = '0';



    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Guests
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}
