<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Partners\Accounts;

/**
 * CreateAccountParams
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'offerings',
    ];

    /**
     * List of offering names to assign to account.
     */
    public \SendGridSDK\Collections\AccountProvisioning\OfferingList\OfferingsCollection $offerings;
    public \SendGridSDK\DTOs\AccountProvisioning\Profile $profile;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'offerings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->offerings = new \SendGridSDK\Collections\AccountProvisioning\OfferingList\OfferingsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\AccountProvisioning\OfferingV1::class)) : parent::assignMember($name, $value),
            'profile' => $value instanceof \stdClass ? $this->profile = new \SendGridSDK\DTOs\AccountProvisioning\Profile($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
