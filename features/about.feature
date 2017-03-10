Feature: about page
    In order to see about page contents
    As a user
    I am able to visit about page
    
    @javascript
    Scenario: Visiting about page
    Given I am on "/"
    Then I should see "Welcome"
    
    @javascript
    Scenario: Visiting about page for an existing user
    Given I am on "/blog/about/john"
    Then I should see "He is a cool guy"
    
    @javascript
    Scenario: Visiting about page for non existing user
    Given I am on "/blog/about/jacks"
    Then I should see "404 Not Found"