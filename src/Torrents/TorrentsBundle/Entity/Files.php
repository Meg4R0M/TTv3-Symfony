<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Files
 *
 * @ORM\Table(name="files", indexes={@ORM\Index(name="torrent", columns={"torrent"})})
 * @ORM\Entity
 */
class Files
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="torrent", type="integer", nullable=false)
     */
    private $torrent;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="filesize", type="bigint", nullable=false)
     */
    private $filesize;



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
     * @return Files
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
     * Set path
     *
     * @param string $path
     *
     * @return Files
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     *
     * @return Files
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }
}
