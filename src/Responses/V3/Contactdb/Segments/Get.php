<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Segments;

/**
 * List All Segments response
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'segments',
    ];

    public \SendGridSDK\Collections\V3\Contactdb\Segments\Get\SegmentsSegmentsCollection $segments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'segments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->segments = new \SendGridSDK\Collections\V3\Contactdb\Segments\Get\SegmentsSegmentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contactdb\Segments::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
