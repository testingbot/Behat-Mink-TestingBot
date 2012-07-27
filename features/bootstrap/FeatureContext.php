<?php

class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{
    /**
     * @Given /^I fill in searchBox with "([^"]*)"$/
     */
    public function iFillInSearchboxWith($argument1)
    {
        $this->fillField("q",$argument1);
    }

    /**
     * @When /^I press submit button$/
     */
    public function iPressSubmitButton()
    {
        $this->getMink()->getSession()->getDriver()->click("//input[@type='submit'][1]");
        $this->getMink()->getSession()->wait("3000");
    }
}