<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumReadposts
 *
 * @ORM\Table(name="forum_readposts", indexes={@ORM\Index(name="userid", columns={"id"}), @ORM\Index(name="topicid", columns={"topicid"})})
 * @ORM\Entity
 */
class ForumReadposts
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
     * @var integer
     *
     * @ORM\Column(name="topicid", type="integer", nullable=false)
     */
    private $topicid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastpostread", type="integer", nullable=false)
     */
    private $lastpostread = '0';



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
     * @return ForumReadposts
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
     * Set topicid
     *
     * @param integer $topicid
     *
     * @return ForumReadposts
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
     * Set lastpostread
     *
     * @param integer $lastpostread
     *
     * @return ForumReadposts
     */
    public function setLastpostread($lastpostread)
    {
        $this->lastpostread = $lastpostread;

        return $this;
    }

    /**
     * Get lastpostread
     *
     * @return integer
     */
    public function getLastpostread()
    {
        return $this->lastpostread;
    }
}
