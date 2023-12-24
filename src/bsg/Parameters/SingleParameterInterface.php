<?php

namespace Toruse\bsg\Parameters;

interface SingleParameterInterface
{
    public function getName();

    public function setValue($value);

    public function getValue();
}