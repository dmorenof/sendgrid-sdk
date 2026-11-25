<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Exports;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        '_metadata',
    ];

    public \SendGridSDK\DTOs\LmcContactdb\Metadata $_metadata;
    /**
     * The ID of the export job.
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\LmcContactdb\Metadata($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
