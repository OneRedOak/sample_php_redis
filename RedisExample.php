<?php
class RedisExample {
  public function populate() {
    $redis = new Redis();
	$redis->connect('127.0.0.1', 6379);
	if(!$redis->exists('key')) 
		$redis->set('key', 'val');
    return $redis->get('key');
  }
}
?>
