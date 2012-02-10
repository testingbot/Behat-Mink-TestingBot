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

  Make sure you have PEAR installed. You need PEAR to install Behat and its dependencies.

	$ sudo pear channel-discover pear.behat.org
	$ sudo pear channel-discover pear.symfony.com
	$ sudo pear install behat/gherkin-beta
	$ sudo pear install behat/behat-beta
	
	Verify your installation:
	$ behat --version
	
	Now we need to install Mink.
	
	$ pear install behat/mink
	
	In order to use our TestingBot.com grid, we need to install the PHP TestingBot connector:
	
	$ sudo pear channel-discover testingbot.github.com/pear
	$ sudo pear install -a testingbot/TestingBot

Running this demo
--------------------------

Execute the following command in the directory of this git project:

  $ behat --name googleSearch
  
You should see the test result:

   1 scenario (1 passed)
	 4 steps (4 passed)


Need more info, visit http://testingbot.com