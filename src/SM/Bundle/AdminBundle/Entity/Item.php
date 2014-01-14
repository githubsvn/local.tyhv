<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="mtx_item")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\ItemRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Item {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="ItemType")
     */
    private $itemtype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="ItemLanguage", mappedBy="item", cascade={"all"})
     */
    protected $item_languages;

    /**
     * @var Language
     */
    private $language;
    
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue() {
        if (!$this->getCreatedAt()) {
            $this->created_at = new \DateTime();
            $this->updated_at = new \DateTime();
        }
    }

    public function getCurrentLanguage() {
        $objLanguages = $this->item_languages->toArray();
        if (is_array($objLanguages)) {
            if (null !== $this->language) {
                foreach ($objLanguages as $oLanguage) {
                    if ($oLanguage->getLanguage()->getId() == $this->language->getId()) {
                        return $oLanguage;
                    }
                }
            }
        }

        return null;
    }

    public function hasLanguage(Language $language) {
        $result = false;
        if (count($this->item_languages->toArray()) > 0) {
            foreach ($this->item_languages as $plTemp) {
                if ($language->getId() == $plTemp->getLanguage()->getId()) {
                    $result = true;
                    break;
                }
            }
        }

        return $result;
    }

    public function __toString() {
        $objLanguages = $this->item_languages->toArray();
        if (is_array($objLanguages)) {
            if (isset($objLanguages[0])) {
                return $objLanguages[0]->getName();
            }
        }
        return '';
    }

    /**
     * Set Language
     *
     * @param \SM\Bundle\AdminBundle\Entity\Language $language
     */
    public function setLanguage(Language $language) {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \SM\Bundle\AdminBundle\Entity\Language
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->item_languages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->language = null;
    }

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
     * Set status
     *
     * @param boolean $status
     * @return News
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return News
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return News
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set category
     *
     * @param \SM\Bundle\AdminBundle\Entity\ItemType $itemType
     * @return Item
     */
    public function setItemType(\SM\Bundle\AdminBundle\Entity\ItemType $itemType = null)
    {
        $this->itemtype = $itemType;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \SM\Bundle\AdminBundle\Entity\ItemType
     */
    public function getItemType()
    {
        return $this->itemtype;
    }

    /**
     * Set created
     *
     * @param \SM\Bundle\AdminBundle\Entity\User $created
     * @return News
     */
    public function setCreated(\SM\Bundle\AdminBundle\Entity\User $created = null)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \SM\Bundle\AdminBundle\Entity\User 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \SM\Bundle\AdminBundle\Entity\User $updated
     * @return News
     */
    public function setUpdated(\SM\Bundle\AdminBundle\Entity\User $updated = null)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \SM\Bundle\AdminBundle\Entity\User 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Add item_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\ItemLanguage $itemLanguages
     * @return ItemNews
     */
    public function addItemLanguage(\SM\Bundle\AdminBundle\Entity\ItemLanguage $itemLanguages)
    {
        $this->item_languages[] = $itemLanguages;
    
        return $this;
    }

    /**
     * Remove news_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\ItemLanguage $itemLanguages
     */
    public function removeItemLanguage(\SM\Bundle\AdminBundle\Entity\ItemLanguage $itemLanguages)
    {
        $this->item_languages->removeElement($itemLanguages);
    }

    /**
     * Get item_languages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItemLanguages()
    {
        return $this->item_languages;
    }
    
}