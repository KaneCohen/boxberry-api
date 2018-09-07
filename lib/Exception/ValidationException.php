<?php

namespace Cohensive\BoxberryApi\Exception;

use Cohensive\BoxberryApi\Base\Exception;

/**
 * Исключение, вызываемое при неудачной проверке входных аргументов, в $data хранится список нарушений валидации
 * @author Alexander N <morfin60@gmail.com>
 * @package boxberry-api
 */
class ValidationException extends Exception
{
}
