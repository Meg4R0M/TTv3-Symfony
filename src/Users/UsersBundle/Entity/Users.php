<?php
/**
 * Created by IntelliJ IDEA.
 * User: meg4r0m
 * Date: 14/01/17
 * Time: 13:04
 */

namespace Users\UsersBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Users
 *
 * @package UsersBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="`users`")
 */
class Users extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Informations\InformationsBundle\Entity\News", mappedBy="user")
     */
    private $news;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime")
     */
    private $added = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=39)
     */
    private $ip;

    /**
     * @var int
     *
     * @ORM\Column(name="uploaded", type="bigint")
     */
    private $uploaded = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="downloaded", type="bigint")
     */
    private $downloaded = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="donated", type="integer", length=5)
     */
    private $donated;

    /**
     * @var string
     *
     * @ORM\Column(name="notifs", type="string", length=100)
     */
    private $notifs;

    /**
     * @var string
     *
     * @ORM\Column(name="modcomment", type="text", nullable=true)
     */
    private $modcomment;

    /**
     * @var bool
     *
     * @ORM\Column(name="warned", type="boolean", columnDefinition="enum('yes', 'no')")
     */
    private $warned = 'no';

    /**
     * @var int
     *
     * @ORM\Column(name="last_browse", type="integer")
     */
    private $lastBrowse = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="forumbanned", type="boolean", columnDefinition="enum('yes', 'no')")
     */
    private $forumbanned = 'no';

    /**
     * @var bool
     *
     * @ORM\Column(name="commentpm", type="boolean", columnDefinition="enum('yes', 'no')")
     */
    private $commentpm = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="passkey", type="string", length=32)
     */
    private $passkey;

    /**
     * @var int
     *
     * @ORM\Column(name="comments", type="integer")
     */
    private $comments = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="stylesheet", type="integer", nullable=true, length=10)
     */
    private $stylesheet = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=100)
     */
    private $avatar;

    /**
     * @var int
     *
     * @ORM\Column(name="country", type="integer", length=10)
     */
    private $country = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=20)
     */
    private $language = 1;

    /**
     * @var bool
     *
     * @ORM\Column(name="acceptpms", type="boolean", columnDefinition="enum('yes', 'no')")
     */
    private $acceptpms = "yes";

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=30)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="gender", type="string", columnDefinition="enum('Male', 'Female', 'Unknown')")
     */
    private $gender = "Unknown";

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=25)
     */
    private $client;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="age", type="datetime")
     */
    private $age = "0000-00-00";

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=200)
     */
    private $signature;

    /**
     * @var int
     *
     * @ORM\Column(name="team", type="integer", length=10)
     */
    private $team;

    /**
     * @var int
     *
     * @ORM\Column(name="tzoffset", type="integer", length=4)
     */
    private $tzoffset;

    /**
     * @var bool
     *
     * @ORM\Column(name="hideshoutbox", type="boolean", columnDefinition="enum('yes', 'no')")
     */
    private $hideshoutbox = "no";

    /**
     * @var int
     *
     * @ORM\Column(name="`moods`", type="integer", length=10)
     */
    private $moods = 0;

    /**
     * @var bool
     *
     * @ORM\Column(name="`privacy`", type="boolean", columnDefinition="enum('strong', 'normal', 'low')")
     */
    private $privacy = "normal";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     *
     * @return InfosUser
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
     * Set ip
     *
     * @param string $ip
     *
     * @return InfosUser
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
     * Set uploaded
     *
     * @param integer $uploaded
     *
     * @return InfosUser
     */
    public function setUploaded($uploaded)
    {
        $this->uploaded = $uploaded;

        return $this;
    }

    /**
     * Get uploaded
     *
     * @return int
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
     * @return InfosUser
     */
    public function setDownloaded($downloaded)
    {
        $this->downloaded = $downloaded;

        return $this;
    }

    /**
     * Get downloaded
     *
     * @return int
     */
    public function getDownloaded()
    {
        return $this->downloaded;
    }

    /**
     * Set donated
     *
     * @param integer $donated
     *
     * @return InfosUser
     */
    public function setDonated($donated)
    {
        $this->donated = $donated;

        return $this;
    }

    /**
     * Get donated
     *
     * @return int
     */
    public function getDonated()
    {
        return $this->donated;
    }

    /**
     * Set notifs
     *
     * @param string $notifs
     *
     * @return InfosUser
     */
    public function setNotifs($notifs)
    {
        $this->notifs = $notifs;

        return $this;
    }

    /**
     * Get notifs
     *
     * @return string
     */
    public function getNotifs()
    {
        return $this->notifs;
    }

    /**
     * Set modcomment
     *
     * @param string $modcomment
     *
     * @return InfosUser
     */
    public function setModcomment($modcomment)
    {
        $this->modcomment = $modcomment;

        return $this;
    }

    /**
     * Get modcomment
     *
     * @return string
     */
    public function getModcomment()
    {
        return $this->modcomment;
    }

    /**
     * Set warned
     *
     * @param boolean $warned
     *
     * @return InfosUser
     */
    public function setWarned($warned)
    {
        $this->warned = $warned;

        return $this;
    }

    /**
     * Get warned
     *
     * @return bool
     */
    public function getWarned()
    {
        return $this->warned;
    }

    /**
     * Set lastBrowse
     *
     * @param integer $lastBrowse
     *
     * @return InfosUser
     */
    public function setLastBrowse($lastBrowse)
    {
        $this->lastBrowse = $lastBrowse;

        return $this;
    }

    /**
     * Get lastBrowse
     *
     * @return int
     */
    public function getLastBrowse()
    {
        return $this->lastBrowse;
    }

    /**
     * Set forumbanned
     *
     * @param boolean $forumbanned
     *
     * @return InfosUser
     */
    public function setForumbanned($forumbanned)
    {
        $this->forumbanned = $forumbanned;

        return $this;
    }

    /**
     * Get forumbanned
     *
     * @return bool
     */
    public function getForumbanned()
    {
        return $this->forumbanned;
    }

    /**
     * Set commentpm
     *
     * @param boolean $commentpm
     *
     * @return InfosUser
     */
    public function setCommentpm($commentpm)
    {
        $this->commentpm = $commentpm;

        return $this;
    }

    /**
     * Get commentpm
     *
     * @return bool
     */
    public function getCommentpm()
    {
        return $this->commentpm;
    }

    /**
     * Set passkey
     *
     * @param string $passkey
     *
     * @return InfosUser
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

    /**
     * Set comments
     *
     * @param integer $comments
     *
     * @return InfosUser
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return int
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set stylesheet
     *
     * @param integer $stylesheet
     *
     * @return Params
     */
    public function setStylesheet($stylesheet)
    {
        $this->stylesheet = $stylesheet;

        return $this;
    }

    /**
     * Get stylesheet
     *
     * @return int
     */
    public function getStylesheet()
    {
        return $this->stylesheet;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Params
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Params
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set country
     *
     * @param integer $country
     *
     * @return Params
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return int
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Params
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set acceptpms
     *
     * @param boolean $acceptpms
     *
     * @return Params
     */
    public function setAcceptpms($acceptpms)
    {
        $this->acceptpms = $acceptpms;

        return $this;
    }

    /**
     * Get acceptpms
     *
     * @return bool
     */
    public function getAcceptpms()
    {
        return $this->acceptpms;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Params
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     *
     * @return Params
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return bool
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Params
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
     * Set age
     *
     * @param \DateTime $age
     *
     * @return Params
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return \DateTime
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set signature
     *
     * @param string $signature
     *
     * @return Params
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set team
     *
     * @param integer $team
     *
     * @return Params
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return int
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set tzoffset
     *
     * @param integer $tzoffset
     *
     * @return Params
     */
    public function setTzoffset($tzoffset)
    {
        $this->tzoffset = $tzoffset;

        return $this;
    }

    /**
     * Get tzoffset
     *
     * @return int
     */
    public function getTzoffset()
    {
        return $this->tzoffset;
    }

    /**
     * Set hideshoutbox
     *
     * @param boolean $hideshoutbox
     *
     * @return Params
     */
    public function setHideshoutbox($hideshoutbox)
    {
        $this->hideshoutbox = $hideshoutbox;

        return $this;
    }

    /**
     * Get hideshoutbox
     *
     * @return bool
     */
    public function getHideshoutbox()
    {
        return $this->hideshoutbox;
    }

    /**
     * Set moods
     *
     * @param integer $moods
     *
     * @return Params
     */
    public function setMoods($moods)
    {
        $this->moods = $moods;

        return $this;
    }

    /**
     * Get moods
     *
     * @return int
     */
    public function getMoods()
    {
        return $this->moods;
    }

    /**
     * Set privacy
     *
     * @param boolean $privacy
     *
     * @return Params
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }

    /**
     * Get privacy
     *
     * @return bool
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }
}