<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Partners\Accounts;

/**
 * AccountList
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of account objects.
     */
    public \SendGridSDK\Collections\V3\Partners\Accounts\Get\AccountsAccountsCollection $accounts;
    public \SendGridSDK\DTOs\AccountProvisioning\Pagination $pages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->accounts = new \SendGridSDK\Collections\V3\Partners\Accounts\Get\AccountsAccountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\AccountProvisioning\Account::class)) : parent::assignMember($name, $value),
            'pages' => $value instanceof \stdClass ? $this->pages = new \SendGridSDK\DTOs\AccountProvisioning\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
