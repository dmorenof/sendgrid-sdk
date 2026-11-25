<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Contacts\Count\Get\BillableBreakdown;

/**
 * A map of each subuser's billable contact usage. Each key is the subuser's ID and each value is the usage thus far this month.
 */
final class BreakdownBreakdownResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array MODEL_VALIDATION = [
        'minProperties' => 0,
    ];
}
