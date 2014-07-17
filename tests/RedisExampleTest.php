<?php
require_once('RedisExample.php');
class RedisExampleTest extends PHPUnit_Framework_TestCase {
  public function testRedis() {
  	$redis = new RedisExample();
    $this->assertEquals($redis->populate(), 'val');
  }
}
?>
