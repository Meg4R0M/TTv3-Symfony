<?php

namespace Informations\InformationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advertisements
 *
 * @ORM\Table(name="advertisements")
 * @ORM\Entity(repositoryClass="Informations\InformationsBundle\Repository\AdvertisementsRepository")
 */
class Advertisements
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    //**
     //* @var int
     //*
     //* @ORM\Column(name="image_id", type="integer", nullable=true)
     //*/
    //private $imageId;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="string", length=255, nullable=true)
     */
    private $imagePath;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;


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
     * Set title
     *
     * @param string $title
     *
     * @return Advertisements
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    //**
     //* Set imageId
     //*
     //* @param integer $imageId
     //*
     //* @return Advertisements
     //*/
    //public function setImageId($imageId)
    //{
        //$this->imageId = $imageId;

        //return $this;
    //}

    /**
     * Set imagePath
     *
     * @param string $imagePath
     *
     * @return Advertisements
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    ///**
     //* Get imageId
     //*
     //* @return int
     //*/
    //public function getImageId()
    //{
        //return $this->imageId;
    //}

    /**
     * Get imagePath
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Advertisements
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
}

