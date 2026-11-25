<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AuthenticatedDomain;

/**
 * The DNS records used to authenticate the sending domain.
 */
final class DnsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dkim1',
        'dkim2',
        'mail_cname',
    ];

    /**
     * A DNS record.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomain\Dns\Dkim1DTO $dkim1;
    /**
     * A DNS record.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomain\Dns\Dkim2DTO $dkim2;
    /**
     * The CNAME for your sending domain that points to sendgrid.net.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomain\Dns\MailCnameDTO $mail_cname;
}
