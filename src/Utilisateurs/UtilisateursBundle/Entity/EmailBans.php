<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailBans
 *
 * @ORM\Table(name="email_bans")
 * @ORM\Entity
 */
class EmailBans
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
     * @ORM\Column(name="userid", type="integer", nullable=true)
     */
    private $userid = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="addedby", type="integer", nullable=false)
     */
    private $addedby = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mail_domain", type="string", length=255, nullable=true)
     */
    private $mailDomain;



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
     * @return EmailBans
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
     * @return EmailBans
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
     * Set addedby
     *
     * @param integer $addedby
     *
     * @return EmailBans
     */
    public function setAddedby($addedby)
    {
        $this->addedby = $addedby;

        return $this;
    }

    /**
     * Get addedby
     *
     * @return integer
     */
    public function getAddedby()
    {
        return $this->addedby;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return EmailBans
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set mailDomain
     *
     * @param string $mailDomain
     *
     * @return EmailBans
     */
    public function setMailDomain($mailDomain)
    {
        $this->mailDomain = $mailDomain;

        return $this;
    }

    /**
     * Get mailDomain
     *
     * @return string
     */
    public function getMailDomain()
    {
        return $this->mailDomain;
    }
}
