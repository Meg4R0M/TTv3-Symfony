<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumPosts
 *
 * @ORM\Table(name="forum_posts", indexes={@ORM\Index(name="topicid", columns={"topicid"}), @ORM\Index(name="userid", columns={"userid"}), @ORM\Index(name="body", columns={"body"})})
 * @ORM\Entity
 */
class ForumPosts
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
     * @ORM\Column(name="topicid", type="integer", nullable=false)
     */
    private $topicid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=true)
     */
    private $added;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="editedby", type="integer", nullable=false)
     */
    private $editedby = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="editedat", type="datetime", nullable=false)
     */
    private $editedat = '0000-00-00 00:00:00';



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
     * Set topicid
     *
     * @param integer $topicid
     *
     * @return ForumPosts
     */
    public function setTopicid($topicid)
    {
        $this->topicid = $topicid;

        return $this;
    }

    /**
     * Get topicid
     *
     * @return integer
     */
    public function getTopicid()
    {
        return $this->topicid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return ForumPosts
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
     * Set added
     *
     * @param \DateTime $added
     *
     * @return ForumPosts
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
     * Set body
     *
     * @param string $body
     *
     * @return ForumPosts
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set editedby
     *
     * @param integer $editedby
     *
     * @return ForumPosts
     */
    public function setEditedby($editedby)
    {
        $this->editedby = $editedby;

        return $this;
    }

    /**
     * Get editedby
     *
     * @return integer
     */
    public function getEditedby()
    {
        return $this->editedby;
    }

    /**
     * Set editedat
     *
     * @param \DateTime $editedat
     *
     * @return ForumPosts
     */
    public function setEditedat($editedat)
    {
        $this->editedat = $editedat;

        return $this;
    }

    /**
     * Get editedat
     *
     * @return \DateTime
     */
    public function getEditedat()
    {
        return $this->editedat;
    }
}
