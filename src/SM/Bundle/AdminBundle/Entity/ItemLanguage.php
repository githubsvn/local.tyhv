<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsLanguage
 *
 * @ORM\Table(name="mtx_item_language")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\ItemLanguageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class ItemLanguage {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Language")
     */
    private $language;

    /**
     * @ORM\ManyToOne(targetEntity="Item")
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;
    
    /**
     * @var string
     *
     * @ORM\Column(name="oldprice", type="string", length=255)
     */
    private $oldprice;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


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
     * Set name
     *
     * @param string $name
     * @return NewsLanguage
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
     * Set intro
     *
     * @param string $price
     * @return ItemLanguage
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Set intro
     *
     * @param string $price
     * @return ItemLanguage
     */
    public function setOldPrice($oldPrice)
    {
        $this->oldprice = $oldPrice;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string
     */
    public function getOldPrice()
    {
        return $this->oldprice;
    }
    
    /**
     * Set description
     *
     * @param string $description
     * @return NewsLanguage
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set language
     *
     * @param \SM\Bundle\AdminBundle\Entity\Language $language
     * @return NewsLanguage
     */
    public function setLanguage(\SM\Bundle\AdminBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \SM\Bundle\AdminBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set category
     *
     * @param \SM\Bundle\AdminBundle\Entity\Item $item
     * @return ItemLanguage
     */
    public function setItem(\SM\Bundle\AdminBundle\Entity\Item $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get category
     *
     * @return \SM\Bundle\AdminBundle\Entity\Item
     */
    public function getItem()
    {
        return $this->item;
    }
}