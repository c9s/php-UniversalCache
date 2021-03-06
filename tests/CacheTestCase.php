<?php
abstract class CacheTestCase extends PHPUnit_Framework_TestCase
{
    public function cacheDataProvider()
    {
        return array(
            array('key','value'),
            array('key', 1),
            array('key', 1024*1024),
            array('key', 1.05),
            array('key', array('foo', 'bar')),
            array('key', array(0,1,2,3)),
        );
    }
}
