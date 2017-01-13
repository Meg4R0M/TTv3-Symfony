<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForumForums
 *
 * @ORM\Table(name="forum_forums")
 * @ORM\Entity
 */
class ForumForums
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
     * @var boolean
     *
     * @ORM\Column(name="sort", type="boolean", nullable=false)
     */
    private $sort = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="minclassread", type="boolean", nullable=false)
     */
    private $minclassread = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="minclasswrite", type="boolean", nullable=false)
     */
    private $minclasswrite = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="guest_read", type="string", nullable=true)
     */
    private $guestRead = 'yes';

    /**
     * @var boolean
     *
     * @ORM\Column(name="category", type="boolean", nullable=false)
     */
    private $category = '0';



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
     * Set sort
     *
     * @param boolean $sort
     *
     * @return ForumForums
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return boolean
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ForumForums
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
     * Set description
     *
     * @param string $description
     *
     * @return ForumForums
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set minclassread
     *
     * @param boolean $minclassread
     *
     * @return ForumForums
     */
    public function setMinclassread($minclassread)
    {
        $this->minclassread = $minclassread;

        return $this;
    }

    /**
     * Get minclassread
     *
     * @return boolean
     */
    public function getMinclassread()
    {
        return $this->minclassread;
    }

    /**
     * Set minclasswrite
     *
     * @param boolean $minclasswrite
     *
     * @return ForumForums
     */
    public function setMinclasswrite($minclasswrite)
    {
        $this->minclasswrite = $minclasswrite;

        return $this;
    }

    /**
     * Get minclasswrite
     *
     * @return boolean
     */
    public function getMinclasswrite()
    {
        return $this->minclasswrite;
    }

    /**
     * Set guestRead
     *
     * @param string $guestRead
     *
     * @return ForumForums
     */
    public function setGuestRead($guestRead)
    {
        $this->guestRead = $guestRead;

        return $this;
    }

    /**
     * Get guestRead
     *
     * @return string
     */
    public function getGuestRead()
    {
        return $this->guestRead;
    }

    /**
     * Set category
     *
     * @param boolean $category
     *
     * @return ForumForums
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return boolean
     */
    public function getCategory()
    {
        return $this->category;
    }
}
