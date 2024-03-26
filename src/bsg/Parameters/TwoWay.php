<?php

namespace Toruse\bsg\Parameters;

class TwoWay extends SingleParameter
{
    protected $name = '2way';

    public function setValue(mixed $value): TwoWay
    {
        $value = (bool) $value;
        return parent::setValue($value);
    }
}