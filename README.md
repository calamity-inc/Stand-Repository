# Stand Repository

A smaller, self-hostable version of Stand's packages source.

## Development

You can use `php -S 127.0.0.1:80` to set up a development server which will provide the packages at `http://localhost/packages.json.php`

Then, to tell Stand to use this custom source, add the following to your **Meta State.txt**:
```
Packages Source: http://localhost/packages.json.php
```

Note that Stand only refreshes packages upon injection.
