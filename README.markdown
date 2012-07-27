TestingBot.com Behat and Mink Demo project.
You can find more info on http://testingbot.com

Behat and Mink
-------

Behat is a BDD framework which runs on PHP. 
It is similar to Cucumber for Ruby, Lettuce for Python and SpecFlow for .NET.
Use Behat for functional testing, data-driven testing and API testing.

Mink is used for its browser emulation and works nicely together with Behat.

Installation
-------------

Follow these steps to install the demo and its dependencies:

	$ git clone https://github.com/testingbot/Behat-Mink-TestingBot.git
	$ cd Behat-Mink-TestingBot
	$ curl http://getcomposer.org/installer | php
	$ php composer.phar install
	
In order to use our TestingBot.com grid, you need to add your api key and secret to behat.yml.
You can get an api key and secret on http://testingbot.com
Replace the "wd_host" string in behat.yml with your key and secret.

Running this demo
--------------------------

Execute the following command in the directory of this git project:

	$ bin/behat
  
You should see the test result:

   1 scenario (1 passed)
	 4 steps (4 passed)


Need more info, visit http://testingbot.com