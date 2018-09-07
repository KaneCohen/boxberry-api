<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Class City
 * @package Cohensive\BoxberryApi\Types
 */
class City extends Base
{
    public $Name;
    public $Code;

    /**
     * City constructor.
     * @param $object
     */
    public function __construct($object)
    {
        parent::__construct($object);
    }
}
