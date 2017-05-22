<?php

namespace Esockets\base;

abstract class AbstractAddress
{
    public function equalsTo(AbstractAddress $address): bool
    {
        return $this->__toString() === $address->__toString();
    }

    abstract public function __toString(): string;
}
