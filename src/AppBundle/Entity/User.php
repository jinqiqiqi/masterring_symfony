<?php

namespace AppBundle\Entity;


// user Entity\User instead of Model\User
use Doctrine\ORM\Mapping as ORM;
// use FOS\UserBundle\Entity\User as BaseUser;
use Sonata\UserBundle\Entity\BaseUser;

/**
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();

        // your own logic below

    }
}
