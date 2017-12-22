<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="categoryName", type="string", length=100)
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryPictureUrl", type="string", length=255)
     */
    private $categoryPictureUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryDescription", type="text")
     */
    private $categoryDescription;


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
     * Set categoryName.
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName.
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categoryPictureUrl.
     *
     * @param string $categoryPictureUrl
     *
     * @return Category
     */
    public function setCategoryPictureUrl($categoryPictureUrl)
    {
        $this->categoryPictureUrl = $categoryPictureUrl;

        return $this;
    }

    /**
     * Get categoryPictureUrl.
     *
     * @return string
     */
    public function getCategoryPictureUrl()
    {
        return $this->categoryPictureUrl;
    }

    /**
     * Set categoryDescription.
     *
     * @param string $categoryDescription
     *
     * @return Category
     */
    public function setCategoryDescription($categoryDescription)
    {
        $this->categoryDescription = $categoryDescription;

        return $this;
    }

    /**
     * Get categoryDescription.
     *
     * @return string
     */
    public function getCategoryDescription()
    {
        return $this->categoryDescription;
    }

    /**
     *  NB LN-T : méthode toString
     */
     public function __toString()
     {
         return $this->categoryName;
     }

}
