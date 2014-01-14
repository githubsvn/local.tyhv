<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ItemTypeLanguage
 *
 * @ORM\Table(name="mtx_item_type_language")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\ItemTypeLanguageRepository")
 * @UniqueEntity(fields="name", message="Sorry! This branch exits. Please try another.")
 * @ORM\HasLifecycleCallbacks
 */
class ItemTypeLanguage {

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
     * @ORM\ManyToOne(targetEntity="ItemType", cascade={"persist"})
     */
    private $itemtype;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set language
     *
     * @param \SM\Bundle\AdminBundle\Entity\Language $language
     * @return BranchLanguage
     */
    public function setLanguage(\SM\Bundle\AdminBundle\Entity\Language $language = null) {
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
     * Set itemType
     *
     * @param \SM\Bundle\AdminBundle\Entity\ItemType $branch
     * @return ItemTypeLanguage
     */
    public function setItemType($itemType) {
        $this->itemtype = $itemType;

        return $this;
    }

    /**
     * Get itemType
     *
     * @return \SM\Bundle\AdminBundle\Entity\ItemType
     */
    public function getItemType() {
        return $this->itemtype;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return BranchLanguage
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the name with tree level
     *
     * @return string
     */
    public function getTreeName()
    {
        $level = $this->getItemType()->getLevel();
        $treeName = str_repeat('    ', $level - 1) . ($level == 1 ? '' : '└') . ' ' . $this->name;
        return $treeName;
    }

    public function __toString()
    {
        return $this->name;
    }

}