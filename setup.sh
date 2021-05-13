#!/bin/bash

echo -n MySQL Password: 
read -s rootpass
    mysql -uroot -p${rootpass} -e "CREATE DATABASE ledger"
echo Database created   