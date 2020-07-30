<?php

namespace Modules\Core\Infrastructure;

use DeepCopy\Exception\PropertyException;

abstract class Dto
{
    public $attributes;

    public function __set($name, $value)
    {
        throw new PropertyException('Property not found at DTO !');
    }

    public function getDataArray()
    {
        foreach (get_object_vars($this) as $key => $var) {
            if ($key != 'attributes' && isset($var)) {
                $this->attributes[$key] = $var;
            }
        }
        return $this->attributes;
    }
}
