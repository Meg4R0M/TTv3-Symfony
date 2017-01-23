<?php
/**
 * Created by IntelliJ IDEA.
 * User: meg4r0m
 * Date: 23/01/17
 * Time: 10:15
 */
namespace Users\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Entity\ThreadMetadata as BaseThreadMetadata;

/**
 * @ORM\Entity
 */
class ThreadMetadata extends BaseThreadMetadata
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *   targetEntity="Users\UsersBundle\Entity\Thread",
     *   inversedBy="metadata"
     * )
     * @var \FOS\MessageBundle\Model\ThreadInterface
     */
    protected $thread;

    /**
     * @ORM\ManyToOne(targetEntity="Users\UsersBundle\Entity\Users")
     * @var \FOS\MessageBundle\Model\ParticipantInterface
     */
    protected $participant;
}