Feature: user page
    In order to see user page contents
    As a user
    I am able to visit user page
    

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