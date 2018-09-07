<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Class ZipCode
 * @package Cohensive\BoxberryApi\Types
 */
class ZipCode extends Base
{
    public $Zip;
    public $City;
    public $objectrea;
    public $Region;
    public $ZoneExpressDelivery;
    public $ExpressDelivery;

    /**
     * ZipCode constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $object->Zip = intval($object->Zip);
        $object->ZoneExpressDelivery = intval($object->ZoneExpressDelivery);
        parent::__construct($object);
    }
}
