<?php
class MongoTest extends PHPUnit_Framework_TestCase {
  public function test() {
    $redis = new Redis();
	$redis->connect('127.0.0.1', 6379);
	if(!$redis->exists('key')) 
		$redis->set('key', 'val');
    $this->assertEquals($redis->get('key'), 'val');
  }
}
?>
