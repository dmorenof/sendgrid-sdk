<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Count\Get;

/**
 * `billable_breakdown` will only appear to the parent user in an account with subusers.
 */
final class BillableBreakdownResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'breakdown' => [
            'minProperties' => 0,
        ],
    ];

    /**
     * A map of each subuser's billable contact usage. Each key is the subuser's ID and each value is the usage thus far this month.
     */
    public \SendGridSDK\Responses\V3\Marketing\Contacts\Count\Get\BillableBreakdown\BreakdownBreakdownResponse $breakdown {
        set {
            $this->assigning('breakdown', $value);
            $this->breakdown = $value;
        }
    }
    /**
     * The sum of all the subuser's billable contacts
     */
    public int $total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
