<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warnings
 *
 * @ORM\Table(name="warnings")
 * @ORM\Entity
 */
class Warnings
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
     * @ORM\Column(name="reason", type="string", length=255, nullable=false)
     */
    private $reason = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiry", type="datetime", nullable=false)
     */
    private $expiry = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="warnedby", type="integer", nullable=false)
     */
    private $warnedby = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", nullable=true)
     */
    private $active = 'yes';



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
     * @return Warnings
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
     * Set reason
     *
     * @param string $reason
     *
     * @return Warnings
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     *
     * @return Warnings
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
     * Set expiry
     *
     * @param \DateTime $expiry
     *
     * @return Warnings
     */
    public function setExpiry($expiry)
    {
        $this->expiry = $expiry;

        return $this;
    }

    /**
     * Get expiry
     *
     * @return \DateTime
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Set warnedby
     *
     * @param integer $warnedby
     *
     * @return Warnings
     */
    public function setWarnedby($warnedby)
    {
        $this->warnedby = $warnedby;

        return $this;
    }

    /**
     * Get warnedby
     *
     * @return integer
     */
    public function getWarnedby()
    {
        return $this->warnedby;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Warnings
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Warnings
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }
}
