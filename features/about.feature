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
    Given I am on "/about/john"
    When I press more
    Then I should see "Email: john@mava.info"

    @javascript
    Scenario: Visiting more page for non existing user
    Given I am on "/more/john"
    When I press back
    Then I should see "(without email)"
    
    @javascript
    Scenario: Visiting about page for non existing user
    Given I am on "/about/jacks"
    Then I should see "404 Not Found"


    @javascript
    Scenario: create a new user::
    Given I am on "/user"
    When I click on "Create a new user"
    And I fill the  "Name" with "JinQi"
    And I fill the "Bio" with "This is a tough guy"
    And I fill the "Email" with "jinqi@gmail.com"
    And I press "Create"
    Then I should see "Back to the list"


    @javascript
    Scenario: Delete a user
    Given I am on "user/"
    And I click on "show"
    And I press delete
    Then I should see "Users list"

