<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Partners\Accounts\ByAccountID\Ips;

/**
 * RemoveAccountIPsRequest
 */
final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ips',
    ];

    protected const array VALIDATION = [
        'ips' => [
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * List of specific IP addresses to remove (maximum 10 per request)
     */
    public \SendGridSDK\Collections\StringCollection $ips {
        set {
            $this->assigning('ips', $value);
            $this->ips = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ips = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
