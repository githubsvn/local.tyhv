<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * CompanyLanguage
 *
 * @ORM\Table(name="mtx_company_language")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\CompanyLanguageRepository")
 * @UniqueEntity(fields="name", message="Sorry! This username exits. Please try another.")
 * @ORM\HasLifecycleCallbacks
 */
class CompanyLanguage {

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
     * @ORM\ManyToOne(targetEntity="Company", cascade={"persist"})
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="representation", type="string", length=255, nullable=true)
     */
    private $representation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="video", type="text", nullable=true)
     */
    private $video;

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
     * @return ArticleLanguage
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
     * Set company
     *
     * @param \SM\Bundle\AdminBundle\Entity\Company $company
     * @return CompanyLanguage
     */
    public function setCompany(\SM\Bundle\AdminBundle\Entity\Company $company) {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \SM\Bundle\AdminBundle\Entity\Company
     */
    public function getCompany() {
        return $this->company;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return CompanyLanguage
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }
    
    /**
     * Set alias
     *
     * @param string $alis
     * @return CompanyLanguage
     */
    public function setAlias($alias) {
        $this->alias = $alias;

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
     * Get alias
     *
     * @return string
     */
    public function getAlias() {
        return $this->alias;
    }

    /**
     * Set representation
     *
     * @param string $representation
     * @return CompanyLanguage
     */
    public function setRepresentation($representation) {
        $this->representation = $representation;

        return $this;
    }

    /**
     * Get representation
     *
     * @return string
     */
    public function getRepresentation() {
        return $this->representation;
    }


    /**
     * Set address
     *
     * @param string $address
     * @return CompanyLanguage
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CompanyLanguage
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }
    
    /**
     * Set description
     *
     * @param string $video
     * @return CompanyLanguage
     */
    public function setVideo($video)
    {
        $this->video = $video;
    
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
}