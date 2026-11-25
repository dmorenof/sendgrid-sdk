<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\VerifiedSenders;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\V3\VerifiedSenders\Get\VerifiedSendersResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \SendGridSDK\Collections\V3\VerifiedSenders\Get\VerifiedSendersResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Verified\Sender\Response::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
