<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="mtx_comment")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\CommentRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Comment {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Products")
     */
    private $products;

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
     * @ORM\OneToMany(targetEntity="CommentLanguage", mappedBy="comment", cascade={"all"})
     */
    protected $comment_languages;

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
        $objLanguages = $this->comment_languages->toArray();
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
        if (count($this->comment_languages->toArray()) > 0) {
            foreach ($this->comment_languages as $plTemp) {
                if ($language->getId() == $plTemp->getLanguage()->getId()) {
                    $result = true;
                    break;
                }
            }
        }

        return $result;
    }

    public function __toString() {
        $objLanguages = $this->comment_languages->toArray();
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
        $this->comment_languages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \SM\Bundle\AdminBundle\Entity\Products $products
     * @return News
     */
    public function setProducts(\SM\Bundle\AdminBundle\Entity\Products $products = null)
    {
        $this->products = $products;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \SM\Bundle\AdminBundle\Entity\Products 
     */
    public function getProducts()
    {
        return $this->products;
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
     * Add news_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\CommentLanguage $commentLanguages
     * @return News
     */
    public function addCommentLanguage(\SM\Bundle\AdminBundle\Entity\CommentLanguage $commentLanguages)
    {
        $this->commentLanguages[] = $commentLanguages;
    
        return $this;
    }

    /**
     * Remove news_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\CommentLanguage $commentLanguages
     */
    public function removeCommentLanguage(\SM\Bundle\AdminBundle\Entity\CommentLanguage $commentLanguages)
    {
        $this->comment_languages->removeElement($commentLanguages);
    }

    /**
     * Get news_languages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentLanguages()
    {
        return $this->comment_languages;
    }
    
}