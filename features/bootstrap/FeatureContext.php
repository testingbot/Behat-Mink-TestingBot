<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\Mink\Behat\Context\MinkContext;
use Behat\Mink\Session;
use Behat\Mink\Driver\DriverInterface;

require_once 'bootstrap.php';

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

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