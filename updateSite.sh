#!/bin/bash
cd /var/www/html/
wget https://github.com/PocketBukkit/PocketBukkit-Site/archive/Remodel.zip
if [ -f ./Remodel.zip ]; then
  unzip Remodel.zip
  rm -rf Remodel.zip
  rm -rf .htaccess
  if [ -f ./README.md ]; then
    rm -rf README.md
  fi
  rm -rf index.php
  rm -rf bootstrap/
  rm -rf includes/
  rm -rf updateSite.sh
  mv PocketBukkit-Site-master/* /var/www/html/
  chmod 0700 updateSite.sh
  rm -rf PocketBukkit-Site-master
  rm -rf README.md
fi