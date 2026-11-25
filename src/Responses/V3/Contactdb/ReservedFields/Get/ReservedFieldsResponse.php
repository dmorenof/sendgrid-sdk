<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\ReservedFields\Get;

final class ReservedFieldsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $name;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
