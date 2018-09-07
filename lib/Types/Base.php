<?php

namespace Cohensive\BoxberryApi\Types;

/**
 * Base class for mapped types
 * @author Alexander N <morfin60@gmail.com
 * @package boxberry-api
 */
abstract class Base implements \JsonSerializable
{
    /**
     * Base constructor.
     * @param $object
     * @param $mapper
     */
    public function __construct($object, $mapper = null)
    {
        $properties = get_object_vars($object);
        foreach ($properties as $property => $value) {
            $property_name = ucfirst($property);
            $this->{$property_name} = $value;
        }
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
