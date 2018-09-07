<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Class Parsel
 * @package Cohensive\BoxberryApi\Types
 */
class Parsel extends Base
{
    public $Track;
    public $Label;

    public $Date;
    public $Send;
    public $Barcode;
    public $ImId;

    /**
     * Parsel constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->Track = $object->track;
        $this->Label = $object->label;

        $this->Date = isset($object->date)?$object->date:null;
        $this->Send = isset($object->send)?$object->send:null;
        $this->Barcode = isset($object->barcode)?$object->barcode:null;
        $this->ImId = isset($object->imid)?$object->imid:null;
    }
}
