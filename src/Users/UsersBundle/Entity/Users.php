<?php
/**
 * Created by IntelliJ IDEA.
 * User: meg4r0m
 * Date: 14/01/17
 * Time: 13:04
 */

namespace Users\UsersBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Model\ParticipantInterface;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Users
 *
 * @package UsersBundle\Entity
 *
 * @ORM\Entity(repositoryClass="Users\UsersBundle\Repository\UsersRepository")
 * @ORM\Table(name="`users`")
 */
class Users extends BaseUser implements ParticipantInterface
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
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $added;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=39)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=20)
     */
    private $secret;

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
     * @ORM\Column(name="warned", type="string", columnDefinition="enum('yes', 'no')")
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
     * @ORM\Column(name="forumbanned", type="string", columnDefinition="enum('yes', 'no')")
     */
    private $forumbanned = 'no';

    /**
     * @var bool
     *
     * @ORM\Column(name="commentpm", type="string", columnDefinition="enum('yes', 'no')")
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
     * @var int
     *
     * @ORM\Column(name="invited_by", type="integer", length=10)
     */
    private $invitedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="invitees", type="string", length=100)
     */
    private $invitees;

    /**
     * @var int
     *
     * @ORM\Column(name="invites", type="integer", length=5)
     */
    private $invites;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invite_date", type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $inviteDate;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    private $info;

    /**
     * @ORM\OneToOne(targetEntity="Users\UsersBundle\Entity\Avatar", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    //* @Assert\Image(
    //*     maxSize = "1024k",
    //*     mimeTypes = {"image/png", "image/jpg", "image/bmp"},
    //*     mimeTypesMessage = "Please upload a valid Image"
    //* )
    //*/
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
     * @ORM\Column(name="acceptpms", type="string", columnDefinition="enum('yes', 'no')")
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
     * @ORM\Column(name="age", type="date")
     */
    private $age;

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
     * @ORM\Column(name="hideshoutbox", type="string", columnDefinition="enum('yes', 'no')")
     */
    private $hideshoutbox = "no";

    /**
     * @ORM\ManyToOne(targetEntity="Users\UsersBundle\Entity\Moods")
     * @ORM\JoinColumn(nullable=true)
     */
    private $moods;

    /**
     * @var bool
     *
     * @ORM\Column(name="`privacy`", type="string", columnDefinition="enum('strong', 'normal', 'low')")
     */
    private $privacy = "normal";

    /**
     * @ORM\OneToMany(targetEntity="Informations\InformationsBundle\Entity\News", mappedBy="user")
     */
    private $news;

    public function __construct()
    {
        $request = Request::createFromGlobals();
        parent::__construct();
        $this->added = new \DateTime('NOW');
        $this->ip = $request->getClientIp();
        $this->donated = 0;
        $this->notifs = '';
        $this->passkey = sha1($this->ip . $this->username . time(), '');
        $this->title = '';
        $this->client = '';
        $this->age = new \DateTime('1970-01-01');
        $this->signature = '';
        $this->team = '';
        $this->tzoffset = '1';
        $this->news = new ArrayCollection();
        $this->secret = '';
        $this->invitedBy = 0;
        $this->invitees = '';
        $this->invites = 0;
        $this->inviteDate = new \DateTime('0000-00-00 00:00:00');
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
        if(!$added){
            $this->added = new \DateTime();
        } else {
            $this->added = $added;
        }
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
     * Set secret
     *
     * @param string $secret
     *
     * @return Users
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
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
     * @param \Users\UsersBundle\Entity\Avatar $avatar
     *
     * @return Users
     */
    public function setAvatar(Avatar $avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \Users\UsersBundle\Entity\Avatar
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
        if(!$age){
            $this->age = new \DateTime("1970-01-01");
        } else {
            $this->age = $age;
        }

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
     * @param \Users\UsersBundle\Entity\Moods $moods
     *
     * @return Users
     */
    public function setMoods(Moods $moods)
    {
        $this->moods = $moods;

        return $this;
    }

    /**
     * Get moods
     *
     * @return string
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

    /**
     * Add news
     *
     * @param \Informations\InformationsBundle\Entity\News $news
     *
     * @return Users
     */
    public function addNews(\Informations\InformationsBundle\Entity\News $news)
    {
        $this->news[] = $news;

        return $this;
    }

    /**
     * Remove news
     *
     * @param \Informations\InformationsBundle\Entity\News $news
     */
    public function removeNews(\Informations\InformationsBundle\Entity\News $news)
    {
        $this->news->removeElement($news);
    }

    /**
     * Get news
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set invitedBy
     *
     * @param integer $invitedBy
     *
     * @return Users
     */
    public function setInvitedBy($invitedBy)
    {
        $this->invitedBy = $invitedBy;

        return $this;
    }

    /**
     * Get invitedBy
     *
     * @return integer
     */
    public function getInvitedBy()
    {
        return $this->invitedBy;
    }

    /**
     * Set invitees
     *
     * @param string $invitees
     *
     * @return Users
     */
    public function setInvitees($invitees)
    {
        $this->invitees = $invitees;

        return $this;
    }

    /**
     * Get invitees
     *
     * @return string
     */
    public function getInvitees()
    {
        return $this->invitees;
    }

    /**
     * Set invites
     *
     * @param integer $invites
     *
     * @return Users
     */
    public function setInvites($invites)
    {
        $this->invites = $invites;

        return $this;
    }

    /**
     * Get invites
     *
     * @return integer
     */
    public function getInvites()
    {
        return $this->invites;
    }

    /**
     * Set inviteDate
     *
     * @param \DateTime $inviteDate
     *
     * @return Users
     */
    public function setInviteDate($inviteDate)
    {
        $this->inviteDate = $inviteDate;

        return $this;
    }

    /**
     * Get inviteDate
     *
     * @return \DateTime
     */
    public function getInviteDate()
    {
        return $this->inviteDate;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
