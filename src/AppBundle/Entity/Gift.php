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
     * @ORM\Column(name="giftPictureURL", type="string", length=255)
     */
    private $giftPictureURL;

    /**
     * @var string
     *
     * @ORM\Column(name="giftDescription", type="text")
     */
    private $giftDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="giftPrice", type="float")
     */
    private $giftPrice;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set giftName.
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
     * Get giftName.
     *
     * @return string
     */
    public function getGiftName()
    {
        return $this->giftName;
    }

    /**
     * Set giftPictureURL.
     *
     * @param string $giftPictureURL
     *
     * @return Gift
     */
    public function setGiftPictureURL($giftPictureURL)
    {
        $this->giftPictureURL = $giftPictureURL;

        return $this;
    }

    /**
     * Get giftPictureURL.
     *
     * @return string
     */
    public function getGiftPictureURL()
    {
        return $this->giftPictureURL;
    }

    /**
     * Set giftDescription.
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
     * Get giftDescription.
     *
     * @return string
     */
    public function getGiftDescription()
    {
        return $this->giftDescription;
    }

    /**
     * Set giftPrice.
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
     * Get giftPrice.
     *
     * @return float
     */
    public function getGiftPrice()
    {
        return $this->giftPrice;
    }
}
