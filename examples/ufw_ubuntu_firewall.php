Enable the Built-in Ubuntu Firewall:<br />
	sudo ufw enable<br />
	<br />
Allow Port 22:<br />
	sudo ufw allow 22/tcp<br />
	<br />
Allow SSH:<br />
	sudo ufw allow SSH<br />
	<br />
Allow traffic from IP 12.34.56.78 to all ports:<br />
	sudo ufw allow from 12.34.56.78<br />
	<br />
Allow traffic from IP 12.34.56.78 to port 22:<br />
	sudo ufw allow from 12.34.56.78 to any port 22<br />
	<br />
Deny outbound SSH:<br />
	sudo ufw reject out ssh <br />
	<br />
Deny TCP traffic from the IP 12.34.56.78 to port 22 on the local system:<br />
	sudo ufw deny proto tcp from 12.34.56.78 to any port 22<br />
	<br />
View the ufw status:<br />
	sudo ufw status<br />
	<br />
View the ufw status numbered:<br />
	sudo ufw status numbered<br />
	<br />
View the ufw status verbose:<br />
	sudo ufw status verbose<br />
	<br />
Delete a rule:<br />
	sudo ufw delete reject out ssh <br />
	<br />
Delete a rule by number:<br />
	sudo ufw delete 6<br />
	<br />
Reset ufw:<br />
	sudo ufw reset<br />
	<br />
Some applications requiring open ports come with ufw profiles to make this even easier. To see the application profiles available on your local system, run the following command:<br />
	sudo ufw app list<br />
<br />
View information about a profile and its included rules with the following command:<br />
	sudo ufw app info ApplicationName<br />
	<br />
Allow an application profile with the allow command:<br />
	sudo ufw allow ApplicationName<br />
	<br />
Logging is disabled by default, but you can also enable logging to print firewall messages to the system log:<br />
	sudo ufw logging on<br />
<br />
GUFW is a graphical interface for ufw. Ubuntu doesn&rsquo;t come with a graphical interface, but gufw is included in Ubuntu&rsquo;s software repositories. You can install it with the following command:<br />
	sudo apt-get install gufw<br />
	<br />
Source: https://www.howtogeek.com/115116/how-to-configure-ubuntus-built-in-firewall/<br />
Source: https://fedingo.com/how-to-check-open-ports-in-ufw/<br />
<br />
