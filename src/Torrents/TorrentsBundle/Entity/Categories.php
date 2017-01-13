<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories", uniqueConstraints={@ORM\UniqueConstraint(name="parent_cat-name", columns={"parent_cat", "name"})})
 * @ORM\Entity
 */
class Categories
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
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_index", type="integer", nullable=false)
     */
    private $sortIndex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subcat", type="string", length=3, nullable=false)
     */
    private $subcat = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="parent_cat", type="string", length=15, nullable=false)
     */
    private $parentCat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sub_sort", type="string", length=3, nullable=false)
     */
    private $subSort = '';



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
     * @return Categories
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
     * Set sortIndex
     *
     * @param integer $sortIndex
     *
     * @return Categories
     */
    public function setSortIndex($sortIndex)
    {
        $this->sortIndex = $sortIndex;

        return $this;
    }

    /**
     * Get sortIndex
     *
     * @return integer
     */
    public function getSortIndex()
    {
        return $this->sortIndex;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Categories
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set subcat
     *
     * @param string $subcat
     *
     * @return Categories
     */
    public function setSubcat($subcat)
    {
        $this->subcat = $subcat;

        return $this;
    }

    /**
     * Get subcat
     *
     * @return string
     */
    public function getSubcat()
    {
        return $this->subcat;
    }

    /**
     * Set parentCat
     *
     * @param string $parentCat
     *
     * @return Categories
     */
    public function setParentCat($parentCat)
    {
        $this->parentCat = $parentCat;

        return $this;
    }

    /**
     * Get parentCat
     *
     * @return string
     */
    public function getParentCat()
    {
        return $this->parentCat;
    }

    /**
     * Set subSort
     *
     * @param string $subSort
     *
     * @return Categories
     */
    public function setSubSort($subSort)
    {
        $this->subSort = $subSort;

        return $this;
    }

    /**
     * Get subSort
     *
     * @return string
     */
    public function getSubSort()
    {
        return $this->subSort;
    }
}
