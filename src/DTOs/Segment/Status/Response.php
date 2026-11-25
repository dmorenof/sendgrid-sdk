<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Segment\Status;

/**
 * segment_status_response
 *
 * Segment status indicates whether the segment's contacts will be updated periodically
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'query_validation',
    ];

    /**
     * Describes any errors that were encountered during query validation
     */
    public string $error_message;
    /**
     * Status of query validation. PENDING, VALID, or INVALID
     */
    public string $query_validation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error_message' => is_string($value) ? $this->error_message = $value : parent::assignMember($name, $value),
            'query_validation' => is_string($value) ? $this->query_validation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
