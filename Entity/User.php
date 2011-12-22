<?php
/**
 * Author: http://kurtfunai.com
 * Date: 11-12-22
 */

namespace kurtfunai\WalkthroughBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Users")
 */
class User {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\Column(name="last_name", type="string", length="255")
    */
    protected $lastName;

    /**
    * @ORM\Column(name="first_name", type="string", length="255")
    */
    protected $firstName;

    /**
    * @ORM\Column(name="middle_name", type="string", length="255", nullable="true")
    */
    protected $middleName;

    /**
    * @ORM\ManyToOne(targetEntity="kurtfunai\WalkthroughBundle\Entity\Group", inversedBy="members")
    * @ORM\JoinColumn(name="fk_group_id", referencedColumnName="id")
    */
    protected $group;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function getGroup()
    {
        return $this->group;
    }
}
