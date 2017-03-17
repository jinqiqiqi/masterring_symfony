<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\SnippetAcceptingContext;




class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @When I press more
     */
    public function iPressMore()
    {
        throw new PendingException();
    }
}