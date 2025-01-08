<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductFlagResponse\UpdateProductFlagResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductFlagResponse\UpdateProductFlagResponse\Data\Flags;

class Data extends Entity
{
    protected Flags $flags;

    public function getFlags(): Flags
    {
        return $this->flags;
    }

    public function setFlags(Flags $flags): static
    {
        $this->flags = $flags;
        return $this;
    }
}