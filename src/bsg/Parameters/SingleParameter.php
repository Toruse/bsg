<?php

namespace Toruse\bsg\Parameters;

abstract class SingleParameter implements SingleParameterInterface
{
    protected $name = '';

    protected $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function setValue(mixed $value): SingleParameter
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }
}