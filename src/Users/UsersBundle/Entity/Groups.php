<?php

namespace Users\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity(repositoryClass="Users\UsersBundle\Repository\GroupsRepository")
 */
class Groups
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
     * @ORM\Column(name="level", type="string", length=50)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=7)
     */
    private $color;

    /**
     * @var bool
     *
     * @ORM\Column(name="view_torrents", type="boolean")
     */
    private $viewTorrents;

    /**
     * @var bool
     *
     * @ORM\Column(name="edit_torrents", type="boolean")
     */
    private $editTorrents;

    /**
     * @var bool
     *
     * @ORM\Column(name="delete_torrents", type="boolean")
     */
    private $deleteTorrents;

    /**
     * @var bool
     *
     * @ORM\Column(name="view_users", type="boolean")
     */
    private $viewUsers;

    /**
     * @var bool
     *
     * @ORM\Column(name="edit_users", type="boolean")
     */
    private $editUsers;

    /**
     * @var bool
     *
     * @ORM\Column(name="delete_users", type="boolean")
     */
    private $deleteUsers;

    /**
     * @var bool
     *
     * @ORM\Column(name="view_news", type="boolean")
     */
    private $viewNews;

    /**
     * @var bool
     *
     * @ORM\Column(name="edit_news", type="boolean")
     */
    private $editNews;

    /**
     * @var bool
     *
     * @ORM\Column(name="delete_news", type="boolean")
     */
    private $deleteNews;

    /**
     * @var bool
     *
     * @ORM\Column(name="can_upload", type="boolean")
     */
    private $canUpload;

    /**
     * @var bool
     *
     * @ORM\Column(name="can_download", type="boolean")
     */
    private $canDownload;

    /**
     * @var bool
     *
     * @ORM\Column(name="view_forum", type="boolean")
     */
    private $viewForum;

    /**
     * @var bool
     *
     * @ORM\Column(name="edit_forum", type="boolean")
     */
    private $editForum;

    /**
     * @var bool
     *
     * @ORM\Column(name="delete_forum", type="boolean")
     */
    private $deleteForum;

    /**
     * @var bool
     *
     * @ORM\Column(name="control_panel", type="boolean")
     */
    private $controlPanel;

    /**
     * @var bool
     *
     * @ORM\Column(name="staff_page", type="boolean")
     */
    private $staffPage;

    /**
     * @var bool
     *
     * @ORM\Column(name="staff_public", type="boolean")
     */
    private $staffPublic;

    /**
     * @var bool
     *
     * @ORM\Column(name="staff_sort", type="boolean")
     */
    private $staffSort;

    /**
     * @var int
     *
     * @ORM\Column(name="maxslots", type="integer")
     */
    private $maxslots;


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
     * Set level
     *
     * @param string $level
     *
     * @return Groups
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Groups
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set viewTorrents
     *
     * @param boolean $viewTorrents
     *
     * @return Groups
     */
    public function setViewTorrents($viewTorrents)
    {
        $this->viewTorrents = $viewTorrents;

        return $this;
    }

    /**
     * Get viewTorrents
     *
     * @return bool
     */
    public function getViewTorrents()
    {
        return $this->viewTorrents;
    }

    /**
     * Set editTorrents
     *
     * @param boolean $editTorrents
     *
     * @return Groups
     */
    public function setEditTorrents($editTorrents)
    {
        $this->editTorrents = $editTorrents;

        return $this;
    }

    /**
     * Get editTorrents
     *
     * @return bool
     */
    public function getEditTorrents()
    {
        return $this->editTorrents;
    }

    /**
     * Set deleteTorrents
     *
     * @param boolean $deleteTorrents
     *
     * @return Groups
     */
    public function setDeleteTorrents($deleteTorrents)
    {
        $this->deleteTorrents = $deleteTorrents;

        return $this;
    }

    /**
     * Get deleteTorrents
     *
     * @return bool
     */
    public function getDeleteTorrents()
    {
        return $this->deleteTorrents;
    }

    /**
     * Set viewUsers
     *
     * @param boolean $viewUsers
     *
     * @return Groups
     */
    public function setViewUsers($viewUsers)
    {
        $this->viewUsers = $viewUsers;

        return $this;
    }

    /**
     * Get viewUsers
     *
     * @return bool
     */
    public function getViewUsers()
    {
        return $this->viewUsers;
    }

    /**
     * Set editUsers
     *
     * @param boolean $editUsers
     *
     * @return Groups
     */
    public function setEditUsers($editUsers)
    {
        $this->editUsers = $editUsers;

        return $this;
    }

    /**
     * Get editUsers
     *
     * @return bool
     */
    public function getEditUsers()
    {
        return $this->editUsers;
    }

    /**
     * Set deleteUsers
     *
     * @param boolean $deleteUsers
     *
     * @return Groups
     */
    public function setDeleteUsers($deleteUsers)
    {
        $this->deleteUsers = $deleteUsers;

        return $this;
    }

    /**
     * Get deleteUsers
     *
     * @return bool
     */
    public function getDeleteUsers()
    {
        return $this->deleteUsers;
    }

    /**
     * Set viewNews
     *
     * @param boolean $viewNews
     *
     * @return Groups
     */
    public function setViewNews($viewNews)
    {
        $this->viewNews = $viewNews;

        return $this;
    }

    /**
     * Get viewNews
     *
     * @return bool
     */
    public function getViewNews()
    {
        return $this->viewNews;
    }

    /**
     * Set editNews
     *
     * @param boolean $editNews
     *
     * @return Groups
     */
    public function setEditNews($editNews)
    {
        $this->editNews = $editNews;

        return $this;
    }

    /**
     * Get editNews
     *
     * @return bool
     */
    public function getEditNews()
    {
        return $this->editNews;
    }

    /**
     * Set deleteNews
     *
     * @param boolean $deleteNews
     *
     * @return Groups
     */
    public function setDeleteNews($deleteNews)
    {
        $this->deleteNews = $deleteNews;

        return $this;
    }

    /**
     * Get deleteNews
     *
     * @return bool
     */
    public function getDeleteNews()
    {
        return $this->deleteNews;
    }

    /**
     * Set canUpload
     *
     * @param boolean $canUpload
     *
     * @return Groups
     */
    public function setCanUpload($canUpload)
    {
        $this->canUpload = $canUpload;

        return $this;
    }

    /**
     * Get canUpload
     *
     * @return bool
     */
    public function getCanUpload()
    {
        return $this->canUpload;
    }

    /**
     * Set canDownload
     *
     * @param boolean $canDownload
     *
     * @return Groups
     */
    public function setCanDownload($canDownload)
    {
        $this->canDownload = $canDownload;

        return $this;
    }

    /**
     * Get canDownload
     *
     * @return bool
     */
    public function getCanDownload()
    {
        return $this->canDownload;
    }

    /**
     * Set viewForum
     *
     * @param boolean $viewForum
     *
     * @return Groups
     */
    public function setViewForum($viewForum)
    {
        $this->viewForum = $viewForum;

        return $this;
    }

    /**
     * Get viewForum
     *
     * @return bool
     */
    public function getViewForum()
    {
        return $this->viewForum;
    }

    /**
     * Set editForum
     *
     * @param boolean $editForum
     *
     * @return Groups
     */
    public function setEditForum($editForum)
    {
        $this->editForum = $editForum;

        return $this;
    }

    /**
     * Get editForum
     *
     * @return bool
     */
    public function getEditForum()
    {
        return $this->editForum;
    }

    /**
     * Set deleteForum
     *
     * @param boolean $deleteForum
     *
     * @return Groups
     */
    public function setDeleteForum($deleteForum)
    {
        $this->deleteForum = $deleteForum;

        return $this;
    }

    /**
     * Get deleteForum
     *
     * @return bool
     */
    public function getDeleteForum()
    {
        return $this->deleteForum;
    }

    /**
     * Set controlPanel
     *
     * @param boolean $controlPanel
     *
     * @return Groups
     */
    public function setControlPanel($controlPanel)
    {
        $this->controlPanel = $controlPanel;

        return $this;
    }

    /**
     * Get controlPanel
     *
     * @return bool
     */
    public function getControlPanel()
    {
        return $this->controlPanel;
    }

    /**
     * Set staffPage
     *
     * @param boolean $staffPage
     *
     * @return Groups
     */
    public function setStaffPage($staffPage)
    {
        $this->staffPage = $staffPage;

        return $this;
    }

    /**
     * Get staffPage
     *
     * @return bool
     */
    public function getStaffPage()
    {
        return $this->staffPage;
    }

    /**
     * Set staffPublic
     *
     * @param boolean $staffPublic
     *
     * @return Groups
     */
    public function setStaffPublic($staffPublic)
    {
        $this->staffPublic = $staffPublic;

        return $this;
    }

    /**
     * Get staffPublic
     *
     * @return bool
     */
    public function getStaffPublic()
    {
        return $this->staffPublic;
    }

    /**
     * Set staffSort
     *
     * @param boolean $staffSort
     *
     * @return Groups
     */
    public function setStaffSort($staffSort)
    {
        $this->staffSort = $staffSort;

        return $this;
    }

    /**
     * Get staffSort
     *
     * @return bool
     */
    public function getStaffSort()
    {
        return $this->staffSort;
    }

    /**
     * Set maxslots
     *
     * @param integer $maxslots
     *
     * @return Groups
     */
    public function setMaxslots($maxslots)
    {
        $this->maxslots = $maxslots;

        return $this;
    }

    /**
     * Get maxslots
     *
     * @return int
     */
    public function getMaxslots()
    {
        return $this->maxslots;
    }
}

