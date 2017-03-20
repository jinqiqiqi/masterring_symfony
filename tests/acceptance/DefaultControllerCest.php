<?php


class DefaultControllerCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('too see inside the welcome page.');
        $I->amOnPage('/');
        $I->see('Welcome');
    }
}
