```
composer create-project symfony/skeleton:^5.0 symfony_50_test
cd symfony_50_test
composer require maker security

# create an empty authenticator - AppCustomAuthenticator
./bin/console make:authenticator

# put a die() in AppCustomAuthenticator::supports()

# in config/routes.yaml, add one route

# refresh homepage. The die() should get it.

# change to `anonymous: true` in security.yaml 
# refresh homepage - die WILL be hit
```
