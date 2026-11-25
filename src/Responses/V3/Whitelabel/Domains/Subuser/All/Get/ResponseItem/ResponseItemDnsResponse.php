<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Whitelabel\Domains\Subuser\All\Get\ResponseItem;

/**
 * The DNS records used to authenticate the sending domain.
 */
final class ResponseItemDnsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dkim1',
        'dkim2',
        'mail_cname',
    ];

    /**
     * A DNS record.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Domains\Subuser\All\Get\ResponseItem\Dns\DnsDkim1Response $dkim1;
    /**
     * A DNS record.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Domains\Subuser\All\Get\ResponseItem\Dns\DnsDkim2Response $dkim2;
    /**
     * The CNAME for your sending domain that points to sendgrid.net.
     */
    public \SendGridSDK\Responses\V3\Whitelabel\Domains\Subuser\All\Get\ResponseItem\Dns\MailCnameResponse $mail_cname;
}
