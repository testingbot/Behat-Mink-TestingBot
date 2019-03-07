<?php

class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{
    /** @When /^I search for "([^"]*)"$/ */
    public function iSearchFor($searchText) {
        $this->fillField('q', $searchText);
    }
}
