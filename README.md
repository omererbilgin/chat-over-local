#Howto:

install packages: 

--------------------

apache2 

(or nginx but I wouldn't prefer it if you're using your local computer) 

php

for ubuntu/debian instance: $ `apt install apache2 php -y` 

--------------------

move index.php into webroot folder (default): /var/www/html
$ `mv index.php /var/www/html`

give perm if you want to (for full permission): $ `chmod 777 -R .`

to view: $ `firefox 127.0.0.1`
