<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BranchLanguage
 *
 * @ORM\Table(name="mtx_counter")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\CounterRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Counter {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=true)
     */
    private $ip;
    
    /**
     * @var string
     *
     * @ORM\Column(name="time_visit", type="string", length=11, nullable=true)
     */
    private $time;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date_visit", type="string", length=11, nullable=true)
     */
    private $date;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp() {
        return $this->ip;
    }
    
    /**
     * Set ip
     *
     * @return string
     */
    public function setIp($ip) {
        $this->ip = $ip;
    }
    
    /**
     * Get time
     *
     * @return string
     */
    public function getTime() {
        return $this->time;
    }
    
    /**
     * Set time
     *
     * @return string
     */
    public function setTime($time) {
        $this->time = $time;
    }
    
    /**
     * Get date
     *
     * @return string
     */
    public function getDate() {
        return $this->date;
    }
    
    /**
     * Set date
     *
     * @return string
     */
    public function setDate($date) {
        $this->date = $date;
    }

}