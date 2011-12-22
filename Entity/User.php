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
class Users {

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
    * @ORM\ManyToOne(targetEntity="Your\SiteBundle\Entity\Group", inversedBy="members")
    * @ORM\JoinColumn(name="fk_group_id", referencedColumnName="id")
    */
    protected $group;


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}
