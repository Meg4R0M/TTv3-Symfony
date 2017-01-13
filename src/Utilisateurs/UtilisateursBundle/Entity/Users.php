<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="status_added", columns={"status", "added"}), @ORM\Index(name="ip", columns={"ip"}), @ORM\Index(name="uploaded", columns={"uploaded"}), @ORM\Index(name="downloaded", columns={"downloaded"}), @ORM\Index(name="country", columns={"country"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="username", type="string", length=40, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=20, nullable=false)
     */
    private $secret = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'pending';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=false)
     */
    private $lastLogin = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_access", type="datetime", nullable=false)
     */
    private $lastAccess = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="editsecret", type="string", length=20, nullable=false)
     */
    private $editsecret = '';

    /**
     * @var string
     *
     * @ORM\Column(name="privacy", type="string", nullable=false)
     */
    private $privacy = 'normal';

    /**
     * @var integer
     *
     * @ORM\Column(name="stylesheet", type="integer", nullable=true)
     */
    private $stylesheet = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=20, nullable=false)
     */
    private $language = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", length=65535, nullable=true)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="acceptpms", type="string", nullable=false)
     */
    private $acceptpms = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=39, nullable=false)
     */
    private $ip = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean", nullable=false)
     */
    private $class = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=100, nullable=false)
     */
    private $avatar = '';

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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=30, nullable=false)
     */
    private $title = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="donated", type="integer", nullable=false)
     */
    private $donated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="country", type="integer", nullable=false)
     */
    private $country = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="notifs", type="string", length=100, nullable=false)
     */
    private $notifs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="enabled", type="string", length=10, nullable=false)
     */
    private $enabled = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="modcomment", type="text", length=65535, nullable=true)
     */
    private $modcomment;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=6, nullable=false)
     */
    private $gender = '';

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=25, nullable=false)
     */
    private $client = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="age", type="date", nullable=false)
     */
    private $age = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="warned", type="string", length=3, nullable=false)
     */
    private $warned = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=200, nullable=false)
     */
    private $signature = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_browse", type="integer", nullable=false)
     */
    private $lastBrowse = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="forumbanned", type="string", length=3, nullable=false)
     */
    private $forumbanned = 'no';

    /**
     * @var integer
     *
     * @ORM\Column(name="invited_by", type="integer", nullable=false)
     */
    private $invitedBy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="invitees", type="string", length=100, nullable=false)
     */
    private $invitees = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="invites", type="smallint", nullable=false)
     */
    private $invites = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invitedate", type="datetime", nullable=false)
     */
    private $invitedate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="commentpm", type="string", nullable=false)
     */
    private $commentpm = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="passkey", type="string", length=32, nullable=false)
     */
    private $passkey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="text", length=65535, nullable=true)
     */
    private $page;

    /**
     * @var integer
     *
     * @ORM\Column(name="team", type="integer", nullable=false)
     */
    private $team = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tzoffset", type="integer", nullable=true)
     */
    private $tzoffset = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hideshoutbox", type="string", nullable=false)
     */
    private $hideshoutbox = 'no';

    /**
     * @var integer
     *
     * @ORM\Column(name="moods", type="integer", nullable=false)
     */
    private $moods = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="comments", type="integer", nullable=false)
     */
    private $comments = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="banned", type="string", length=4, nullable=false)
     */
    private $banned = 'no';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atbf_date", type="date", nullable=true)
     */
    private $atbfDate = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atbf_date_locked", type="date", nullable=true)
     */
    private $atbfDateLocked = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="atbf_trials", type="integer", nullable=false)
     */
    private $atbfTrials = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="atbf_islocked", type="integer", nullable=false)
     */
    private $atbfIslocked = '0';



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
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
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
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Users
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     *
     * @return Users
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
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return Users
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set lastAccess
     *
     * @param \DateTime $lastAccess
     *
     * @return Users
     */
    public function setLastAccess($lastAccess)
    {
        $this->lastAccess = $lastAccess;

        return $this;
    }

    /**
     * Get lastAccess
     *
     * @return \DateTime
     */
    public function getLastAccess()
    {
        return $this->lastAccess;
    }

    /**
     * Set editsecret
     *
     * @param string $editsecret
     *
     * @return Users
     */
    public function setEditsecret($editsecret)
    {
        $this->editsecret = $editsecret;

        return $this;
    }

    /**
     * Get editsecret
     *
     * @return string
     */
    public function getEditsecret()
    {
        return $this->editsecret;
    }

    /**
     * Set privacy
     *
     * @param string $privacy
     *
     * @return Users
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }

    /**
     * Get privacy
     *
     * @return string
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * Set stylesheet
     *
     * @param integer $stylesheet
     *
     * @return Users
     */
    public function setStylesheet($stylesheet)
    {
        $this->stylesheet = $stylesheet;

        return $this;
    }

    /**
     * Get stylesheet
     *
     * @return integer
     */
    public function getStylesheet()
    {
        return $this->stylesheet;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Users
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
     * Set info
     *
     * @param string $info
     *
     * @return Users
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
     * Set acceptpms
     *
     * @param string $acceptpms
     *
     * @return Users
     */
    public function setAcceptpms($acceptpms)
    {
        $this->acceptpms = $acceptpms;

        return $this;
    }

    /**
     * Get acceptpms
     *
     * @return string
     */
    public function getAcceptpms()
    {
        return $this->acceptpms;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Users
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
     * Set class
     *
     * @param boolean $class
     *
     * @return Users
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return boolean
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Users
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
     * Set uploaded
     *
     * @param integer $uploaded
     *
     * @return Users
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
     * @return Users
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
     * Set title
     *
     * @param string $title
     *
     * @return Users
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
     * Set donated
     *
     * @param integer $donated
     *
     * @return Users
     */
    public function setDonated($donated)
    {
        $this->donated = $donated;

        return $this;
    }

    /**
     * Get donated
     *
     * @return integer
     */
    public function getDonated()
    {
        return $this->donated;
    }

    /**
     * Set country
     *
     * @param integer $country
     *
     * @return Users
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return integer
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set notifs
     *
     * @param string $notifs
     *
     * @return Users
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
     * Set enabled
     *
     * @param string $enabled
     *
     * @return Users
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return string
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set modcomment
     *
     * @param string $modcomment
     *
     * @return Users
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
     * Set gender
     *
     * @param string $gender
     *
     * @return Users
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
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
     * @return Users
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
     * @return Users
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
     * Set warned
     *
     * @param string $warned
     *
     * @return Users
     */
    public function setWarned($warned)
    {
        $this->warned = $warned;

        return $this;
    }

    /**
     * Get warned
     *
     * @return string
     */
    public function getWarned()
    {
        return $this->warned;
    }

    /**
     * Set signature
     *
     * @param string $signature
     *
     * @return Users
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
     * Set lastBrowse
     *
     * @param integer $lastBrowse
     *
     * @return Users
     */
    public function setLastBrowse($lastBrowse)
    {
        $this->lastBrowse = $lastBrowse;

        return $this;
    }

    /**
     * Get lastBrowse
     *
     * @return integer
     */
    public function getLastBrowse()
    {
        return $this->lastBrowse;
    }

    /**
     * Set forumbanned
     *
     * @param string $forumbanned
     *
     * @return Users
     */
    public function setForumbanned($forumbanned)
    {
        $this->forumbanned = $forumbanned;

        return $this;
    }

    /**
     * Get forumbanned
     *
     * @return string
     */
    public function getForumbanned()
    {
        return $this->forumbanned;
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
     * Set invitedate
     *
     * @param \DateTime $invitedate
     *
     * @return Users
     */
    public function setInvitedate($invitedate)
    {
        $this->invitedate = $invitedate;

        return $this;
    }

    /**
     * Get invitedate
     *
     * @return \DateTime
     */
    public function getInvitedate()
    {
        return $this->invitedate;
    }

    /**
     * Set commentpm
     *
     * @param string $commentpm
     *
     * @return Users
     */
    public function setCommentpm($commentpm)
    {
        $this->commentpm = $commentpm;

        return $this;
    }

    /**
     * Get commentpm
     *
     * @return string
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
     * @return Users
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
     * Set page
     *
     * @param string $page
     *
     * @return Users
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set team
     *
     * @param integer $team
     *
     * @return Users
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return integer
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
     * @return Users
     */
    public function setTzoffset($tzoffset)
    {
        $this->tzoffset = $tzoffset;

        return $this;
    }

    /**
     * Get tzoffset
     *
     * @return integer
     */
    public function getTzoffset()
    {
        return $this->tzoffset;
    }

    /**
     * Set hideshoutbox
     *
     * @param string $hideshoutbox
     *
     * @return Users
     */
    public function setHideshoutbox($hideshoutbox)
    {
        $this->hideshoutbox = $hideshoutbox;

        return $this;
    }

    /**
     * Get hideshoutbox
     *
     * @return string
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
     * @return Users
     */
    public function setMoods($moods)
    {
        $this->moods = $moods;

        return $this;
    }

    /**
     * Get moods
     *
     * @return integer
     */
    public function getMoods()
    {
        return $this->moods;
    }

    /**
     * Set comments
     *
     * @param integer $comments
     *
     * @return Users
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
     * Set banned
     *
     * @param string $banned
     *
     * @return Users
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
     * Set atbfDate
     *
     * @param \DateTime $atbfDate
     *
     * @return Users
     */
    public function setAtbfDate($atbfDate)
    {
        $this->atbfDate = $atbfDate;

        return $this;
    }

    /**
     * Get atbfDate
     *
     * @return \DateTime
     */
    public function getAtbfDate()
    {
        return $this->atbfDate;
    }

    /**
     * Set atbfDateLocked
     *
     * @param \DateTime $atbfDateLocked
     *
     * @return Users
     */
    public function setAtbfDateLocked($atbfDateLocked)
    {
        $this->atbfDateLocked = $atbfDateLocked;

        return $this;
    }

    /**
     * Get atbfDateLocked
     *
     * @return \DateTime
     */
    public function getAtbfDateLocked()
    {
        return $this->atbfDateLocked;
    }

    /**
     * Set atbfTrials
     *
     * @param integer $atbfTrials
     *
     * @return Users
     */
    public function setAtbfTrials($atbfTrials)
    {
        $this->atbfTrials = $atbfTrials;

        return $this;
    }

    /**
     * Get atbfTrials
     *
     * @return integer
     */
    public function getAtbfTrials()
    {
        return $this->atbfTrials;
    }

    /**
     * Set atbfIslocked
     *
     * @param integer $atbfIslocked
     *
     * @return Users
     */
    public function setAtbfIslocked($atbfIslocked)
    {
        $this->atbfIslocked = $atbfIslocked;

        return $this;
    }

    /**
     * Get atbfIslocked
     *
     * @return integer
     */
    public function getAtbfIslocked()
    {
        return $this->atbfIslocked;
    }
}
