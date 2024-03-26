<?php

namespace Toruse\bsg\Parameters;

use TypeError;

class Tariff extends SingleParameter
{
    protected $name = 'tariff';

    public function setValue(mixed $value): Tariff
    {
        $value = (int) $value;
        return parent::setValue($value);
    }
}