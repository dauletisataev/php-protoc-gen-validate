<?php
# Generated by the php-protobuf-generator.  DO NOT EDIT!
# source: tests/test2.proto

namespace GPBMetadata\Tests;

class Test2
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a360a1174657374732f74657374322e70726f746f120a676172792e7465" . 
            "73743222150a03466f6f120e0a02663118012002280552026631"
        ));
        static::$is_initialized = true;
    }
}