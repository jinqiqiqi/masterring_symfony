Feature: Default page
    In order to see the default page contents
    As a anonymous user
    I am able to visit welcome page

    @javascript
    Scenario: Visiting default page
    Given I am on "/"
    Then I should see "Symfony 2.8.18"