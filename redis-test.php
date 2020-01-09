<?php

$redis = new Redis();

$host  = getenv('REDIS_HOST');
$port  = getenv('REDIS_PORT');
//Connecting to Redis
echo 'connect to redis : '. $host . ':' . $port; 
$redis->connect( $host, $port);

if ($redis->ping()) {
        echo "PONG\n";
        exit(0);
}
 exit(12);
?>
