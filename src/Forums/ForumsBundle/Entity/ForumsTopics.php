<?php

namespace Forums\ForumsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumsTopics
 *
 * @ORM\Table(name="forums_topics")
 * @ORM\Entity(repositoryClass="Forums\ForumsBundle\Repository\ForumsTopicsRepository")
 */
class ForumsTopics
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Users\UsersBundle\Entity\Users")
     * @ORM\JoinColumn(name="userid", referencedColumnName="id")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=40)
     */
    private $subject;

    /**
     * @var bool
     *
     * @ORM\Column(name="locked", type="boolean")
     */
    private $locked;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Forums\ForumsBundle\Entity\Forums")
     * @ORM\JoinColumn(name="forumid", referencedColumnName="id")
     */
    private $forumid;

    /**
     * @var int
     *
     * @ORM\Column(name="lastpost", type="integer")
     */
    private $lastpost;

    /**
     * @var bool
     *
     * @ORM\Column(name="moved", type="boolean")
     */
    private $moved;

    /**
     * @var bool
     *
     * @ORM\Column(name="sticky", type="boolean")
     */
    private $sticky;

    /**
     * @var int
     *
     * @ORM\Column(name="views", type="integer")
     */
    private $views;


    /**
     * Get id
     *
     * @return int
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
     * @return ForumsTopics
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return ForumsTopics
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     *
     * @return ForumsTopics
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return bool
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set forumid
     *
     * @param integer $forumid
     *
     * @return ForumsTopics
     */
    public function setForumid($forumid)
    {
        $this->forumid = $forumid;

        return $this;
    }

    /**
     * Get forumid
     *
     * @return int
     */
    public function getForumid()
    {
        return $this->forumid;
    }

    /**
     * Set lastpost
     *
     * @param integer $lastpost
     *
     * @return ForumsTopics
     */
    public function setLastpost($lastpost)
    {
        $this->lastpost = $lastpost;

        return $this;
    }

    /**
     * Get lastpost
     *
     * @return int
     */
    public function getLastpost()
    {
        return $this->lastpost;
    }

    /**
     * Set moved
     *
     * @param boolean $moved
     *
     * @return ForumsTopics
     */
    public function setMoved($moved)
    {
        $this->moved = $moved;

        return $this;
    }

    /**
     * Get moved
     *
     * @return bool
     */
    public function getMoved()
    {
        return $this->moved;
    }

    /**
     * Set sticky
     *
     * @param boolean $sticky
     *
     * @return ForumsTopics
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;

        return $this;
    }

    /**
     * Get sticky
     *
     * @return bool
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return ForumsTopics
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }
}

