<?php

namespace AppBundle\Entity;


// user Entity\User instead of Model\User
use Doctrine\ORM\Mapping as ORM;
// use FOS\UserBundle\Entity\User as BaseGroup;
use Sonata\UserBundle\Entity\BaseGroup;

/**
 * @ORM\Table(name="group")
 * @ORM\Entity
 */
class Group extends BaseGroup
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    // public function __construct()
    // {
    //     parent::__construct();

    //     // your own logic below

    // }
}
