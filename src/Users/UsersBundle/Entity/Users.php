<?php
/**
 * Created by IntelliJ IDEA.
 * User: meg4r0m
 * Date: 14/01/17
 * Time: 13:04
 */

namespace Users\UsersBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Users
 *
 * @package UsersBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="`users`")
 */
class Users extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

}