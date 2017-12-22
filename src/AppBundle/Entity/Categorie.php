<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="wish", type="string", length=255)
     */
    private $wish;

    /**
     * @var string
     *
     * @ORM\Column(name="game", type="string", length=255)
     */
    private $game;


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
     * Set wish.
     *
     * @param string $wish
     *
     * @return Categorie
     */
    public function setWish($wish)
    {
        $this->wish = $wish;

        return $this;
    }

    /**
     * Get wish.
     *
     * @return string
     */
    public function getWish()
    {
        return $this->wish;
    }

    /**
     * Set game.
     *
     * @param string $game
     *
     * @return Categorie
     */
    public function setGame($game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game.
     *
     * @return string
     */
    public function getGame()
    {
        return $this->game;
    }
}
