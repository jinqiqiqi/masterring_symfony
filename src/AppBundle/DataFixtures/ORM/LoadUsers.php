<?php
namespace AppBundle\DataFixtures\ORM;
// src/AppBundle/DataFixtures/ORM/LoadUsers.php


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUsers 
extends AbstractFixture 
implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager) {
        // todo: create and persist objects
        $user1 = new User();
        $user1->setName('John');
        $user1->setBio('He is a cool guy');
        $user1->setEmail('john@mava.info');
        $manager->persist($user1);
        
        $user2 = new User();
        $user2->setName('Jack');
        $user2->setBio('He is a cool guy too');
        $user2->setEmail('jack@mava.info');
        $manager->persist($user2);

        $user3 = new User();
        $user3->setName('EricKing');
        $user3->setBio('He is a cool guy, 3nd.');
        $user3->setEmail('ek@mava.info');
        $manager->persist($user3);
        
        $manager->flush();

        // previous code
        $this->addReference('user-john', $user1);
        $this->addReference('user-jack', $user2);
        
    }

    public function getOrder() {
        return 30;
    }


    
}