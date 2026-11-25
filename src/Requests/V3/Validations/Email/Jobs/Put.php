<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Validations\Email\Jobs;

/**
 * Example: {"file_type":"csv"}
 */
final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'file_type',
    ];

    /**
     * The format of the file you wish to upload.
     */
    public \SendGridSDK\Enums\Email\ValidationFileType $file_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file_type' => is_string($value) ? $this->file_type = \SendGridSDK\Enums\Email\ValidationFileType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
