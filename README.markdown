# Behat-Mink-TestingBot
TestingBot provides an online grid of browsers and mobile devices to run Automated tests on via Selenium WebDriver.
This example demonstrates how to use Behat with Mink to run tests across several browsers.

## Setup 

1. Clone this repo:

  `git clone https://github.com/testingbot/behat-mink-testingbot.git`

2. Install composer: 

  `curl http://getcomposer.org/installer | php`

3. Install Behat, Mink, MinkExtension and the required dependencies with composer:

  `php composer.phar install`

## Configuration
Add TestingBot Key and Secret to `behat.yml`
You can find these in the [TestingBot Dashboard](https://testingbot.com/members/).

## Run Tests
Now to launch Behat, just run:

`bin/behat`

## Further Reading
- [Behat](http://mink.behat.org/en/latest/)
- [TestingBot Documentation](https://testingbot.com/support/getting-started/behat-mink.html)
