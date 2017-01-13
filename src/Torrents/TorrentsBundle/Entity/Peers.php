<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Peers
 *
 * @ORM\Table(name="peers", uniqueConstraints={@ORM\UniqueConstraint(name="torrent_peer_id", columns={"torrent", "peer_id"})}, indexes={@ORM\Index(name="torrent", columns={"torrent"}), @ORM\Index(name="torrent_seeder", columns={"torrent", "seeder"}), @ORM\Index(name="last_action", columns={"last_action"})})
 * @ORM\Entity
 */
class Peers
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
     * @ORM\Column(name="torrent", type="integer", nullable=false)
     */
    private $torrent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="peer_id", type="string", length=40, nullable=false)
     */
    private $peerId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=64, nullable=false)
     */
    private $ip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uploaded", type="bigint", nullable=false)
     */
    private $uploaded = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="downloaded", type="bigint", nullable=false)
     */
    private $downloaded = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="to_go", type="bigint", nullable=false)
     */
    private $toGo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="seeder", type="string", nullable=false)
     */
    private $seeder = 'no';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="started", type="datetime", nullable=false)
     */
    private $started = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_action", type="datetime", nullable=false)
     */
    private $lastAction = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="connectable", type="string", nullable=false)
     */
    private $connectable = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=60, nullable=false)
     */
    private $client = '';

    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=32, nullable=false)
     */
    private $userid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="passkey", type="string", length=32, nullable=false)
     */
    private $passkey = '';



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
     * Set torrent
     *
     * @param integer $torrent
     *
     * @return Peers
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
     * Set peerId
     *
     * @param string $peerId
     *
     * @return Peers
     */
    public function setPeerId($peerId)
    {
        $this->peerId = $peerId;

        return $this;
    }

    /**
     * Get peerId
     *
     * @return string
     */
    public function getPeerId()
    {
        return $this->peerId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Peers
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

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
     * Set port
     *
     * @param integer $port
     *
     * @return Peers
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set uploaded
     *
     * @param integer $uploaded
     *
     * @return Peers
     */
    public function setUploaded($uploaded)
    {
        $this->uploaded = $uploaded;

        return $this;
    }

    /**
     * Get uploaded
     *
     * @return integer
     */
    public function getUploaded()
    {
        return $this->uploaded;
    }

    /**
     * Set downloaded
     *
     * @param integer $downloaded
     *
     * @return Peers
     */
    public function setDownloaded($downloaded)
    {
        $this->downloaded = $downloaded;

        return $this;
    }

    /**
     * Get downloaded
     *
     * @return integer
     */
    public function getDownloaded()
    {
        return $this->downloaded;
    }

    /**
     * Set toGo
     *
     * @param integer $toGo
     *
     * @return Peers
     */
    public function setToGo($toGo)
    {
        $this->toGo = $toGo;

        return $this;
    }

    /**
     * Get toGo
     *
     * @return integer
     */
    public function getToGo()
    {
        return $this->toGo;
    }

    /**
     * Set seeder
     *
     * @param string $seeder
     *
     * @return Peers
     */
    public function setSeeder($seeder)
    {
        $this->seeder = $seeder;

        return $this;
    }

    /**
     * Get seeder
     *
     * @return string
     */
    public function getSeeder()
    {
        return $this->seeder;
    }

    /**
     * Set started
     *
     * @param \DateTime $started
     *
     * @return Peers
     */
    public function setStarted($started)
    {
        $this->started = $started;

        return $this;
    }

    /**
     * Get started
     *
     * @return \DateTime
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * Set lastAction
     *
     * @param \DateTime $lastAction
     *
     * @return Peers
     */
    public function setLastAction($lastAction)
    {
        $this->lastAction = $lastAction;

        return $this;
    }

    /**
     * Get lastAction
     *
     * @return \DateTime
     */
    public function getLastAction()
    {
        return $this->lastAction;
    }

    /**
     * Set connectable
     *
     * @param string $connectable
     *
     * @return Peers
     */
    public function setConnectable($connectable)
    {
        $this->connectable = $connectable;

        return $this;
    }

    /**
     * Get connectable
     *
     * @return string
     */
    public function getConnectable()
    {
        return $this->connectable;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Peers
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set userid
     *
     * @param string $userid
     *
     * @return Peers
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set passkey
     *
     * @param string $passkey
     *
     * @return Peers
     */
    public function setPasskey($passkey)
    {
        $this->passkey = $passkey;

        return $this;
    }

    /**
     * Get passkey
     *
     * @return string
     */
    public function getPasskey()
    {
        return $this->passkey;
    }
}
