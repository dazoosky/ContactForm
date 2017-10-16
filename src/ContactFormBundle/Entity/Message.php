<?php

namespace ContactFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="ContactFormBundle\Repository\MessageRepository")
 */
class Message
{

    /**
     * @ORM\ManyToOne(targetEntity="MessageCategory")
     * @ORM\JoinColumn(name="messageCategory", referencedColumnName="id")
     */
    private $messageCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     * @Assert\Regex(
     *   pattern="/\d/",
     *   match=false,
     *   message="Your name cannot contain a number"
     * )
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=100)
     * @Assert\Regex(
     *   pattern="/\d/",
     *   match=false,
     *   message="Your name cannot contain a number"
     * )
     */
    private $surname;

    /**
     * @var string
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneno", type="string", length=255, nullable=true)
     */
    private $phoneno;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var bool
     *
     * @ORM\Column(name="readStatus", type="boolean")
     */
    private $readStatus;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Message
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
     * Set surname
     *
     * @param string $surname
     * @return Message
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Message
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneno
     *
     * @param string $phoneno
     * @return Message
     */
    public function setPhoneno($phoneno)
    {
        $this->phoneno = $phoneno;

        return $this;
    }

    /**
     * Get phoneno
     *
     * @return string 
     */
    public function getPhoneno()
    {
        return $this->phoneno;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Message
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set readStatus
     *
     * @param boolean $readStatus
     * @return Message
     */
    public function setReadStatus($readStatus)
    {
        $this->readStatus = $readStatus;

        return $this;
    }

    /**
     * Get readStatus
     *
     * @return boolean 
     */
    public function getReadStatus()
    {
        return $this->readStatus;
    }


    public function setMessageCategory($messageCategory) {
        $this->messageCategory = $messageCategory;

        return $this;
    }

    public function getMessageCategory() {
        return $this->messageCategory;
    }

    public function __construct()
    {
        $this->setDate(new \DateTime());
        $this->setReadStatus(false);
        return $this;
    }
}
