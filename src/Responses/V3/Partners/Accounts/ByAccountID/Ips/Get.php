<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Partners\Accounts\ByAccountID\Ips;

/**
 * AccountIPsResponse
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'pages',
        'result',
    ];

    public \SendGridSDK\DTOs\Ip\ProvisioningPagination $pages;
    public \SendGridSDK\Collections\V3\Partners\Accounts\ByAccountID\Ips\Get\IpsResultCollection $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pages' => $value instanceof \stdClass ? $this->pages = new \SendGridSDK\DTOs\Ip\ProvisioningPagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
