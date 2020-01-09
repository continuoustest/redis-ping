<?php

$redis = new Redis();

//Connecting to Redis
$redis->connect( getenv('REDIS_HOST') , getenv('REDIS_PORT'));

if ($redis->ping()) {
        echo "PONG\n";
        exit(0);
}
 exit(12);
?>
