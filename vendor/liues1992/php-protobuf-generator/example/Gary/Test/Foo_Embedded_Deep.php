<?php
# Generated by the php-protobuf-generator.  DO NOT EDIT!
# source: tests/test3.proto

namespace Gary\Test;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * .gary.test.Foo.Embedded.Deep message embedded in .gary.test.Foo.Embedded/.gary.test.Foo message
 */
class Foo_Embedded_Deep extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf <code>int32 f1 = 1;</code>
     */
    private $f1;
    
    public function __construct()
    {
        \GPBMetadata\Tests\Test3::initOnce();
        parent::__construct();
    }
    
    /**
     * Generated from protobuf <code>int32 f1 = 1;</code>
     * @param integer $value
     * @return $this
     */
    public function setF1($value)
    {
        GPBUtil::checkInt32($value);
        $this->f1 = $value;
        return $this;
    }
    
    /**
     * Generated from protobuf <code>int32 f1 = 1;</code>
     * @return integer
     */
    public function getF1()
    {
        return $this->f1;
    }
    
}