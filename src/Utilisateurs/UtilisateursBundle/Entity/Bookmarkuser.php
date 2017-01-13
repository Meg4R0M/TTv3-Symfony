<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookmarkuser
 *
 * @ORM\Table(name="bookmarkuser", uniqueConstraints={@ORM\UniqueConstraint(name="userbookmark", columns={"userid", "bkid"})})
 * @ORM\Entity
 */
class Bookmarkuser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bkid", type="integer", nullable=false)
     */
    private $bkid = '0';



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
     * Set userid
     *
     * @param integer $userid
     *
     * @return Bookmarkuser
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set bkid
     *
     * @param integer $bkid
     *
     * @return Bookmarkuser
     */
    public function setBkid($bkid)
    {
        $this->bkid = $bkid;

        return $this;
    }

    /**
     * Get bkid
     *
     * @return integer
     */
    public function getBkid()
    {
        return $this->bkid;
    }
}
