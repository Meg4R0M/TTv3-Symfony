<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups", uniqueConstraints={@ORM\UniqueConstraint(name="base", columns={"group_id"})})
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=50, nullable=false)
     */
    private $level = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Color", type="string", length=7, nullable=false)
     */
    private $color = '#000000';

    /**
     * @var string
     *
     * @ORM\Column(name="view_torrents", type="string", nullable=false)
     */
    private $viewTorrents = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="edit_torrents", type="string", nullable=false)
     */
    private $editTorrents = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="delete_torrents", type="string", nullable=false)
     */
    private $deleteTorrents = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="view_users", type="string", nullable=false)
     */
    private $viewUsers = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="edit_users", type="string", nullable=false)
     */
    private $editUsers = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="delete_users", type="string", nullable=false)
     */
    private $deleteUsers = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="view_news", type="string", nullable=false)
     */
    private $viewNews = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="edit_news", type="string", nullable=false)
     */
    private $editNews = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="delete_news", type="string", nullable=false)
     */
    private $deleteNews = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="can_upload", type="string", nullable=false)
     */
    private $canUpload = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="can_download", type="string", nullable=false)
     */
    private $canDownload = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="view_forum", type="string", nullable=false)
     */
    private $viewForum = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="edit_forum", type="string", nullable=false)
     */
    private $editForum = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="delete_forum", type="string", nullable=false)
     */
    private $deleteForum = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="control_panel", type="string", nullable=false)
     */
    private $controlPanel = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="staff_page", type="string", nullable=false)
     */
    private $staffPage = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="staff_public", type="string", nullable=false)
     */
    private $staffPublic = 'no';

    /**
     * @var boolean
     *
     * @ORM\Column(name="staff_sort", type="boolean", nullable=false)
     */
    private $staffSort = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxslots", type="integer", nullable=false)
     */
    private $maxslots = '0';



    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
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
     * @param string $viewTorrents
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
     * @return string
     */
    public function getViewTorrents()
    {
        return $this->viewTorrents;
    }

    /**
     * Set editTorrents
     *
     * @param string $editTorrents
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
     * @return string
     */
    public function getEditTorrents()
    {
        return $this->editTorrents;
    }

    /**
     * Set deleteTorrents
     *
     * @param string $deleteTorrents
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
     * @return string
     */
    public function getDeleteTorrents()
    {
        return $this->deleteTorrents;
    }

    /**
     * Set viewUsers
     *
     * @param string $viewUsers
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
     * @return string
     */
    public function getViewUsers()
    {
        return $this->viewUsers;
    }

    /**
     * Set editUsers
     *
     * @param string $editUsers
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
     * @return string
     */
    public function getEditUsers()
    {
        return $this->editUsers;
    }

    /**
     * Set deleteUsers
     *
     * @param string $deleteUsers
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
     * @return string
     */
    public function getDeleteUsers()
    {
        return $this->deleteUsers;
    }

    /**
     * Set viewNews
     *
     * @param string $viewNews
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
     * @return string
     */
    public function getViewNews()
    {
        return $this->viewNews;
    }

    /**
     * Set editNews
     *
     * @param string $editNews
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
     * @return string
     */
    public function getEditNews()
    {
        return $this->editNews;
    }

    /**
     * Set deleteNews
     *
     * @param string $deleteNews
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
     * @return string
     */
    public function getDeleteNews()
    {
        return $this->deleteNews;
    }

    /**
     * Set canUpload
     *
     * @param string $canUpload
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
     * @return string
     */
    public function getCanUpload()
    {
        return $this->canUpload;
    }

    /**
     * Set canDownload
     *
     * @param string $canDownload
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
     * @return string
     */
    public function getCanDownload()
    {
        return $this->canDownload;
    }

    /**
     * Set viewForum
     *
     * @param string $viewForum
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
     * @return string
     */
    public function getViewForum()
    {
        return $this->viewForum;
    }

    /**
     * Set editForum
     *
     * @param string $editForum
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
     * @return string
     */
    public function getEditForum()
    {
        return $this->editForum;
    }

    /**
     * Set deleteForum
     *
     * @param string $deleteForum
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
     * @return string
     */
    public function getDeleteForum()
    {
        return $this->deleteForum;
    }

    /**
     * Set controlPanel
     *
     * @param string $controlPanel
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
     * @return string
     */
    public function getControlPanel()
    {
        return $this->controlPanel;
    }

    /**
     * Set staffPage
     *
     * @param string $staffPage
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
     * @return string
     */
    public function getStaffPage()
    {
        return $this->staffPage;
    }

    /**
     * Set staffPublic
     *
     * @param string $staffPublic
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
     * @return string
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
     * @return boolean
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
     * @return integer
     */
    public function getMaxslots()
    {
        return $this->maxslots;
    }
}
