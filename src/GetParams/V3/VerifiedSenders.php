<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3;

final class VerifiedSenders extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'id' => 'id',
            'lastSeenID' => 'lastSeenID',
            'limit' => 'limit',
        ],
        'header' => [],
    ];

    public ?int $id;
    public ?float $lastSeenID;
    public ?float $limit;
}
