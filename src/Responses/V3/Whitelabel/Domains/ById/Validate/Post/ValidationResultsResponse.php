<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post;

/**
 * The individual DNS records that are checked when validating, including the reason for any invalid DNS records.
 */
final class ValidationResultsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A DNS record for this authenticated domain.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post\ValidationResults\ResultsDkim1Response $dkim1;
    /**
     * A DNS record for this authenticated domain.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post\ValidationResults\ResultsDkim2Response $dkim2;
    /**
     * The CNAME record for the authenticated domain.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post\ValidationResults\MailCnameResponse $mail_cname;
    /**
     * The SPF record for the authenticated domain.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Domains\ById\Validate\Post\ValidationResults\ResultsSpfResponse $spf;
}
