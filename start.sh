#!/usr/bin/env sh

php -S localhost:8000 &
php -S localhost:8001 process_payment.php &
xdg-open http://localhost:8000/init_purchase.php?referrerId=`pwgen`
