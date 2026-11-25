<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Link\Branding200;

/**
 * The DNS records generated for this link branding.
 */
final class DnsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain_cname',
    ];

    /**
     * The DNS record generated to point to your link branding subdomain.
     */
    public \SendGridSDK\DTOs\Link\Branding200\Dns\DomainCnameDTO $domain_cname;
    /**
     * The DNS record generated to verify who created the link branding.
     */
    public \SendGridSDK\DTOs\Link\Branding200\Dns\OwnerCnameDTO $owner_cname;
}
