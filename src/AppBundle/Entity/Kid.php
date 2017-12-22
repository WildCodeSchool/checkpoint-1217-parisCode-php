<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Gift;

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
     * @var $gift
     *
     * @ORM\OneToMany(targetEntity="Gift", mappedBy="Kid")
     */
    private $gifts;



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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gifts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gift
     *
     * @param \AppBundle\Entity\Gift $gift
     *
     * @return Kid
     */
    public function addGift(\AppBundle\Entity\Gift $gift)
    {
        $this->gifts[] = $gift;

        return $this;
    }

    /**
     * Remove gift
     *
     * @param \AppBundle\Entity\Gift $gift
     */
    public function removeGift(\AppBundle\Entity\Gift $gift)
    {
        $this->gifts->removeElement($gift);
    }

    /**
     * Get gifts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGifts()
    {
        return $this->gifts;
    }
}
