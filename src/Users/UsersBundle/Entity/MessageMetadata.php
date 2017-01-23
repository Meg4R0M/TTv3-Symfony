<?php
/**
 * Created by IntelliJ IDEA.
 * User: meg4r0m
 * Date: 23/01/17
 * Time: 10:13
 */
namespace Users\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Entity\MessageMetadata as BaseMessageMetadata;

/**
 * @ORM\Entity
 */
class MessageMetadata extends BaseMessageMetadata
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *   targetEntity="Users\UsersBundle\Entity\Message",
     *   inversedBy="metadata"
     * )
     * @var \FOS\MessageBundle\Model\MessageInterface
     */
    protected $message;

    /**
     * @ORM\ManyToOne(targetEntity="Users\UsersBundle\Entity\Users")
     * @var \FOS\MessageBundle\Model\ParticipantInterface
     */
    protected $participant;
}