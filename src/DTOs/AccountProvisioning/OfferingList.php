<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * OfferingList
 */
final class OfferingList extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\AccountProvisioning\OfferingList\OfferingsCollection $offerings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'offerings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->offerings = new \SendGridSDK\Collections\AccountProvisioning\OfferingList\OfferingsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\AccountProvisioning\OfferingV1::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
