<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pollanswers
 *
 * @ORM\Table(name="pollanswers", indexes={@ORM\Index(name="pollid", columns={"pollid"}), @ORM\Index(name="selection", columns={"selection"}), @ORM\Index(name="userid", columns={"userid"})})
 * @ORM\Entity
 */
class Pollanswers
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
     * @ORM\Column(name="pollid", type="integer", nullable=false)
     */
    private $pollid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="selection", type="boolean", nullable=false)
     */
    private $selection = '0';



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
     * Set pollid
     *
     * @param integer $pollid
     *
     * @return Pollanswers
     */
    public function setPollid($pollid)
    {
        $this->pollid = $pollid;

        return $this;
    }

    /**
     * Get pollid
     *
     * @return integer
     */
    public function getPollid()
    {
        return $this->pollid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Pollanswers
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
     * Set selection
     *
     * @param boolean $selection
     *
     * @return Pollanswers
     */
    public function setSelection($selection)
    {
        $this->selection = $selection;

        return $this;
    }

    /**
     * Get selection
     *
     * @return boolean
     */
    public function getSelection()
    {
        return $this->selection;
    }
}
