#!/bin/bash
#printf "\nUpdating composer\n"
#composer update
printf "\nPreparing Codeception\n"
php vendor/bin/codecept build
printf "\nRunning Tests\n"
php vendor/bin/codecept run tests/acceptance/admin/components/tjnotification/notication/CreateNotificationhappypathCest.php --steps --debug --xml --html
