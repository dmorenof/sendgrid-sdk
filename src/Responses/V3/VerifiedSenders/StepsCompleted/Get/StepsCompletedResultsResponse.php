<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\VerifiedSenders\StepsCompleted\Get;

final class StepsCompletedResultsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public bool $domain_verified;
    public bool $sender_verified;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domain_verified' => is_bool($value) ? $this->domain_verified = $value : parent::assignMember($name, $value),
            'sender_verified' => is_bool($value) ? $this->sender_verified = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
