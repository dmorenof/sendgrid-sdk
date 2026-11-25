<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\AccessSettings\Whitelist;

/**
 * Example: {"ips":[{"ip":"192.168.1.1"},{"ip":"192.*.*.*"},{"ip":"192.168.1.3/32"}]}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ips',
    ];

    /**
     * An array containing the IP(s) you want to allow.
     */
    public \SendGridSDK\Collections\V3\AccessSettings\Whitelist\Post\WhitelistIpsCollection $ips;
}
