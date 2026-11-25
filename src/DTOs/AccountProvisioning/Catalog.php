<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AccountProvisioning;

/**
 * Catalog
 * Example: {"catalog":[{"offering":{"name":"org.ei.free.v1","type":"package","quantity":1},"entitlements":{"email_sends_max_monthly":10000,"ip_count":0,"teammates_max_total":0,"users_max_total":0}}]}
 */
final class Catalog extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'catalog',
    ];

    public \SendGridSDK\Collections\AccountProvisioning\Catalog\CatalogCollection $catalog;
}
