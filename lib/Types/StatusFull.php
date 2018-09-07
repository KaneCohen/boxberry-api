<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Class StatusFull
 * @package Cohensive\BoxberryApi\Types
 */
class StatusFull extends Base
{
    public $Statuses;
    public $PD;
    public $Products;

    /**
     * StatusFull constructor.
     * @param $object
     * @param $mapper
     */
    public function __construct($object, $mapper)
    {
        $this->Statuses = $mapper->map($object->statuses, "Status");
        $this->PD = boolval($object->PD);
        $this->Products = isset($object->products)?$object->products:null;
    }
}
