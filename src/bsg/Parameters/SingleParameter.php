<?php

namespace Toruse\bsg\Parameters;

abstract class SingleParameter implements SingleParameterInterface
{
    protected $name = '';

    protected $value;

    public function getName()
    {
        return $this->name;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}