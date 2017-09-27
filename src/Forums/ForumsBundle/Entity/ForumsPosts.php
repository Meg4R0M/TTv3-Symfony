<?php

namespace Forums\ForumsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumsPosts
 *
 * @ORM\Table(name="forums_posts")
 * @ORM\Entity(repositoryClass="Forums\ForumsBundle\Repository\ForumsPostsRepository")
 */
class ForumsPosts
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
     * @ORM\Column(name="topicid", type="integer")
     */
    private $topicid;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime")
     */
    private $added;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var int
     *
     * @ORM\Column(name="editedby", type="integer")
     */
    private $editedby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="editedat", type="datetime")
     */
    private $editedat;


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
     * Set topicid
     *
     * @param integer $topicid
     *
     * @return ForumsPosts
     */
    public function setTopicid($topicid)
    {
        $this->topicid = $topicid;

        return $this;
    }

    /**
     * Get topicid
     *
     * @return int
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
     * @return ForumsPosts
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
     * Set added
     *
     * @param \DateTime $added
     *
     * @return ForumsPosts
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
     * @return ForumsPosts
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
     * @return ForumsPosts
     */
    public function setEditedby($editedby)
    {
        $this->editedby = $editedby;

        return $this;
    }

    /**
     * Get editedby
     *
     * @return int
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
     * @return ForumsPosts
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

