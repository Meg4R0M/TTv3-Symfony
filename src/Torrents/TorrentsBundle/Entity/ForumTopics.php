<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumTopics
 *
 * @ORM\Table(name="forum_topics", indexes={@ORM\Index(name="userid", columns={"userid"}), @ORM\Index(name="subject", columns={"subject"}), @ORM\Index(name="lastpost", columns={"lastpost"})})
 * @ORM\Entity
 */
class ForumTopics
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
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=40, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="locked", type="string", nullable=false)
     */
    private $locked = 'no';

    /**
     * @var integer
     *
     * @ORM\Column(name="forumid", type="integer", nullable=false)
     */
    private $forumid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastpost", type="integer", nullable=false)
     */
    private $lastpost = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="moved", type="string", nullable=false)
     */
    private $moved = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="sticky", type="string", nullable=false)
     */
    private $sticky = 'no';

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views = '0';



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
     * @return ForumTopics
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
     * Set subject
     *
     * @param string $subject
     *
     * @return ForumTopics
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
     * @param string $locked
     *
     * @return ForumTopics
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return string
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
     * @return ForumTopics
     */
    public function setForumid($forumid)
    {
        $this->forumid = $forumid;

        return $this;
    }

    /**
     * Get forumid
     *
     * @return integer
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
     * @return ForumTopics
     */
    public function setLastpost($lastpost)
    {
        $this->lastpost = $lastpost;

        return $this;
    }

    /**
     * Get lastpost
     *
     * @return integer
     */
    public function getLastpost()
    {
        return $this->lastpost;
    }

    /**
     * Set moved
     *
     * @param string $moved
     *
     * @return ForumTopics
     */
    public function setMoved($moved)
    {
        $this->moved = $moved;

        return $this;
    }

    /**
     * Get moved
     *
     * @return string
     */
    public function getMoved()
    {
        return $this->moved;
    }

    /**
     * Set sticky
     *
     * @param string $sticky
     *
     * @return ForumTopics
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;

        return $this;
    }

    /**
     * Get sticky
     *
     * @return string
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
     * @return ForumTopics
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
}
