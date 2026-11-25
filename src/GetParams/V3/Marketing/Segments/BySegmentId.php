<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing\Segments;

final class BySegmentId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'query_json' => 'query_json',
        ],
        'header' => [],
    ];

    public ?bool $query_json;
}
