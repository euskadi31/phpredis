--TEST--
Test RedisSentinel::failover
--SKIPIF--
<?php if (!extension_loaded("redis")) print "skip"; ?>
--FILE--
<?php

$sentinel = new RedisSentinel('127.0.0.1');

var_dump($sentinel->connect());

$result = $sentinel->failover('mymaster');

assert(is_bool($result));
assert($result === false);

?>
--EXPECT--
bool(true)
