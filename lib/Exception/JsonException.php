<?php

namespace Cohensive\BoxberryApi\Exception;

use Cohensive\BoxberryApi\Base\Exception;

/**
 * Исключение JSON, вызываемое при неудаче разбора или сериализации из/в JSON
 * @author Alexander N <morfin60@gmail.com>
 * @package boxberry-api
 */
class JsonException extends Exception
{
    const ENCODE_EXCEPTION = 0;
    const DECODE_EXCEPTION = 1;
}
