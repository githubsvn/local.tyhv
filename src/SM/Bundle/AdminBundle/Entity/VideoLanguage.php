<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="mtx_video_language")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\VideoLanguageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class VideoLanguage {

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
     * @ORM\ManyToOne(targetEntity="Video")
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

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
     * @return PageLanguage
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
     * Set language
     *
     * @param \SM\Bundle\AdminBundle\Entity\Language $language
     * @return VideoLanguage
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
     * Set page
     *
     * @param \SM\Bundle\AdminBundle\Entity\Video $video
     * @return VideoLanguage
     */
    public function setVideo(\SM\Bundle\AdminBundle\Entity\Video $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get page
     *
     * @return \SM\Bundle\AdminBundle\Entity\Video
     */
    public function getVideo()
    {
        return $this->video;
    }
}