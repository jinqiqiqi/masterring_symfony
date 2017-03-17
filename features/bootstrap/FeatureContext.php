<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\SnippetAcceptingContext;


class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @When I press more
     */
    public function iPressMoref()
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
}