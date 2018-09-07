<?php

namespace Cohensive\BoxberryApi\Base;

use Cohensive\BoxberryApi\Exception\ExceptionInterface;

/**
 * Class Exception
 * @package Cohensive\BoxberryApi\Base
 */
class Exception extends \Exception implements ExceptionInterface
{
    protected $data;

    /**
     * @param string $message
     * @param int $code
     * @param mixed $previous
     * @param mixed $data
     */
    public function __construct($message, $code, $previous = null, $data = null)
    {
        parent::__construct($message, $code, $previous);
        $this->data = $data;
    }

    /**
     * @return mixed|null
     */
    public function getData()
    {
        return $this->data;
    }
}
