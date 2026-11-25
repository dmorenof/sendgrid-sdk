<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Singlesend\Response;

final class WarningsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $field;
    public string $message;
    public string $warning_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'warning_id' => is_string($value) ? $this->warning_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
