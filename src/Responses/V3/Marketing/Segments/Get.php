<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Segments;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'results',
    ];

    protected const array VALIDATION = [
        'results' => [
            'minItems' => 0,
            'uniqueItems' => true,
        ],
    ];

    public \SendGridSDK\Collections\V3\Marketing\Segments\Get\SegmentsResultsCollection $results {
        set {
            $this->assigning('results', $value);
            $this->results = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \SendGridSDK\Collections\V3\Marketing\Segments\Get\SegmentsResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Segment\Summary::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
