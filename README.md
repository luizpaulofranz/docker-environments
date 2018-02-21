# Docker Environments
Docker environments for web developers, each folder is a different environment.

## Requirements:
 You must have docker and docker-compose installed on your machine.

### PHP Environments:

All php environments was built with the official images. 
The folders starts with "php" and are followed by php version, ending with a DB server name (mysql or maria DB) and its version, ex:
php72mariadb103 = php version 7.2 and maria DB 10.3

In `www` folder you put your php codes, and just open your browser to se it running (on localhost:80). For convenience, **phpMyAdmin** is running on 8080 port.

###### Execution:

Enter on your folder/environemnt (e.g php72mariadb103) and run:

```
docker-compose up
```
