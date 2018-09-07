<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Class Status
 * @package Cohensive\BoxberryApi\Types
 */
class Status extends Base
{
    public $Name;
    public $Date;
    public $Comment;

    /**
     * Status constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->Name = $object->Name;
        $this->Date = $object->Date;
        $this->Comment = $object->Comment;
    }
}
