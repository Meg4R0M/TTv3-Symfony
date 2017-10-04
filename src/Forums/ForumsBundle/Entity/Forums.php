<?php

namespace Forums\ForumsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forums
 *
 * @ORM\Table(name="forums")
 * @ORM\Entity(repositoryClass="Forums\ForumsBundle\Repository\ForumsRepository")
 */
class Forums
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
     * @var int
     *
     * @ORM\Column(name="sort", type="integer")
     */
    private $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="decription", type="string", length=200)
     */
    private $decription;

    /**
     * @var int
     *
     * @ORM\Column(name="minclassread", type="smallint")
     */
    private $minclassread;

    /**
     * @var int
     *
     * @ORM\Column(name="minclasswrite", type="smallint")
     */
    private $minclasswrite;

    /**
     * @var bool
     *
     * @ORM\Column(name="guest_read", type="boolean")
     */
    private $guestRead;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Forums\ForumsBundle\Entity\ForumsCategories")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    private $category;


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
     * Set sort
     *
     * @param integer $sort
     *
     * @return Forums
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return int
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
     * @return Forums
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
     * Set decription
     *
     * @param string $decription
     *
     * @return Forums
     */
    public function setDecription($decription)
    {
        $this->decription = $decription;

        return $this;
    }

    /**
     * Get decription
     *
     * @return string
     */
    public function getDecription()
    {
        return $this->decription;
    }

    /**
     * Set minclassread
     *
     * @param integer $minclassread
     *
     * @return Forums
     */
    public function setMinclassread($minclassread)
    {
        $this->minclassread = $minclassread;

        return $this;
    }

    /**
     * Get minclassread
     *
     * @return int
     */
    public function getMinclassread()
    {
        return $this->minclassread;
    }

    /**
     * Set minclasswrite
     *
     * @param integer $minclasswrite
     *
     * @return Forums
     */
    public function setMinclasswrite($minclasswrite)
    {
        $this->minclasswrite = $minclasswrite;

        return $this;
    }

    /**
     * Get minclasswrite
     *
     * @return int
     */
    public function getMinclasswrite()
    {
        return $this->minclasswrite;
    }

    /**
     * Set guestRead
     *
     * @param boolean $guestRead
     *
     * @return Forums
     */
    public function setGuestRead($guestRead)
    {
        $this->guestRead = $guestRead;

        return $this;
    }

    /**
     * Get guestRead
     *
     * @return bool
     */
    public function getGuestRead()
    {
        return $this->guestRead;
    }

    /**
     * Set category
     *
     * @param integer $category
     *
     * @return Forums
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }
}

