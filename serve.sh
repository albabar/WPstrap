#!/bin/sh
if [ "$1" == 'remote' ]; then
    IP=`ifconfig | sed -En 's/127.0.0.1//;s/.*inet (addr:)?(([0-9]*\.){3}[0-9]*).*/\2/p'`
    echo -e "Access your application on http://$IP:8080 from any mechine in the network."
    php -S 0.0.0.0:8080 `pwd`/router.php
else
    echo "Access your application on http://localhost:8080"
    php -S localhost:8080 `pwd`/router.php
fi
