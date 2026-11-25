<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\Status500Variant6;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $error_id;
    public string $field;
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error_id' => is_string($value) ? $this->error_id = $value : parent::assignMember($name, $value),
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
