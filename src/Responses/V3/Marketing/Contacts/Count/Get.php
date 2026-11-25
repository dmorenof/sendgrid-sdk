<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Count;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contact_count',
    ];

    protected const array VALIDATION = [
        'billable_count' => [
            'minimum' => 0,
        ],
    ];

    /**
     * `billable_breakdown` will only appear to the parent user in an account with subusers.
     */
    public \SendGridSDK\Responses\V3\Marketing\Contacts\Count\Get\BillableBreakdownResponse $billable_breakdown;
    /**
     * The count of contacts this month for billing purposes.
     */
    public int $billable_count {
        set {
            $this->assigning('billable_count', $value);
            $this->billable_count = $value;
        }
    }
    /**
     * The total number of contacts.
     */
    public int $contact_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billable_count' => is_int($value) ? $this->billable_count = $value : parent::assignMember($name, $value),
            'contact_count' => is_int($value) ? $this->contact_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
