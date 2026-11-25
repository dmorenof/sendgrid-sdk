<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * The offset index of the Url in the email content that was interacted with,
 * and its content type.
 *
 * Example: {"index":0,"type":"html"}
 */
final class EngagementUrlOffset extends \Dmorenof\SdkRuntime\DTO
{
    public int $index;
    public \SendGridSDK\Enums\EngagementUrlContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \SendGridSDK\Enums\EngagementUrlContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
