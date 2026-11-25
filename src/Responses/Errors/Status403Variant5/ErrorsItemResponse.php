<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\Status403Variant5;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $field;
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
