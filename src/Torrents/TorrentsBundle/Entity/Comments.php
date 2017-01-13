<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="user", columns={"user"}), @ORM\Index(name="torrent", columns={"torrent"})})
 * @ORM\Entity
 */
class Comments
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
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="torrent", type="integer", nullable=false)
     */
    private $torrent = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="news", type="integer", nullable=false)
     */
    private $news = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userprofile", type="integer", nullable=false)
     */
    private $userprofile = '0';



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
     * Set user
     *
     * @param integer $user
     *
     * @return Comments
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set torrent
     *
     * @param integer $torrent
     *
     * @return Comments
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
     * Set added
     *
     * @param \DateTime $added
     *
     * @return Comments
     */
    public function setAdded($added)
    {
        $this->added = $added;

        return $this;
    }

    /**
     * Get added
     *
     * @return \DateTime
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Comments
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set news
     *
     * @param integer $news
     *
     * @return Comments
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return integer
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set userprofile
     *
     * @param integer $userprofile
     *
     * @return Comments
     */
    public function setUserprofile($userprofile)
    {
        $this->userprofile = $userprofile;

        return $this;
    }

    /**
     * Get userprofile
     *
     * @return integer
     */
    public function getUserprofile()
    {
        return $this->userprofile;
    }
}
