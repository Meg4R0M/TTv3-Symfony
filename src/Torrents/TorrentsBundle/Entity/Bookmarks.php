<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookmarks
 *
 * @ORM\Table(name="bookmarks")
 * @ORM\Entity
 */
class Bookmarks
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
     * @return Bookmarks
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
     * @return Bookmarks
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
}
