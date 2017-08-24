php56 bin/console cache:clear --env=prod --no-debug --no-warmup
php56 bin/console cache:warmup --env=prod
./fixperms.sh
