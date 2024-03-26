<?php

namespace Toruse\bsg\Parameters;

class Validity extends SingleParameter
{
    protected $name = 'validity';

    public function setValue(mixed $value): Validity
    {
        $value = (int) $value;
        return parent::setValue($value);
    }
}