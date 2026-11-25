<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Marketing\Segments\Resource20;

final class BySegmentId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'contacts_sample' => 'contacts_sample',
        ],
        'header' => [],
    ];

    public ?bool $contacts_sample;
}
