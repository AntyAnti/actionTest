<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\ProductSurchargeParameter\Values;

class ProductSurchargeParameter extends Entity
{
    protected string $code;
    protected string $name;
    protected ?string $displayName;
    protected ?string $description;
    protected ?int $priority;
    protected bool $required;
    protected string $currency;
    protected bool $includingVat;
    protected Values $values;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): static
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function isRequired(): bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): static
    {
        $this->required = $required;
        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function isIncludingVat(): bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }

    public function getValues(): Values
    {
        return $this->values;
    }

    public function setValues(Values $values): static
    {
        $this->values = $values;
        return $this;
    }
}