<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Announce
 *
 * @ORM\Table(name="announce", indexes={@ORM\Index(name="torrent", columns={"torrent"})})
 * @ORM\Entity
 */
class Announce
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="torrent", type="integer", nullable=false)
     */
    private $torrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="seeders", type="integer", nullable=false)
     */
    private $seeders = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="leechers", type="integer", nullable=false)
     */
    private $leechers = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="times_completed", type="integer", nullable=false)
     */
    private $timesCompleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="online", type="string", nullable=false)
     */
    private $online = 'yes';



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
     * Set url
     *
     * @param string $url
     *
     * @return Announce
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set torrent
     *
     * @param integer $torrent
     *
     * @return Announce
     */
    public function setTorrent($torrent)
    {
        $this->torrent = $torrent;

        return $this;
    }

    /**
     * Get torrent
     *
     * @return integer
     */
    public function getTorrent()
    {
        return $this->torrent;
    }

    /**
     * Set seeders
     *
     * @param integer $seeders
     *
     * @return Announce
     */
    public function setSeeders($seeders)
    {
        $this->seeders = $seeders;

        return $this;
    }

    /**
     * Get seeders
     *
     * @return integer
     */
    public function getSeeders()
    {
        return $this->seeders;
    }

    /**
     * Set leechers
     *
     * @param integer $leechers
     *
     * @return Announce
     */
    public function setLeechers($leechers)
    {
        $this->leechers = $leechers;

        return $this;
    }

    /**
     * Get leechers
     *
     * @return integer
     */
    public function getLeechers()
    {
        return $this->leechers;
    }

    /**
     * Set timesCompleted
     *
     * @param integer $timesCompleted
     *
     * @return Announce
     */
    public function setTimesCompleted($timesCompleted)
    {
        $this->timesCompleted = $timesCompleted;

        return $this;
    }

    /**
     * Get timesCompleted
     *
     * @return integer
     */
    public function getTimesCompleted()
    {
        return $this->timesCompleted;
    }

    /**
     * Set online
     *
     * @param string $online
     *
     * @return Announce
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return string
     */
    public function getOnline()
    {
        return $this->online;
    }
}
