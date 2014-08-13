#!/bin/bash
cd /var/www/html/
wget https://github.com/PocketBukkit/PocketBukkit-Site/archive/master.zip
if [ -f ./master.zip ]; then
  rm -rf .htaccess
  rm -rf updateSite.sh
  rm -rf beta.php
  rm -rf chat.php
  rm -rf development.php
  rm -rf downloads.php
  rm -rf index.php
  rm -rf plugins.php
  rm -rf stable.php
  rm -rf css/
  rm -rf includes/
  rm -rf js/
  unzip master.zip
  rm -rf master.zip
  mv PocketBukkit-Site-master/* /var/www/html/
  rm -rf PocketBukkit-Site-master
fi
