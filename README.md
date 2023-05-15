# Stand Repository

Stand's packages source.

## Development

You can use `php -S 127.0.0.1:80` to set up a development server which will provide the packages at `http://localhost/packages.json.php`

Then, to tell Stand to use this custom source, add the following to your **Meta State.txt**:
```
Packages Source: http://localhost/packages.json.php
```

Note that Stand only refreshes packages upon injection.

## Run PHP with Docker

You can optionally run PHP using docker.
Install [Docker for Windows](https://docs.docker.com/desktop/install/windows-install/), 
then run the following command in this directory to run the PHP server.

```bash
docker run -d -p 80:80 -v "${PWD}:/var/www/html" php:7.2-apache
```
