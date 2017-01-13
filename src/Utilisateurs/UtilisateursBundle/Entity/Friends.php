<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Friends
 *
 * @ORM\Table(name="friends", uniqueConstraints={@ORM\UniqueConstraint(name="userfriend", columns={"userid", "friendid"})})
 * @ORM\Entity
 */
class Friends
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
     * @ORM\Column(name="friendid", type="integer", nullable=false)
     */
    private $friendid = '0';



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
     * @return Friends
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
     * Set friendid
     *
     * @param integer $friendid
     *
     * @return Friends
     */
    public function setFriendid($friendid)
    {
        $this->friendid = $friendid;

        return $this;
    }

    /**
     * Get friendid
     *
     * @return integer
     */
    public function getFriendid()
    {
        return $this->friendid;
    }
}
