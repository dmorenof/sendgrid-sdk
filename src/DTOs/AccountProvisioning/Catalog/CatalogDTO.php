<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning\Catalog;

/**
 * CatalogEntry
 */
final class CatalogDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Set of entitlements the specified offering comes with
     */
    public \SendGridSDK\DTOs\AccountProvisioning\Catalog\CatalogItem\EntitlementsDTO $entitlements;
    public \SendGridSDK\DTOs\AccountProvisioning\OfferingV1 $offering;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'offering' => $value instanceof \stdClass ? $this->offering = new \SendGridSDK\DTOs\AccountProvisioning\OfferingV1($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
