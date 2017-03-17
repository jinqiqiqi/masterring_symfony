<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\SnippetAcceptingContext;


class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @When I press more
     */
    public function iPressMore()
    {
        // throw new PendingException();
        $this->getSession()
            ->getPage()
            ->findButton("more")
            ->press();
    }

    /**
     * @When I press back
     */
    public function iPressBack()
    {
        $this->getSession()
            ->getPage()
            ->findButton("back")
            ->press();
    }

    /**
     * @When I click on :arg1
     */
    public function iClickOn($arg1)
    {
        // throw new PendingException();
        $this->getSession()->getPage()->clickLink($arg1);
    }

    /**
     * @When I fill the  :arg1 with :arg2
     */
    public function iFillTheWith($arg1, $arg2)
    {
        // throw new PendingException();
        $this->getSession()
            ->getPage()
            ->fillField($arg1, $arg2);
    }

    /**
     * @When I fill the :arg1 with :arg2
     */
    public function iFillTheWith2($arg1, $arg2)
    {
        // throw new PendingException();
        $this->getSession()
            ->getPage()
            ->fillField($arg1, $arg2);
    }



    /**
     * @Given I press delete
     */
    public function iPressDelete()
    {
        // throw new PendingException();
        $this->getSession()
            ->getPage()
            ->findButton("Delete")
            ->press();
    }

}
