<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reports
 *
 * @ORM\Table(name="reports")
 * @ORM\Entity
 */
class Reports
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
     * @ORM\Column(name="addedby", type="integer", nullable=false)
     */
    private $addedby = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="votedfor", type="integer", nullable=false)
     */
    private $votedfor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="votedfor_xtra", type="integer", nullable=false)
     */
    private $votedforXtra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type = 'torrent';

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255, nullable=false)
     */
    private $reason = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dealtby", type="integer", nullable=false)
     */
    private $dealtby = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="dealtwith", type="boolean", nullable=false)
     */
    private $dealtwith = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="complete", type="boolean", nullable=false)
     */
    private $complete = '0';



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
     * Set addedby
     *
     * @param integer $addedby
     *
     * @return Reports
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
     * Set votedfor
     *
     * @param integer $votedfor
     *
     * @return Reports
     */
    public function setVotedfor($votedfor)
    {
        $this->votedfor = $votedfor;

        return $this;
    }

    /**
     * Get votedfor
     *
     * @return integer
     */
    public function getVotedfor()
    {
        return $this->votedfor;
    }

    /**
     * Set votedforXtra
     *
     * @param integer $votedforXtra
     *
     * @return Reports
     */
    public function setVotedforXtra($votedforXtra)
    {
        $this->votedforXtra = $votedforXtra;

        return $this;
    }

    /**
     * Get votedforXtra
     *
     * @return integer
     */
    public function getVotedforXtra()
    {
        return $this->votedforXtra;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Reports
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
     * Set reason
     *
     * @param string $reason
     *
     * @return Reports
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
     * Set dealtby
     *
     * @param integer $dealtby
     *
     * @return Reports
     */
    public function setDealtby($dealtby)
    {
        $this->dealtby = $dealtby;

        return $this;
    }

    /**
     * Get dealtby
     *
     * @return integer
     */
    public function getDealtby()
    {
        return $this->dealtby;
    }

    /**
     * Set dealtwith
     *
     * @param boolean $dealtwith
     *
     * @return Reports
     */
    public function setDealtwith($dealtwith)
    {
        $this->dealtwith = $dealtwith;

        return $this;
    }

    /**
     * Get dealtwith
     *
     * @return boolean
     */
    public function getDealtwith()
    {
        return $this->dealtwith;
    }

    /**
     * Set complete
     *
     * @param boolean $complete
     *
     * @return Reports
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get complete
     *
     * @return boolean
     */
    public function getComplete()
    {
        return $this->complete;
    }
}
