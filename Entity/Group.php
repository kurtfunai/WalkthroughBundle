<?php
/**
 * Author: http://kurtfunai.com
 * Date: 11-12-22
 */

namespace Your\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Groups")
 */
class Group {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length="255")
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Your\SiteBundle\Entity\User", mappedBy="group")
     * @var members[]
     */
    protected $members;

    public function __construct()
    {
        $this->members = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setMembers($members)
    {
        $this->members = $members;
    }

    public function getMembers()
    {
        return $this->members;
    }
}
