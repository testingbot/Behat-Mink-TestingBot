 Feature: googleSearch
  In order to search information on google
  As a user
  I want to get sensible results from site

 @javascript
  Scenario Outline: Search Keywords on Google
    Given I am on "/"
    And I fill in searchBox with "<input>"
    When I press submit button
    Then I should see "<output>" 

    Examples:
      | input           | output          |                                   
      | TestingBot      | Selenium        |