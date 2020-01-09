<?php

$redis = new Redis();

$host  = getenv('REDIS_HOST');
$port  = getenv('REDIS_PORT');
//Connecting to Redis
echo 'connect to redis : '. $host . ':' . $port . PHP_EOL; 
echo "PING" . PHP_EOL;
$redis->connect( $host, $port);

if ($redis->ping()) {
        echo "PONG" . PHP_EOL;
        exit(0);
}
echo "PLOOF" . PHP_EOL;
 exit(12);
?>
