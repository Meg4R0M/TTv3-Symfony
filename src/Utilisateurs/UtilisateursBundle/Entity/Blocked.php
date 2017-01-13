<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blocked
 *
 * @ORM\Table(name="blocked", uniqueConstraints={@ORM\UniqueConstraint(name="userfriend", columns={"userid", "blockid"})})
 * @ORM\Entity
 */
class Blocked
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
     * @ORM\Column(name="blockid", type="integer", nullable=false)
     */
    private $blockid = '0';



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
     * @return Blocked
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
     * Set blockid
     *
     * @param integer $blockid
     *
     * @return Blocked
     */
    public function setBlockid($blockid)
    {
        $this->blockid = $blockid;

        return $this;
    }

    /**
     * Get blockid
     *
     * @return integer
     */
    public function getBlockid()
    {
        return $this->blockid;
    }
}