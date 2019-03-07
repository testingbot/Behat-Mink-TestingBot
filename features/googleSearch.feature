Feature: Google Search Functionality

  Scenario: Can find search results
    Given I am on "https://www.google.com/ncr"
    When I search for "Google"
    Then I should see "Google"