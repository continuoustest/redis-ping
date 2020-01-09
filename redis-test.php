<?php

$redis = new Redis();
//Connecting to Redis
$redis->connect( 'redis-server' , 6379);

if ($redis->ping()) {
        echo "PONG\n";
        exit(0);
}
 exit(12);
?>
