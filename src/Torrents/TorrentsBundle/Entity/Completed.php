<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Completed
 *
 * @ORM\Table(name="completed", uniqueConstraints={@ORM\UniqueConstraint(name="userid_torrentid", columns={"userid", "torrentid"})})
 * @ORM\Entity
 */
class Completed
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
     * @ORM\Column(name="torrentid", type="integer", nullable=false)
     */
    private $torrentid = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';



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
     * @return Completed
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
     * Set torrentid
     *
     * @param integer $torrentid
     *
     * @return Completed
     */
    public function setTorrentid($torrentid)
    {
        $this->torrentid = $torrentid;

        return $this;
    }

    /**
     * Get torrentid
     *
     * @return integer
     */
    public function getTorrentid()
    {
        return $this->torrentid;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Completed
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
}
