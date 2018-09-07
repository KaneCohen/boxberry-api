<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Class ParcelsPoint
 * @package Cohensive\BoxberryApi\Types
 */
class ParcelsPoint extends Base
{
    /**
     * @access public
     * @var string
     */
    public $Code;

    /**
     * @access public
     * @var string
     */
    public $Name;

    /**
     * @access public
     * @var string
     */
    public $City;

    /**
     * ParcelsPoint constructor.
     * @param $object
     */
    public function __construct($object)
    {
        parent::__construct($object);
    }
}
