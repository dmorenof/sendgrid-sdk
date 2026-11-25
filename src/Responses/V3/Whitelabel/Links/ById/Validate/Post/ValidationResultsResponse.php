<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate\Post;

/**
 * The individual validation results for each of the DNS records associated with this branded link.
 */
final class ValidationResultsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain_cname',
    ];

    /**
     * The DNS record generated for the sending domain used for this branded link.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate\Post\ValidationResults\DomainCnameResponse $domain_cname;
    /**
     * The DNS record created to verify the branded link.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Links\ById\Validate\Post\ValidationResults\OwnerCnameResponse $owner_cname;
}
