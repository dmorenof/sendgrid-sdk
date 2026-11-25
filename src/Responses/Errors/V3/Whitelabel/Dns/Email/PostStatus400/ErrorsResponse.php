<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Whitelabel\Dns\Email\PostStatus400;

final class ErrorsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $error;
    public string $field;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
