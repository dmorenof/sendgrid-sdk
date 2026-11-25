<?php

declare(strict_types=1);

namespace SendGridSDK\PostParams\V3\User;

final class ScheduledSends extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'on-behalf-of' => 'onBehalfOf',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'on-behalf-of' => 'onBehalfOf',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'onBehalfOf' => 'on-behalf-of',
    ];

    public const bool OPERATION_BODY = true;

    public ?string $onBehalfOf;
    public ?\SendGridSDK\Requests\V3\User\ScheduledSends\Post $body;
}
