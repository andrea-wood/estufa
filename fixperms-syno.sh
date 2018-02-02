#!/bin/sh
sudo chown -R admin:http var/cache/
sudo chmod 775 -R var/cache/
sudo chown -R http:http var/sessions/
sudo chmod 775 -R var/sessions/
sudo chown -R admin:http var/logs/
sudo chmod 775 -R var/logs/
