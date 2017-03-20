<?php 
$I = new AcceptanceTester($scenario);

$I->wantTo('too see inside the welcome page.');
$I->amOnPage('/');
$I->see('Welcome');
