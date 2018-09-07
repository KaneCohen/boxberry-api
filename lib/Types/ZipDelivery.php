<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Class ZipDelivery
 * @package Cohensive\BoxberryApi\Types
 */
class ZipDelivery extends Base
{
    public $ZoneExpressDelivery;
    public $ExpressDelivery;

    /**
     * ZipDelivery constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $object->ZoneExpressDelivery = boolval($object->ZoneExpressDelivery);
        $object->ExpressDelivery = boolval($object->ExpressDelivery);
        parent::__construct($object);
    }
}
