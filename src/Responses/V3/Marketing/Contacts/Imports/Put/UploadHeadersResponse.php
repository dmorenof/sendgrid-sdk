<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Imports\Put;

final class UploadHeadersResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'header',
        'value',
    ];

    public string $header;
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
