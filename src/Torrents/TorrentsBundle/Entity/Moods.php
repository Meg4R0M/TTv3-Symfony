<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moods
 *
 * @ORM\Table(name="moods")
 * @ORM\Entity
 */
class Moods
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
     * @ORM\Column(name="moodspic", type="string", length=50, nullable=true)
     */
    private $moodspic;



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
     * @return Moods
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
     * Set moodspic
     *
     * @param string $moodspic
     *
     * @return Moods
     */
    public function setMoodspic($moodspic)
    {
        $this->moodspic = $moodspic;

        return $this;
    }

    /**
     * Get moodspic
     *
     * @return string
     */
    public function getMoodspic()
    {
        return $this->moodspic;
    }
}
