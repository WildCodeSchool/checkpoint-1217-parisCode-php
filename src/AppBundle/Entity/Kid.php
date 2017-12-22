<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kid
 *
 * @ORM\Table(name="kid")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KidRepository")
 */
class Kid
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
     * @ORM\Column(name="kidName", type="string", length=100)
     */
    private $kidName;

    /**
     * @var string
     *
     * @ORM\Column(name="kidEmail", type="string", length=100)
     */
    private $kidEmail;


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
     * Set kidName
     *
     * @param string $kidName
     *
     * @return Kid
     */
    public function setKidName($kidName)
    {
        $this->kidName = $kidName;

        return $this;
    }

    /**
     * Get kidName
     *
     * @return string
     */
    public function getKidName()
    {
        return $this->kidName;
    }

    /**
     * Set kidEmail
     *
     * @param string $kidEmail
     *
     * @return Kid
     */
    public function setKidEmail($kidEmail)
    {
        $this->kidEmail = $kidEmail;

        return $this;
    }

    /**
     * Get kidEmail
     *
     * @return string
     */
    public function getKidEmail()
    {
        return $this->kidEmail;
    }
}

