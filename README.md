# Testing Kata

In order to do this test we should install phpunit.

To install phpunit:

```
composer require phpunit/phpunit
```

Install dependencies
```
 docker-compose run --entrypoint="composer install" phpunit
```

Execute tests
```
docker-compose run phpunit /opt/tests
```