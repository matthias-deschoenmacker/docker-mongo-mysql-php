<?php

namespace App\Actions;

final class ActionOwner
{
    private string $identifier;
    private ActionOwnerType $type;

    public function __construct(string $identifier, ActionOwnerType $type)
    {
        $this->identifier = $identifier;
        $this->type = $type;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getType(): ActionOwnerType
    {
        return $this->type;
    }

    public function setType(ActionOwnerType $type): void
    {
        $this->type = $type;
    }
}
