<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\AuthenticatedDomainSpf;

/**
 * The DNS records for this authenticated domain.
 */
final class DnsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dkim',
        'domain_spf',
        'mail_server',
        'subdomain_spf',
    ];

    /**
     * The DKIM record for messages sent using this authenticated domain.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomainSpf\Dns\DkimDTO $dkim;
    /**
     * The SPF record for the root domain.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomainSpf\Dns\DomainSpfDTO $domain_spf;
    /**
     * Designates which mail server is responsible for accepting messages from a domain.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomainSpf\Dns\MailServerDTO $mail_server;
    /**
     * The SPF record for the subdomain used to create this authenticated domain.
     */
    public \SendGridSDK\DTOs\AuthenticatedDomainSpf\Dns\SubdomainSpfDTO $subdomain_spf;
}
