<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe.
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeRepository")
 */
class Recipe
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="servingNumber", type="integer", nullable=true)
     */
    private $servingNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="preparationTime", type="integer", nullable=true)
     */
    private $preparationTime;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="string", length=60)
     */
    private $abstract;

    /**
     * @return string
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param string $abstract
     */
    public function setAbstract(string $abstract)
    {
        $this->abstract = $abstract;
    }

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
     * Set title.
     *
     * @param string $title
     *
     * @return Recipe
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set servingNumber.
     *
     * @param int $servingNumber
     *
     * @return Recipe
     */
    public function setServingNumber($servingNumber)
    {
        $this->servingNumber = $servingNumber;

        return $this;
    }

    /**
     * Get servingNumber.
     *
     * @return int
     */
    public function getServingNumber()
    {
        return $this->servingNumber;
    }

    /**
     * Set preparationTime.
     *
     * @param int $preparationTime
     *
     * @return Recipe
     */
    public function setPreparationTime($preparationTime)
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * Get preparationTime.
     *
     * @return int
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
