# Some Examples of using PHPUnit with PHP 7.x and strict types

## Install PHPUnit

```bash
curl -LO https://phar.phpunit.de/phpunit-9.5.phar
```

```bash
php phpunit-9.5.phar --version
```


## Make PHAR executable

```bash
chmod +x phpunit-9.5.phar
```

### So you can use like so:

```bash
./phpunit-9.5.phar --version
```


## Running all tests:
```bash
php phpunit-9.5.phar ./tests
```
