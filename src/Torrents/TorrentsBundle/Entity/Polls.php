<?php

namespace Torrents\TorrentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Polls
 *
 * @ORM\Table(name="polls")
 * @ORM\Entity
 */
class Polls
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
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=false)
     */
    private $question = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option0", type="string", length=40, nullable=false)
     */
    private $option0 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option1", type="string", length=40, nullable=false)
     */
    private $option1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option2", type="string", length=40, nullable=false)
     */
    private $option2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option3", type="string", length=40, nullable=false)
     */
    private $option3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option4", type="string", length=40, nullable=false)
     */
    private $option4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option5", type="string", length=40, nullable=false)
     */
    private $option5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option6", type="string", length=40, nullable=false)
     */
    private $option6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option7", type="string", length=40, nullable=false)
     */
    private $option7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option8", type="string", length=40, nullable=false)
     */
    private $option8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option9", type="string", length=40, nullable=false)
     */
    private $option9 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option10", type="string", length=40, nullable=false)
     */
    private $option10 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option11", type="string", length=40, nullable=false)
     */
    private $option11 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option12", type="string", length=40, nullable=false)
     */
    private $option12 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option13", type="string", length=40, nullable=false)
     */
    private $option13 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option14", type="string", length=40, nullable=false)
     */
    private $option14 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option15", type="string", length=40, nullable=false)
     */
    private $option15 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option16", type="string", length=40, nullable=false)
     */
    private $option16 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option17", type="string", length=40, nullable=false)
     */
    private $option17 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option18", type="string", length=40, nullable=false)
     */
    private $option18 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="option19", type="string", length=40, nullable=false)
     */
    private $option19 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sort", type="string", nullable=false)
     */
    private $sort = 'yes';



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
     * Set added
     *
     * @param \DateTime $added
     *
     * @return Polls
     */
    public function setAdded($added)
    {
        $this->added = $added;

        return $this;
    }

    /**
     * Get added
     *
     * @return \DateTime
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return Polls
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set option0
     *
     * @param string $option0
     *
     * @return Polls
     */
    public function setOption0($option0)
    {
        $this->option0 = $option0;

        return $this;
    }

    /**
     * Get option0
     *
     * @return string
     */
    public function getOption0()
    {
        return $this->option0;
    }

    /**
     * Set option1
     *
     * @param string $option1
     *
     * @return Polls
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;

        return $this;
    }

    /**
     * Get option1
     *
     * @return string
     */
    public function getOption1()
    {
        return $this->option1;
    }

    /**
     * Set option2
     *
     * @param string $option2
     *
     * @return Polls
     */
    public function setOption2($option2)
    {
        $this->option2 = $option2;

        return $this;
    }

    /**
     * Get option2
     *
     * @return string
     */
    public function getOption2()
    {
        return $this->option2;
    }

    /**
     * Set option3
     *
     * @param string $option3
     *
     * @return Polls
     */
    public function setOption3($option3)
    {
        $this->option3 = $option3;

        return $this;
    }

    /**
     * Get option3
     *
     * @return string
     */
    public function getOption3()
    {
        return $this->option3;
    }

    /**
     * Set option4
     *
     * @param string $option4
     *
     * @return Polls
     */
    public function setOption4($option4)
    {
        $this->option4 = $option4;

        return $this;
    }

    /**
     * Get option4
     *
     * @return string
     */
    public function getOption4()
    {
        return $this->option4;
    }

    /**
     * Set option5
     *
     * @param string $option5
     *
     * @return Polls
     */
    public function setOption5($option5)
    {
        $this->option5 = $option5;

        return $this;
    }

    /**
     * Get option5
     *
     * @return string
     */
    public function getOption5()
    {
        return $this->option5;
    }

    /**
     * Set option6
     *
     * @param string $option6
     *
     * @return Polls
     */
    public function setOption6($option6)
    {
        $this->option6 = $option6;

        return $this;
    }

    /**
     * Get option6
     *
     * @return string
     */
    public function getOption6()
    {
        return $this->option6;
    }

    /**
     * Set option7
     *
     * @param string $option7
     *
     * @return Polls
     */
    public function setOption7($option7)
    {
        $this->option7 = $option7;

        return $this;
    }

    /**
     * Get option7
     *
     * @return string
     */
    public function getOption7()
    {
        return $this->option7;
    }

    /**
     * Set option8
     *
     * @param string $option8
     *
     * @return Polls
     */
    public function setOption8($option8)
    {
        $this->option8 = $option8;

        return $this;
    }

    /**
     * Get option8
     *
     * @return string
     */
    public function getOption8()
    {
        return $this->option8;
    }

    /**
     * Set option9
     *
     * @param string $option9
     *
     * @return Polls
     */
    public function setOption9($option9)
    {
        $this->option9 = $option9;

        return $this;
    }

    /**
     * Get option9
     *
     * @return string
     */
    public function getOption9()
    {
        return $this->option9;
    }

    /**
     * Set option10
     *
     * @param string $option10
     *
     * @return Polls
     */
    public function setOption10($option10)
    {
        $this->option10 = $option10;

        return $this;
    }

    /**
     * Get option10
     *
     * @return string
     */
    public function getOption10()
    {
        return $this->option10;
    }

    /**
     * Set option11
     *
     * @param string $option11
     *
     * @return Polls
     */
    public function setOption11($option11)
    {
        $this->option11 = $option11;

        return $this;
    }

    /**
     * Get option11
     *
     * @return string
     */
    public function getOption11()
    {
        return $this->option11;
    }

    /**
     * Set option12
     *
     * @param string $option12
     *
     * @return Polls
     */
    public function setOption12($option12)
    {
        $this->option12 = $option12;

        return $this;
    }

    /**
     * Get option12
     *
     * @return string
     */
    public function getOption12()
    {
        return $this->option12;
    }

    /**
     * Set option13
     *
     * @param string $option13
     *
     * @return Polls
     */
    public function setOption13($option13)
    {
        $this->option13 = $option13;

        return $this;
    }

    /**
     * Get option13
     *
     * @return string
     */
    public function getOption13()
    {
        return $this->option13;
    }

    /**
     * Set option14
     *
     * @param string $option14
     *
     * @return Polls
     */
    public function setOption14($option14)
    {
        $this->option14 = $option14;

        return $this;
    }

    /**
     * Get option14
     *
     * @return string
     */
    public function getOption14()
    {
        return $this->option14;
    }

    /**
     * Set option15
     *
     * @param string $option15
     *
     * @return Polls
     */
    public function setOption15($option15)
    {
        $this->option15 = $option15;

        return $this;
    }

    /**
     * Get option15
     *
     * @return string
     */
    public function getOption15()
    {
        return $this->option15;
    }

    /**
     * Set option16
     *
     * @param string $option16
     *
     * @return Polls
     */
    public function setOption16($option16)
    {
        $this->option16 = $option16;

        return $this;
    }

    /**
     * Get option16
     *
     * @return string
     */
    public function getOption16()
    {
        return $this->option16;
    }

    /**
     * Set option17
     *
     * @param string $option17
     *
     * @return Polls
     */
    public function setOption17($option17)
    {
        $this->option17 = $option17;

        return $this;
    }

    /**
     * Get option17
     *
     * @return string
     */
    public function getOption17()
    {
        return $this->option17;
    }

    /**
     * Set option18
     *
     * @param string $option18
     *
     * @return Polls
     */
    public function setOption18($option18)
    {
        $this->option18 = $option18;

        return $this;
    }

    /**
     * Get option18
     *
     * @return string
     */
    public function getOption18()
    {
        return $this->option18;
    }

    /**
     * Set option19
     *
     * @param string $option19
     *
     * @return Polls
     */
    public function setOption19($option19)
    {
        $this->option19 = $option19;

        return $this;
    }

    /**
     * Get option19
     *
     * @return string
     */
    public function getOption19()
    {
        return $this->option19;
    }

    /**
     * Set sort
     *
     * @param string $sort
     *
     * @return Polls
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }
}
