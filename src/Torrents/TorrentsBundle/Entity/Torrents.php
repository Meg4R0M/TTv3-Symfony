<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Torrents
 *
 * @ORM\Table(name="torrents", uniqueConstraints={@ORM\UniqueConstraint(name="info_hash", columns={"info_hash"})}, indexes={@ORM\Index(name="owner", columns={"owner"}), @ORM\Index(name="visible", columns={"visible"}), @ORM\Index(name="category_visible", columns={"category", "visible"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Torrents
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
     * @ORM\Column(name="info_hash", type="string", length=40, nullable=true)
     */
    private $infoHash;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="save_as", type="string", length=255, nullable=false)
     */
    private $saveAs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text", length=65535, nullable=false)
     */
    private $descr;

    /**
     * @var string
     *
     * @ORM\Column(name="image1", type="text", length=65535, nullable=false)
     */
    private $image1;

    /**
     * @var string
     *
     * @ORM\Column(name="image2", type="text", length=65535, nullable=false)
     */
    private $image2;

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer", nullable=false)
     */
    private $category = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="bigint", nullable=false)
     */
    private $size = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type = 'single';

    /**
     * @var integer
     *
     * @ORM\Column(name="numfiles", type="integer", nullable=false)
     */
    private $numfiles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="comments", type="integer", nullable=false)
     */
    private $comments = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="times_completed", type="integer", nullable=false)
     */
    private $timesCompleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="leechers", type="integer", nullable=false)
     */
    private $leechers = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="seeders", type="integer", nullable=false)
     */
    private $seeders = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_action", type="datetime", nullable=false)
     */
    private $lastAction = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="visible", type="string", nullable=false)
     */
    private $visible = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="banned", type="string", nullable=false)
     */
    private $banned = 'no';

    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="anon", type="string", nullable=false)
     */
    private $anon = 'no';

    /**
     * @var integer
     *
     * @ORM\Column(name="numratings", type="integer", nullable=false)
     */
    private $numratings = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ratingsum", type="integer", nullable=false)
     */
    private $ratingsum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nfo", type="string", nullable=false)
     */
    private $nfo = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="announce", type="string", length=255, nullable=false)
     */
    private $announce = '';

    /**
     * @var string
     *
     * @ORM\Column(name="external", type="string", nullable=false)
     */
    private $external = 'no';

    /**
     * @var integer
     *
     * @ORM\Column(name="torrentlang", type="integer", nullable=false)
     */
    private $torrentlang = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="freeleech", type="string", nullable=false)
     */
    private $freeleech = '0';



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
     * Set infoHash
     *
     * @param string $infoHash
     *
     * @return Torrents
     */
    public function setInfoHash($infoHash)
    {
        $this->infoHash = $infoHash;

        return $this;
    }

    /**
     * Get infoHash
     *
     * @return string
     */
    public function getInfoHash()
    {
        return $this->infoHash;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Torrents
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Torrents
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set saveAs
     *
     * @param string $saveAs
     *
     * @return Torrents
     */
    public function setSaveAs($saveAs)
    {
        $this->saveAs = $saveAs;

        return $this;
    }

    /**
     * Get saveAs
     *
     * @return string
     */
    public function getSaveAs()
    {
        return $this->saveAs;
    }

    /**
     * Set descr
     *
     * @param string $descr
     *
     * @return Torrents
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    /**
     * Get descr
     *
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set image1
     *
     * @param string $image1
     *
     * @return Torrents
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image2
     *
     * @param string $image2
     *
     * @return Torrents
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set category
     *
     * @param integer $category
     *
     * @return Torrents
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Torrents
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     *
     * @return Torrents
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
     * Set type
     *
     * @param string $type
     *
     * @return Torrents
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set numfiles
     *
     * @param integer $numfiles
     *
     * @return Torrents
     */
    public function setNumfiles($numfiles)
    {
        $this->numfiles = $numfiles;

        return $this;
    }

    /**
     * Get numfiles
     *
     * @return integer
     */
    public function getNumfiles()
    {
        return $this->numfiles;
    }

    /**
     * Set comments
     *
     * @param integer $comments
     *
     * @return Torrents
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return integer
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Torrents
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     *
     * @return Torrents
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set timesCompleted
     *
     * @param integer $timesCompleted
     *
     * @return Torrents
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
     * Set leechers
     *
     * @param integer $leechers
     *
     * @return Torrents
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
     * Set seeders
     *
     * @param integer $seeders
     *
     * @return Torrents
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
     * Set lastAction
     *
     * @param \DateTime $lastAction
     *
     * @return Torrents
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
     * Set visible
     *
     * @param string $visible
     *
     * @return Torrents
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return string
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set banned
     *
     * @param string $banned
     *
     * @return Torrents
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;

        return $this;
    }

    /**
     * Get banned
     *
     * @return string
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Set owner
     *
     * @param integer $owner
     *
     * @return Torrents
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return integer
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set anon
     *
     * @param string $anon
     *
     * @return Torrents
     */
    public function setAnon($anon)
    {
        $this->anon = $anon;

        return $this;
    }

    /**
     * Get anon
     *
     * @return string
     */
    public function getAnon()
    {
        return $this->anon;
    }

    /**
     * Set numratings
     *
     * @param integer $numratings
     *
     * @return Torrents
     */
    public function setNumratings($numratings)
    {
        $this->numratings = $numratings;

        return $this;
    }

    /**
     * Get numratings
     *
     * @return integer
     */
    public function getNumratings()
    {
        return $this->numratings;
    }

    /**
     * Set ratingsum
     *
     * @param integer $ratingsum
     *
     * @return Torrents
     */
    public function setRatingsum($ratingsum)
    {
        $this->ratingsum = $ratingsum;

        return $this;
    }

    /**
     * Get ratingsum
     *
     * @return integer
     */
    public function getRatingsum()
    {
        return $this->ratingsum;
    }

    /**
     * Set nfo
     *
     * @param string $nfo
     *
     * @return Torrents
     */
    public function setNfo($nfo)
    {
        $this->nfo = $nfo;

        return $this;
    }

    /**
     * Get nfo
     *
     * @return string
     */
    public function getNfo()
    {
        return $this->nfo;
    }

    /**
     * Set announce
     *
     * @param string $announce
     *
     * @return Torrents
     */
    public function setAnnounce($announce)
    {
        $this->announce = $announce;

        return $this;
    }

    /**
     * Get announce
     *
     * @return string
     */
    public function getAnnounce()
    {
        return $this->announce;
    }

    /**
     * Set external
     *
     * @param string $external
     *
     * @return Torrents
     */
    public function setExternal($external)
    {
        $this->external = $external;

        return $this;
    }

    /**
     * Get external
     *
     * @return string
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * Set torrentlang
     *
     * @param integer $torrentlang
     *
     * @return Torrents
     */
    public function setTorrentlang($torrentlang)
    {
        $this->torrentlang = $torrentlang;

        return $this;
    }

    /**
     * Get torrentlang
     *
     * @return integer
     */
    public function getTorrentlang()
    {
        return $this->torrentlang;
    }

    /**
     * Set freeleech
     *
     * @param string $freeleech
     *
     * @return Torrents
     */
    public function setFreeleech($freeleech)
    {
        $this->freeleech = $freeleech;

        return $this;
    }

    /**
     * Get freeleech
     *
     * @return string
     */
    public function getFreeleech()
    {
        return $this->freeleech;
    }
}
