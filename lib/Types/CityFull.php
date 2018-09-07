<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Class City
 * @package Cohensive\BoxberryApi\Types
 */
class CityFull extends Base
{
    public $Name;
    public $Code;

    /**
     * CityFull constructor.
     * @param $object
     */
    public function __construct($object)
    {
        parent::__construct($object);
    }
}
