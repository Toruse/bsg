<?php

namespace Toruse\bsg\Parameters;

interface SingleParameterInterface
{
    public function getName(): string;

    public function setValue(mixed $value);

    public function getValue(): mixed;
}