#!/bin/bash
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS webapp_db;"
mysql -u root -p webapp_db < backup_webapp_db.sql
echo "Base de donnees restauree avec succes !"
