<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mail\Batch;

/**
 * Mail Batch and Batch ID Response Schema
 * Example: {"batch_id":"HkJ5yLYULb7Rj8GKSx7u025ouWVlMgAi"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A mail batch ID.
     */
    public string $batch_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'batch_id' => is_string($value) ? $this->batch_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
