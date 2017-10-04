<?php

namespace Forums\ForumsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumsReadPosts
 *
 * @ORM\Table(name="forums_read_posts")
 * @ORM\Entity(repositoryClass="Forums\ForumsBundle\Repository\ForumsReadPostsRepository")
 */
class ForumsReadPosts
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Forums\ForumsBundle\Entity\ForumsTopics")
     * @ORM\JoinColumn(name="topicid", referencedColumnName="id")
     */
    private $topicid;

    /**
     * @var int
     *
     * @ORM\Column(name="lastpostread", type="integer")
     */
    private $lastpostread;


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
     * @return ForumsReadPosts
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
     * Set topicid
     *
     * @param integer $topicid
     *
     * @return ForumsReadPosts
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
     * Set lastpostread
     *
     * @param integer $lastpostread
     *
     * @return ForumsReadPosts
     */
    public function setLastpostread($lastpostread)
    {
        $this->lastpostread = $lastpostread;

        return $this;
    }

    /**
     * Get lastpostread
     *
     * @return int
     */
    public function getLastpostread()
    {
        return $this->lastpostread;
    }
}

