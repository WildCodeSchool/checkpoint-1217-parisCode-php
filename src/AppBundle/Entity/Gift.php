<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gift
 *
 * @ORM\Table(name="gift")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GiftRepository")
 */
class Gift
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
     * @ORM\Column(name="giftName", type="string", length=100)
     */
    private $giftName;

    /**
     * @var string
     *
     * @ORM\Column(name="giftPictureUrl", type="string", length=255)
     */
    private $giftPictureUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="giftDescription", type="text")
     */
    private $giftDescription;


    /**
     * @var string
     *
     * @ORM\Column(name="giftPrice", type="float")
     */
    private $giftPrice;

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
     * Set giftName
     *
     * @param string $giftName
     *
     * @return Gift
     */
    public function setGiftName($giftName)
    {
        $this->giftName = $giftName;

        return $this;
    }

    /**
     * Get giftName
     *
     * @return string
     */
    public function getGiftName()
    {
        return $this->giftName;
    }

    /**
     * Set giftPictureUrl
     *
     * @param string $giftPictureUrl
     *
     * @return Gift
     */
    public function setGiftPictureUrl($giftPictureUrl)
    {
        $this->giftPictureUrl = $giftPictureUrl;

        return $this;
    }

    /**
     * Get giftPictureUrl
     *
     * @return string
     */
    public function getGiftPictureUrl()
    {
        return $this->giftPictureUrl;
    }

    /**
     * Set giftDescription
     *
     * @param string $giftDescription
     *
     * @return Gift
     */
    public function setGiftDescription($giftDescription)
    {
        $this->giftDescription = $giftDescription;

        return $this;
    }

    /**
     * Get giftDescription
     *
     * @return string
     */
    public function getGiftDescription()
    {
        return $this->giftDescription;
    }

    /**
     * Set giftPrice
     *
     * @param float $giftPrice
     *
     * @return Gift
     */
    public function setGiftPrice($giftPrice)
    {
        $this->giftPrice = $giftPrice;

        return $this;
    }

    /**
     * Get giftPrice
     *
     * @return float
     */
    public function getGiftPrice()
    {
        return $this->giftPrice;
    }
}
