<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Messages\Download\ByDownloadUuid;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'presigned_url',
    ];

    /**
     * A signed link that will allow you to download the CSV file requested by the Request a CSV endpoint.
     * Format: uri
     */
    public string $presigned_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'presigned_url' => is_string($value) ? $this->presigned_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
