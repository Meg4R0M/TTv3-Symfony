<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="flagpic", type="string", length=50, nullable=true)
     */
    private $flagpic;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=3, nullable=true)
     */
    private $domain;



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
     * Set name
     *
     * @param string $name
     *
     * @return Countries
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set flagpic
     *
     * @param string $flagpic
     *
     * @return Countries
     */
    public function setFlagpic($flagpic)
    {
        $this->flagpic = $flagpic;

        return $this;
    }

    /**
     * Get flagpic
     *
     * @return string
     */
    public function getFlagpic()
    {
        return $this->flagpic;
    }

    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return Countries
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
}
