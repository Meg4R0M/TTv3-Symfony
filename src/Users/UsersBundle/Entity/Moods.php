<?php

namespace Users\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moods
 *
 * @ORM\Table(name="moods")
 * @ORM\Entity(repositoryClass="Users\UsersBundle\Repository\MoodsRepository")
 */
class Moods
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="moodpic", type="string", length=50)
     */
    private $moodpic;


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
     * Set moodpic
     *
     * @param string $moodpic
     *
     * @return Moods
     */
    public function setMoodpic($moodpic)
    {
        $this->moodpic = $moodpic;

        return $this;
    }

    /**
     * Get moodpic
     *
     * @return string
     */
    public function getMoodpic()
    {
        return $this->moodpic;
    }

    public function __toString()
    {
        return $this->getName();
    }
}

